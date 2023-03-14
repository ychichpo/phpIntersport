<?php

class spRelais extends Sport implements ISport, ISpRelais
{

    private $distance;


    public function __construct($nomSport, $nombreJoueurs, $distance) {
        parent::__construct($nomSport, $nombreJoueurs);
        $this->distance = $distance;

    }

    public function getDistance()
    {
        return $this->distance;
    }



}