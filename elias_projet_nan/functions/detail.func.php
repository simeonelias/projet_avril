<?php
// function getM(){
//   global $db;
//   $id=$_GET['id'];
//   $results=array();
//   $requete = $db->prepare("SELECT * FROM maisons WHERE id=?");
//   $requete->execute([$id]);
//     $results=$requete->fetchObject();

//   return $results;
// }


function getM(){
	global $db;
	$id=$_GET['id'];

	$reqte= $db->prepare("
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
		WHERE maisons.id=?
		

	");

	$reqte->execute([$id]);
	$result = $reqte->fetchObject();
	return $result;
   
	return $result;
}



function comment($nom,$email,$commentaire){
	global $db;

	$c=array(
		'nom' => $nom,
		'email' => $email,
		'commentaire' => $commentaire,
		'maison_id' => $_GET["id"]

		);

$sql="INSERT INTO comments(nom,maison_id,email,commentaire,date) VALUES(:nom,:maison_id,:email,:commentaire,now())";
$req=$db->prepare($sql);
$req->execute($c);
}

function get_comments(){
	global $db;

	$req=$db->query("SELECT * FROM comments WHERE maison_id= '{$_GET['id']}' ORDER BY date DESC");

	$results=array();
	while ($rows=$req->fetchObject()) {
		$results[]=$rows;
	}
	return $results;
}
