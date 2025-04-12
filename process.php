<?php
session_start(); // Start a session to store the student list

// Class definitions as before (Personne, Eleve)...

// Initialize the list if it's not set in session
if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get action from form submission
    $action = $_POST['action'];

    // Handle actions based on the selected action
    if ($action === 'add') {
        // Add a new student
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $filiere = $_POST['filiere'];
        $code = count($_SESSION['list']) + 1; // Auto-increment code

        $eleve = new Eleve($code, $nom, $prenom, $age, $filiere);
        $_SESSION['list'][] = $eleve;
        echo "Élève ajouté avec succès!";
    } elseif ($action === 'display') {
        // Display all students
        echo "<h2>Liste des élèves:</h2>";
        foreach ($_SESSION['list'] as $eleve) {
            $eleve->afficher();
        }
    } elseif ($action === 'search') {
        // Search for a student by code
        $codeSearch = $_POST['code'];
        $found = false;
        foreach ($_SESSION['list'] as $eleve) {
            if ($eleve->code == $codeSearch) {
                $eleve->afficher();
                $found = true;
            }
        }
        if (!$found) {
            echo "Élève introuvable!";
        }
    } elseif ($action === 'delete') {
        // Delete a student by code
        $codeDelete = $_POST['code'];
        $found = false;
        foreach ($_SESSION['list'] as $index => $eleve) {
            if ($eleve->code == $codeDelete) {
                unset($_SESSION['list'][$index]);
                echo "Élève supprimé avec succès!";
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Élève introuvable!";
        }
    } elseif ($action === 'modify') {
        // Modify a student's details
        $codeModify = $_POST['code'];
        $found = false;
        foreach ($_SESSION['list'] as $index => $eleve) {
            if ($eleve->code == $codeModify) {
                $_SESSION['list'][$index]->nom = $_POST['nom'];
                $_SESSION['list'][$index]->prenom = $_POST['prenom'];
                $_SESSION['list'][$index]->age = $_POST['age'];
                $_SESSION['list'][$index]->filiere = $_POST['filiere'];
                echo "Élève modifié avec succès!";
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Élève introuvable!";
        }
    } elseif ($action === 'save') {
        // Save to file
        $file = fopen("Eleve.txt", "w");
        foreach ($_SESSION['list'] as $eleve) {
            fwrite($file, $eleve->code . " | " . $eleve->nom . " | " . $eleve->prenom . " | " . $eleve->age . " | " . $eleve->filiere . " |\n");
        }
        fclose($file);
        echo "Données sauvegardées dans le fichier!";
    } elseif ($action === 'sort') {
        // Sort by age
        usort($_SESSION['list'], function($a, $b) {
            return $a->age - $b->age;
        });
        echo "Liste triée par âge!";
    }
}
?>
