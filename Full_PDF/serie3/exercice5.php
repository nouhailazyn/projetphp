<?php
class Point{
    // const PI = 3.14;
    private $x;
    private $y;
    private $rayon;
    public function __construct($x, $y, $rayon){
        $this->x = $x;
        $this->y = $y;
        $this->rayon = $rayon;
    }
    public function __get($a){
        return $this->$a;
    }
    public function __set($a, $b){
        $this->$a = $b;
    }
    public function afficher(){
        echo "POINT($this->x, $this->y) <br>";
        echo "CERCLE($this->x, $this->y, $this->rayon) <br>";
    }
    public function getPerimetre(){
        return 2 * pi() * $this->rayon;
    }
    public function getSurface(){
        return pi() * (($this->rayon)**2);
    }
    public function appartient(Point $p){
        $distance = sqrt(($p->x -$this->x)**2 + ($p->y -$this->y)**2);
        return $distance <= $this->rayon;
    }    
}
$point1 = new Point(3,4,5);
$point1->afficher();
echo "Le perimetre est :".$point1->getPerimetre()."<br>";
echo "Surface est :".$point1->getSurface()."<br>";
$point2 = new Point(100, 10, 0); // Rayon n'est pas utilisé ici, car on vérifie la position seulement
if ($point1->appartient($point2)) {
    echo "Le point ($point2->x, $point2->y) appartient au cercle.<br>";
} else {
    echo "Le point ($point2->x, $point2->y) n'appartient pas au cercle.<br>";
}

?>