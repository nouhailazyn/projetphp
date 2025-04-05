<?php
class Produit{
    protected $nom;
    protected $prixUnitaire;
    protected $quantitéStock;
    public function __construct($nom, $prixUnitaire, $quantitéStock){
        $this->nom = $nom;
        $this->prixUnitaire = $prixUnitaire;
        $this->quantitéStock = $quantitéStock;
    }
    public function __get($propriete){
        return $this->$propriete;
    }
    public function __set($propriete, $valeur){
        return $this->$propriete = $valeur;
    }
    public function calculerPrixTotal(){
        return $this->prixUnitaire * $this->quantitéStock;
    }
    public function afficherInfo(){
        echo $this->nom. " son prix unitaire est ". $this->prixUnitaire. "DH, avec une quantité de stocke ". $this->quantitéStock. ", le prix totale est ".$this->calculerPrixTotal()." DH";
    }
    
}
class Promotion extends Produit{
    private static $remise = 0.1;
    public function __construct($nom, $prixUnitaire, $quantitéStock){
        parent::__construct($nom, $prixUnitaire, $quantitéStock);
    }
    public function appliqueRemise(){
        return $this->prixUnitaire * (1 - self::$remise); 
    }
    public function afficherInfo(){
        echo parent::afficherInfo(). ", avec une remise de ". self::$remise;
    }
}
class ProduitPerissable extends Produit{
    private $datePeremption;
    public function __construct($nom, $prixUnitaire, $quantitéStock, $datePeremption){
        parent::__construct($nom, $prixUnitaire, $quantitéStock);
        $this->datePeremption = new DateTime($datePeremption);
    }
    public function estPerime(){
        $dateActuelle = new DateTime();
        if($dateActuelle < $this->datePeremption){
            return "tu peut le vendre, il n'est pas expiré";
        }else{
            return "tu ne peut pas le vendre, le produit est périmé";
        }
    }
    public function afficherInfo(){
        echo parent::afficherInfo(). ", et ". $this->estPerime(). "<br>";
    }
}
$produit1 = new ProduitPerissable("Delisia", 150, 200, 2100-12-12);
$produit1->afficherInfo();
?>