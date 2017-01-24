<?php 
function showEmploye(){
  $data = getEmploye();
  foreach($data as $value){
    echo '<tr class="historique-table-infos"><td>'.$value[1].'</td><td>'.$value[2].'</td><td>'.$value[3].'</td><td><button class="btn btn-info" type="button">Voir la fiche <span class="glyphicon glyphicon-download" aria-hidden="true"></span></button></td></tr>';  
  }
}

?>
<?php require('model/employe.php')?>
<?php require('view/employe.php')?>