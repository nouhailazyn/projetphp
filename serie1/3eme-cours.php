<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3eme cours Argent</title>
    <link rel="stylesheet" href="hello.css">
</head>
<body>
    <form action="" method="post" class="form1">
        <legend>Argent</legend><br>
        <input type="text" name="somme" placeholder="Somme d'argent">
        <button type="submit">Echage</button>
    </form>

    <?php
    if(isset($_POST['somme'])) {
        $somme = floatval($_POST['somme']);
        $result = '';
        
        $d200 = floor($somme / 200);
        $r200 = $somme % 200;

        $d100 = floor($r200 / 100);
        $r100 = $r200 % 100;

        $d50 = floor($r100 / 50);
        $r50 = $r100 % 50;

        $d20 = floor($r50 / 20);
        $r20 = $r50 % 20;

        $d10 = floor($r20 / 10);
        $r10 = $r20 % 10;

        $d5 = floor($r10 / 5);
        $r5 = $r10 % 5;

        $d4 = floor($r5 / 4);
        $r4 = $r5 % 4;

        echo"$somme d'argent est : $d200 * 200dh + $d100 * 100dh + $d50 * 50dh + $d20 * 20dh + $d10 * 10dh + $d5 * 5dh + $d4 * 4dh";
    }
    ?>
</body>
</html>
