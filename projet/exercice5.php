<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'un cercle</title>
</head>

<body>

    <h2>Calcul d'un cercle</h2>

    <form method="post">
        <label for="rayon">Rayon :</label>
        <input type="text" name="rayon"><br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rayon = isset($_POST["rayon"]) ? (float)$_POST["rayon"] : 0;


        if ($rayon < 0) {
            echo "Le rayon doit être un nombre positif.";
        } else {

            $diametre = 2 * $rayon;
            $perimetre = 2 * M_PI * $rayon;
            $surface = M_PI * pow($rayon, 2);


            echo "Diamètre : " . $diametre . "<br>";
            echo "Périmètre : " . $perimetre . "<br>";
            echo "Surface : " . $surface;
        }
    }
    ?>

</body>

</html>

