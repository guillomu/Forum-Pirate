<?php

require_once "./models/model.php";

class MessagesModel extends Model {

  private $id;
	private $date_creation;
	private $contenu;
	private $note;
	private $id_sujets;
	private $id_utilisateurs;


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

  public function getBySujets($id){

    $db=parent::connect();


    $sql= "SELECT * FROM messages WHERE id_sujets = :id";
    $query= $db -> prepare ($sql);
    $query->bindValue(':id', $id);
    $query -> execute ();
    $messageslist= $query -> fetchAll();
    return $messageslist;

  }

  public function add($message){

    		$db=parent::connect();

    		$sql= "INSERT INTO messages SET date_creation = :date_creation, contenu = :contenu, note = :note, id_sujets = :id_sujets, id_utilisateurs = :id_utilisateurs";
    		$query= $db->prepare($sql);
    		$query->bindValue(':date_creation', $message->date_creation());
    		$query->bindValue(':contenu', $message->contenu());
    		$query->bindValue(':note', $message->note());
    		$query->bindValue(':id_sujets', $message->id_sujets());
    		$query->bindValue(':id_utilisateurs', $message->id_utilisateurs());
    		$query->execute();

    		return $query;
  }

  // GETTERS //
	public function id() { return $this->id; }
	public function date_creation() { return $this->date_creation; }
	public function contenu() { return $this->contenu; }
	public function note() { return $this->note; }
	public function id_sujets() { return $this->id_sujets;}
	public function id_utilisateurs() { return $this->id_utilisateurs; }

	// SETTERS //
	public function setId( $id ){
		$id = (int) $id;

		if($id > 0){
			$this->id = $id;
		}
	}

	public function setDate_creation( $date_creation ){
		if(is_string($date_creation)){
			$this->date_creation = $date_creation;
		}
	}

	public function setContenu( $contenu ){
		if(is_string($contenu)){
			$this->contenu = $contenu;
		}
	}

	public function setNote( $note ){
		if(is_string($note)){
			$this->note = $note;
		}
	}

	public function setId_sujets( $id_sujets ){
		if(is_string($id_sujets)){
			$this->id_sujets = $id_sujets;
		}
	}

	public function setId_utilisateurs( $id_utilisateurs ){
		if(is_string($id_utilisateurs)){
			$this->id_utilisateurs = $id_utilisateurs;
		}
	}

}


 ?>
