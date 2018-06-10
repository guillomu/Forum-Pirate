<?php

require_once "./models/model.php";

class MesprivesModel extends Model {

	public function getAll(){

		$db=parent::connect();


		$sql= "select * from messages_prives";
		$query= $db -> prepare ($sql);
		$query -> execute ();
		$Mespriveslist= $query -> fetchAll();
		return $Mespriveslist;

	}
}


?>
