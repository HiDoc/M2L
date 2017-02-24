<?php 
  include('class.glyphicon.php');
  class Button{
    /**
      * Constructeur de la classe
      * @return String 
      * @param String Type du bouton
      * @param String Contenu du bouton
      */
    function __construct(){
      $args = func_get_args();
      $newButton = '<button class="btn btn-';
      $newButton .= $args[0].' type = "button">';
      
      // Nom du glyphicon à utiliser
      if($args[1] == 'download')
        $newButton .=  (new Glyph('download'))->show();
      elseif($args[1] == 'fiche')
        $newButton .=  (new Glyph('tags'))->show();
      else
        $newButton .= (new Glyph('ok'))->show();
      
      // Contenu texte du bouton
      if($args[1] == 'download')
        $newButton .= ' Télécharger le récapitulatif au format PDF ';
      elseif($args[1] == 'fiche')
        $newButton .= '&nbsp Voir la fiche';
      else
        $newButton .= ' S\'inscrire';
      
      $newButton .= '</button>';
      
      echo $newButton;
    }
    
  }
?>