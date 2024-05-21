<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">   
    </head>
    <body>
        <?php
        @include("bdd.php");
        $a = $_POST["sujet"];
        $b = $_POST["commentaire"];
        $c = $_SESSION["nom"];
 
        $req1 = "INSERT INTO contact VALUES ('$c','$a','$b')";
        $r1 = mysqli_query($con, $req1);

        header('location:contact.php?confirm=true');
        exit();
        ?>
    </body>
</html>
