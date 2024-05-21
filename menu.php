
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mon Zoo</title>
	<link rel="stylesheet" href="styleindex.css">
</head>
<body>
	<header>
	<?php
        @include("header.php");
	?>
	</header>
	<main>
		<section class="hero">
			<h2>
			<?php
				echo 'Bonjour ';
				echo $_SESSION["nom"];
				echo ',';
			?>
			
		<h2>Bienvenue au réseau interne du Zoo</h2>
			<p>Ici on vous paye bien pour mieux vous dressez.</p>
		</section>
		<section class="featured-animals">
			<h2>Nos Animaux</h2>
			<ul>
				<li>
					<img src="img/girafe.jpg" alt="Girafe">
					<h3>Girafe</h3>
					<p>La girafe est un mammifère herbivore de la famille des giraffidés, endémique de l'Afrique.</p>
				</li>
				<li>
					<img src="img/tigre.jpg" alt="Tigre">
					<h3>Tigre</h3>
					<p>Le tigre est un mammifère carnivore de la famille des félidés, originaire d'Asie.</p>
				</li>
				<li>
					<img src="img/panda.jpg" alt="Panda">
					<h3>Panda</h3>
					<p>Le panda géant est un mammifère herbivore de la famille des ursidés, originaire de Chine.</p>
				</li>
			</ul>
		</section>
		<section class="activities">
			<h2>Nos Réunion prévus</h2>
			<ul>
				<li>
					<h3>27/06 : Gestion budget des différents enclos</h3>
					<p>Nous avons besoin d'être tous réuni pour savoir quel enclot à besoin de quel budget</p>
				</li>
				<li>
					<h3>08/04 : Besoin de bras pour déplacer le stockage de bambou !</h3>
					<p>Nous déplaçons la réserve de bambou, hésite pas à nous aidez !</p>
				</li>
				<li>
					<h3>19/08 : Réunion sur les spectables</h3>
					<p>Pour plannifier les spectables en fonctions des capacités de vos animaux.<p>
				</li>
			</ul>
		</section>
	</main>
</body>
</html>
