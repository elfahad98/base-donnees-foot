<?php
    // Exemple de configuration PostgreSQL
    // Remplacez les champs ci-dessous par vos propres identifiants

    $serveur = "postgresql-etu.unicaen.fr";
    $login = "votre_login";
    $base = "votre_base";
    $mdp = "votre_mot_de_passe";

    $connexion = "host=$serveur dbname=$base user=$login password=$mdp";
    $id_connexion = pg_connect($connexion) or die('Connexion impossible :' . pg_last_error());
?>

