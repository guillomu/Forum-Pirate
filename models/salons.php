<?php


require_once "models/salons.php";

class SalonsModel extends Model {

  public function getById (){

  $db=parent::connect();


  $sql= "select * from salons";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $tasklist= $query -> fetchAll();
  return $salonslist;





 ?>
