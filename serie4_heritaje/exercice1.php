<?php
class Compte {
    private static $compteur = 0;//Chaque compte est caractérisé par un code incrémenté automatiquement
    protected $code;
    protected $solde;
    public function __construct($solde) {
        $this->code = ++self::$compteur;
        $this->solde = $solde;
    }
    public function __get($x) {
        return $this->$x;
    }
    public function __set($x, $y) {
        return $this->$x = $y;
    }
    public function deposer($montant){
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }
    public function retirer($montant){
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }
    }
    public function __toString(){
        return "Compte $this->code _Solde: $this->solde DH";
    }
}

class CompteEpargne extends Compte {
    private static $tauxInteret = 0.05;
    public function __construct($solde) {
        parent::__construct($solde);
    }
    public function calculInteret(){
        $this->solde += $this->solde * self::$tauxInteret;
    }
}
class ComptePayant extends Compte {
    private static $fraisOperation = 5.0;
    public function __construct($solde) {
        parent::__construct($solde);
    }
    public function deposer($montant){
        if ($montant > self::$fraisOperation) {
            $this->solde += $montant - self::$fraisOperation;
        }
    }
    public function retirer($montant){
        if ($montant + self::$fraisOperation <= $this->solde) {
            $this->solde -= $montant + self::$fraisOperation;
        }
    }
}
$compte = new Compte(6500);
$compteEpargne = new CompteEpargne(500);
$comptePayant = new ComptePayant(2000);
//deposer
$compte->deposer(200);
$compteEpargne->deposer(200);
$comptePayant->deposer(200);
//retirer
$compte->retirer(600);
$compteEpargne->retirer(600);
$comptePayant->retirer(600);

$compteEpargne->calculInteret();

echo $compte . "<br>";
echo $compteEpargne . "<br>";
echo $comptePayant . "<br>";

?>