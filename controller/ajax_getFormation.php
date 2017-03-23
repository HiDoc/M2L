<?php 
require('/model/ajax_getFormation.php');
if(isset($_POST['source'])){  
  function buttonToShow($enough = true){
    switch($_POST['source']){
      case 'mesFormations' :
        new Button('success','fiche');  
        echo ' ';
        new Button('info','download');  
        break;
      case 'formation' :
        if ($enough){  
          new Button('success','inscription',$_POST['id']);  
          echo ' ';
          new Button('info','download');
        } 
        else {
          echo "<div class=\"alert alert-info\"> Crédits insuffisants pour participer à la formation</div>";
        }
        break;
      default :
        break;
    }
  }
}
else { 
  function buttonToShow($enough = true){
    if ($enough){  
      new Button('success','inscription', lastId());
      echo ' ';
      new Button('info','download');
    } 
    else {
      echo "<div class=\"alert alert-info\"> Crédits insuffisants pour participer à la formation</div>";
    }
  }
}
  
if(isset($_POST['id']))
  $data = getFormation($_POST['id']);
else 
  $data = lastFormation();

require('/view/ajax_getFormation.php');
?>