<?php

interface IClub
{
    public function setIdClub(int $idClub);
    public function getIdClub(): int;

    public function setNomClub(string $nomClub);
    public function getNomClub(): string;

    public function setNbPoints(int $nbPoints);
    public function getNbPoints(): int;

    public function setLesSports(array $lesSports);
    public function getLesSports(): array;
}