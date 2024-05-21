<?php
            @include("header.php");
            ?>
<html>


<body><center>
    <h1>Ajout espece</h1>

    <section class="activities">
    			<ul>
				<li>
    <form method="post" action="ajt_espece.php">
        <label for="espece">Entrez les informations concernant la nouvelle espèce</label><br />
            <?php
            @include("bdd.php");
            ?>
            <p>Nom de l'espèce : <input type="text" name="nom_espece" /></p>

            <p>Régime alimentaire : <br>
            <select name="regime_alimentaire">
                <option value="Carnivore">Carnivore</option>
                <option value="Herbivore">Herbivore</option>
                <option value="Omnivore">Omnivore</option>
            </select>
            </p>



            <p>Espérance de vie moyenne: <input type="number" name="esperance_de_vie_moyenne" /></p>



            <p>Espèce aquatique ? :

            <p>
                Oui <input type="radio" name="aquatique" value="1" /> Non <input type="radio" name="aquatique" value="0" />
            </p>


            <input type="submit" name="Valider" />
            <input type="reset" value="Annuler" />
            <br />
    </form>

    <?php
    if (isset($_POST['Valider'])) {
        $nom_espece =  addslashes($_POST["nom_espece"]);
        $regime_alimentaire = $_POST["regime_alimentaire"];
        $esperance_de_vie_moyenne = $_POST["esperance_de_vie_moyenne"];
        $aquatique = $_POST["aquatique"];

        $req1 = "INSERT INTO espece VALUES ('', '$nom_espece','$regime_alimentaire','$esperance_de_vie_moyenne','$aquatique')";
        $r1 = mysqli_query($con, $req1);

        echo "<p>L'enregristrement a effectué</p>";

    
    }
    ?>


</body>

</html>