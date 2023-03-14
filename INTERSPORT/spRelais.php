<?php

class spRelais extends Sport
{
    private int $distance;

    public function __construct(string $nomSport, int $nbJoueurs,int $distance)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->distance = $distance;
    }


    public function getDistance(): int
    {
        return $this->distance;
    }
}