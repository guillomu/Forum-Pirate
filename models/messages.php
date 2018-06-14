<?php

require_once "./models/model.php";

class MessagesModel extends Model {

  public function getBySujets($id){

    $db=parent::connect();


    $sql= "SELECT * FROM messages WHERE id_sujets = :id";
    $query= $db -> prepare ($sql);
    $query->bindValue(':id', $id);
    $query -> execute ();
    $messageslist= $query -> fetchAll();
    return $messageslist;

  }
}


 ?>
