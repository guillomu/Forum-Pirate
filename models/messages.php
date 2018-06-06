<?php

require_once "models/messages.php";

class MessagesModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from messages";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $tasklist= $query -> fetchAll();
  return $messageslist;

}
}


 ?>
