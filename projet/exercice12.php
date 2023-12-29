<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>

<form method="post" action="traitement.php">
    <fieldset>
        <legend>Adresse client</legend>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required>
        <br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required>
        <br>

        <label for="codePostal">Code Postal :</label>
        <input type="text" id="codePostal" name="codePostal" required>
        <br>

    </fieldset>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>

