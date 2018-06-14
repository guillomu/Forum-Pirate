<div id="profil" class="background">
      <?php
      require_once "views/navbar.php";



      echo '<div class="profile">';
      echo '<fieldset><legend>Contacts</legend>
      <label for="nom">Votre nom:</label><input type="text" name="nom" id="nom" placeholder=" nom" /><br />
      <label for="prenom">Votre prénom:</label><input type="text" name="prenom" id="prenom" placeholder="prénom" /><br />
        <label for="date">Votre date de naissance: </label><input type="date" name="date" id="date" placeholder="date de naissance" /><br />
      <input type="radio" name="CSS" value="f" id="f" checked="checked" />
      <label for="f" class="inline">Féminin</label>
      <input type="radio" name="CSS" value="m" id="m" />
      <label for="m" class="inline">Masculin</label><br />
      <label for="facebook">Votre page Facebook :</label><input type="text" name="facebook" id="face" placeholder="facebook" /><br />
      <label for="instagram">Votre page Instagram :</label><input type="text" name="instagram" id="insta" placeholder= "instagram"/>
      </fieldset>

      <fieldset><legend>Profil sur le forum</legend>
      <label for="avatar">Choisissez votre avatar : </label><input type="file" name="avatar" id="avatar" /><br />(Taille max:10Ko)<br /><br />
      <label for="description">Description :</label><textarea cols="40" rows="4" name="description" id="description">Veuillez entrer votre déscription ici</textarea><br />
    	<p class="text-center"><input  type="submit" value="Valider" name="valider" /></p>

      </fieldset>';

      echo '</div>';
      ?>
</div>
