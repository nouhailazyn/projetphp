<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4ème cours: Les jours de la semaine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" class="form1">
        <h3>Jour de la semaine</h3>
        <select name="jours" required> <!-- required: oblige l'utilisateur à sélectionner une valeur avant de soumettre le formulaire. Cela évite les erreurs si le formulaire est soumis sans choix. -->
            <option value="Lundi">Lundi</option>
            <option value="Mardi">Mardi</option>
            <option value="Mercredi">Mercredi</option>
            <option value="Jeudi">Jeudi</option>
            <option value="Vendredi">Vendredi</option>
            <option value="Samedi">Samedi</option>
            <option value="Dimanche">Dimanche</option>
        </select>
        <button type="submit">Afficher</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jours'])) { //garantit que le code ne s’exécute que lorsque le formulaire a bien été soumis
        $jours = htmlspecialchars($_POST['jours']); //Cette fonction protège contre les injections de code HTML ou JavaScript. 
        $result = '';

        switch ($jours) {
            case "Lundi":
                $result = "°Lundi : Début de la semaine";
                break;
            case "Mardi":
                $result = "°Mardi : On est Mardi";
                break;
            case "Mercredi":
            case "Jeudi":
                $result = "°Mercredi et Jeudi : On est en pleine semaine";
                break;
            case "Vendredi":
                $result = "°Vendredi : On est Vendredi";
                break;
            case "Samedi":
            case "Dimanche":
                $result = "°Samedi et Dimanche : C'est le week-end";
                break;
            default:
                $result = "Valeur invalide!";
                break;
        }

        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
