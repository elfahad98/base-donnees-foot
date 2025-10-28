<?php
	include("mdp.php");
	
	$serveur="postgresql-etu.unicaen.fr";
	$login="combo211";
	$base="combo211_bd";
	$connexion="host=$serveur dbname=$base user=$login password=$mdp";
	$id_connexion=pg_connect($connexion) or die('Connexion impossible :'.pg_last_error());


	if (!$id_connexion) {
		die('Connexion impossible :' . pg_last_error());
	}
?>
