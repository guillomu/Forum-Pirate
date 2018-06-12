<?php
require_once "models/utilisateurs.php";

if(isset($_POST['connexion'])){

	//Création d'un nouvel utilisateur vierge
	$utilisateur =new UtilisateursModel(['id' => 0 , 'nom_utilisateur' => '', 'mdp' => '', 'email' => '', 'avatar' => '', 'prenom' => '', 'nom' => '', 'date_de_naissance' => '', 'statut' => '']);

	//On recupère dans la base de donnée les informations de l'utilisateur
	$result = $utilisateur->get($_POST['pseudo']);

	// Si l'utilisateur existe et que le mot de passe correspond 
	if($result && ($utilisateur->mdp() == $_POST['password'])){
		$_SESSION['utilisateur'] = $utilisateur;
	}

	else{
		$result = false;
	}
}

?>