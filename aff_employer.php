<?php
        @include("header.php");
?>
<html>

<body>
    <?php
    @include("bdd.php");

    $resultat = mysqli_query($con, 'SELECT * from personnel');
    ?>
    <br><br>
    <center>
    <h1>Affichage de tout le personnel</h1>
    <section class="activities">
    			<ul>
				<li>
    <table width=100% border=1>
        <tr>
            <td>Identifiant : </td>
            <td>Nom : </td>
            <td>Prenom : </td>
            <td>Détails employé : </td>
            <td>Modifier employé : </td>
            <td>Supprimer employé : </td>
        </tr>
        <?php
        while ($enreg = mysqli_fetch_array($resultat)) {
        ?>
            <tr>
                <td><?php echo $enreg["id_personnel"]; ?></td>
                <td><?php echo $enreg["nom"]; ?></td>
                <td><?php echo $enreg["prenom"]; ?></td>

                <form method="post" action="aff_employer_traitement.php">
            <td><?php echo"<a href='aff_employer_traitement.php?id_personnel=".$enreg['id_personnel']."''>Détails</a>";?></td>
                </form>

                <form method="post" action="modif_employer.php">
                <td><?php echo "<a href='modif_employer.php?id_personnel=".$enreg['id_personnel']."'>Modifier</a>";?></td>
                </form>

                <form method="post" action="supprimer_employer.php.php">
                <td><?php echo"<a href='supprimer_employer.php?id_personnel=".$enreg['id_personnel']."'>Supprimé</a>";?></td>

                </form>

            </tr>
        <?php } ?>
        
    </table>
    <br>

</body>

</html>