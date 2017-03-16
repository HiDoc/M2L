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
  $data = colorKw($keywords, recherche($keywords)); 
  if(isset($_POST['type']) && $_POST['type'] == 'thumbnail')
    constructThumbnail($data);  
  else 
    constructRow($data);
  echo (isset($_GET['k']) ? '</tbody></table>' : '');
}
//else {constructRow(recherche(''));}
function constructThumbnail($formations = array()){
  foreach($formations as $key => $formation){
    if(rowCount($key + 1) || $key == 0) echo '<div class="row">';
      echo '
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="/m2l/view/ressources/img/default.jpg" alt="'.$formation['titre'].'">
            <div class="caption">
              <h3>'.$formation['titre'].'</h3>
              <p>'.$formation['description'].'</p>
              <p><button class="btn btn-info" type="button" data-id="'.$formation['id_f'].'" >Détails</button></p>
            </div>
          </div>
        </div>
        ';
    if(rowCount($key + 1)) echo '</div>';
  }
}
function rowCount ($number){
    return ($number % 3 == 0);
}
function constructRow($formations = array()){
  foreach($formations as $key => $formation){    
    echo '
    <tr class="formation-table-infos" data-id="'.$formation['id_f'].'">
        <td>'.$formation['titre'].'</td>
        <td>'.round($formation['duree']/86400).' jours</td>
        <td>'.$formation['date_f'].'</td>
        <td>'.$formation['lieu'].'</td>
        <td>'.$formation['nom'].'</td>
    </tr>
    <tr class="formation-table-contenu" data-id="'.$formation['id_f'].'">
        <td colspan="1">Contenu :</td>
        <td colspan="5">'.$formation['description'].'</td>
    </tr>
    <tr class="formation-table-prerequis" data-id="'.$formation['id_f'].'">
        <td colspan="1">Prérequis</td>
        <td colspan="5">'.$formation['prerequis'].'</td>
    </tr>
    ';
  }
}
function colorKw($keywords, $dataSend){
  $data = $dataSend;
  if($keywords != ' '){
    foreach($data as $keyGlob => $value){
      foreach($value as $key => $row){
          if($key != 'id_f')
          $value[$key] = preg_replace('/'.$keywords.'/',"<span class='bg-info text-info'>".$keywords."</span>", $row);
      }
      $data[$keyGlob] = $value;
    }
  }
  return $data;
}
?>