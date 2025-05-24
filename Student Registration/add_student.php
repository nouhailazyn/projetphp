<?php
if(isset($_POST['envoyer'])){
    include('connexion.php');

    $name = trim($_POST['nom']);
    $age = (int)($_POST['age']);

    if(empty($name)){
        echo "Erreur : Le nom ne peut pas être vide !";
    }else if($age <= 0){
        echo"Erreur : L'âge doit être un nombre positif !";
    }else{
        $req = 'insert into Student(nom, age) values(?,?);';
        $pdostmt = $pdo->prepare($req);
    
        if($pdostmt->execute(array($name, $age))){
            echo"Étudiant enregistré avec succès !";
        }else{
            echo"Erreur : Impossible d'enregistrer l'étudiant.";
        }
    }
}else{
    header('location:student_form.html');
}
?>