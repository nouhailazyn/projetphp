<?php
//exercice 3
// Création de la classe Segment
class Segment {
    private float $ext1;
    private float $ext2;

    // Constructeur
    public function __construct(float $ext1, float $ext2) {
        $this->ext1 = $ext1;
        $this->ext2 = $ext2;
    }

    // Calcul de la longueur du segment
    public function longueur(): float {
        return abs($this->ext2 - $this->ext1);
    }

    // Affichage des informations du segment
    public function __toString(): string {
        return "Segment [{$this->ext1}, {$this->ext2}], Longueur: " . $this->longueur();
    }

    // Getters et Setters
    public function getExt1(): float {
        return $this->ext1;
    }

    public function setExt1(float $ext1): void {
        $this->ext1 = $ext1;
    }

    public function getExt2(): float {
        return $this->ext2;
    }

    public function setExt2(float $ext2): void {
        $this->ext2 = $ext2;
    }
}

$segment = new Segment(2.5, 7.8);
echo $segment . "<br>";
