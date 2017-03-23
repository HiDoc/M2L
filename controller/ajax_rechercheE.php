<?php
require("/model/ajax_rechercheE.php");
function constructTable($employes){
  if(isset($employes[0])){
    foreach($employes as $employe){
      echo '<tr class="historique-table-infos">
              <td>'.$employe['nom'].'</td>
              <td>'.$employe['prenom'].'</td>
              <td>'.$employe['email'].'</td>
              <td><a href="'.BASE_URL.'/employe/'.$employe['id_e'].'/" class="btn btn-primary">'
              . Glyph::Build("user").'&nbsp;'.' Voir la fiche</a></td>
            </tr>';  
    } 
  }
  else echo '<tr><td colspan="4"><div class="alert alert-info" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Info :</span>
              Aucun employé trouvé
            </div></td></tr>';
}
/**
  * Construit les thumbnails
  */
function constructThumbnail($employes = array()){
  foreach($employes as $key => $employe){
    if(rowCount($key) || $key == 0) echo '<div class="row">';
      echo '
        <div class="col-sm-4 nopadding">
          <div class="thumbnail">
            <img src="/m2l/view/ressources/img/default.jpg" alt="'.$employe['nom'].'">
            <div class="caption">
              <h3>'.$employe['nom'].$employe['prenom'].'</h3>
              <p>'.$employe['nom'].'</p>
              <p><a class="btn btn-info" type="button" href="'.BASE_URL."/employe/".$employe['id_e'].'/" >Détails</a></p>
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
/**
  * Affiche la table des employés
  * @fonction getEmploye : renvoi un tableau de tout les employés dont l'utilisateur est le supérieur 
  */
function showEmploye($mot){
  constructTable(getEmploye($mot));
}
/**
  * Affiche la table des employés en forme de thumbnail
  * @fonction getEmploye : renvoi un tableau de tout les employés dont l'utilisateur est le supérieur 
  */
function showEmployeTn($mot){
  echo "<tr>";
  echo "<td colspan='4'>";
  constructThumbnail(getEmploye($mot));
  echo "</td>";
  echo "</tr>";
}
if(isset($_POST['keywords'])){
  $keywords = Secure::SecForm($_POST['keywords']);
}
else
  $keywords = '';
require("/view/ajax_rechercheE.php");
?>