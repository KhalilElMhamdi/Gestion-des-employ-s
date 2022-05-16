<?php
  include_once "connexion.php";
  $id= $_GET['id'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM employe WHERE id = $id");
  header("Location:index.php")
?>