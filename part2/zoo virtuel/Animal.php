<?php

abstract class Animal
{
    protected string $type;
    public function __construct(string $type){
        $this->type = $type;
    }

    abstract public function emmetreSon();
}