<?php
class Glyph {
  private $name;
  function __construct($name){
    $this->name = $name;
  }
  
  public function show(){
    return "<span class='glyphicon glyphicon-".$this->name."' aria-hidden='true'></span>";
  } 
}
?>