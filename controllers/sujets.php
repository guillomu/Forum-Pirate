<?php

require_once "models/sujets.php";

$sujets =new SujetsModel();
$SujetsListView= $sujets->getBySalons($controllers[2]);

$content = "views/sujets.php";
require_once "views/layout.php";

 ?>
