<?php

class PushNotification implements NotificationStrategy
{
    public function send(User $user,string $message){
        $user->receive($message);
    }
}