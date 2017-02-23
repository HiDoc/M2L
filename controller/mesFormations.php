<?php require "model/mesFormations.php" ?>
<?php 
function showFormation(){
  $data = getFormation();
  foreach($data as $value){ 
    echo '<tr data-id="'.$value[3].'">
            <td>'.$value[0].'</td>
            <td>'.$value[1].'</td>
            <td>'.$value[2].'</td>
            <td class="text-right"><button class="btn btn-info" type="button"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;Télechargement</span></button></td>
          </tr>';
  }
}
function showHistorique(){
  $data = getHistorique();
  foreach($data as $value){
    echo '<tr class="historique-table-infos" data-id="'.$value[5].'">
            <td>'.$value[0].'</td>
            <td>'.round($value[1]/86400).' jours</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            <td>'.$value[4].'</td>
          </tr>';
    }
}
function coloriserTR($data){
  $color = 'default';
    
  // Vérifie si la formation est passée
  if(strtotime(($data[1] + $data[2]) > time())):
    $color = 'active';
  else :
    $color = 'success';
  endif;
  
  //Returne une ligne colorisée
  echo '<tr data-id="'.$data[0].'" class="'.$color.'">';
  
}
?>
<?php require "view/mesFormations.php" ?>