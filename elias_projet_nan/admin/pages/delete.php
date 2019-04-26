<?php

  global $db;
  $id=$_GET['id'];
  $results=array();
  $requete = $db->prepare("DELETE FROM maisons WHERE id=?");
  $requete->execute([$id]);

  header('location:index.php?page=liste');

?>