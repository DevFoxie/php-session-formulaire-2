<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page utilisateur</title>
</head>
<body>

<h1>Bienvenue,</h1>

<?php 
// Exercice 1 :
echo $_GET["nom"]." ";
echo $_GET["prénom"]." !";
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