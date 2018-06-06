<?php

require_once "models/sujets.php";

$sujets =new SujetsModel();
$SujetsListView= $sujets->getAll();

require_once "views/sujets.php";

 ?>
