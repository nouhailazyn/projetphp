<?php
class Voiture{
    private $marque;
    private $couleur;
    private $vitesse;
    public function __construct($marque, $couleur, $vitesse){
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }
    public function afficherMarque(){
        return "La marque de la voiture est : " . $this->marque . ", sa couleur est : " . $this->couleur . "<br>";
    }
    public function repeindre($couleur){
        $this->couleur = $couleur;
    }
    public function accelerer($augmentation){
        $this->vitesse += $augmentation;
    }

    public function afficherVitesse(){
        echo "La " . $this->marque . " roule à " . $this->vitesse . " km/h.<br>";
    }
    public function freiner($diminution){
        $this->vitesse -= $diminution;
        if($this->vitesse < 0){
            $this->vitesse = 0;
        }
    }
}
$v1 = new Voiture("BMW", "red", 200);
echo $v1->afficherMarque();
$v1->repeindre("bleu");
echo $v1->afficherMarque();
$v1->accelerer(300);
$v1->afficherVitesse();
$v1->freiner(100);
$v1->afficherVitesse();

class Personne{
    private $nom;
    private $age;
    public function __construct($nom, $age){
        $this->nom = $nom;
        $this->age = $age;
    }
    public function afficherInfos(){
        echo "Je suis " . $this->nom . " et j'ai " . $this->age . " ans.<br>";
    }
    // public function vieillir(){
    //     if()
    // }
}
$p1 = new Personne("Nouhaila" , 21);
$p1->afficherInfos();
?>