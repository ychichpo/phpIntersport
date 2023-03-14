<?php

include "Club.php";
include "Sport.php";
include "IspBallon.php";
include "spBallon.php";
include "ISpRelais.php";
include "spRelais.php";
include "Data.php";



foreach($club as $item) {
    echo $item->getNomClub()."<br/><br/>";
    $tabSport = $item->getLesSports();
    foreach ($tabSport as $details) {
        echo $details->getNomSport()."<br/>";
        echo $details->getNbJoueurs()."<br/>";
        if($details instanceof IspBallon) {
            echo $details->getLargeur()."<br/>";
            echo $details->getLongueur()."<br/>";
        }
        if($details instanceof ISpRelais) {
            echo $details->getDistance()."<br/>";
        }
        echo "<br/>";


    }
}

