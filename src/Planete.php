<?php

require_once "CorpsCeleste.php";

// Representation d'une planète avec une forme spécifique (solide, liquide ou gazeux )
// Meme structure que pour planete
class Planete extends CorpsCeleste 
{
    private string $type;   

    // Initialisation d'une planète naine avec une type spécifique 
    public function __construct(
        string $nom, 
        float $masse, 
        int $diametre, 
        int $demiGrandAxe, 
        float $vitesse, 
        string $type
    ) {
        parent::__construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        $this->type = $type;
    }

    // Retourne le type de la planete 
    public function getType(): string { return $this->type; }
}

?>