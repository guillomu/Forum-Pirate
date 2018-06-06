<?php

require_once "models/salons.php";

$salons =new SalonsModel();
$SalonsListView= $salons->getAll();

require_once "views/salons.php";

 ?>
