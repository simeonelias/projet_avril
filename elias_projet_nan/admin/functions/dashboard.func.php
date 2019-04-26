<?php

function compteMaison(){
	global $db;

	$requete=$db->query("SELECT * FROM maisons");
	$nbre = $requete->rowCount();

	return $nbre;
}
function compteUt(){
	global $db;

	$requete=$db->query("SELECT * FROM utilisateur");
	$nbre = $requete->rowCount();

	return $nbre;
}
function compteCom(){
	global $db;

	$requete=$db->query("SELECT * FROM comments");
	$nbre = $requete->rowCount();

	return $nbre;
}

?>