<?php

require_once "CorpsCeleste.php";

// On affiche les participants au debut de la course
class DecoratorDepart 
{
    public static function afficher(array $participants) 
    {
        usort($participants, fn($a, $b) => $a->getDemiGrandAxe() <=> $b->getDemiGrandAxe());
        foreach ($participants as $index => $participant) {
            echo "Participant " . ($index + 1) . " : " . get_class($participant) . " - " . $participant->getNom() . "<br>";
        }
    }
}

?>
