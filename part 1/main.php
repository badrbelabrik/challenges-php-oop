<?php
require "compteBancaire.php";
require "Produit.php";
require "Rectangle.php";
//test class comptebancaire
//$account1 = new compteBancaire(0,"badr");
//$account1->deposer(20);
//echo $account1->getSolde() ."\n";
//$account1->retirer(10);
//echo $account1->getSolde();

//test class produit
//$produit1 = new Produit("keyboard",150,10);
//$produit2 = new Produit("mouse",350,10);
//$produit3 = new Produit("ecran",1550,20);
//
//$produit1->calculerPrixTTC()."\n";
//$produit2->calculerPrixTTC()."\n";
//$produit3->calculerPrixTTC()."\n";

//test rectangle class
$rectangle1 = new Rectangle(30,10);
echo "l'aire de cette rectangle est:".$rectangle1->calculerAire()."\n";
echo "le perimetre de cette rectangle est:".$rectangle1->calculerPerimetre()."\n";