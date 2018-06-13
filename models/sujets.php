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
 public function getBySalons($titre){
  $db=parent::connect();

    $sql= "SELECT * FROM sujets INNER JOIN salons ON sujets.id_salons = salons.id WHERE salons.titre =" .$titre;
    $query= $db -> prepare ($sql);
    $query -> execute ();
    $sujetslist= $query -> fetchAll();
    return $sujetslist;

 }
}

 ?>
