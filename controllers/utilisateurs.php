<?php

require_once "models/utilisateurs.php";

$utilisateurs =new UtilisateursModel();
$UtilisateursListView= $utilisateurs->getAll();

require_once "views/utilisateurs.php";

 ?>
