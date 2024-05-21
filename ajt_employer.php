<?php
        @include("header.php");
?>
<html>


<body>
    <center>
    <h1>Ajout</h1>
<section class="activities">
    			<ul>
				<li>

    <form method="post" action="ajt_employer.php">
        <label for="employer">Entrez les informations du nouvel arrivant.</label><br/><br/>
        <select name="employer" class="employer">

            <?php
          @include("bdd.php");?>
          

                <option name="fonction" value="Employer">Employé</option>
                <option name="fonction" value="Directeur">Directeur</option>
            
        </select>

        <p>Nom : <input type="text" name="nom" /></p>
        <p>Prenom : <input type="text" name="prenom" /></p>
        <p>Sexe :

        <p>
            M <input type="radio" name="sexe" value="M" /> F <input type="radio" name="sexe" value="F" />
        </p>

        <p>Date de naissance : <input type="date" name="date_de_naissance" /></p>
      
        <p>Salaire : <input type="text" name="salaire" /></p>

        <p>Login : <input type="text" name="login" /></p>
        <p>Password : <input type="text" step="0.01" name="password" /></p>


        <input type="submit" name="Valider" />
        <input type="reset" value="Annuler" />
        <br />
    </form>

    <?php
    if (isset($_POST['Valider'])) {
        $fonction = $_POST["employer"];
        $nom =  addslashes($_POST["nom"]);
        $prenom =  addslashes($_POST["prenom"]);
        $sexe = $_POST["sexe"];
        $birthday = $_POST["date_de_naissance"];
        $salaire = addslashes($_POST["salaire"]);
        $login = $_POST["login"];
        $password = $_POST["password"];

        $req1 = "INSERT INTO personnel VALUES ('', '$nom', '$prenom', '$birthday','$sexe','$fonction','$salaire', '$login', '$password')";
        $r1 = mysqli_query($con, $req1);

        echo "<p>L'enregristrement a effectué</p>";

    } 
    ?>
</ul>
</li>
</section>
</body>

</html>