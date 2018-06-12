<?php

require_once "models/messages.php";

$messages =new MessagesModel();
$MessagesListView= $messages->getAll();

$content = "views/mesprives.php";
require_once "views/layout.php";

 ?>
