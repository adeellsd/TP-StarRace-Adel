<?php

require_once "CorpsCeleste.php";

// Representation d'une planète avec une forme spécifique (solide, liquide ou gazeux )
class Planete extends CorpsCeleste 
{
    private string $type;

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

    public function getType(): string { return $this->type; }
}

?>