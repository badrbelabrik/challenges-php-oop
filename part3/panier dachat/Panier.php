<?php
class Panier
{
    private array $produits = [];

    public function addProduct(Produit $Produit):void{
        array_push($this->produits,$Produit);
    }
    public function deleteProduct(Produit $Produit):void{
        foreach($this->produits as $index => $produit){
            if($produit === $Produit){
                unset($this->produits[$index]);
                $this->produits = array_values($this->produits);
                return;
            }
        }
    }

    public function calculerTotal():float{
        $total = 0;
        foreach($this->produits as $produit){
            $total += $produit->getPrix();
        }
        return $total;
    }
}