<?php

include "Club.php";
include "ISport.php";
include "Sport.php";
include "spBallon.php";
include "spRelais.php";
include "Data.php";


$sportCollectif = new spRelais("Hadball",2,200);
$football = new spBallon("Foot",11,50,100);

echo "Le " . $sportCollectif->getNomSport() . " se joue avec " . $sportCollectif->getNbJoueurs() . " joueurs.";
echo "Le terrain de football mesure " . $football->getLongueur() . " mètres de long et " . $football->getLargeur() . " mètres de large.
     Les joueurs doivent parcourir " . $football->getDistance() . " kilomètres pendant un match.";




