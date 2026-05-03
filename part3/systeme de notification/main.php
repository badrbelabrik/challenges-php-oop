<?php
require "EmailNotification.php";
require "SmsNotification.php";
require "PushNotification.php";
require "User.php";

$user1 = new User("badr");
$emailnotif = new EmailNotification();
$smsnotif = new SmsNotification();
$pushnotif = new PushNotification();

$emailnotif->send($user1,"you received new message");
$smsnotif->send($user1,"you received new message");
$pushnotif->send($user1,"you received new message");