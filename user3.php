<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 3</title>
</head>
<body>

<h1>Résultat du 3ème formulaire :</h1>

<?php 
// Exercice 5 :
echo "Bienvenue, ".$_POST["civilite"]." ".$_POST["nom"]." ".$_POST["prénom"]. "  !<br><br>";
?>

<?php
// Exercice 6 :
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    // Don't display the form
    // Display the data that was transmitted
    echo "<p>Données transmises :</p><br>";
    echo "Civilité : " . $_POST['civilite'] . "<br>";
    echo "Nom : " . $_POST['nom'] . "<br>";
    echo "Prénom : " . $_POST['prénom'] . "<br>";
    echo "Nom du fichier : " . $_POST['cv'] . "<br>";
    echo "Extension du fichier : " . $_POST['pdf'] . "<br>";
} else 
    // Display the form
?>
    
</body>

<style>
    body {
        background-color: greenyellow;
    }

    p h1{
        color: white;
        font-size: large;
        font-weight: bold;
    }
</style>

</html>