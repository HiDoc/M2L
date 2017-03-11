<?php 
$path = array("model/ajax_recherche.php","core/class.glyphicon.php","core/class.secure.php");
foreach($path as $find){ 
  if(file_exists('../'.$find))
    require_once '../'.$find;
  else
    require_once($find);
}
if(isset($_POST['keywords']) || isset($_GET['k'])){
  $keywords = isset($_POST['keywords']) ? Secure::SecForm($_POST['keywords']) : $_GET['k'];
  echo (isset($_GET['k']) ? '<table><tbody>' : '');
  //$keywords = Secure::SecForm($_POST['keywords']);
  $data = colorKw($keywords, recherche($keywords)); 
  die();
  foreach($data as $value){
    echo '
    <tr class="formation-table-infos" data-id="'.$value['id_f'].'">
        <td>'.$value['titre'].'</td>
        <td>'.round($value['duree']/86400).' jours</td>
        <td>'.$value['date_f'].'</td>
        <td>'.$value['lieu'].'</td>
        <td>'.$value['nom'].'</td>
    </tr>
    <tr class="formation-table-contenu" data-id="'.$value['id_f'].'">
        <td colspan="1">Contenu :</td>
        <td colspan="5">'.$value['description'].'</td>
    </tr>
    <tr class="formation-table-prerequis" data-id="'.$value['id_f'].'">
        <td colspan="1">Prérequis</td>
        <td colspan="5">'.$value['prerequis'].'</td>
    </tr>
    ';
  }
  echo (isset($_GET['k']) ? '</tbody></table>' : '');
}
function colorKw($keywords, $data){
  foreach($data as $value){
    foreach($value as $row){
      $row = preg_replace('/'.$keywords.'/',"<b>".$keywords."</b>", $row).'</br>';
      echo $row;
    }
    var_dump($value);
  }
  return $data;
}
?>