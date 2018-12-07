<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
        $uname = $event->name;
        $uemail = $event->email;

        Mail::send(['html'=>'mail'],['name','Sathak'],function($message) use ($uemail,$uname){
            $message->to($uemail,$uname.'님')->subject('펫플레이스에 회원가입하신걸 축하드립니다 !');
            $message->from('cnghwls7@gmail.com','호진');
        });
    }
}
