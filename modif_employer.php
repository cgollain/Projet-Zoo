    <?php
     @include("header.php");
      ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion des employés</title>
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

                            if (isset($_GET['id_personnel'])) {
                                $id_personnel = $_GET['id_personnel'];
                            } else {
                                header('Location: aff_employer.php');
                                exit();
                            }

                            $resultat = mysqli_query($con, "SELECT * FROM personnel WHERE id_personnel = $id_personnel");
                            $enreg = mysqli_fetch_array($resultat);
                        ?>

                        <form method="post" action="modif_employer.php?id_personnel=<?php echo $id_personnel; ?>">
                        
                                <h3>Changer les champs :</h3>
                                <p>Nom :</p>
                  
                            <input type="text" name="nom" value="<?php echo $enreg['nom']; ?>" />

                   
                                <p>Prénom :</p>
                      
                            <input type="text" name="prenom" value="<?php echo $enreg['prenom']; ?>" />

                  
                                <p>Salaire :</p>
                         
                            <input type="varchar" name="salaire" value="<?php echo $enreg['salaire']; ?>" />

                         
                                <p>Date de naissance :</p>
                          
                            <input type="date" name="date_naissance" value="<?php echo date('Y-m-d', strtotime($enreg['date_de_naissance'])); ?>" />

               
                                <p>Sexe :</p>
                         
                            M <input type="radio" name="sexe" value="M" <?php if ($enreg["sexe"] == "M") echo "checked"; ?> />
                            F <input type="radio" name="sexe" value="F" <?php if ($enreg["sexe"] == "F") echo "checked"; ?> />
                                <p>Login :</p>
                            <input type="text" name="login" value="<?php echo $enreg['login']; ?>" />

                                <p>Mot de passe :</p>
                            <input type="text" name="password" value="<?php echo $enreg['password']; ?>" />
                            <br>
                            <br>
                            <input type="submit" name="Valider" value="Valider" />
                            <input type="reset" value="Annuler"

<?php

    if (isset($_POST['Valider'])) {
        $id_personnel = $_GET['id_personnel'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $salaire = $_POST['salaire'];
        $date_naissance = $_POST['date_naissance'];
        $sexe = $_POST['sexe'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        $requete = "UPDATE personnel SET id_personnel='$id_personnel', nom = '$nom', prenom = '$prenom', salaire = '$salaire', date_de_naissance = '$date_naissance', sexe = '$sexe', login = '$login', password = '$password' WHERE id_personnel = $id_personnel";
        $resultat = mysqli_query($con, $requete);

        if ($resultat) {
            header('Location: aff_employer.php');
            exit();
        } else {
            echo "Erreur lors de la modification des données.";
        }
    }

     mysqli_close($con);
?>
    </section>
    </body>
</html>


