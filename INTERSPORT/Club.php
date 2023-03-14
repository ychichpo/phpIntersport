<?php

class Club
{
    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private array $lesSports;

    public function __construct(int $idClub, string $nomClub, int $nbPoints, array $lesSports)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
        $this->lesSports = $lesSports;
    }


    public function setIdClub(int $idClub) {
        $this->idClub = $idClub;
    }

    public function getIdClub(): int {
        return $this->idClub;
    }

    public function setNomClub(string $nomClub) {
        $this->nomClub = $nomClub;
    }

    public function getNomClub(): string {
        return $this->nomClub;
    }

    public function setNbPoints(int $nbPoints) {
        $this->nbPoints = $nbPoints;
    }

    public function getNbPoints(): int {
        return $this->nbPoints;
    }

    public function setLesSports(array $lesSports) {
        $this->lesSports = $lesSports;
    }

    public function getLesSports(): array {
        return $this->lesSports;
    }
    public function ajouterSport(Sport $unSport){
        $this -> lesSports[]=$unSport;
    }

}