<div class="row navbar">
	<div class="col"></div>
	<div class="col faux-rhum">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="ih-item circle effect18 left_to_right"><a href="/Forum-Pirate/index.php/salons">
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
<?php if(!isset($_POST['pseudo'])){ ?>
	<div class="col inscription">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="ih-item circle effect18 left_to_right"><a href="/Forum-Pirate/index.php/inscription">
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
<div class="col"></div>
<?php 
} 
else{
	?>
	<div class="col profil">
		<!-- Left to right -->
		<div class="row">
			<div class="col-sm-6">

				<!-- normal -->
				<div class="ih-item circle effect18 left_to_right"><a href="/Forum-Pirate/index.php/profil">
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

			<div class="ih-item circle effect18 left_to_right">
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
<?php } ?>
</div>