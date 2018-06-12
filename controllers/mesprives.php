<?php

require_once "models/mesprives.php";

$mesprives =new MesprivesModel();
$MesprivesListView= $mesprives->getAll();

$content = "views/mesprives.php";
require_once "views/layout.php";

?>
