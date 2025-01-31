<?php

require_once "CorpsCeleste.php";
require_once "Planete.php";
require_once "PlaneteNaine.php";
require_once "Asteroide.php";
require_once "Comete.php";

// Génération des objets de maniere aléatoire
class Factory {
    public static function create(string $type): CorpsCeleste 
    {
        $TableauNoms = [
            "Luke Skywalker", "Darth Vader", "Han Solo", "Leia Organa", "Yoda",
            "Obi-Wan Kenobi", "Darth Maul", "Palpatine", "Boba Fett", "R2-D2",
            "C-3PO", "Chewbacca", "Kylo Ren", "Rey", "Mace Windu", "Padmé Amidala",
            "Anakin Skywalker", "Lando Calrissian", "Jabba the Hutt", "Qui-Gon Jinn"
        ];

        $nom = $TableauNoms[array_rand($TableauNoms)];
        $masse = rand(0, 100) / 100;
        $diametre = rand(1, 100000);
        $demiGrandAxe = rand(1, 1000);
        $vitesse = rand(10, 100);

        // On fait en sorte de donner une forme spécifique de maniere aléatoire
        if ($type === "Planete" || $type === "PlaneteNaine") 
        {
            $types = ["liquide", "solide", "gazeux"];
            return new $type($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $types[array_rand($types)]);
        }

        return new $type($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
    }
}


?>