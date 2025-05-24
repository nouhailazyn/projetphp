<?php
$a = 10;
$b = 2;
try {
    if ($b == 0) 
        throw new Exception("Le dénominateur ne doit pas être nul.");
    $c = $a / $b;
    echo "Le résultat est : " . $c;
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br> après exécution ";
echo"<br> L'exemple précédent peut donc être amélioré comme ceci:";
$x = 10;
$y = 0;
try{
    if($y == 0)
        throw new Exception("Le dénominateur ne doit pas être nul.");
    $v = $x / $y;
    echo "Le résultat est : " . $v;
}
catch(Exception $e){
    $erreur="Document: <b>".$e->getFile()."<br>";
    $erreur="Line: <b>".$e->getLine()."<br>";
    $erreur="Code: <b>".$e->getCode()."<br>";
    $erreur="Message D'erreur: <b>".$e->getMessage()."<br>";
    echo $erreur;
}
?>
