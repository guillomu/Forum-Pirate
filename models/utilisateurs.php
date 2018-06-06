<?php

require_once "./models/model.php";

class UtilisateursModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from utilisateurs";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $utilisateurslist= $query -> fetchAll();
  return $utilisateurslist;

}
}

 ?>
