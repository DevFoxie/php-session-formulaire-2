<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>
</head>
<body>

<h1>Voici les infos du 2ème formulaire</h1>

<?php 
// Exercice 2 :
echo "Nom : ".$_POST["nom"]." & Prénom : ";echo $_POST["prénom"].".";
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