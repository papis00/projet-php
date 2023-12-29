<?php

function firstCharactertolower(&$tab) {
    foreach ($tab as &$chaineCaractere) {
        $chaineCaractere = ucfirst(strtolower($chaineCaractere));
    }
}


$information = array("papis", "ismaila", "amar");
 firstCharactertolower($information);


foreach ($information as $Majuscule) {
    echo $Majuscule . "<br>";
}

?>

