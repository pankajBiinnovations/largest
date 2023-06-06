<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Models\User;
class SendMailfired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendMail $event): void
    {
        $user=User::find($event->userId)->toArray();
       
        Mail::send('eventmail',$user, function($message) use ($user){
           
            $message->to($user['email']);
            $message->subject('Event Testing');

        });
    }
}
