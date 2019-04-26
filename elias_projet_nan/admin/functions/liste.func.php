<?php
function getM(){
  global $db;
  $results=array();
  $requete = $db->query("SELECT * FROM maisons");

  while ($rows=$requete->fetchObject()) {
    $results[]=$rows;
  }

  return $results;
}

?>