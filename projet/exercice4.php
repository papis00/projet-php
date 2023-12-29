<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
</head>

<body>

    <h2>Calcul du PPCM</h2>

    <form method="post">
        <label for="nombre1">Nombre1 :</label>
        <input type="text" name="nombre1"><br>

        <label for="nombre2">Nombre2 :</label>
        <input type="text" name="nombre2"><br>

        <input type="submit" value="Calculer PPCM">
    </form>

    <?php
    function calculerPGCD($a, $b)
    {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function calculerPPCM($a, $b)
    {
        if ($a == 0 || $b == 0) {
            return 0; 
        }
        return abs($a * $b) / calculerPGCD($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre1 = isset($_POST["nombre1"]) ? (int)$_POST["nombre1"] : 0;
        $nombre2 = isset($_POST["nombre2"]) ? (int)$_POST["nombre2"] : 0;

        $ppcm = calculerPPCM($nombre1, $nombre2);

        echo "Le PPCM de $nombre1 et $nombre2 est : $ppcm";
    }
    ?>

</body>

</html>

