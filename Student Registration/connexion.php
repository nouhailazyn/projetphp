<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=db_school','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e){
    die('error de cnx a bdd :' . $e->getMessage());
}
?>