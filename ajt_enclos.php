<?php
            @include("header.php");
            ?>
<html>


<body><center>
    <h1>Ajout</h1>

    <section class="activities">
    			<ul>
				<li>
    <form method="post" action="ajt_enclos.php">
        <label for="espece">Entrez les informations concernant le nouvelle enlos</label><br />
            <?php
            @include("bdd.php");
            
            ?>

            <p>ID de l'enclot (format A04): <input type="text" name="id_enclos" /></p>
            
            <p>Nom de l'enclot: <input type="text" name="nom_enclos" /></p>

            <p>Capacité maximum de l'enlos: <input type="number" name="capacite_max" /></p>

            <p>Taille de l'enlos: <input type="number" name="taille" /></p>
            
            <p>Présence d'eau :<p> Oui <input type="radio" name="eau" value="1" /> Non <input type="radio" name="eau" value="0" /></p>

                <label for="id_personnel">Personnel assigné:</label>
                    <select name="id_personnel">
                    <?php
                        $reponse = mysqli_query($con, 'SELECT * FROM personnel');
                        while ($donnees = mysqli_fetch_assoc($reponse)) {
                    ?>
                        <option value="<?php echo $donnees['id_personnel']; ?>"><?php echo $donnees['nom']; ?></option>
                    <?php } ?>
                    </select>

            <input type="submit" name="Valider" />
            <input type="reset" value="Annuler" />
            <br />
    </form>

    <?php
    if (isset($_POST['Valider'])) {
        $id_enclos=$_POST["id_enclos"];
        $nom_enclos =  addslashes($_POST["nom_enclos"]);
        $capacite_max = $_POST["capacite_max"];
        $taille = $_POST["taille"];
        $eau = $_POST["eau"];
        $id_personnel=$_POST["id_personnel"];
        
        

        $req1 = "INSERT INTO enclos VALUES ('$id_enclos ', '$nom_enclos','$capacite_max','$taille','$eau','$id_personnel')";
        $r1 = mysqli_query($con, $req1);

        echo "<p>L'enregristrement a effectué</p>";

    
    }
    ?>


</body>

</html>