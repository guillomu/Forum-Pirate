<?php


class Model{

private $user = "root";
private $password="simplonco";
//private $password= "";
private $dbname= "forum_pirate";
private $host= "localhost";
private $port= 8088;

public function connect(){
  try{
    $db= new PDO ("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
    return $db;
  }
  catch(PDOException $e) {
    echo "erreur";
  }

}

}
 ?>
