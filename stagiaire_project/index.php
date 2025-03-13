<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Stagiaires</title>
</head>
<body>

    <h1>Liste des Stagiaires</h1>

    <?php include 'stagiaires.php'; ?>

    <h2>Using foreach loop:</h2>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Groupe</th>
        </tr>
        <?php foreach ($stagiaires as $stagiaire): ?>
        <tr>
            <td><?php echo $stagiaire->__get("code"); ?></td>
            <td><?php echo $stagiaire->__get("nom"); ?></td>
            <td><?php echo $stagiaire->__get("prenom"); ?></td>
            <td><?php echo $stagiaire->__get("groupe"); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>Total des stagiaires: <strong><?php echo Stagiaire::getNbrStagiaire(); ?></strong></p>

    <h2>Using for loop:</h2>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Groupe</th>
        </tr>
        <?php 
        for ($i = 0; $i < count($stagiaires); $i++): 
            $stagiaire = $stagiaires[$i];
        ?>
        <tr>
            <td><?php echo $stagiaire->__get("code"); ?></td>
            <td><?php echo $stagiaire->__get("nom"); ?></td>
            <td><?php echo $stagiaire->__get("prenom"); ?></td>
            <td><?php echo $stagiaire->__get("groupe"); ?></td>
        </tr>
        <?php endfor; ?>
    </table>

    <p>Le nombre de stagiaires est: <strong><?php echo Stagiaire::getNbrStagiaire(); ?></strong></p>

</body>
</html>
