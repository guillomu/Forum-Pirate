<div id="messages" class="background">

<?php

require_once "views/navbar.php";

foreach ($MessagesListView as $messages){
  echo '<br/><div class = "message">'.$messages["contenu"].'</div>';
}
?>

</div>
