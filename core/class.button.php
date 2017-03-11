<?php 
  include('class.glyphicon.php');
  class Button {
    /**
      * Constructeur de la classe
      * @return String 
      * @param String Type du bouton
      * @param String Contenu du bouton
      */
    function __construct(){
      $args = func_get_args();
      $newButton = '<button class="btn btn-';
      $newButton .= $args[0].'"';
      if(isset($args[2])) $newButton .=' data-id="'.$args[2].'"';
      $newButton .=' type = "button">';
      
      // Nom du glyphicon à utiliser
        $newButton .=  Glyph::build(self::builder($args[1])[0]);
      
      // Contenu texte du bouton
      $newButton .= self::builder($args[1])[1];
      
      $newButton .= '</button>';
      
      echo $newButton;
    }
    function builder($name){
      $nameReturn = array();
      switch($name){
        case 'download' :
          $nameReturn[0] = 'download';
          $nameReturn[1] = ' Télécharger au format PDF';
          break;
        case 'fiche' :
          $nameReturn[0] = 'tags';
          $nameReturn[1] = ' Voir la fiche';
          break;
        case 'toValid' :
          $nameReturn[0] = 'pencil';
          $nameReturn[1] = ' En attente de validation';
          break;
        case 'failed' :
          $nameReturn[0] = 'remove';
          $nameReturn[1] = ' Erreur d\'inscription';
          break;
        case 'points' :
          $nameReturn[0] = 'asterisk';
          $nameReturn[1] = ' Vous n\'avez pas assez de crédits';
          break;
        default :
          $nameReturn[0] = 'ok';
          $nameReturn[1] = ' S\'inscrire';
          break;
      }
      return $nameReturn;
    }
  }
?>