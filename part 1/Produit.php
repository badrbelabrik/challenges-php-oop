<?php

class Produit
{
    private string $nom;
    private float $prixHT;
    private float $tva;
    public function __construct(string $nom, float $prixHT, float $tva){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->tva = $tva;
    }
    public function calculerPrixTTC():float{
        return $this->prixHT + ($this->prixHT*$this->tva/100);
    }

}