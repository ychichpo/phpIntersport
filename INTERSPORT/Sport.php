<?php

class Sport implements ISport
{
    private $nomSport;
    private $nbJoueurs;


    public function __construct($nomSport, $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return mixed
     */
    public function getNomSport()
    {
        return $this->nomSport;
    }

    /**
     * @return mixed
     */
    public function getNbJoueurs()
    {
        return $this->nbJoueurs;
    }


}