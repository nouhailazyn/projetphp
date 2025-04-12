<?php
abstract class Forme {
    abstract public function calculerSurface();
    public function afficher(){
        echo"Ceci est une forme";
    }

}
class Rectangle extends Forme {
    private $longueur;
    private $largeur;
    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    public function calculerSurface(){
        return $this->longueur * $this->largeur;
    }
    public function afficher(){
        echo"<br> Rectangle de surface : " . $this->calculerSurface();
    }
}
class Cercle extends Forme {
    private $rayon;
    public function __construct($rayon){
        $this->rayon = $rayon;
    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    public function calculerSurface(){
        return pi() * pow($this->rayon, 2);
    }
    public function afficher(){
        echo "<br> Cercle de surface : " . $this->calculerSurface();
    }
}

// Test
echo "Rectangle :";
$rectangle = new Rectangle(5, 10);
$rectangle->afficher();

echo "<br><br>Cercle rayon :";
$cercle_rayon = new Cercle(3);
$cercle_rayon->afficher();