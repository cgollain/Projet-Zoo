<?php
include 'bdd.php';

if (isset($_GET['id_personnel'])) {
  $id_personnel = $_GET['id_personnel'];

  $sql = "DELETE FROM personnel WHERE id_personnel=$id_personnel";

  if (mysqli_query($con, $sql)) {
    header("Location: aff_employer.php");
  } else {
    echo "Erreur : " . mysqli_error($con);
  }
}

mysqli_close($con);
?>
