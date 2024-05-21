<?php
        @include("header.php");
?>
<html>
<body>
<?php  
@include("bdd.php");
$code=$_GET['id_animal'];
$requete = "SELECT * FROM animal WHERE id_animal = '$code'";
$resultat=mysqli_query($con, $requete);
?>
<body><center>
    <h1>Détail sur l'animal</h1>
    <section class="activities">
    <ul>
    <li>      
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
    </table>
    </center>
</body>
</html>