<?php

class Sport implements ISport
{
    private string $nomSport;
    private int $nbJoueurs;


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



    public function getLargeur(): int
    {
        return $this->getLargeur();
    }

    public function getLongueur(): int
    {
        return $this->getLongueur();
    }

    public function getDistance(): int
    {
        return $this->getDistance();
    }
}
