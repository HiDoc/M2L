<?php 
class Secure {
  protected static function removeTag($chaine){
    $tag = "/^(<.*>)$/";
    return preg_replace($tag,' ', $chaine);  
  }
  protected static function specialChar($chaine){
    return preg_replace("/^([\$\%]*)$/",' ',$chaine);
  }
  public static function SecForm($chaine){
    return htmlentities(self::specialChar(self::removeTag($chaine)));
  }
}
?>