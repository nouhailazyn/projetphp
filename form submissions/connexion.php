<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=db_test102','root','');
}
catch(PDOException $e){
    die('erreur de cnx à la bdd : ' . $e->getMessage());
}
?>