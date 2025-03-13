<?php
class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $tel;

    public function __construct(string $nom, string $prenom, string $email, string $tel) {
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

    public function __toString(): string {
        return "Nom: $this->nom, Prénom: $this->prenom, Email: $this->email, Tel: $this->tel";
    }
}

class Stagiaire extends Personne {
    private string $groupe;
    public function __construct($nom, $prenom, $email, $tel, $groupe) {
        parent::__construct($nom, $prenom, $email, $tel);
        $this->groupe = $groupe;
    }

    public function getGroupe(): string { return $this->groupe; }
    public function setGroupe(string $groupe): void { $this->groupe = $groupe; }

    public function __toString(): string {
        return parent::__toString() . ", Groupe: $this->groupe";
    }
}

class Formateur extends Personne {
    private float $salaire;

    public function __construct(string $nom, string $prenom, string $email, string $tel, float $salaire) {
        parent::__construct($nom, $prenom, $email, $tel);
        $this->salaire = $salaire;
    }

    public function getSalaire(): float { return $this->salaire; }
    public function setSalaire(float $salaire): void { $this->salaire = $salaire; }

    public function __toString(): string {
        return parent::__toString() . ", Salaire: $this->salaire €";
    }
}

// Classe de test
$stagiaire = new Stagiaire("Doe", "John", "john.doe@example.com", "0123456789", "Groupe A");
$formateur = new Formateur("Smith", "Alice", "alice.smith@example.com", "0987654321", 2500.50);

echo $stagiaire . "\n";
echo $formateur . "\n";

?>