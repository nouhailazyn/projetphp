<?php

class Stagiaire {
    private static $compteur = 0;
    private $code;
    private $nom;
    private $prenom;
    private $groupe;

    // Constructeur
    public function __construct($nom,$prenom, $groupe) {
        $this->code = ++self::$compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->groupe = $groupe;
    }

    // Getters et Setters
    public function __get($groupe){
        return $this->groupe;
    }

    public function __set($groupe, $valeur){
        $this->$groupe = $valeur;
    }

    // Affichage des informations du stagiaire
    public function toString(){
        // return "Stagiaire {$this->code}: {$this->nom} {$this->prenom}, Groupe: {$this->groupe}";
        return "Stagiaire est :".$this->code.
                " nom est :".$this->nom.
                " prenom est :".$this->prenom.
                " groupe est :".$this->groupe;
    }

    // Nombre total de stagiaires
    public static function getNbrStagiaire(){
        return self::$compteur;
    }
}

$stagiaire1 = new Stagiaire("EZ-ZAYANY", "Ghizlane", "DEV102");
$stagiaire2 = new Stagiaire("EL-FASSI", "Nour", "DEV102");
$stagiaire3 = new Stagiaire("EL-ALAOUI", "Leila", "DEV102");
$stagiaire4 = new Stagiaire("OPHELIA", "Lorein", "DEV102");
echo $stagiaire1 -> toString() ."<br>";
echo $stagiaire1 . "<br>" .$stagiaire2 . "<br>" .$stagiaire3 . "<br>" .$stagiaire4 . "<br>";
echo "Le nombre de stagiaires est : " . Stagiaire::getNbrStagiaire() . "<br>";

?>