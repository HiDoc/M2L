<?php
class User {
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $creditJour;
  private $creditPoint;
  private $typeEmploye;
  private $superieurID;
  public $connect = true;
  
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
  
  public function getId_e(){
    return $this->id;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getCreditPoint(){
    return $this->creditPoint;
  }
  public function getCreditJour(){
    return $this->creditJour;
  }
  public function getTypeEmploye(){
    return $this->typeEmploye;
  }
  public function getSuperieurId(){
    return $this->superieurID;
  }
  public function setId_e($value){
    $this->id = $value;
  }
  public function setNom($value){
    $this->nom = $value;
  }
  public function setPrenom($value){
    $this->prenom = $value;
  }
  public function setEmail($value){
    $this->email = $value;
  }
  public function setCreditPoint($value){
    $this->creditPoint = $value;
  }
  public function setCreditJour($value){
    $this->creditJour = $value;
  }
  public function setLibelle($value){
    $this->typeEmploye = $value;
  }
  public function setSuperieur_Id($value){
    $this->superieurID = $value;
  }
  public function getState(){
    return $this->connecte;
  }
  public function update($bdd){
    $query = $bdd->query("select * from employe, typeEmploye where id_e = ".$this->id." AND id_te = typeEmploye_id");
    $array = $query->fetch(PDO::FETCH_ASSOC);
    $this->hydrate($array);
    $_SESSION['user'] = serialize($this); 
  }
}
?>