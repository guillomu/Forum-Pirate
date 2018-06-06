<?php

require_once "models/mesprives.php";

class MesprivesModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from messagesprives";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $tasklist= $query -> fetchAll();
  return $Mespriveslist;

}
}


 ?>
