<?php

echo '<form method="post" action="/Forum-Pirate/index.php/'.$controllers[1].'/connexion">
<p>
<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" placeholder="entrez votre pseudo"/><br />
<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" placeholder= "entrez votre mot de passe" /><br />
<input type="submit" value="Connexion" name="connexion" /></form>
</p>';

// Message d'erreur
if(isset($result) && !$result){
	echo '<p class="erreur-red">Identifiants incorrects</p>';
}

echo '<a href="/Forum-Pirate/index.php/inscription">Pas encore inscrit ?</a>';


?>
