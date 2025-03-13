<?php 
$n=13;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++){
        echo"&nbsp;&nbsp";
    }
    echo"*<br>";
}
echo"<br>";
echo"<br>";
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-1+$i;$j++){
        if($i+$j==$n+1 or $j-$i==$n-1)
            echo"**";
        
        else
            echo"&nbsp;&nbsp";
        
    }
    echo"<br>";
}
for($i=$n-1;$i>=1;$i--){
    for($j=1;$j<=$n-1+$i;$j++){
        if($i+$j==$n+1 or $j-$i==$n-1)
            echo"**";
        
        else
            echo"&nbsp;&nbsp";
        
    }
    echo"<br>";
}









echo"<br>";
echo"<br>";
$n=10;
echo"_____________for_____________<br>";
for($i=4; $i<=$n; $i++){
echo"$i<br>";
}
echo"_____________while_____________<br>";
$i=$n;
while($i>=1){
echo"$i<br>";
$i--;
}
echo"_____________Function_____________<br>";
function decrement($n) 
{
if($n > 0)
{
print("$n<br>");
decrement($n - 1);
}
}
decrement(10);
// Écrivez un script PHP, pour vérifier si la page est appelée depuis ‘HTTPS’ ou ‘HTTP’.
if (!empty($_SERVER['HTTPS'])) 
{
    echo 'HTTPS est utilisé';
}
else
{
    echo 'HTTP est utilisé';
}

echo"<br><br>_____________Factorielle-fonction_____________<br>";
//   creation
function fact($n){
if($n <= 1){
    return 1;   
}
else{
    return $n * fact($n - 1);
}
}
// apppelle 
$f = fact($n); 
echo "La factorielle de $n est $f"; 

echo"<br><br>_____________Factorielle-for_____________<br>";
$f=1;
for($i=$n;$i>=1;$i--){
$f*=$i;
}
echo"La factorielle de $n est $f<br>";
echo"<br><br>____________etoile-for_____________<br>";

$n=10;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo"<br><br>____________multiplication_____________<br>";
$x=9;
for($i=1;$i<=10;$i++){
    $m=$x*$i;
    echo "$x * $i = $m<br>";
}
$hauteur = 5; // Vous pouvez remplacer ce nombre par une entrée utilisateur

// Boucle pour chaque ligne de la pyramide
for ($i = 1; $i <= $hauteur; $i++) {
    // Afficher les espaces
    for ($j = $i; $j < $hauteur; $j++) {
        echo "&nbsp;&nbsp";
    }
    // Afficher les étoiles
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    // Aller à la ligne suivante
    echo "<br>";
}

echo"<br><br>____________les etoiles1_____________<br>";
$n=10;
for($i=1;$i<=10;$i++){
    for ($j = 1; $j < $n; $j++){
        echo"*&nbsp";
    }
    echo"<br>";
}
echo"<br><br>____________les etoiles2_____________<br>";
$n=10;
for($i=1;$i<=10;$i++){
    for ($j = 1; $j <= $i; $j++){
        echo"*&nbsp";
    }
    echo"<br>";
}
echo"<br><br>____________les etoiles3_____________<br>";
$n=5;
for($i=1;$i<=5;$i++){
    for ($j = 1; $j <= $n; $j++){
        echo"&nbsp;&nbsp";
    for ($k = 1; $k <= $n; $k++){
        echo"douaa&nbsp";
    }
    }
    echo"<br>";
}
