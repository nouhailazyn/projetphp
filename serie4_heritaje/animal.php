<?php
abstract class Animal{
    private $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
    abstract public function crier();
    public function afficher(){
        echo"Le nom l'animal :" . $this->nom;
    }
}
class Chien extends Animal{
    private $race;
    public function __construct($nom, $race){
        parent::__construct($nom);
        $this->race = $race;
    }
    public function crier(){
        echo"<br> Wouf !<br>";
    }
    public function afficher() {
        parent::afficher();
        echo ", race : " . $this->race . "<br>";
    }
}
class Chat extends Animal{
    private $couleur;
    public function __construct($nom, $couleur){
        parent::__construct($nom);
        $this->couleur = $couleur;
    }
    public function crier(){
        echo"<br>Miaou !<br>";
    }
    public function afficher() {
        parent::afficher();
        echo ", couleur : " . $this->couleur . "<br>";
    }
}
$Chien = new Chien("Rex", "Berger Allemand");
$Chat = new Chat("Mimi", "Gris");

$Chien->crier();
$Chat->crier();

$Chien->afficher();
$Chat->afficher();