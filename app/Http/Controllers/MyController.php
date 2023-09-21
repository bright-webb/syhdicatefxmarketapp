<?php

namespace App\Http\Controllers;

use App\Mail\Verificationmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscribers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Event;

class MyController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        $id = $user->id;
        $role = $user->role;
        $redirect = "/home";
        if($role === 'vendor'){
            if($user->approved == 0){
                $redirect = "/review";
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'login successful', "redirect" => $redirect]);
            }
            else{
                $redirect = "/profile";
            }

        }

        if ($user && Hash::check($password, $user->password)){
            $request->session()->put('user', $id);

            return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'login successful', "redirect" => $redirect]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Password is not correct']);
        }
    }
    
    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }
    
    public function checkEmail(Request $request){
        $email = $request->email;
        $status = 0;
        $message = "";
        if(User::where(['email'=>$email])->count()>0){
            $status = 1;
            $message = "Email already exists";
        }

        return response()->json(['status' => $status, 'message'=>$message]);
    }

    public function createAccount(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $password = $request->password;

        $user = new User;
        $code = rand(9999, 9000);

        $data = [
            'code' => $code
        ];


        $user->fname = $fname;
        $user->lname = $lname;
        $user->email = $email;
        $user->password = $password;
        $user->role = "subscriber";

        if(Mail::to($email)->send(new Verificationmail($data))){

            if($user->save()){
                DB::table('personal_access_tokens')->insert(['tokenable_type' => 'email verification', 'tokenable_id' => $user->id, 'name'=> 'email token', 'token' => $code, 'abilities'=>'verify email address']);
                $request->session()->put('user', $user->id);
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'account created']);
            }
            else{
                return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'account creation failed']);
            }
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'could not send mail']);
        }
    }

    public function resendMail(Request $request){
        $email = $request->email;
        $user = $request->session()->get('user');
        $code = rand(9999, 9000);

        $data = ['code' => $code];

        DB::delete("delete from personal_access_tokens where tokenable_id = ?", [$user]);
        if(Mail::to($email)->send(new Verificationmail($data))){
            DB::table('personal_access_tokens')->insert(['tokenable_type' => 'email verification', 'tokenable_id' => $user, 'name'=> 'email token', 'token' => $code, 'abilities'=>'verify email address']);
            return response()->json(['status' => 'success', 'status_code' => 201]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401]);
        }
    }

    public function verify(Request $request){
        $user = $request->session()->get('user');

        $one = $request->one;
        $two = $request->two;
        $three = $request->three;
        $four = $request->four;

        $code = $one.$two.$three.$four;
        $data = User::where(['id' => $user])->first();
        $redirect = "/home";
        if($data->role == "vendor"){
            $redirect = "/review";
        }

        if(DB::table('personal_access_tokens')->where(['tokenable_id' => $user, 'token' => $code])->count()>0){
            DB::table('personal_access_tokens')->where(['tokenable_id' => $user, 'token' => $code])->delete();
            User::where(['id' => $user])->update(['email_verified_at'=>date('Y-m-d H:i:s'), 'isVerified' => 1]);
            return response()->json(['status' => 'success', 'status_code' => 201, 'redirect' => $redirect]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Verification code is not correct']);
        }
    }

    // application
    public function application(Request $request){
        $fname = $request->fname;
        $lname= $request->lname;
        $email = $request->email;
        $category = $request->category;
        $country = $request->country;
        $phone = $request->phone;
        $about = $request->about;

        $user_id =  strtolower($fname.rand(9999, 9000));

        $coverFile = null;
        $coverName = null;
        if($request->file('cover')){
            $uploadedFile = $request->file('cover');
            $filenameWithExt = $request->file('cover')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $image_size = $request->file('cover')->getSize();
                if($image_size > 5000000){
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Image size is too large, maximum size is 5MB'
                    ]);
                    exit();
                }
                $extension = $uploadedFile->getClientOriginalExtension();
                // validate image extension
                // accept only image and video
                if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif' && $extension != 'webp'){
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Invalid file type, only jpg, jpeg, png, gif, webp files are allowed'
                    ]);
                    exit();
                }
                $extension = $request->file('cover')->getClientOriginalExtension();
                $coverName = $filename.'_'.time().'.'.$extension;

                $path = $request->file('cover')->storeAs('users/'.$user_id, $coverName);
                $coverFile = $request->file('cover');

        }

        $uploadedFile = $request->file('avatar');
        $originalName = $request->file('avatar')->getClientOriginalName();
        $size = $request->file('avatar')->getSize();
        $file_name =str_slug(pathinfo($originalName, PATHINFO_FILENAME));

        $extension = $uploadedFile->getClientOriginalExtension();
        if($size > 5000000){
            return response()->json([
                'status' => 'error',
                'message' => 'Image size is too large, maximum size is 5MB'
            ]);
            exit();
        }

        if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif' && $extension != 'webp'){
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid file type, only jpg, jpeg, png, gif, webp files are allowed'
            ]);
            exit();
        }
        $filenameToStore = $file_name.'_'.time().'.'.$extension;


        $path = $request->file('avatar')->storeAs('users/'.$user_id, $filenameToStore);

        $password = generateRandomPassword(10);

        $user = new User;
        $user->user_id = $user_id;
        $user->fname = $fname;
        $user->lname = $lname;
        $user->email = $email;
        $user->password = $password;
        $user->country = $country;
        $user->category = $category;
        $user->phone = $phone;
        $user->role = "vendor";
        $user->about = $about;
        $user->channel = $request->channel;
        $user->profile_picture = $filenameToStore;
        $user->cover = $coverName;

        $code = rand(0, 9000);
        $data = [
            'code' => $code,
            'name' => ucwords($fname.' '.$lname),
            'email' => $email
        ];

        if(Mail::to($email)->send(new Verificationmail($data))){

            if($user->save()){
                mkdir("users/$user_id");
                if($coverFile != null){
                    $coverFile->move('users/'.$user_id, $coverName);
                }
                $file = $request->file('avatar');
                $file->move('users/'.$user_id, $filenameToStore);
                DB::table('personal_access_tokens')->insert(['tokenable_type' => 'email verification', 'tokenable_id' => $user->id, 'name'=> 'email token', 'token' => $code, 'abilities'=>'verify email address']);
                $request->session()->put('user', $user->id);
                Mail::send('mail.recieved-application', ['data' => $data], function($message) use ($data) {
                    $message->to($data['email'])->subject('Application recieved');
                    $message->from('noreply@syndicatefx.com', 'Syndicatefx');
                });
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'account created']);
            }
            else{
                return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'account creation failed']);
            }
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'could not send mail']);
        }

    }


    public function loginStepOne(Request $request){
        $email = $request->email;
        echo "hello";
        exit();
        if(User::where(['email' => $email])->count()>0){
            $user = User::where(['email' => $email])->first();
            $profile_picture = "/images/avatar/5.png";
            if($user->profile_picture !== NULL){
                $profile_picture = "/users/".strtolower($user->user_id)."/".$user->profile_picture;
            }

            return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'Account found', 'email' => $email, "image"=>$profile_picture]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Account not found']);
        }
    }

    public function loginStepTwo(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        $id = $user->id;
        $role = $user->role;
        $redirect = "/home";
        if($role === 'vendor'){
            if($user->approved == 0){
                $redirect = "/review";
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'login successful', "redirect" => $redirect]);
            }
            else{
                $redirect = "/profile";
            }

        }

        if ($user && Hash::check($password, $user->password)){
            $request->session()->put('user', $id);

            return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'login successful', "redirect" => $redirect]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Password is not correct']);
        }
    }


    public function updateProfile(Request $request){
        $fname = $request->fname;
        $lname= $request->lname;
        $about = $request->about;
        $duration = $request->duration;
        $price = $request->price;

        $id = $request->session()->get('user');
        $user = new User;

        $user->exists = true;
        $user->id = $id;
        $user->fname = $fname;
        $user->lname = $lname;
        $user->about = $about;
        $user->duration = $duration;
        $user->price = $price;
        $user->completed = true;

        $user_id = User::where('id', $id)->value('user_id');


        $coverFile = null;
        $coverName = null;
        $uploadedFile = null;
        $originalName = null;
        if($request->file('cover')){
            $uploadedFile = $request->file('cover');
            $filenameWithExt = $request->file('cover')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $image_size = $request->file('cover')->getSize();
                if($image_size > 5000000){
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Image size is too large, maximum size is 5MB'
                    ]);
                    exit();
                }
                $extension = $uploadedFile->getClientOriginalExtension();
                // validate image extension
                // accept only image and video
                if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif' && $extension != 'webp'){
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Invalid file type, only jpg, jpeg, png, gif, webp files are allowed'
                    ]);
                    exit();
                }
                $extension = $request->file('cover')->getClientOriginalExtension();
                $coverName = $filename.'_'.time().'.'.$extension;

                $path = $request->file('cover')->storeAs('users/'.$user_id, $coverName);
                $coverFile = $request->file('cover');

        }
        if($request->file('avatar')){
            $uploadedFile = $request->file('avatar');
            $originalName = $request->file('avatar')->getClientOriginalName();
            $size = $request->file('avatar')->getSize();
            $file_name =str_slug(pathinfo($originalName, PATHINFO_FILENAME));

            $extension = $uploadedFile->getClientOriginalExtension();
            if($size > 5000000){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Image size is too large, maximum size is 5MB'
                ]);
                exit();
            }

            if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif' && $extension != 'webp'){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid file type, only jpg, jpeg, png, gif, webp files are allowed'
                ]);
                exit();
            }
            $filenameToStore = $file_name.'_'.time().'.'.$extension;


            $path = $request->file('avatar')->storeAs('users/'.$user_id, $filenameToStore);
        }
         if($user->save()){
                if($coverFile != null){
                    
                    $coverFile->move('users/'.$user_id, $coverName);
                    DB::table('users')->where('id', $id)->update(['cover' => $coverName]);
                }
                if($uploadedFile != null && $uploadedFile != $coverFile){
                    $file = $request->file('avatar');
                    $file->move('users/'.$user_id, $filenameToStore);
                    DB::table('users')->where('id', $id)->update(['profile_picture' => $filenameToStore]);
                }
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'operation successful']);
            }
            else{
                return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'There was a problem, please try again']);
            }

    }


    public function writeReview(Request $request){
        $rating = $request->rating;
        $comment = $request->comment;
        $user = $request->user;
        $creator = $request->creator;

        if(DB::table('ratings')->where('user_id', $user)->where('creator_id', $creator)->count() > 0){
            if(DB::table('ratings')->where(['user_id' => $user, 'creator_id' => $creator])->update(['rating_value' => $rating, 'comment' => $comment])){
                return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'Review updated']);
            }
            else{
                return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Something went wrong, please try again']);
            }
            exit();
        }

        if(DB::table('ratings')->insert(['user_id' => $user, 'creator_id' => $creator, 'rating_value' => $rating, 'comment' => $comment])){
            return response()->json(['status' => 'success', 'status_code' => 201, 'message' => 'Review submitted']);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Something went wrong, please try again']);
        }
    }

    public function sendSignal(Request $request){
        $title = $request->title;
        $desc = $request->desc;
                    $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
        print_r($FcmToken);
          
        $serverKey = 'AAAARe86NfY:APA91bFlnTTMYxcswPYHUZKR8lxFy9UGflyK6t1DuZjN-dgu4knQEBM1ODpak8GMB9MutVdoLAhOEdPP2NIJeGXKyYR6q_rH_hyV6HlwHvG2RwPIg3U5tbYCuyVzH5mG-hAPSTlbmIbj';
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => "hello",
                "body" => "the body",  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        dd($result);
        $subscribers = Subscribers::where('creator_id', $request->session()->get('user'))->get();
        if(DB::table('signals')->insert(['creator_id' => $request->session()->get('user'), 'title' => $title, 'content' => $desc])){
            

            return response()->json(['status' => 'success', 'status_code' => 201]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Something went wrong, please try again']);
        }

    }
    
   public function searchCreators(Request $request){
        $q = $request->q;
        
        $query = "SELECT * FROM users WHERE (fname LIKE '%$q%' OR lname LIKE '%$q%') AND completed = 1 LIMIT 5";
        $creators = DB::select($query);

        
        if(count($creators)>0){
            return response()->json(['status' => 'success', 'result' => $creators]);
        }
        else{
            return response()->json(['status'=> 'failed', 'result' => 'No record found']);
        }
    }
    
    
    public function storeToken(Request $request){
         $id = $request->session()->get('user');
         User::where('id', $id)->update(['device_key'=>$request->token]);
         echo $id;
        return response()->json(['Token successfully stored.']);
    }
    
    public function sendWebNotification(Request $request)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
          
        $serverKey = 'AAAARe86NfY:APA91bFlnTTMYxcswPYHUZKR8lxFy9UGflyK6t1DuZjN-dgu4knQEBM1ODpak8GMB9MutVdoLAhOEdPP2NIJeGXKyYR6q_rH_hyV6HlwHvG2RwPIg3U5tbYCuyVzH5mG-hAPSTlbmIbj';
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => "hello",
                "body" => "the body",  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        dd($result);        
    }
}