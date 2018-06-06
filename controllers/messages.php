<?php

require_once "models/messages.php";

$messages =new MessagesModel();
$MessagesListView= $messages->getAll();

require_once "views/messages.php";

 ?>
