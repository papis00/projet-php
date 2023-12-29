<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'un nombre parfait</title>
</head>

<body>

    <h2>Vérification d'un nombre parfait</h2>

    <form method="post">
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre"><br>

        <input type="submit" value="Vérifier si le nombre est parfait">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? (int)$_POST["nombre"] : 0;


        if ($nombre < 0) {
            echo "Le nombre doit être un entier positif.";
        } else {

            $sommeDiviseurs = 0;
            for ($i = 1; $i < $nombre; $i++) {
                if ($nombre % $i == 0) {
                    $sommeDiviseurs += $i;
                }
            }


            if ($sommeDiviseurs == $nombre) {
                echo "$nombre est un nombre parfait.";
            } else {
                echo "$nombre n'est pas un nombre parfait.";
            }
        }
    }
    ?>

</body>

</html>

