<?php 
require("../core/class.user.php");
session_start();
require('../model/ajax_getFormation.php');
require('../core/class.button.php');
if(isset($_POST['source'])){  
  function buttonToShow(){
    switch($_POST['source']){
      case 'mesFormations' :
        new Button('success','fiche');  
        echo ' ';
        new Button('info','download');  
        break;
      case 'formation' :
        new Button('success','inscription',$_POST['id']);  
        echo ' ';
        new Button('info','download');
          break;
      default :
        break;
    }
  }
}
else { 
  function buttonToShow(){
    new Button('success','inscription', lastId());
    echo ' ';
    new Button('info','download');
  }
}
  
if(isset($_POST['id']))
  $data = getFormation($_POST['id']);
else 
  $data = lastFormation();

require('../view/ajax_getFormation.php');
?>