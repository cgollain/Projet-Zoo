<?php
        @include("header.php");
?>
<html>


<body>
    <center>
    <h1>Ajout d'un Animal</h1>
<section class="activities">
    			<ul>
				<li>

    <form method="post" action="ajt_animal.php">
        <label for="animal">Entrez les informations du nouvel arrivant.</label><br/>
        <select name="animal" class="animal">

            <?php
          @include("bdd.php");

            $reponse = mysqli_query($con, 'SELECT * FROM espece');

            while ($donnees = mysqli_fetch_assoc($reponse)) {
            ?>

                <option name="id_espece" value="<?php echo $donnees['id_espece']; ?>"> <?php echo $donnees['nom_espece']; ?></option>

            <?php
            }
            ?>
        </select>

        <p>Prenom : <input type="text" name="prenom" /></p>
        <p>Sexe :

        <p>
            M <input type="radio" name="sexe" value="M" /> F <input type="radio" name="sexe" value="F" />
        </p>

        <p>Date de naissance : <input type="date" name="date_naissance" /></p>
        <p>Commentaire : <input type="text" name="commentaire" /></p>



        <input type="submit" name="Valider" />
        <input type="reset" value="Annuler" />
        <br />
    </form>

    <?php
    if (isset($_POST['Valider'])) {
        $id = $_POST["animal"];
        $prenom =  addslashes($_POST["prenom"]);
        $sexe = $_POST["sexe"];
        $birthday = $_POST["date_naissance"];
        $comment = addslashes($_POST["commentaire"]);

        $req1 = "INSERT INTO animal VALUES ('', '$birthday','$sexe','$prenom','$comment','$id')";
        $r1 = mysqli_query($con, $req1);

        echo "<p>L'enregristrement a effectué</p>";

    } 
    ?>
</ul>
</li>
</section>
</body>

</html>