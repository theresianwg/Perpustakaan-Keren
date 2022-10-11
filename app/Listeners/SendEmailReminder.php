<?php

namespace App\Listeners;

use App\Events\UnreturnedBooks;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderEmail;
use APP\Models\User;
use APP\Models\BookUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailReminder
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
     * @param  \App\Events\UnreturnedBooks  $event
     * @return void
     */
    public function handle(UnreturnedBooks $event)
    {

        $borrows = $event->data;
        $data = [];
        foreach($borrows as $borrow){
            $data[$borrow->user_id][] = $borrow;
        };

        foreach($data as $userId=>$borrows){
            $this->sendEmailtoStudent($userId, $borrows);
        }
    }

    private function sendEmailtoStudent($userId, $borrows){
        $user = User::find($userId);
        Mail::to($user)->send(new ReminderEmail ($borrows));
    }
}
