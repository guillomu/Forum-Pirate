<?php

require_once "./models/model.php";

class SujetsModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from sujets";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $sujetslist= $query -> fetchAll();
  return $sujetslist;
}
}

 ?>
