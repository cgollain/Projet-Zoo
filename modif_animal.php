<?php
        @include("header.php");
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion des animaux</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <center>
    <h1>Modification</h1>
    <section class="activities">
    			<ul>
				<li>

        <?php
        include("bdd.php");

        if (isset($_GET['id_animal'])) {
            $id_animal = $_GET['id_animal'];
        } else {
            header('Location: aff_animal.php');
            exit();
        }

        $resultat = mysqli_query($con, "SELECT * FROM animal WHERE id_animal = $id_animal");
        $enreg = mysqli_fetch_array($resultat);
        ?>

        <form method="post" action="modif_animal.php?id_animal=<?php echo $id_animal; ?>">
            <label for="animal">
                <h3>Changer les champs : :</h3>
                <p>Espece :</p>
            </label>
            <select name="animal" class="animal">
                <?php
                $reponse = mysqli_query($con, 'SELECT * FROM espece');

                while ($donnees = mysqli_fetch_assoc($reponse)) {
                    $selected = "";
                    if ($donnees['id_espece'] == $enreg['id_espece']) {
                        $selected = "selected";
                    }
                    ?>
                    <option value="<?php echo $donnees['id_espece']; ?>" <?php echo $selected; ?>>
                        <?php echo $donnees['nom_espece']; ?>
                    </option>
                <?php
                }
                ?>
            </select>

            <p>Prenom : <input type="text" name="prenom" value="<?php echo $enreg['prenom']; ?>" /></p>
            <p>Sexe :
                M <input type="radio" name="sexe" value="M" <?php if ($enreg["sexe"] == "M") echo "checked"; ?> />
                F <input type="radio" name="sexe" value="F" <?php if ($enreg["sexe"] == "F") echo "checked"; ?> />
            </p>
            <p>Date de naissance : <input type="date" name="date_naissance" value="<?php echo $enreg['date_naissance']; ?>" /></p>
            <p>Commentaire : <input type="text" name="commentaire" value="<?php echo $enreg['commentaire']; ?>" /></p>

            <input type="submit" name="Valider" value="Valider" />
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
            $requete = "UPDATE animal SET id_espece='$id', prenom='$prenom', sexe='$sexe', date_naissance='$birthday', commentaire='$comment' WHERE id_animal=$id_animal";
            $resultat = mysqli_query($con, $requete);

            if ($resultat) {
                header('Location: aff_animal.php');
                exit();
            } else {
                echo "Erreur lors de la mise à jour de l'animal : " . mysqli_error($con);
            }
        }

        mysqli_close($con);
        ?>

    </section>
    </body>
</html>

