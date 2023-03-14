<?php

class Sport implements ISport
{
    private string $nomSport;
    private int $nbJoueurs;
    protected int $distance;
    protected int $longueur;
    protected int $largeur;

    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }


    public function getNomSport(): string
    {
        return $this->nomSport;
    }
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }


    public function getInfoSpRelais($distance)
    {
        $this->distance = $distance;
    }
    public function getInfoSpBallon($longueur, $largeur,)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
}