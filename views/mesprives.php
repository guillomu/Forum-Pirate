<?php
require_once "views/navbar.php";

foreach ($MesprivesListView as $mesprives){
  echo "<br/>-".$mesprives["id_envoyeur"];
}

 ?>
