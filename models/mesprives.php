<?php

require_once "./models/model.php";

class MesprivesModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from messagesprives";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $Mespriveslist= $query -> fetchAll();
  return $Mespriveslist;

}
}


 ?>
