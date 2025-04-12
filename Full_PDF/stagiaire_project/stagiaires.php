<?php

class Stagiaire {
    private static $compteur = 0;
    private $code;
    private $nom;
    private $prenom;
    private $groupe;

    // Constructeur
    public function __construct($nom, $prenom, $groupe) {
        $this->code = ++self::$compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->groupe = $groupe;
    }

    // Getters et Setters
    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }

    // Affichage des informations du stagiaire
    public function getInfo() {
        return "Stagiaire: {$this->code} | Nom: {$this->nom} | Prénom: {$this->prenom} | Groupe: {$this->groupe}";
    }

    // Nombre total de stagiaires
    public static function getNbrStagiaire() {
        return self::$compteur;
    }
}

// Création des objets
$stagiaires = [
    new Stagiaire("BADRI", "chames", "DEV102"),
    new Stagiaire("EL-FASSI", "Nour", "DEV102"),
    new Stagiaire("EL-ALAOUI", "Leila", "DEV102"),
    new Stagiaire("OPHELIA", "Lily", "DEV102"),
    new Stagiaire("GHAYME", "nouha", "DEV102")
];

?>
