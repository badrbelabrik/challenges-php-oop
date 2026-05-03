<?php

class Produit
{
    private string $nom;
    private float $prix;

    public function __construct(string $nom,float $prix){
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }
}