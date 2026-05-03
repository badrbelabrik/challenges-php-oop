<?php
require "Motorise.php";
class Voiture implements Motorise{
    private string $nom;
    private string $model;

    public function __construct(string $nom,string $model){
        $this->nom = $nom;
        $this->model = $model;
    }
    public function demarrer(): void
    {
        echo $this->nom." a demarrer".PHP_EOL;
    }
    public function arreter(): void
    {
        echo $this->nom." a arreter".PHP_EOL;
    }
}