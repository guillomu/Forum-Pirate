<?php

require_once "models/sujets.php";

$sujets =new SujetsModel();
$SujetsListView= $sujets->getAll();

$content = "views/sujets.php";
require_once "views/layout.php";

 ?>
