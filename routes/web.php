<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignalController;
use App\Http\Middleware\AuthUser;
use Illuminate\Http\Request;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/next', function(){
    return view('next');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/step-two', function(){
    return view('step-two');
});

Route::get('/agreement', function(){
    return view('agreement');
});


Route::get('/application', function(){
    return view('application');
});

Route::get('/application-2', function(){
    return view('application-2');
});

Route::get('/application-3', function(){
    return view('application-3');
});

Route::middleware([AuthUser::class])->group(function(){
    Route::get('/home', function(Request $request){
        $user = $request->session()->get('user');
        $users = User::where('approved', 1)->where('role', 'vendor')->where('completed', 1)->take(10)->limit(10)->latest()->get();
        return view('home')->with('users', $users);
    });

    Route::get('/review', function(Request $request){
        return view('review');
    });

    Route::get('/profile', function(){
        return view('profile');
    });

    Route::get('/signout', function(Request $request){
        $user = $request->session()->get('user');
        $request->session()->forget('user');
            return redirect('/'); 
    });


    Route::get('/edit', function(){
        return view('edit');
    });

    Route::post('/post/update/profile', [MyController::class, 'updateProfile']);
    Route::post('/post/submit-review', [MyController::class, 'writeReview']);
    Route::post('/post/send/signal', [SignalController::class, 'sendSignal']);
    Route::post('/post/save-token', [MyController::class, 'saveToken'])->name('save-token');
    

    Route::get('/search', [UserController::class, 'search']);
    Route::get('/page', [UserController::class, 'page']);
    Route::get('/notification', [UserController::class, 'notification']);

    Route::get('/subscribed', [UserController::class, 'subscribed']);
    Route::get('/create', [UserController::class, 'create']);
    Route::get('/subscriptions', [UserController::class, 'subscriptions']);
    Route::get('/page-profile', [UserController::class, 'pageProfile']);
    Route::get('/search/creators', [MyController::class, 'searchCreators']);
    
    Route::post('/store/token', [MyController::class, 'storeToken']);
    Route::get('/send-web-notification', [MyController::class, 'sendWebNotification'])->name('send.web-notification');
});



Route::post('/api/check/email', [MyController::class, 'checkEmail']);
Route::post('/api/create/account', [MyController::class, 'createAccount']);
Route::get('/api/resend-email-verification', [MyController::class, 'resendMail']);
Route::post('/api/verify', [MyController::class, 'verify']);
Route::post('/api/submit/application', [MyController::class, 'application']);
Route::post('/post/login/step/one', function(Request $request){
    $email = $request->email;
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
});
Route::post('/api/login/step/two', [MyController::class, 'login']);

Route::get('/verify', [UserController::class, 'verify']);


