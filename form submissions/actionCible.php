<?php
if(isset($_GET['envoyer'])){
    include('connexion.php');

    $req = 'insert into Personne(nom, prenom) values(?,?);';
    $pdoStmt = $pdo->prepare($req);
    $n = $_GET['nom'];
    $p = $_GET['prenom'];

    if($pdoStmt->execute(array($n, $p))){
        echo"Info inséré";
    }else{
        echo"Info n'est pas inséré !";
    }
}else{
    header('location:form.html');
}

?>