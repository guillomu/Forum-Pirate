<?php

require_once "models/messages.php";

$messages =new MessagesModel();
$MessagesListView= $messages->getBySujets($controllers[2]);

$content = "views/messages.php";
require_once "views/layout.php";

 ?>
