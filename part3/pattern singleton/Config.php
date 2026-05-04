<?php

class Config
{
    private string $nom;
    private string $apiKey;
    private static ?Config $instance = null;
    private function __construct(){

    }

    public static function getInstance():Config{
        if (self::$instance === null){
            self::$instance = new Config();
        }
        echo "the instance is created";
        return self::$instance;
    }
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
}