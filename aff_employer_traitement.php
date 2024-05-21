<?php
        @include("header.php");
?>
<html>
<body>
<?php  
@include("bdd.php");
$code=$_GET['id_personnel'];
$requete = "SELECT * FROM personnel WHERE id_personnel = '$code'";
$resultat=mysqli_query($con, $requete);
?>
<body><center>
    <h1>Détail sur l'employé</h1>
    <section class="activities">
    <ul>
    <li>     
<table border=1>
<tr>
            <td>id_personnel</td>
            <td>date_de_naissance</td>
            <td>sexe</td>
            <td>nom</td>
            <td>prenom</td>
            <td>salaire</td>
            <td>login</td>
            <td>password</td>
        </tr>
    <?php while($enreg=mysqli_fetch_array($resultat))
    {
        ?>
    <tr>
        <td><?php echo $enreg["id_personnel"];?></td>
        <td><?php echo $enreg["date_de_naissance"];?></td>
        <td><?php echo $enreg["sexe"];?></td>
        <td><?php echo $enreg["nom"];?></td>
        <td><?php echo $enreg["prenom"];?></td>
        <td><?php echo $enreg["salaire"];?></td>
        <td><?php echo $enreg["login"];?></td>
        <td><?php echo $enreg["password"];?></td>

    </tr>
    <?php } ?>
    </table>
    </center>
</body>
</html>