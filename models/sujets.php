<?php

require_once "models/sujets.php";

class SujetsModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from sujets";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $tasklist= $query -> fetchAll();
  return $sujetslist;
}
}

 ?>
