<?php
        @include("header.php");
?>
<center>
	<main>


		<section class="activities">
			<h2>Contact :</h2>
			<ul>
				<li>
				<?php
					if(!empty($_GET)){
						if ($_GET['confirm']=="true")
							echo 'Votre message à bien été envoyé ! ';
					}

				?>
				<form method ="POST" action ="contact_traitement.php">
					<h3>Sujet : </h3>
					<input type="text" name="sujet" size="100">
	
					<h3>Message : </h3>
					<textarea type="text" name="commentaire" rows="15" cols="100" > </textarea> <br><br>

				<input type="reset" value="Annuler">
                <input type="submit" name="Valider">
				</form>
				</li>
			</ul>
		</section>
	</main>
</body>
</html>
