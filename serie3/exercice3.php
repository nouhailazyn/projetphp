<?php
// Création de la classe Segment
class Segment {
    private $ext1;
    private $ext2;
    // Constructeur
    public function __construct($ext1, $ext2) {
        $this->ext1 = $ext1;
        $this->ext2 = $ext2;
    }
    // Calcul de la longueur du segment
    public function longueur(){
        return abs($this->ext2 - $this->ext1);
    }
    // Affichage des informations du segment
    public function __toString(){
        return "Segment [{$this->ext1}, {$this->ext2}], Longueur: " . $this->longueur();
    }
    // Getters et Setters
    public function getExt1(){
        return $this->ext1;
    }
    public function setExt1($ext1){
        $this->ext1 = $ext1;
    }
    public function getExt2(){
        return $this->ext2;
    }
    public function setExt2($ext2){
        $this->ext2 = $ext2;
    }
}
$segment = new Segment(2.5, 7.8);
echo $segment . "<br>";
