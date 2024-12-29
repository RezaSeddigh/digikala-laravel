<?php

namespace App\Notifications\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);

        $api = new GhasedakApi('6d482f9dba19d289f1489fc91a6c5ee1f7a2ced68480817cf64f65b4f18472d6RVrYy5jZNqwoSUcG');
        $response = $api->Verify(
            $message['mobile'],  // receptor
            $message['template'],  // name of the template which you've created in you account
            $message['parameters'],
        );
        if ($response->result->code==200){
            return true;
        }else{
            return false;
        }
    }
}
