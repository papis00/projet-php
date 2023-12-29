<?php

function tableauMultidimensionnel($tableau) {
    echo '<table border="1">';
    echo '<thead><tr>';

  
    foreach (array_keys(current($tableau)) as $titre) {
        echo '<th>' . htmlspecialchars($titre) . '</th>';
    }

    echo '</tr></thead>';
    echo '<tbody>';


    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}


$information = array(
    array('Nom' => 'Papis', 'Ville' => 'Dakar', 'Age' => 23),
    array('Nom' => 'Seydou', 'Ville' => 'New York', 'Age' => 25),
    array('Nom' => 'Pa Matar', 'Ville' => 'Italie', 'Age' => 22)
);

tableauMultidimensionnel($information);

?>

