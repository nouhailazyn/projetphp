<?PHP  
$a=10;
for($i=1;$i<=$a;$i++){
    for($j=1;$j<=$i;$j++){
        echo"*&nbsp";
    }
    echo"<br>";
}

  
echo "<br>";
echo "<br>";
$a = 10; 
for ($i = 1; $i <= $a; $i++) {
    for ($l = 1; $l <= $a - $i; $l++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i+1; $j++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";

for ($i = 1; $i <= $a; $i++) {
    for ($j = 1; $j <= $a; $j++) {
        if ($i == 1 || $i == $a || $j == 1 || $j == $a) {
            echo "*&nbsp;&nbsp";
        } else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp";
        }
    }
    echo "<br>";
}
?>