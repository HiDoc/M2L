<?php require('model/employe.php')?>
<?php 
function showEmploye(){
  $data = getEmploye();
  foreach($data as $value){
    echo '<tr class="historique-table-infos"><td>'.$value[1].'</td><td>'.$value[2].'</td><td>'.$value[3].'</td><td><a href="'.BASE_URL.'/employe/'.$value[0].'" class="btn btn-info">Voir la fiche <span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td></tr>';  
  }
}
function getEmployeFormation(){
  if(isset($_GET['employe'])){
    $data = getFormation($_GET['employe']);
    foreach($data as $value){
      echo '<tr class="historique-table-infos"><td>'.$value[1].'</td><td>'.$value[2].'</td><td>'.$value[3].'</td><td><a href="'.$value[0].'" class="btn btn-info">Voir la fiche <span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td></tr>';  
    }
  }
}

?>
<?php require('view/employe.php')?>