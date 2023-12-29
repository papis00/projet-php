<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement Adresse Client</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $codePostal = htmlspecialchars($_POST['codePostal']);


    echo "<table border='1'>";
    echo "<tr><th>Champs</th><th>Données</th></tr>";
    echo "<tr><td>Nom</td><td>$nom</td></tr>";
    echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
    echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
    echo "<tr><td>Ville</td><td>$ville</td></tr>";
    echo "<tr><td>Code Postal</td><td>$codePostal</td></tr>";
    echo "</table>";
} else {
    echo "<p>Aucune donnée reçue.</p>";
}
?>

</body>
</html>

