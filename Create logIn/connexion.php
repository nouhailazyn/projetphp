<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=db_test102','root','');
}
catch(PDOException $e){
    die('erreur de cnx a la bdd:'.$e->getMessage());
}
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>