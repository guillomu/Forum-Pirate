<?php

require_once "models/sujets.php";
require_once "models/messages.php";

$sujet =new SujetsModel();
$sujetArray= $sujet->getById($controllers[2]);

$messages =new MessagesModel();
$MessagesListView= $messages->getBySujets($controllers[2]);

$content = "views/messages.php";
require_once "views/layout.php";

 ?>
