<script type="text/javascript">
	$('body').css('background-image', 'url(./img/salon.png)');
</script>
<?php

require_once "models/salons.php";

$salons =new SalonsModel();
$SalonsListView= $salons->getAll();

$content = "views/salons.php";
require_once "views/layout.php";

?>