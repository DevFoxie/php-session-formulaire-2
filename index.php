<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index PHP</title>
</head>

<body>
    <h1>PHP session et formulaire 2</h1>

    <!-- Exercice 1 & 3 : -->
    <form action="user.php" method="GET">
        <div>
            <label for="nom">Entrez votre nom :</label>
            <input type="nom" name="nom">
        </div>
        <div>
            <label for="prénom">Entrez votre prénom :</label>
            <input type="prénom" name="prénom">
        </div>
        <button type="submit">Envoyer</button>
    </form>

    <!-- Exercice 2 & 4 : -->
    <form action="user2.php" method="post">
        <div>
            <label for="nom">Entrez votre nom :</label>
            <input type="nom" name="nom">
        </div>
        <div>
            <label for="prénom">Entrez votre prénom :</label>
            <input type="prénom" name="prénom">
        </div>
        <button type="submit">Envoyer</button>
    </form>

    <!-- Exercice 5 :  -->
    <form action="user3.php" method="post">
        <select name="civilite" id="civilite_select">
            <option value="">--Choisissez votre civilité svp--</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
        </select>
        <div>
            <label for="nom">Entrez votre nom :</label>
            <input type="nom" name="nom">
        </div>
        <div>
            <label for="prénom">Entrez votre prénom :</label>
            <input type="prénom" name="prénom">
        </div>
        <div>
            <label for="cv">Choisissez votre CV :</label>
            <input type="file" id="cv" name="cv" accept="application/pdf">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>



<style>
    body {
        background-color: magenta;
    }

    p {
        color: white;
        font-size: large;
        font-weight: bold;
    }

    form {
        margin-top: 50px;
    }
</style>

</html>