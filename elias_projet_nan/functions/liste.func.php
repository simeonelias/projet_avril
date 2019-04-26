<?php
// function getM(){
//   global $db;
//   $results=array();
//   $requete = $db->query("SELECT * FROM maisons");

//   while ($rows=$requete->fetchObject()) {
//     $results[]=$rows;
//   }

//   return $results;
// }


function getM(){
	global $db;
$result=array();
	$reqte= $db->query("
		SELECT 
			maisons.id,
			maisons.titre,
			maisons.type,
			maisons.description,
			maisons.image,
			maisons.constructeur,
			utilisateur.nom,
			utilisateur.prenom,
			utilisateur.email
		FROM maisons
		JOIN utilisateur
    ON maisons.constructeur=utilisateur.id
    limit 0,100
		

	");
   while($rows= $reqte->fetchObject()){
     $result[]=$rows;
   }
   
	return $result;
}


?>