<div id="sujets" class="background">

  <?php
  require_once "views/navbar.php";

  echo "<div id=\"sujets-liste\">";
  if(isset($controllers[2])){
  echo "<a href=\"/Forum-Pirate/index.php/salons\"><p>Retour à la liste des sujets</p></a> </br>";
  echo "<h1>Sujets ".$controllers[2]."</h1>";

}


foreach ($SujetsListView as $sujets){
  echo "<a href=\"/Forum-Pirate/index.php/messages/".$sujets["id"]."\"><div class= 'sujets'>".$sujets["titre"].'</div></a>' ;
}
	echo "</div>";
 ?>
</div>
