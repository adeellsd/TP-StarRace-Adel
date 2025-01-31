<?php

// On crée la classe parente "CorpsCeleste" avec les propriétées nécéssaires

class CorpsCeleste {

    protected float $masse;     
    protected int $diametre;
    protected int $demiGrandAxe;
    protected float $vitesse;
    protected string $nom;

    // Constructeur du corps celeste pour l'initialiser
    public function __construct(string $nom, float $masse, int $diametre, int $demiGrandAxe, float $vitesse)
    {
        $this->nom = $nom;
        $this->masse = $masse;
        $this->diametre = $diametre;
        $this->demiGrandAxe = $demiGrandAxe;
        $this->vitesse = $vitesse;
    }

    // Fonction qui calcule combien d'orbites lec orps effectue en x temps
    public function calculOrbite(float $temps): float {
            return ($this->vitesse * $temps * 1000 / ($this->demiGrandAxe * 2 * M_PI));
    }

    public function getNom(): string { return $this->nom; }
    public function getVitesse(): float { return $this->vitesse; }
    public function getDemiGrandAxe(): int { return $this->demiGrandAxe; }

}
?>