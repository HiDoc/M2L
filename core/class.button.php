<?php
    include_once('class.glyphicon.php');
    class Button {
    /**
      * Constructeur de la classe
      * @return String 
      * @param String Type du bouton
      * @param String Contenu du bouton
      */
    private $button;
      
    function __construct(){
      $args = func_get_args();
      $this->button = "<button class='btn btn-";
      $this->button .= $args[0]."'";
      if(isset($args[2])) $this->button .= "' data-id='".$args[2]."'";
      $this->button .=" type = 'button'>";
      
      // Nom du glyphicon à utiliser
      $this->button .=  Glyph::build(self::builder($args[1])[0]);
      
      // Contenu texte du bouton
      $this->button .= self::builder($args[1])[1];
      
      $this->button .= '</button>';
      if(!isset($args[3]))
        echo $this->button;
    }
    private function builder($name){
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
        case 'unValid' :
          $nameReturn[0] = 'remove';
          $nameReturn[1] = ' Annuler l\'inscription ?';
          break;
        case 'search' :
          $nameReturn[0] = 'search';
          $nameReturn[1] = '';
          break;
        case 'notif' :
          $nameReturn[0] = '';
          $nameReturn[1] = ' Notifications <span class="badge">0</span>';
          break;
        case 'list' :
          $nameReturn[0] = 'th-list';
          $nameReturn[1] = '';
          break;
        case 'thumb' :
          $nameReturn[0] = 'th';
          $nameReturn[1] = '';
          break;
        default :
          $nameReturn[0] = 'ok';
          $nameReturn[1] = ' S\'inscrire';
          break;
      }
      return $nameReturn;
    }
      function __toString(){
        return $this->button;
      }
  }
?>