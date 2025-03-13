<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ere cours</title>
</head>
<body>
    <form action="" method="post">
        <label for="Nom">Nom et prénom</label>
        <input type="text" id="Nom" name="Nom" required>
        <button type="submit">Envoyer</button>
    </form>
    <?php
        $Nom = $_POST['Nom'];
        echo "hello $Nom"

    ?>
</body>
</html>

