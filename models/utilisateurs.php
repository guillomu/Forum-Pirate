<?php

require_once "models/utilisateurs.php";

class UtilisateursModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from utilisateurs";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $tasklist= $query -> fetchAll();
  return $utilisateurslist;

}
}

 ?>
