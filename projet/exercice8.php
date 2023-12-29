<?php

$personnes = array(
    'Dia' => array('Papis', 'Dakar', 23),
    'Diallo' => array('Seydou', 'New York', 25),
    'Gueye' => array('Pape Mactar', 'Milan', 23),
    
);


echo "Nom: Dia <br>";
echo "Prénom: " . $personnes['Dia'][0] . "<br>";
echo "Ville: " . $personnes['Dia'][1] . "<br>";
echo "Âge: " . $personnes['Dia'][2] . "<br>";

echo '<br>';

echo "Nom: Diallo <br>";
echo "Prénom: " . $personnes['Diallo'][0] . "<br>";
echo "Ville: " . $personnes['Diallo'][1] . "<br>";
echo "Âge: " . $personnes['Diallo'][2] . "<br>";

echo '<br>';

echo "Nom: Gueye <br>";
echo "Prénom: " . $personnes['Gueye'][0] . "<br>";
echo "Ville: " . $personnes['Gueye'][1] . "<br>";
echo "Âge: " . $personnes['Gueye'][2] . "<br>";



?>

