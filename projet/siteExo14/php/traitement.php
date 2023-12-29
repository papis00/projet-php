<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch ($action) {
        case 'Vendre':
            header('Location: vendre.php');
            break;
        case 'Acheter':
            header('Location: acheter.php');
            break;
        case 'Louer':
            header('Location: louer.php');
            break;
        default:

            header('Location: exercice14.php');
            break;
    }
} else {

    header('Location: exercice14.php');
}
?>

</body>
</html>



