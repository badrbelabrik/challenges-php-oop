<?php

class CompteBancaire{
    public float $solde;
    public string $titulaire;

    function __construct($solde,$titulaire){
        $this->solde = $solde;
        $this->titulaire = $titulaire;
    }

    function deposer($montant):void{
        $this->solde += $montant; 
    }

    function retirer($montant):void{
        if($montant > $this->solde){
            echo "you have no suffisant funds";
            return;
        }
        $this->solde -= $montant;
    }


    public function getSolde():float
    {
        return $this->solde;
    }

    public function setSolde($solde):void
    {
        $this->solde = $solde;
    }

    public function getTitulaire():string
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire):void
    {
        $this->titulaire = $titulaire;
    }

}

