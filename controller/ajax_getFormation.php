<?php 
require('../model/ajax_getFormation.php');
require('../core/class.button.php');
if(isset($_POST['source'])){  
function buttonToShow(){
    switch($_POST['source']){
      case 'mesFormations' :
        new Button('info','download');  
        break;
      case 'formation' :
        new Button('success','inscription');  
        new Button('info','download');
          break;
      default :
        "Bouton inconnu";
        break;
    }
  }
}
else {
    function buttonToShow(){ 
  }
}
if(isset($_POST['id'])){
  $data = getFormation($_POST['id']);
  require('../view/ajax_getFormation.php');
}
else {
  $data = lastFormation();
  require('../view/ajax_getFormation.php');
}
?>