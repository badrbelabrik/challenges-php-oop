<?php
interface NotificationStrategy{
    public function send(User $user,string $message);
}