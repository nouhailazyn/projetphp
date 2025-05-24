<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="actionInscription.php" method="get">
        <input type="text" name="nom" placeholder="Votre nom">
        <br>
        <input type="text" name="prenom" placeholder="Votre prenom">
        <br>
        <input type="text" name="tel" placeholder="Votre tel">
        <br>
        <input type="text" name="login" placeholder="Votre login">
        <br>
        <input type="password" name="psw" placeholder="Votre psw">
        <br>
        <input type="password" name="cpsw" placeholder="confirmer psw">
        <br>
        <button type="submit" name="inscription">Creer un compte</button>
        <?php
        if(isset($_GET['err'])){
            switch($_GET['err']){
                case 1 :{
                    echo"<p class='err'>Compte cree</p>";
                    break;
                }
                case 2 :{
                    echo"<p class='err'>Compte n'est pas cree</p>";
                    break;
                }
                case 3 :{
                    echo"<p class='err'>psw doit etre identique a cpsw</p>";
                    break;
                }
                case 4 :{
                    echo"<p class='err'>Veuillez saisir tout les champs</p>";
                    break;
                }
                case 5 :{
                    echo"<p class='err'>Veuillez choisir un autre login</p>";
                    break;
                }
                default :{
                    echo"<p class='err'>Vous devez creer un compte!!</p>";
                    break;
                }
            }
        }
        ?>
    </form>
</body>
</html>