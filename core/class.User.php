<?php 
class User {
  private $id;
  private $name;
  private $password;
  
  public function __construct(array $data = array()){
    $this->hydrate($data);
  }
  private function hydrate(array $array){
    
    //Appelle les setters automatiquement
    foreach($array as $key => $value){
      
      //Récupère le nom du setter correspondant à l'attribut
      $method = 'set'.ucfirst($key);
      
      //S'il existe
      if(method_exists($this, $method))
        //Appel du setter
        $this->$method($value);
    }
  }
  
  public function getId(){
    return $this->id;
  }
  public function getName(){ 
    return $this->name;
  }
  public function getPassword(){ 
    return $this->password;
  }
  
  public function setName($new){
    $this->name = $new;
  }
  public function setPassword($nem){
    $this->password = sha1($new);
  }
}
?>