<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des diviseurs</title>
</head>

<body>

    <h2>Affichage des diviseurs</h2>

    <form method="post">
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre"><br>

        <input type="submit" value="Afficher les diviseurs">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? (int)$_POST["nombre"] : 0;


        if ($nombre < 0) {
            echo "Le nombre doit être un entier positif.";
        } else {

            echo "Les diviseurs de $nombre sont : ";
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i == 0) {
                    echo $i . " ; ";
                }
            }
        }
    }
    ?>

</body>

</html>

