<?php


class Model{

	private $user = "root";
	//private $password= "simplonco";
  private $password= "";
	private $dbname= "forum_pirate";
	private $host= "localhost";
	private $port= 3306;

	public function connect(){
		try{
			$db= new PDO ("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
			return $db;
		}
		catch(PDOException $e) {
			echo "<span class=\"erreur\">Erreur de connexion à la base de données</span>";
		}

	}

}
?>
