<?php

class Sport
{

    public $nomSport;
    public $nbJoueurs;

    public function __construct($nomSport, $nbJoueurs) {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    public function getNomSport()
    {
        return $this->nomSport;
    }

    public function getNbJoueurs()
    {
        return $this->nbJoueurs;
    }




}