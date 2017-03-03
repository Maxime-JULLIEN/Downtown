<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=downtown;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

/* 
// Retour sans affichage type erreur - Evite failles
catch(Exception $e)
{
    echo 'Echec de la connexion à la base de données';
    exit();
}
*/

?>