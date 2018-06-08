<?php
echo "<div id=\"salons\">";
echo "<h1>Salons</h1>";
foreach ($SalonsListView as $salon){
	echo "<a href=\"/Forum-Pirate/index.php/salons/".$salon["titre"]."\"><div class=\"salon\"><h3>".$salon["titre"]."</h3></div></a>";
}
echo "</div>";
?>
