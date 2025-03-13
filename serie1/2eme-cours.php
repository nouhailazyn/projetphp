<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2eme cours calculatrice</title>
    <link rel="stylesheet" href="hello.css">
</head>
<body>
    <form action="" method="post" class="form1">
        <legend>Calculatrice</legend><br>
        <input type="text" name="number1" placeholder="nomber 1"> <!-- le 1ere nomber -->
        <input type="text" name="number2" placeholder="nomber 2"><!-- le 2eme nomber -->
        <!-- section des operations -->
        <select name="operation">
            <option value="none">None</option>
            <option value="add">Additon +</option>
            <option value="sub">Subtraction -</option>
            <option value="mul">Multiplication *</option>
            <option value="div">Division /</option>
            <option value="exp">Exponentiation x²</option>
            <option value="mod">Modulo %</option>
        </select>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operation'])) {
        $number1 = floatval($_POST['number1']);
        $number2 = floatval($_POST['number2']);
        $operation = $_POST['operation'];
        $result = '';
        
        switch ($operation){
            case "add":
                $result = $number1 + $number2;
                echo "la somme de $number1 et $number2 est : $result";
                break;

            case "sub":
                $result = $number1 - $number2;
                echo "le Subtraction de $number1 par $number2 est : $result";
                break;

            case "mul":
                $result = $number1 * $number2;
                echo " La Multiplication de $number1 par $number2 est : $result";
                break;

            case "div":
                if ($number2 == 0) {
                    echo "Erreur : Division par zéro non permise.";
                }
                else {
                    $result = $number1 / $number2;
                    echo "Le résultat de la division de $number1 par $number2 est : $result";
                }
                break;

            case "exp":
                $result = $number1 ** $number2;
                echo " La Exponentiation de $number1 par $number2 est : $result";
                break;

            case "mod":
                if($number2 == 0){
                    echo"Erreur : Modulo par zero non permise";
                }
                else{
                    $result = $number1 % $number2;
                    echo "Modulo de $number1 par $number2 est : $result";
                    break;
                }
                

            default:
                echo "Erreur : veuillez choisir une opération valide";
        }
    }

    ?>
</body>
</html>
