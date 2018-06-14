<?php

require_once "models/utilisateurs.php";


if(isset($_POST['connexion'])){

$profil =new UtilisateursModel(['id' => 0 ,'avatar' => '', 'prenom' => '', 'nom' => '', 'date_de_naissance' => '']);
//$ProfilListView= $profil->getById();
	$result = $profil->get($_POST['nom_uilisateur']);
}

$content = "views/profil.php";
require_once "views/layout.php";

 ?>
