<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage Aléatoire - Boucle While</title>
</head>

<body>

    <h2>Tirage Aléatoire</h2>

    <form method="post">
        <label for="nombretirage">Entrez un nombre de trois chiffres :</label>
        <input type="text" name="nombretirage" maxlength="3"  required><br>

        <input type="submit" value="Tirage">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreInitial = isset($_POST["nombretirage"]) ? (int)$_POST["nombretirage"] : 0;


        if ($nombreInitial >= 100 && $nombreInitial <= 999) {

            $nombreTire = 0;
            $coups = 0;

            while ($nombreTire != $nombreInitial) {
                $nombreTire = rand(100, 999);
                $coups++;
            }

            echo "le nombre de tirage nécessaire pour obtenir  $nombreInitial est : $coups coups.";
        } else {
            echo "Veuillez entrer un nombre de trois chiffres.";
        }
    }
    ?>

</body>

</html>

