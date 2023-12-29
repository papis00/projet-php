<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du sinus d'un angle</title>
</head>

<body>

    <h2>Calcul du sinus d'un angle</h2>

    <form method="post">
        <label for="angle">Mesure de l'angle :</label>
        <input type="text" name="angle" required><br>

        <label for="unite">Unité de mesure :</label>
        <select name="unite">
            <option value="radian">Radian</option>
            <option value="degree">Degré</option>
            <option value="grade">Grade</option>
        </select><br>

        <input type="submit" value="Calculer Sinus">
    </form>

    <?php
    function calculerSinus($angle, $unite = "radian")
    {
        switch ($unite) {
            case "degree":
                $angleEnRadian = deg2rad($angle);
                break;
            case "grade":
                $angleEnRadian = deg2rad($angle * 0.9);
                break;
            default:
                $angleEnRadian = $angle;
        }

        return sin($angleEnRadian);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angle = isset($_POST["angle"]) ? (float)$_POST["angle"] : 0;
        $unite = isset($_POST["unite"]) ? $_POST["unite"] : "radian";

        $sinus = calculerSinus($angle, $unite);

        echo "Le sinus de $angle $unite est : $sinus";
    }
    ?>

</body>

</html>

