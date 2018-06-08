<?php

require_once "./models/model.php";

class UtilisateursModel extends Model {

	private $id;
	private $nom_utilisateur;
	private $mdp;
	private $email;
	private $avatar;
	private $prenom;
	private $nom;
	private $date_de_naissance;
	private $statut;

	// CONSTRUCTEUR //
	public function __construct (array $donnees){
		$this->hydrate($donnees);
	}

	public function hydrate(array $donnees){
		foreach($donnees as $key => $value){
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method)){
				$this->$method($value);
			}
		}
	}

	public function add(UtilisateursModel $user){


		$sql= "INSERT INTO * FROM utilisateurs";
		$query= $db -> prepare ($sql);
		$query -> execute ();
		$utilisateurslist= $query -> fetchAll();
		return $utilisateurslist;
	}

	public function getAll(){

		$db=parent::connect();


		$sql= "SELECT * FROM utilisateurs";
		$query= $db -> prepare ($sql);
		$query -> execute ();
		$utilisateurslist= $query -> fetchAll();
		return $utilisateurslist;

	}

	// GETTERS //
	public function id() { return $this->id; }
	public function nom_utilisateur() { return $this->nom_utilisateur; }
	public function mdp() { return $this->mdp; }
	public function email() { return $this->email; }
	public function avatar() { return $this->avatar;}
	public function prenom() { return $this->prenom; }
	public function nom() { return $this->nom; }
	public function date_de_naissance() { return $this->date_de_naissance; }
	public function statut() { return $this->statut; }

	// SETTERS //
	public function setId( $id ){
		$id = (int) $id;

		if($id > 0){
			$this->id = $id;
		}
	}

	public function setNom_utilisateur( $nom_utilisateur ){
		if(is_string($nom_utilisateur)){
			$this->nom_utilisateur = $nom_utilisateur;
		}
	}

	public function setMdp( $mdp ){
		if(is_string($mdp)){
			$this->mdp = $mdp;
		}
	}

	public function setemail( $email ){
		if(is_string($email)){
			$this->email = $email;
		}
	}

	public function setAvatar( $avatar ){
		if(is_string($avatar)){
			$this->avatar = $avatar;
		}
	}

	public function setPrenom( $prenom ){
		if(is_string($prenom)){
			$this->prenom = $prenom;
		}
	}

	public function setNom( $nom ){
		if(is_string($nom)){
			$this->nom = $nom;
		}
	}

	public function setDate_de_naissance( $date_de_naissance ){
		if(is_string($date_de_naissance))
			$this->date_de_naissance = $date_de_naissance;
	}

	public function setStatut( $statut ){
		if(is_string($statut))
			$this->statut = $statut;
	}
}


?>
