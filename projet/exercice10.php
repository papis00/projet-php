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

foreach ($informations as $key => $value) {


  if(is_array($value)){
    foreach ($value as $key => $value) {
      echo $key.":".$value."<br>"; 
    }
  }
   echo "<br>";
    
  }

$personnes = array(
    'Dia' => array('Papis', 'Dakar', 23),
    'Diallo' => array('Seydou', 'New York', 25),
    'Gueye' => array('Pape Mactar', 'Milan', 23),

);
foreach ($personnes as $cle => $value) {

  if(is_array($value)){
    foreach ($value as $key => $value) {
      echo "indice[$key]:".$value."<br>";
    }
  }
  echo "<br>";
}
?>

