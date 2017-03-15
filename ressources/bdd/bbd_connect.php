<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id788811_downtow;charset=utf8', 'id788811_root', 'downtown');
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