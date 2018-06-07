<?php

require_once "./models/model.php";

class SalonsModel extends Model {

	public function getAll (){

		$db=parent::connect();

		$sql = "select * from salons";
		$query = $db -> prepare("select * from salons");
		$query -> execute();
		$salonsList= $query -> fetchAll();

		return $salonsList;
	}
}

?>
