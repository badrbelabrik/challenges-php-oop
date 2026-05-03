<?php

class Manager extends Employe
{
    public function travailler():void{
        echo $this->nom." gere une equipe".PHP_EOL;
    }
}