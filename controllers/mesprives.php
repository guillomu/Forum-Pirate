<?php

require_once "models/mesprives.php";

$mesprives =new MesprivesModel();
$MesprivesListView= $mesprives->getAll();

require_once "views/mesprives.php";

 ?>
