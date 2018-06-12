<script type="text/javascript">
	$('body').css('background-image', 'url(./img/salon.png)');
</script>
<?php

require_once "models/salons.php";

$salons =new SalonsModel();
$SalonsListView= $salons->getAll();

require_once "views/navbar.php";
require_once "views/salons.php";

?>