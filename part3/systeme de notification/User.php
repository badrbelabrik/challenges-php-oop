<?php

class User
{
    private string $nom;
    public function __construct(string $nom){
        $this->nom = $nom;
    }

    public function receive($message){
        echo $this->nom.' received new message : '.$message."\n";
    }
}