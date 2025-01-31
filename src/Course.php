<?php

require_once "Factory.php";


class Course {
    private array $participants;
    private int $duree;

    public function __construct() {
        $this->participants = [];
        $this->duree = rand(1, 100);
        $types = ["Planete", "Asteroide", "Comete", "PlaneteNaine"];

        // On crée 10 corps célestes aléatoires
        for ($i = 0; $i < 10; $i++) {
            $this->participants[] = Factory::create($types[array_rand($types)]);
        }
    }

    // On exécute la course et on affiche les orbites parcourues
    public function run() {
        foreach ($this->participants as $participant) {
            $orbites = $participant->calculOrbite($this->duree);
            echo $participant->getNom() . " a parcouru " . round($orbites, 2) . " orbites.<br>";
        }

        usort($this->participants, fn($a, $b) => $b->calculOrbite($this->duree) <=> $a->calculOrbite($this->duree));
    }

    public function getParticipants(): array { return $this->participants; }
}
?>
