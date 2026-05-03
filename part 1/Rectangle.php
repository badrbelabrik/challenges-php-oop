<?php

class Rectangle
{
    private int $largeur;
    private int $hauteur;
    public function __construct(int $largeur, int $hauteur){
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function calculerAire():float{
        return $this->largeur * $this->hauteur;
    }
    public function calculerPerimetre():float{
        return 2 * ($this->largeur + $this->hauteur);
    }
}