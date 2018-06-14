<div id="messages" class="background">

<?php

require_once "views/navbar.php";

echo '<h2>'.$sujetArray['titre'].'</h2>';

foreach ($MessagesListView as $messages){
  echo '<br/><div class = "message">'.$messages["contenu"].'</div>';
}

if(isset($_SESSION['utilisateur'])){
  echo '<div class="reponse">
        <h3>Répondre</h3>
        <form method="post" action="/Forum-Pirate/index.php/messages/'.$controllers[2].'" >
          Contenu :</br><textarea name="contenu" cols="40" rows="4">Votre message</textarea></br></br>
          <input type="submit" name="poster" value="Poster" /></br>
        </form>
        </div>';
}

else{
  echo '<p>Veuillez vous connecter pour répondre à ce sujet.</p>';
}
?>

</div>
