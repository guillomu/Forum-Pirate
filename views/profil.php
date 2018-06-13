<div id="profil" class="background">
      <?php
      require_once "views/navbar.php";

      echo '<fieldset><legend>Contacts</legend>
      <label for="facebook">Votre page Facebook :</label><input type="text" name="facebook" id="face" placeholder=" ton facebook" /><br />
      <label for="instagram">Votre page Instagram :</label><input type="text" name="instagram" id="insta" placeholder= "ton instagram"/>
      </fieldset>

      <fieldset><legend>Profil sur le forum</legend>
      <label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko)<br />
      <label for="description">Description :</label><textarea cols="40" rows="4" name="description" id="description">Veuillez entrer votre déscription ici</textarea>
      </fieldset>';
      ?>
</div>
