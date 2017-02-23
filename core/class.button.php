<?php 
  class Button{
    function __construct(){
      $args = func_get_args();
      $newButton = '<button class="btn btn-';
      $newButton .= $args[0].' type = "button">';
      
      if($args[1] == 'download')
        $newButton .= 'Télécharger le récapitulatif au format PDF';
      else
        $newButton .= 'S\'inscrire';
        
      if($args[1] == 'download')
        $newButton .=  '<span class="glyphicon glyphicon-download" aria-hidden="true"></span></button>';
      else
        $newButton .= '</button>';    
      echo $newButton;
    }
    
  }
?>