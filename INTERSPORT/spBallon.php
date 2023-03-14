<?php

class spBallon extends Sport implements IspBallon
{
    private $largeur;
    private $longueur;

    public function __construct($nomSport, $nombreJoueurs, $largeur, $longueur) {
        parent::__construct($nomSport, $nombreJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }



}