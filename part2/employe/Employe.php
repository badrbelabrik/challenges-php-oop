<?php

class Employe
{
    protected string $nom;
    public function __construct(string $nom){
        $this->nom = $nom;
    }
    public function travailler():void{
        echo $this->nom."travaille ".PHP_EOL;
    }

}