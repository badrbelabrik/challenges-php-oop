<?php
require "Voiture.php";
require "Bateau.php";
require "Velo.php";

$voiture1 = new Voiture('dacia','logan');
$bateau1 = new Bateau('neptunus','750S');
$velo1 = new Velo();

$voiture1->demarrer();
$voiture1->arreter();

$bateau1->demarrer();
$bateau1->arreter();

$velo1->pedaler();