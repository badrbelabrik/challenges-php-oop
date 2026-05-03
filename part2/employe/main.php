<?php
require "Employe.php";
require "Developpeur.php";
require "Manager.php";
$dev = new Developpeur("badr");
$dev->travailler();
$mgr = new Manager('mustapha');
$mgr->travailler();