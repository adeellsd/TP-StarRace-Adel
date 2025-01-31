<?php 

require_once "CorpsCeleste.php";

// Représentation d'un asteroide avec un type fixe (solide)
class Asteroide extends CorpsCeleste
{
    private string $type = "solide";    // Toujours solide

    // Retourne le type de l'astéroide
    public function getType(): string { return $this->type; }
}

?>