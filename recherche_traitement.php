<?php
    @include("header.php");
?>
   <center>
<h1>Voici ce qu'on a trouvé pour cet identifiant</h1>

<body>

    <section class="activities">
    			<ul>
				<li> 
    <?php
        @include("bdd.php");
        $id= $_POST['Num'];
        $requete="select * from animal where id_animal='$id'";
        $resultat=mysqli_query($con, $requete);
        ?>
         <table border=1>
        <tr>
            <td>id_animal</td>
            <td>date_naissance</td>
            <td>sexe</td>
            <td>prenom</td>
            <td>commentaire</td>
            <td>id_espece</td>
        </tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
    {
        ?>
    <tr>
        <td><?php echo $enreg["id_animal"];?></td>
        <td><?php echo $enreg["date_naissance"];?></td>
        <td><?php echo $enreg["sexe"];?></td>
        <td><?php echo $enreg["prenom"];?></td>
        <td><?php echo $enreg["commentaire"];?></td>
        <td><?php echo $enreg["id_espece"];?></td>
    </tr>
    <?php } ?>
    </body>
</html> 