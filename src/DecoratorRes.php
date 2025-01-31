<?php
require_once "CorpsCeleste.php";

// On affiche les résultats de la course
class DecoratorRes {
    public static function afficher(array $participants) {
        echo "Le vainqueur est " . get_class($participants[0]) . " " . $participants[0]->getNom() . "<br>";
        echo "Médaille d'argent : " . get_class($participants[1]) . " " . $participants[1]->getNom() . "<br>";
        echo "Médaille de bronze : " . get_class($participants[2]) . " " . $participants[2]->getNom() . "<br>";
    }
}
?>
