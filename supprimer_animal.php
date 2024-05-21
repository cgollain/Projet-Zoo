<?php
include 'bdd.php';

if (isset($_GET['id_animal'])) {
  

  $id_animal = $_GET['id_animal'];

  $sql = "DELETE FROM animal WHERE id_animal=$id_animal";

  if (mysqli_query($con, $sql)) {
    header("Location: aff_animal.php");
  } else {
    echo "Erreur : " . mysqli_error($con);
  }
}

mysqli_close($con);
?>
