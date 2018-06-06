<?php


require_once "./models/model.php";

class SalonsModel extends Model {

  public function getAll (){

  $db=parent::connect();


  $sql= "select * from salons";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $salonslist= $query -> fetchAll();
  return $salonslist;

}
}



 ?>
