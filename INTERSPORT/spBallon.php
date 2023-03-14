<?php

class spBallon extends Sport
{
    private  $largeur;
    private  $longueur;

    public function __construct( $nomSport,  $nbJoueurs, $largeur, $longueur)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }



}