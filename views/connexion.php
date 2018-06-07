<?php
session_start();
$titre="Connexion";



function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');



define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');

exit('<div id="error"><p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></div></body></html>');

}


if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
{
	echo '<form method="post" action="connexion.php" class="connexion">
	<fieldset>
	<legend>Connexion</legend>
	<p>
	<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" placeholder="entrez votre pseudo"/><br /><br />
	<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" placeholder= "mot de passe" /><br /><br />
  <input type="submit" value="Connexion" /></form>
	</p>

	</fieldset>

	<a href="./inscription.php">Pas encore inscrit ?</a>

	</div>
	</body>
	</html>';
}






?>
