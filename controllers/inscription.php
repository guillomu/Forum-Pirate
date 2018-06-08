<?php
require_once "models/utilisateurs.php";

if(isset($_POST['inscription'])){

	$utilisateur =new UtilisateursModel(['id' => $_POST['inscription'] , 'nom_utilisateur' => $_POST['pseudo'], 'mdp' => $_POST['password'], 'email' => $_POST['email'], 'avatar' => $_POST['avatar'], 'prenom' => '', 'nom' => '', 'date_de_naissance' => '', 'statut' => 'membre']);
}

require_once "views/navbar.php";
require_once "views/inscription.php";

?>