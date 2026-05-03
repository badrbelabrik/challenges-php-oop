<?php
require "NotificationStrategy.php";
class EmailNotification implements NotificationStrategy
{
    public function send(User $user,string $message){
        $user->receive($message);
    }
}