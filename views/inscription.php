<?php

session_start();

if (!isset($_POST['inscription'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{
	echo '<div id="inscription">';
	echo '<h1>Inscription</h1>';
	echo '<form method="post" action="/Forum-Pirate/index.php/inscription" enctype="multipart/form-data">
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
	<label for="avatar">Choisissez votre avatar :</label><input type="text" name="avatar" id="avatar" />(Taille max : 10Ko)<br />
	<label for="description">Description :</label><textarea cols="40" rows="4" name="description" id="description">Veuillez entrer votre déscription ici</textarea>
	</fieldset>


	<p>Les champs précédés d un * sont obligatoires</p>
	<p class="text-center"><input  type="submit" value="S\'inscrire" name="inscription" /></p>
	</form>
	</div>
	</body>
	</html>';
	echo '</div>';

} //Fin de la partie formulaire
else{
	echo "<div class=\"validation\">
		<p>Bravo ". $_POST['pseudo'] ." vous avez rejoint l'équipage du Faux-Rhum!</p>
	</div>";
}
?>
