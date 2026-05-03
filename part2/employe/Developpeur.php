<?php

class Developpeur extends Employe
{
    public function travailler():void
    {
        echo $this->nom." ecrit du code".PHP_EOL;
    }
}