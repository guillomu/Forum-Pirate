<?php

if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
{
	echo '<form method="post" action="#">
	<p>
	<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" placeholder="entrez votre pseudo"/><br />
	<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" placeholder= "entrez votre mot de passe" /><br />
  <input type="submit" value="Connexion" /></form>
	</p>

	<a href="/Forum-Pirate/index.php/inscription">Pas encore inscrit ?</a>';
}






?>
