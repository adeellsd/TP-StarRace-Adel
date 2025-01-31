<?php

require_once "CorpsCeleste.php";
require_once "Planete.php";
require_once "PlaneteNaine.php";
require_once "Asteroide.php";
require_once "Comete.php";

// Classe qui génére des objets celestes de maniere aléatoire
class Factory {
    public static function create(string $type): CorpsCeleste 
    {
        // Liste de noms possibles pour les participants a la Star Race
        $TableauNoms = [
            "Luke Skywalker", "Darth Vader", "Han Solo", "Leia Organa", "Yoda",
            "Obi-Wan Kenobi", "Darth Maul", "Palpatine", "Boba Fett", "R2-D2",
            "C-3PO", "Chewbacca", "Kylo Ren", "Rey", "Mace Windu", "Padmé Amidala",
            "Anakin Skywalker", "Lando Calrissian", "Jabba Le Hutt", "Qui-Gon Jinn"
        ];
        // Selectionne un nom au hasard
        $nom = $TableauNoms[array_rand($TableauNoms)];
        // On génére également les autres attributs de maniere aléatoire
        $masse = rand(0, 100) / 100;
        $diametre = rand(1, 100000);
        $demiGrandAxe = rand(1, 1000);
        $vitesse = rand(10, 100);

        // On fait en sorte de donner une forme spécifique de maniere aléatoire (Planete et planete naine seulement)
        if ($type === "Planete" || $type === "PlaneteNaine") 
        {
            $types = ["liquide", "solide", "gazeux"];
            return new $type($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $types[array_rand($types)]);
        }

        return new $type($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
    }
}


?>