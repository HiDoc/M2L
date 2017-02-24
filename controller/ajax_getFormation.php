<?php 
require('../model/ajax_getFormation.php');
require('../core/class.button.php');
if(isset($_POST['source'])){  
  function buttonToShow(){
    switch($_POST['source']){
      case 'mesFormations' :
        new Button('success','fiche');  
        new Button('info','download');  
        break;
      case 'formation' :
        new Button('success','inscription');  
        new Button('info','download');
          break;
      default :
        break;
    }
  }
}
else { 
  function buttonToShow(){
    //TODO : mettre une view de base
  }
}
  
if(isset($_POST['id']))
  $data = getFormation($_POST['id']);
else 
  $data = lastFormation();

require('../view/ajax_getFormation.php');
?>