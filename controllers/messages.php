<?php

require_once "models/sujets.php";
require_once "models/messages.php";

$sujet =new SujetsModel();
$sujetArray= $sujet->getById($controllers[2]);

$messages =new MessagesModel(['id' => '' , 'date_creation' => '2018-06-08', 'contenu' => '', 'note' => 0, 'id_sujets' => '', 'id_utilisateurs' => '']);
$MessagesListView= $messages->getBySujets($controllers[2]);

if(isset($_POST['poster'])){

  $message = new MessagesModel(['id' => $_POST['poster'] , 'date_creation' => '2018-06-08', 'contenu' => $_POST['contenu'], 'note' =>'5', 'id_sujets' => $sujetArray['id'], 'id_utilisateurs' => $_SESSION['utilisateur']->id()]);
  $message -> add($message);
}

$content = "views/messages.php";
require_once "views/layout.php";

 ?>
