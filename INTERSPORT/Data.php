<?php
$club["club 10"] = new Club(10,"Club 3",30,[]);
$club["club 2"] = new Club(2,"Club 4",11,[]);


$salsa =new spRelais("Salsa",2,100);
$vtt = new spRelais("Vtt",1,500);
$boxe =new spRelais("Boxe",2,30);

$foot =new spBallon("Foot",11,50,100);
$tennis =new spBallon("Tennis",4,30,50);



$club["club 10"]->ajouterSport($salsa);
$club["club 10"]->ajouterSport($vtt);
$club["club 10"]->ajouterSport($foot);
$club["club 2"]->ajouterSport($foot);
$club["club 2"]->ajouterSport($boxe);



// Instanciation de la classe SportCollectif
$sportCollectif = new spRelais("Hadball",2,200);


// Instanciation de la classe Football
$football = new spBallon("Foot",11,50,100);


