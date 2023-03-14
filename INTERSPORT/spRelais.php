<?php

class spRelais extends Sport
{
    private  $distance;

    public function __construct( $nomSport,  $nbJoueurs, $distance)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->distance = $distance;
    }



}