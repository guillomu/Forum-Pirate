<?php


if (!isset($_POST['inscription'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{
	echo '<div id="inscription" class="col">';
	echo '<div class="row"><h1 class="bloc-center">Inscription</h1></div>';
	echo '<div class="row">';
	echo '<div class="col double">';
	echo '<form method="post" action="/Forum-Pirate/index.php/inscription" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" placeholder= "choisis ton nom de pirate"/> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" placeholder=" mot de passe"/><br />
	<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" placeholder= "confirmer le mot passe"/>
	<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" placeholder= "écris ton mail "/><br />

	</fieldset>

	<p>Les champs précédés d un * sont obligatoires</p>
	<p class="text-center"><input  type="submit" value="S\'inscrire" name="inscription" /></p>
	</form>
	</div>
	<div id="inscription-img" class="col"></div>
	</div>
	</div>
	</body>
	</html>';
	echo '</div>';

} //Fin de la partie formulaire
else if($result){
	echo "<div class=\"validation\">
		<p>Bravo ". $_POST['pseudo'] ." vous avez rejoint l'équipage du Faux-Rhum!</p>
	</div>";
}
else{
	echo "<div class=\"exeption\">
		<p>Une erreur est survenue lors de votre inscrition veuillez recommencer.</p>
	</div>";
}
?>
