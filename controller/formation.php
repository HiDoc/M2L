<?php require "model/formation.php"; ?>
<?php 
function showFormation(){
  $data = getFormation();
  foreach($data as $value){
    echo '
    <tr class="formation-table-infos">
        <td>'.$value[0].'</td>
        <td>'.round($value[1]/86400).' jours</td>
        <td>'.$value[2].'</td>
        <td>'.$value[3].'</td>
        <td>'.$value[4].'</td>
    </tr>
    <tr class="formation-table-contenu">
        <td colspan="1">Contenu :</td>
        <td colspan="5">'.$value[5].'</td>
    </tr>
    <tr class="formation-table-prerequis">
        <td colspan="1">Prérequis</td>
        <td colspan="5">'.$value[6].'</td>
    </tr>
    ';
  }
}
?>
<?php require "view/formation.php"; ?>
