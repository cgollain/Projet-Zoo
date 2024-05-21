<?php
    session_start();
?>
<body>
    <html>
        <?php
        @include("bdd.php");

        $a=$_POST["login"];
        $b=$_POST["motdepasse"];
        $_SESSION["nom"]=$_POST["login"];

     


        $requete= "SELECT * from personnel where login= '$a'and password= '$b'";

        
        $res=mysqli_query($con,$requete);
        $nb_resultats = mysqli_num_rows($res);
        
        if ($nb_resultats==1) {
            $info_utilisateur=mysqli_fetch_array($res);

            $_SESSION["fonction"] =$info_utilisateur["fonction"];
            header("location:menu.php");
        }
        else
            header("location:userfail.html");
?>
</body>
<html>
