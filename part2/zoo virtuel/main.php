<?php
require "Animal.php";
require "Chat.php";
require "Chien.php";

$chat1 = new Chat('cat');
$chien1 = new Chien('dog');
$chat1->emmetreSon();
$chien1->emmetreSon();
