<?php
session_start();
require('../model/json_getCalendar.php');
$data = getFormation();
$dataDone = getHistorique();
$array = array();

/**
  * Constructeur du tableau en JSON
  */
foreach($data as $value){
  $date = date_create($value[2]);
  $newEvent = array(
    'title' => $value[0], 
    'start' => date_format($date,'Y-m-d'), 
    'end' => date_format($date->add(new dateinterval('PT'.$value[1].'S')),'Y-m-d'), 
    'sqlId' => $value[5],
    'color' => ($value[4] ? '#5cb85c' : '#f0ad4e')
  );
  array_push($array,$newEvent);
}
foreach($dataDone as $value){
  $date = date_create($value[2]);
  $newEvent = array(
    'title' => $value[0], 
    'start' => date_format($date,'Y-m-d'), 
    'end' => date_format($date->add(new dateinterval('PT'.$value[1].'S')),'Y-m-d'), 
    'sqlId' => $value[5] 
  );
  array_push($array,$newEvent);
}

//Affiche le tableau
echo json_encode($array);
?>
