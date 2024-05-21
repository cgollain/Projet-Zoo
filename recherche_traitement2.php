<?php
    @include("header.php");
?>
   <center>
<h1>Voici ce qu'on a trouvé pour cet identifiant</h1>

<section class="activities">
    			<ul>
				<li> 
<body>

    <section class="activities">
    			<ul>
				<li> 
    <?php
        @include("bdd.php");
        $id= $_POST['Num'];
        $requete="select * from personnel where id_personnel='$id'";
        $resultat=mysqli_query($con, $requete);
        ?>
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
    </body>
</html>