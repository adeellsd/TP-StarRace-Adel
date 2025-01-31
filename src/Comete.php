<?php 

require_once "CorpsCeleste.php";

// Représentation d'une comete avec un type fixe (solide)
// Meme structure que pour asteroide
class Comete extends CorpsCeleste
{
    private string $type = "solide";

    public function getType(): string { return $this->type; }
}

?>