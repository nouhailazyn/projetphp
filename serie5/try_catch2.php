<?php
// Division par zéro
try{
    $n = 10;
    $d = 0;
    if($d === 0){
        throw new Exception("Division par zero impossible !!");
    }
    $result = $n / $d;
    echo"Resultat est : $result";
}
catch(Exception $e){
    echo"Erreur : " .$e->getMessage();
}
finally{
    echo"<br>Exécution terminée.";
}
echo"<br>____________________________________________<br>";
//Gestion de plusieurs exceptions
class CustomException extends Exception{}
try{
    $age = 200;
    if($age <= 0){
        throw new CustomException("L'âge ne peut pas être négatif !");
    }
    if($age >= 200){
        throw new Exception("L'âge est trop élevé !");
    }
    echo"Âge valide : $age";
}
catch(CustomException $e){
    echo "Erreur : ". $e->getMessage();
}
catch(Exception $e){
    echo "Erreur générale : " . $e->getMessage();
}
finally{
    echo"<br>Vérification teminée";
}
echo"<br>____________________________________________<br>";
//Vérifier un mot de passe
try{
    $motPasse = "2004_EZ10";
    if(strlen($motPasse) < 6){
        throw new Exception("Le mot de passe est trop court (moins de 6 caractères) !");
    }

    echo"votre mot de passe est accepté";
}
catch(Exception $e){
    echo"Attention : ".$e->getMessage();
}
finally{
    echo"<br>Vérification du mot de passe terminée.";
}
echo"<br>____________________________________________<br>";
// Tester une note
try{
    $note = 21;
    if ($note < 0 || $note > 20){
        throw new Exception("La note doit etre entre (0-20)");
    }

    echo"Note est valide";
}
catch(Exception $e){
    echo"Erreur : ".$e->getMessage();
}
finally{
    echo"<br>Vérification de la note terminée.";
}
echo"<br>____________________________________________<br>";
function inverse($x) {
    if (!$x) {
        throw new Exception('Division par zéro.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "<br>";
    echo inverse(0) . "<br>";
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "<br>";
}

// Continue execution
echo "Bonjour le monde !<br>";
echo"<br>____________________________________________<br>";
function teste() {
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return 'finally';
    }
}

echo teste();
echo"<br>____________________________________________<br>";
// Throw en tant qu'expression
class SpecificException extends Exception {}

function test($shouldSucceed = false) {
    do_something_risky($shouldSucceed) or throw new SpecificException('L\'opération a échoué !');
    echo "Opération réussie !<br>";
}

function do_something_risky($shouldSucceed) {
    return $shouldSucceed; // Retourne true ou false selon le paramètre
}

try {
    // Test avec échec
    echo "Test 1 (échec) :<br>";
    test(false);
} catch (SpecificException $e) {
    echo "Erreur spécifique : " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Erreur générale : " . $e->getMessage() . "<br>";
} finally {
    echo "Vérification terminée.<br><br>";
}

try {
    // Test avec succès
    echo "Test 2 (succès) :<br>";
    test(true);
} catch (SpecificException $e) {
    echo "Erreur spécifique : " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Erreur générale : " . $e->getMessage() . "<br>";
} finally {
    echo "Vérification terminée.<br>";
}
