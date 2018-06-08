<?php

session_start();

if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{
	echo '<div id="inscription">';
	echo '<h1>Inscription</h1>';
	echo '<form method="post" action="inscription.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" placeholder= "choisis ton nom de pirate"/> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" placeholder=" mot de passe"/><br />
	<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" placeholder= "confirmer le mot passe"/>
	</fieldset>


	<fieldset><legend>Contacts</legend>
	<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" placeholder= "écris ton mail "/><br />
	<label for="facebook">Votre page Facebook :</label><input type="text" name="facebook" id="face" placeholder=" ton facebook" /><br />
	<label for="instagram">Votre page Instagram :</label><input type="text" name="instagram" id="insta" placeholder= "ton instagram"/>
	</fieldset>


	<fieldset><legend>Profil sur le forum</legend>
	<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko)<br />
	<label for="description">Description :</label><textarea cols="40" rows="4" name="description" id="description">La description est limitée à 200 caractères</textarea>
	</fieldset>


	<p>Les champs précédés d un * sont obligatoires</p>
	<p class="text-center"><input  type="submit" value="S\'inscrire" /></p></form>
	</div>
	</body>
	</html>';
	echo '</div>';

} //Fin de la partie formulaire
?>
