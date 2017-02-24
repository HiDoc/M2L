<?php require('model/employe.php')?>
<?php require('core/class.glyphicon.php')?>
<?php 
function constructTable($data){
  //Vérifie si les données viennent d'un utilisateur
  //ou de fiches de formations 
  $ver = !array_key_exists('id_f',$data[0]);
  foreach($data as $value){
    echo '<tr class="historique-table-infos">
            <td>'.$value[1].'</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            <td>
              <a href="'.BASE_URL.'/'.($ver ? 'employe' : 'ficheFormation').'/'.$value[0].'/" class="btn btn-info">
                Voir la fiche '. (new Glyph($ver ? 'user' : 'tags'))->show().'  
              </a> 
            </td>
          </tr>';  
  }
}
function showEmploye(){
  constructTable(getEmploye());
}

function getEmployeFormation(){
  if(isset($_GET['get'])){
    constructTable(getFormation($_GET['get']));
  }
}

?>
<?php require('view/employe.php')?>