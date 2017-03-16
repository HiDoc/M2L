<?php 
$path = 'model/employe.php';
if(file_exists('../'.$path))
  require '../'.$path;
else
  require($path);
?>
<?php 
/**
  * Crée les bouttons à afficher selon les tables
  * @param $ver : un booléen qui permet de distinguer la table employé et la table formation 
  * @param $id : un nombre qui correspond à l'id de la personne ou de la formation
  */
function appendButtons($ver, $id, $toVal = true){
  echo '<a href="' . BASE_URL . '/' . ($ver ? 'employe' : 'ficheFormation') . '/' . $id . '/" '. ($ver ? '' : ' target="_blank" ') .' class="btn btn-primary">
            '.($ver ? 'Voir la fiche ' : ' Fiche ') . 
            Glyph::build($ver ? 'user' : 'tags') . '  
        </a>';
  if(!$ver){
    echo '<button class="btn btn-'. ($toVal ? 'success ': 'danger un').'validate-formation" data-id="' . $id . '">' . Glyph::build($toVal ? 'ok': 'remove') . '</button>';
   }
}  
/**
  * Construit l'affichage des tables
  * @param $data : un tableau de données 
  */
function constructTable($data, $toVal = true){
  //Vérifie si les données viennent d'un utilisateur
  //ou de fiches de formations 
  if(isset($data[0])){
    $ver = !array_key_exists('id_f',$data[0]);
    foreach($data as $value){
      echo '<tr class="historique-table-infos">
              <td>'.$value[1].'</td>
              <td>'.$value[2].'</td>

              <td>'.($ver ? $value[3] : 
                     //TODO : rajouter les possibilités des jours (ou faire un helper)
                     round($value[3]/86400) . ' jours').'</td>
              <td>';
                appendButtons($ver, $value[0], $toVal); 
      echo    '</td>
            </tr>';  
    } 
  }
}
/**
  * Affiche la table des employés
  * @fonction getEmploye : renvoi un tableau de tout les employés dont l'utilisateur est le supérieur 
  */
function showEmploye(){
  constructTable(getEmploye());
}
/**
  * Affiche la table des formations d'un employé
  * @fonction getFormation : renvoi un tableau de toutes les formation à valider
  */
function getEmployeFormation(){
  if(isset($_GET['get'])){
    constructTable(getFormation((int)$_GET['get']));
  }
}
//TODO : fusionner les deux fonctions
function getEmployeFormationValid(){
  if(isset($_GET['get'])){
    constructTable(getFormationValid((int)$_GET['get']), false);
  }
}
/**
  * Affiche le script si un employé est sélectionné
  * @GET : l'id de l'employé
  */
if(isset($_GET['get'])){
  $script = '
  $("button.validate-formation,button.unvalidate-formation").click(function(){
    var selector = $(this).parents("tr");
    var update = $(this).is(".validate-formation") ? 1 : 0;
    $.post("/M2L/controller/ajax_updateFormation.php",{id_u :'. (int) $_GET['get'] .', id_f : $(this).attr("data-id"), bool : update}).done(function(data){
        selector.html(data).slideUp(2000, function(){
          $.post("/m2L/controller/employe.php",{refresh : ' . (int) $_GET['get'] . '}).done(function(data){
              $("#toValid").html(data);
              reload();
          });
          $.post("/m2L/controller/employe.php",{refresh : ' . (int) $_GET['get'] . ', tab : 0}).done(function(data){
              $("#toUnvalid").html(data);
              reload();
          });
        });
      });
  });
  ';
}
/**
  * Rafraichit les tables de validation
  */
if(isset($_POST['refresh'])){
  define('BASE_URL', '/M2L');
  $id = (int)$_POST['refresh'];
  if(isset($_POST['tab']))
    constructTable(getFormationValid($id), false);
  else
    constructTable(getFormation($id));
}
else require('view/employe.php');?>