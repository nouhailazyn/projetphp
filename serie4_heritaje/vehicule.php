<?php
//class mere de vehicule
class Vehicule{
    protected $matricule; //numéro d'immatriculation
    protected $annéeModèle;
    protected $vitesse;
    protected $marque;
    protected $prix;
    protected static $i = 0;//auto-ncrémenté
    public function __construct($annéeModèle, $prix, $marque, $vitesse){
        $this->matricule = ++self::$i;
        $this->prix = $prix;
        $this->marque = $marque;
        $this->vitesse = $vitesse;
        $this->annéeModèle = $annéeModèle;
    }
    public function __get($x){
        return $this->$x;
    }
    public function __set($x, $y){
        $this->$x = $y;
    }
    public function afficherInfo(){
        echo "Une voiture de marque ".$this->marque.", vitesse ".$this->vitesse." km/h , avec un prix de ".$this->prix." DH, année modele est ".$this->annéeModèle." ans<br>";
    }
}
//class de voiture
class Voiture extends Vehicule{
    private $portes;
    public function __construct($annéeModèle, $prix, $marque, $vitesse, $portes){
        parent::__construct($annéeModèle, $prix, $marque, $vitesse);
        $this->portes = $portes;
    }
    public function ouvrirCoffre(){
        echo"Coffre ouvert !<br>";
    }
}
//class fille de moto
class Moto extends Vehicule{
    private $typeGuide;
    public function __construct($annéeModèle, $prix, $marque, $vitesse, $typeGuide){
        parent::__construct($annéeModèle, $prix, $marque, $vitesse);
        $this->typeGuide = $typeGuide;
    }
    public function faireWheelie(){
        echo"La moto fait un wheelie !<br>";
    }
    public function afficherInfo(){
        echo "Une moto de marque ".$this->marque.", vitesse ".$this->vitesse." km/h , avec un prix de ".$this->prix." DH, année modele est ".$this->annéeModèle." ans, aussi un ".$this->typeGuide."<br>";
    }
}
//programme test
$v1 = new Vehicule(1975, 6000, "Mercedes", 1500);
$v2 = new Voiture(1975, 6000, "Toyota", 1500, 4);
$v3 = new Moto(1975, 6000, "Yamaha", 180, "guidon sport");
$v1->afficherInfo();
$v2->afficherInfo();
$v2->ouvrirCoffre();
$v3->afficherInfo();
$v3->faireWheelie();
?>