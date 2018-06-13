<div id="salons" class="background">

	<?php
	require_once "views/navbar.php";

	echo "<div id=\"salons-liste\">";
	if(isset($controllers[2])){
		echo "<a href=\"/Forum-Pirate/index.php/salons\"><p>Retour à la liste des salons</p></a> </br>";
		echo "<h1>Salon ".$controllers[2]."</h1>";

	}

	else{
		echo "<h1>Salons</h1>";
		foreach ($SalonsListView as $salon){
			echo "<a href=\"/Forum-Pirate/index.php/sujets/".$salon["titre"]."\"><div class=\"salon\"><h3>".$salon["titre"]."</h3></div></a>";
		}
	}

	echo "</div>";
	?>
</div>
