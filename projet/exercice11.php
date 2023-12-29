<?php

$informations = array(
  'Papis' => array(
    'prenom' => 'Papis', 
    'ville de résidence' => 'Dakar',
    'Age' => '23 ans'),

  'Amar' => array(
    'prenom' => 'Amar', 
    'ville de résidence' => 'Rufisque',
    'Age' => '22 ans'),
  
  'Ismaila' => array(
    'prenom' => 'Ismaila', 
    'ville de résidence' => 'Pikine',
    'Age' => '23 ans'),
  

   
);

$key = array_keys($informations);

$i=0;


while($i<count($key)){

  $nom = $key[$i];

  $personne = $informations[$nom];
     
  foreach ($personne as $cle => $value) {

    echo $cle.":".$value."<br>";
  }

  echo "<br>";


  $i++;
}


$personnes = array( 
    'Dia' => array('Papis', 'Dakar', 23),
    'Diallo' => array('Seydou', 'New York', 25),
    'Gueye' => array('Pape Mactar', 'Milan', 23),
);


$keys = array_keys($personnes);


$j = 0;


while ($j < count($keys)) {
    $nom = $keys[$j];
    $person = $personnes[$nom];

    echo "Nom: $nom.<br>";


    $i = 0;
    while ($i < count($person)) {
        $key = array_keys($person)[$i];
        $value = $person[$key];
        echo "indice[$key]: $value.<br>";
        $i++;
    }

    echo "<br>";


    $j++;
}







?>

