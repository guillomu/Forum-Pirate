<?php

require_once "./models/model.php";

class MessagesModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from messages";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $messageslist= $query -> fetchAll();
  return $messageslist;

}
}


 ?>
