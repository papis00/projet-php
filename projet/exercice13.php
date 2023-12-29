<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="prixHT">Prix HT :</label>
    <input type="text" id="prixHT" name="prixHT" value="<?php echo strip_tags($prixHT); ?>">
    <br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo strip_tags($tauxTVA); ?>">
    <br>

    <input type="submit" value="Calculer">
</form>

<?php

$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $prixHT = floatval($_POST['prixHT']);
    $tauxTVA = floatval($_POST['tauxTVA']);


    $montantTVA = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $montantTVA;


    echo "<p>Montant de la TVA : $montantTVA</p>";
    echo "<p>Prix TTC : $prixTTC</p>";
}
?>

</body>
</html>

