<div class="row navbar">
	<div class="col"></div>
	<div class="col faux-rhum">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="test1 ih-item circle effect18 left_to_right"><a href="/Forum-Pirate/index.php/salons">
					<div class="img"><h3>Faux-Rhum</h3></div>
					<div class="info">
						<div class="info-back">
							<img src="/Forum-Pirate/img/Boutons/pourparler.jpeg" alt="img">
						</div>
					</div>
				</a>
			</div>
			<!-- end normal -->

		</div>
	</div>
	<!-- end Left to right -->
</div>
<div class="col"></div>
<?php if(!isset($_SESSION['utilisateur'])){ ?>
	<div class="col inscription">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="ih-item circle effect18 left_to_right test1"><a href="/Forum-Pirate/index.php/inscription">
					<div class="img"><h3>Inscription</h3></div>
					<div class="info">
						<div class="info-back">
							<img src="/Forum-Pirate/img/Boutons/plume.png" alt="img">
						</div>
					</div>
				</a>
			</div>
			<!-- end normal -->

		</div>
	</div>
	<!-- end Left to right -->
</div>
<div class="col connexion text-center double">
	<?php require_once "./views/connexion.php"; ?>
</div>
<?php
}
else{
	?>
	<div class="col profil">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="ih-item circle effect18 left_to_right test1"><a href="/Forum-Pirate/index.php/profil">
					<div class="img"><h3>Profil</h3></div>
					<div class="info">
						<div class="info-back">
							<img src="/Forum-Pirate/img/Boutons/jollyroger.png" alt="img">
						</div>
					</div>
				</a>
			</div>
			<!-- end normal -->
		</div>
	</div>
	<!-- end Left to right -->
</div>
<div class="col"></div>
<div class="col mp">
	<!-- Left to right -->
	<div class="row">
		<div class="col-sm-6">
			<!-- normal -->

			<div class="ih-item circle effect18 left_to_right test1">
				<a href="/Forum-Pirate/index.php/mesprives">
					<div class="img">
						<h3>Messages Privés</h3>
					</div>
					<div class="info">
						<div class="info-back">
							<img src="/Forum-Pirate/img/Boutons/bouteille.png" alt="img" class="bouteille">
						</div>
					</div>
				</a>
			</div>
			<!-- end normal -->
		</div>
	</div>
	<!-- end Left to right -->
</div>
<div class="col"></div>
<div class="col disconnect">

	<div class="deconnexion" >
				<?php echo '<a href="/Forum-Pirate/index.php/'.$controllers[1].'/deconnexion"><input type="button" value="Déconnexion" id="deconnexion"></a>'; ?>
		</div>


			<p class="text-center">Bonjour mousaillon <?php echo $_SESSION['utilisateur']->nom_utilisateur(); ?>!<p>
			<form class="form-inline my-2 my-lg-0">
			 <input class="form-control " type="search" placeholder="Recherches" aria-label="Search">
			 <button class="btn" type="submit" id= "boutonrecherches">Recherches</button>
		 </form>	<!-- end normal -->
		</div>




<div class="col"></div>
<?php } ?>
</div>
