<?php
class Glyph {
  public static function build($name){
    return "<span class='glyphicon glyphicon-".$name."' aria-hidden='true'></span>";
  } 
}
?>