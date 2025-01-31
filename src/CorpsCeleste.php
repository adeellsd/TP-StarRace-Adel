<?php

// On crée la classe parente "CorpsCeleste" avec les propriétées nécéssaires pour tous les objets

class CorpsCeleste {

    protected float $masse;     
    protected int $diametre;
    protected int $demiGrandAxe;
    protected float $vitesse;
    protected string $nom;

    // Constructeur du corps celeste pour l'initialiser, toujouts avec les propriétés de base
    public function __construct(string $nom, float $masse, int $diametre, int $demiGrandAxe, float $vitesse)
    {
        // Vérification des valeurs pour éviter des incohérences
        if ($masse < 0 || $masse > 1) {
            throw new InvalidArgumentException("La masse doit être entre 0 et 1.");
        }
        if ($diametre <= 0) {
            throw new InvalidArgumentException("Le diamètre doit être un entier positif.");
        }
        if ($demiGrandAxe <= 0) {
            throw new InvalidArgumentException("Le demi-grand axe doit être un entier positif.");
        }
        if ($vitesse <= 0) {
            throw new InvalidArgumentException("La vitesse doit être positive.");
        }

        $this->nom = $nom;
        $this->masse = $masse;
        $this->diametre = $diametre;
        $this->demiGrandAxe = $demiGrandAxe;
        $this->vitesse = $vitesse;
    }

    // Fonction qui calcule combien d'orbites le corps effectue en x temps
    public function calculOrbite(float $temps): float {
            return ($this->vitesse * $temps * 1000 / ($this->demiGrandAxe * 2 * M_PI));
    }

    // Getters pour recup les propriétés des objets
    public function getNom(): string { return $this->nom; }
    public function getVitesse(): float { return $this->vitesse; }
    public function getDemiGrandAxe(): int { return $this->demiGrandAxe; }

}
?>