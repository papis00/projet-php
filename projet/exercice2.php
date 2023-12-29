<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de multiplicité</title>
</head>

<body>

    <h2>Test de multiplicité</h2>

    <form method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" required><br>

        <input type="submit" value="Vérifier la multiplicité">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? (int)$_POST["nombre"] : 0;


        $estMultipledetroisEtCinq = ($nombre % 3 == 0) && ($nombre % 5 == 0);

        if ($estMultipledetroisEtCinq) {
            echo "$nombre est un multiple de 3 et de 5.";
        } else {
            echo "$nombre n'est pas un multiple de 3 et de 5.";
        }
    }
    ?>

</body>

</html>

