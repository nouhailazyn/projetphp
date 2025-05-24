<?php
class Personne {
    protected $nom;
    protected $prenom;
    protected $email;
    protected $tel;
    public function __construct($nom, $prenom, $email, $tel) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
    }
    public function __get($a){
         return $this->$a; 
    }
    public function setTel($a, $b){
         $this-> $a = $b; 
    }
    public function __toString(){
        return "Nom: $this->nom, Prénom: $this->prenom, Email: $this->email, Tel: $this->tel ";
    }
}

class Stagiaire extends Personne {
    private $groupe;
    public function __construct($nom, $prenom, $email, $tel, $groupe) {
        parent::__construct($nom, $prenom, $email, $tel);
        $this->groupe = $groupe;
    }
    public function getGroupe(){ 
        return $this->groupe; 
    }
    public function setGroupe($groupe){ 
        $this->groupe = $groupe; 
    }
    public function __toString(){
        return parent::__toString() . ", Groupe: $this->groupe <br>";
    }
}

class Formateur extends Personne {
    private $salaire;
    public function __construct($nom, $prenom, $email, $tel, $salaire) {
        parent::__construct($nom, $prenom, $email, $tel);
        $this->salaire = $salaire;
    }
    public function getSalaire(){ return $this->salaire; }
    public function setSalaire($salaire){ $this->salaire = $salaire; }
    public function __toString(){
        return parent::__toString() . ", Salaire: $this->salaire €";
    }
}

// Classe de test
$stagiaire = new Stagiaire("Doe", "John", "john.doe@example.com", "0123456789", "Groupe A");
$formateur = new Formateur("Smith", "Alice", "alice.smith@example.com", "0987654321", 2500.50);

echo $stagiaire . "\n";
echo "---------------------------------<br>";
echo $formateur . "\n";

?>