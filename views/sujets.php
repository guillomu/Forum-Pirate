<div id="sujets" class="background">

<?php
require_once "views/navbar.php";
foreach ($SujetsListView as $sujets){
  echo "<br/>-".$sujets["id_salon"];
}

 ?>
