<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du motif</title>
</head>

<body>

    <h2>Affichage résultat</h2>

    <?php
    for ($i = 1; $i <= 10; $i++) {

        $ligne = str_repeat($i, $i);
        echo $ligne . "<br>";
    }
    ?>

</body>

</html>

