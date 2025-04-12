<?php
abstract class Oeuvre{
    private $titre;
    private $artiste;
    private $annee;
    public function __construct($titre, $artiste, $annee){
        $this->titre = $titre;
        $this->artiste = $artiste;
        $this->annee = $annee;
    }
    public function afficherInfos(){
        echo "$this->titre - $this->artiste - $this->annee <br>";
    }
    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $val){
        return $this->$name = $val;
    }
}
class Peinture extends Oeuvre{
    private $technique;
    public function __construct($titre, $artiste, $annee, $technique){
        parent::__construct($titre, $artiste, $annee);
        $this->technique = $technique;
    }
    public function decrire(){
        parent::afficherInfos();
        return "Cette peinture en {$this->technique} a été réalisée par {$this->artiste} en {$this->annee}<br>";    }
}
class Sculpture extends Oeuvre{
    private $materiau;
    public function __construct($titre, $artiste, $annee, $materiau){
        parent::__construct($titre, $artiste, $annee);
        $this->materiau = $materiau;
    }
    public function decrire(){
        parent::afficherInfos();
        return "Cette sculpture en {$this->materiau } a été créée par {$this->artiste}  en  {$this->annee} <br>";//here
    }
}
$Oeuvres = [
    new Peinture("La Nuit étoilée", "Vincent van Gogh", 1889, "Huile sur toile"),
    new Peinture("La Jeune Fille à la perle", "Johannes Vermeer", 1665, "Huile sur toile"),
    new Sculpture("Le Penseur", "Auguste Rodin", 1902, "Bronze"),
    new Sculpture("David", "Michel-Ange", 1504, "Marbre"),
    new Peinture("La Création d'Adam", "Michel-Ange", 1512, "Fresque"),
    new Sculpture("Vénus de Milo", "Alexandros d'Antioche", 130, "Marbre")
];
foreach($Oeuvres as $Oeuvre){
    echo $Oeuvre->decrire();
    echo"<br>";
}