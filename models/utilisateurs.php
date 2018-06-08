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

	public function add(UtilisateursModel $utilisateur){

		$db=parent::connect();

		$sql= "INSERT INTO utilisateurs SET nom_utilisateur = :nom_utilisateur, mdp = :mdp, email = :email, avatar = :avatar, prenom = :prenom, nom = :nom, date_de_naissance = :date_de_naissance, statut = :statut";

		$query= $db -> prepare ($sql);
		$query->bindValue(':nom_utilisateur', $utilisateur->nom_utilisateur());
		$query->bindValue(':mdp', $utilisateur->mdp());
		$query->bindValue(':email', $utilisateur->email());
		$query->bindValue(':avatar', $utilisateur->avatar());
		$query->bindValue(':prenom', $utilisateur->prenom());
		$query->bindValue(':nom', $utilisateur->nom());
		$query->bindValue(':date_de_naissance', $utilisateur->date_de_naissance());
		$query->bindValue(':statut', $utilisateur->statut());
		$query -> execute ();
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
