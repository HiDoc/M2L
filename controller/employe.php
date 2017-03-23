<?php 
$paths = array('model/employe.php', 'controller/bdd.php','core/class.glyphicon.php');
foreach($paths as $path){  
if(file_exists('../'.$path))
  require_once '../'.$path;
else
  require_once($path);
}
?>
<?php 
/**
  * Crée les bouttons à afficher selon les tables
  * @param $ver : un booléen qui permet de distinguer la table employé et la table formation 
  * @param $id : un nombre qui correspond à l'id de la personne ou de la formation
  */
function appendButtons($id, $toVal = true){
  echo '<a href="' . BASE_URL . '/ficheFormation' . '/' . $id . '/" target="_blank" class="btn btn-primary">
            '.Glyph::build('tags') .'&nbsp; '. 'Fiche </a>';
  echo ' <button class="btn btn-'. ($toVal ? 'success ': 'danger un').'validate-formation" data-id="' . $id . '">' . Glyph::build($toVal ? 'ok': 'remove') . '</button>';
 }
/**
  * Construit l'affichage des tables de formations
  * @param $formations : un tableau de données 
  */
function constructTable($formations, $toVal = true){
  if(isset($formations[0])){
    foreach($formations as $formation){
      echo '<tr class="historique-table-infos">
              <td>'.$formation[1].'</td>
              <td>'.$formation[2].'</td>
              <td>'.round($formation[3]/86400) . ' jours </td>
              <td>';
                appendButtons($formation[0], $toVal); 
      echo    '</td>
            </tr>';  
    } 
  }
  else echo '<tr><td colspan="4"><div class="alert alert-info" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Info :</span>
              Aucune formation à afficher
            </div></td></tr>';
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
else require('view/employe.php');

$scriptBase = '
$(".menu-formation .tablescroll").load("/m2l/ajax/rechercheE/");
$("#search").click(function(){
    var getType = $("#changeTo button:nth-child(1)").is(".active") ? "list" : "thumb";
    $.post("/m2l/ajax/rechercheE/",{ keywords : $("#keywords").val(),type : getType }).done(function(data){
      $(".menu-formation .tablescroll").html(data);
      reload();
      });
  });
$("#changeTo button:nth-child(1), #changeTo button:nth-child(2)").click(function(eventData){
  var select = $("#changeTo button:nth-child(1), #changeTo button:nth-child(2)");
  if(!$(this).is(".active")){
    select.remove($(this)).removeClass("active");
    $(this).addClass("active");
    $(".row.menu-formation thead").slideToggle("0");
    jQuery("tbody.thumb").slideToggle("0");
    jQuery("tbody.list").slideToggle("0");
    jQuery("tbody.thumb").removeClass("hidden");
  }
});
';
/**
  * Affiche le script si un employé est sélectionné
  * @GET : l'id de l'employé
  */
if(isset($_GET['get'])){
  $script = '
  $("button.validate-formation,button.unvalidate-formation").click(function(){
    var selector = $(this).parents("tr");
    var update = $(this).is(".validate-formation") ? 1 : 0;
    $.post("/m2l/ajax/updateFormation/",{id_u :'. (int) $_GET['get'] .', id_f : $(this).attr("data-id"), bool : update}).done(function(data){
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
?>