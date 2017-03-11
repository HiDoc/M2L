<?php 
require('../core/class.user.php');

class Model extends User {
  private $connectUser;
  
  public function __construct($hostname = "localhost", $dbname = "m2l", $user ="root", $password = ""){
    try {
      $bdd = new PDO("mysql:host=$hostname;dbname=$dbname;",$user,$password);
    }
    catch(Exception $e){
        die('Erreur de connection ');
    }  
  }
  
  public function find($data = array()){
    $query = 'SELECT * FROM user WHERE';
    $i = 0;
    foreach($data as $value => $key){
      $query .= $key .' = '. $value;
      if($i > 0)
        $query .= ' AND ';
      $i++;
    }
    $q = $bdd->query($query);
    
    if($q->rowCount() > 1)
      return $q->fetchAll();
    else
      return $q->fetch();
  }
}
?>