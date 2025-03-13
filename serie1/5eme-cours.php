<?php
$n=10;
for($i=1;$i<=$n;$i++){
    for($j=1; $j<=$i; $j++){
        echo "&nbsp;&nbsp";
    }
    
    echo"**<br>";
}
for($i=$n;$i>=1;$i--){
    for($j=1; $j<=$i-1; $j++){
        echo "&nbsp;&nbsp";
    }
    echo"**<br>";
}



echo "exercice1 :<br>";
for($i=1; $i<=$n; $i++)
echo"*&nbsp&nbsp";

echo "<br>exercice2 :<br>";
for($i=1; $i<= $n; $i++){
    for($j=1;$j<=$n;$j++){
        echo"*&nbsp&nbsp";
    }
    echo"<br>";
}

echo "<br>exercice3 :<br>";
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$i; $j++){
        echo"*&nbsp&nbsp";
    }
    echo"<br>";
}

echo "<br>exercice4 :<br>";
for($i=$n; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo"*&nbsp&nbsp";
    }
    echo"<br>";
}

echo "<br>exercice5 :<br>";
for($i=1;$i<=$n;$i++){
    for($j=1; $j<=$i; $j++){
        echo "-&nbsp&nbsp";
    }
    echo"*<br>";
}

echo "<br>exercice 6 :<br>";
for($i=$n;$i>=1;$i--){
    for($j=1; $j<=$i-1; $j++){
        echo "-&nbsp&nbsp";
    }
    echo"*<br>";
}

echo "<br>exercice 7 :<br>";
for($i=1;$i<=$n;$i++){
    for($j=1; $j<=$i-1; $j++)
        echo "_";
    for($k=1; $k<=$n+1-$i;$k++)
    echo"*&nbsp&nbsp";
    echo"<br>";
}

echo "<br>exercice 8 +1* :<br>";
for($i=$n;$i>=1;$i--){
    for($j=1; $j<=$i-1; $j++)
        echo "_";
    for($k=1; $k<=$n+1-$i;$k++)
    echo"*&nbsp&nbsp";
    echo"<br>";
}

echo "<br>exercice 8 +2* :<br>";
for($i=1;$i<=$n;$i++){
    for($j=1; $j<=$n - $i; $j++)
        echo "&nbsp;&nbsp;&nbsp";
    for($k=1; $k<=2*$i-1;$k++)
        echo"*&nbsp&nbsp";
    echo"<br>";
}


echo"exercice 9 :<br>";
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$i; $j++){
        echo"*&nbsp&nbsp";
    }
    echo"<br>";
}
for($i=$n; $i>=1; $i--){
    for($j=1; $j<=$i-1; $j++){
        echo"*&nbsp&nbsp";
    }
    echo"<br>";
}

echo"exercice 9 :<br>";
for($i=1; $i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++)
        echo "_";
    for($k=1;$k<=2*$i;$k++)
        echo"*&nbsp;&nbsp";
    echo"<br>";
}

echo"exercice 10 :<br>";
for($i=$n;$i>=1;$i--){
    for($j=1; $j<=$i-1; $j++)
        echo "_";
    for($k=1; $k<=$n+1-$i;$k++)
    echo"*&nbsp&nbsp";
    echo"<br>";
}

echo "<br>exercice 11 :<br>";
for($i=1;$i<=$n;$i++){
    for($j=1; $j<=$i; $j++)
        echo "*";
    for($k=1; $k<=$n+1-$i;$k++)
        echo"&nbsp&nbsp&nbsp&nbsp";
    for($j=1; $j<=$i; $j++)
        echo "*";
    echo"<br>";
}
for($i=$n-1;$i>=1;$i--){
    for($j=1; $j<=$i; $j++)
        echo "*";
    for($k=1; $k<=$n+1-$i;$k++)
        echo"&nbsp&nbsp&nbsp&nbsp";
    for($j=1; $j<=$i; $j++)
        echo "*";
    echo"<br>";
}

echo "exercice 20:<br>";
for($i=1;$i<=$n;$i++)
    echo"*";
echo "<br>";

for($i=1;$i<=$n/2;$i++){
    for($j=1;$j<=$n+2-$i;$j++){
        if($i==$j)
            echo"\\";
        elseif($i+$j==$n+2)
            echo"/";
        else
            echo"&nbsp;&nbsp";
    }
    echo"<br>";
}
for($i=$n/2;$i>=1;$i--){
    for($j=1;$j<=$n+2-$i;$j++){
        if($i==$j)
            echo"/";
        elseif($i+$j==$n+2)
            echo"\\";
        else
            echo"&nbsp;&nbsp";
    }
    echo"<br>";
}
for($i=1;$i<=$n;$i++)
    echo"*";
echo "<br>";


echo "exercice 21:<br>";
$x=8;
for($i=1;$i<=$x/2;$i++){
    for($j=1;$j<=$x+2-$i;$j++){
        if($i==$j)
            echo"**";
        elseif($i+$j==$x+2)
            echo"**";
        else
            echo"&nbsp;&nbsp";
    }
    echo"<br>";
}
for($i=$x/2;$i>=1;$i--){
    for($j=1;$j<=$x+2-$i;$j++){
        if($i==$j)
            echo"**";
        elseif($i+$j==$x+2)
            echo"**";
        else
            echo"&nbsp;&nbsp";
    }
    echo"<br>";
}



echo "Exercice 22<br>";
$nombre = 1;
$espace = 9; 

for ($i = 1; $i <= 9; $i++) {
    for ($k = 1; $k <= $espace - $i; $k++) {
        echo "&nbsp;&nbsp";
    }
    $produit = 8 * $nombre;
    $resultat = $produit + $i;
    echo "8 * $nombre + $i = $resultat<br>";
    $nombre = $nombre * 10 + ($i + 1);
}


echo "<br><br<<br><br><br<<br><br><br<<br><br><br<<br>";
?>