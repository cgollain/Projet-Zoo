<?php
        @include("header.php");
?>
<html>

<body>
    <?php
    @include("bdd.php");

    $resultat = mysqli_query($con, 'SELECT * from animal');
    ?>
    <br><br>
    <center>
    <h1>Affichage de tous les animaux</h1>
    <section class="activities">
    			<ul>
				<li>
    <table width=100% border=1>
        <tr>
            <td>Numéro animal : </td>
            <td>Nom animal: </td>
            <td>Détails animal : </td>
            <td>Modifier animal : </td>
            <td>Supprimer animal : </td>
        </tr>
        <?php
        while ($enreg = mysqli_fetch_array($resultat)) {
        ?>
            <tr>
                <td><?php echo $enreg["id_animal"]; ?></td>
                <td><?php echo $enreg["prenom"]; ?></td>

                <form method="post" action="aff_animal_traitement.php">
            <td><?php echo"<a href='aff_animal_traitement.php?id_animal=".$enreg['id_animal']."''>Détails</a>";?></td>
                </form>

                <form method="post" action="aff_animal_traitement.php">
                <td><?php echo "<a href='modif_animal.php?id_animal=".$enreg['id_animal']."'>Modifier</a>";?></td>
                </form>

                <form method="post" action="supprimer_animal.php">
                <td><?php echo"<a href='supprimer_animal.php?id_animal=".$enreg['id_animal']."'>Supprimé</a>";?></td>

                </form>

            </tr>
        <?php } ?>
        
    </table>
    <br>

</body>

</html>

