<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SignalController extends Controller
{
     public function sendSignal(Request $request){
        // Validate and save the signal to the database
        // $signal = new Signal();
        // $signal->creator_id = $request->session()->get('user');
        // $signal->title = $request->title;
        // $signal->content = $request->desc;
        // $signal->save();

        // Trigger a Pusher event to notify subscribers
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ]
        );

        $pusher->trigger('creator_signals_' . $request->session()->get('user'), 'signal_sent', [
            'title' => $request->title,
            'description' => $request->desc,
        ]);
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
        print_r($FcmToken);
          
        $serverKey = 'AAAARe86NfY:APA91bFlnTTMYxcswPYHUZKR8lxFy9UGflyK6t1DuZjN-dgu4knQEBM1ODpak8GMB9MutVdoLAhOEdPP2NIJeGXKyYR6q_rH_hyV6HlwHvG2RwPIg3U5tbYCuyVzH5mG-hAPSTlbmIbj';
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->desc,  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
        $url = 'https://fcm.googleapis.com/fcm/send';
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
        exit();

        if(DB::table('signals')->insert(['creator_id' => $request->session()->get('user'), 'title' => $request->title, 'content' => $request->desc])){
                 
            return response()->json(['status' => 'success', 'status_code' => 201]);
        }
        else{
            return response()->json(['status' => 'failed', 'status_code' => 401, 'message' => 'Something went wrong, please try again']);
        }
     }
}
