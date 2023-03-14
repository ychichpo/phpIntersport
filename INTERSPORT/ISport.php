<?php

interface ISport
{

    public function getNomSport(): string;


    public function getNbJoueurs(): int;


    public function getLargeur(): int ;

    public function getLongueur(): int ;

    public function getDistance(): int;

}
