<?php require('../model/ajax_updateFormation.php');?>
<?php 
if(isset($_POST['id_u'], $_POST['id_f'], $_POST['bool'])){
  validate($_POST['id_u'], $_POST['id_f'],$_POST['bool']);
  
  $check = ($_POST['bool'] == 1); 
  //Construction de la ligne dans le tableau
  echo "<td colspan='4'><div class=\"alert alert-" . 
    ($check ? "success" : "danger") . 
    " role=\"alert\">La formation à été " . 
    ($check ? "" : "in") . 
    "validée</div></td>";
}
?>