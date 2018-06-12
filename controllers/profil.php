<?php

require_once "models/utilisateurs.php";

$profil =new UtilisateursModel(['']);
//$ProfilListView= $profil->getById();

$content = "views/profil.php";
require_once "views/layout.php";

 ?>
