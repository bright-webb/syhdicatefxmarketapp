<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use App\Models\Subscriptions;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriber;
use Carbon\Carbon;

class UserController extends Controller
{
    public function verify(Request $request){
        return view('verify');
    }

    public function search(){
        $page = $_GET['page'];
        $users = getUsers(0, 10, $page);

        return view('search')->with('users', $users);
    }

    public function page(){
        return view('page');
    }

    public function subscribed(Request $request){
        $user = $request->session()->get('user');
        if($_GET['status'] == 'successful'){
            $creator = $_GET['creator'];
            $channel = $_GET['channel'];
            $duration = $_GET['duration'];
            $durationInWeeks = 3;

            $currentDate = Carbon::now();

            $expirationDate = $currentDate->addWeeks($duration);

            $expiring = $expirationDate->format('Y-m-d');
            $row = [
                'status' => 'subscribed',
                'name' => name($user),
                'channel' => $channel,
                'duration' => $duration
            ];

            if(Subscribers::where('user_id', $user)->where('creator_id', $creator)->count()>0){
                return view('subscribed')->with($row);
            }

             if(Subscriptions::where('user_id', $user)->where('creator_id', $creator)->count()>0){
                return view('subscribed')->with($row);
            }

            $subscribers = new Subscribers;
            $subscriptions = new Subscriptions;

            $subscribers->user_id = $user;
            $subscribers->creator_id = $creator;
            $subscribers->duration = $duration;

            $subscriptions->user_id = $user;
            $subscriptions->creator = $creator;
            $subscriptions->channel = $channel;
            $subscriptions->duration = $duration;
            $subscriptions->date_subscribed = date('Y-m-d');
            $subscriptions->expiring = $expiring;

            $data = [
                'name' => name($creator)
            ];

            $row = [
                'status' => 'failed',
                'name' => name($user),
                'channel' => $channel,
                'duration' => $duration
            ];

            if($subscriptions->save() && $subscribers->save()){
                Mail::to(get_email($creator))->send(new NewSubscriber($data));
                $row = [
                'status' => 'success',
                'name' => name($user),
                'channel' => $channel,
                'duration' => $duration
            ];
                return view('subscribed')->with($row);
            }
            
        }
    }

    public function create(Request $request){
        return view('create');
    }

    public function subscriptions(Request $request){
        return view('subscriptions');
    }

    public function pageProfile(){
        return view('page-profile');
    }
}
