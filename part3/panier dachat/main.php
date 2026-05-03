<?php
require "Produit.php";
require "Panier.php";

$panier1 = new Panier();
$mouse = new Produit("mouse",300);
$keyboard = new Produit("keyboard",150);

$panier1->addProduct($mouse);
$panier1->addProduct($keyboard);
echo "the total price is:".$panier1->calculerTotal()."\n";
$panier1->deleteProduct($mouse);
echo "the total price is:".$panier1->calculerTotal();