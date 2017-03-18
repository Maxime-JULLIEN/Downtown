<?php
include 'ressources/bdd/bbd_connect.php';
if(isset($_POST['Titre']) && isset($_POST['Lieu'])&& isset($_POST['Description']&&  isset ($Prix = $_Post['Prix];)) {
    if(($_POST['Titre'] !== '') && ($_POST['Lieu'] !== '')&& ($_POST['Description'] !== ''))&& ($_POST['prix'] !== '')) {
		$Name = $_POST['Nom'];
		$Lieu = $_POST['Lieu'];
		$Description = $_POST['Description'];
                $Prix = $_Post['Prix];
         
		
	$EscTitre=str_replace(' ','-',$Titre); // on remplace l'espace par un - 

	$EscTitre = htmlentities($EscTitre, ENT_NOQUOTES, 'utf-8');
$EscTitre = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $EscTitre);
$EscTitre = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $EscTitre);
$EscTitre = preg_replace('#&[^;]+;#', '', $EscTitre);

	$dossier = $_SERVER['DOCUMENT_ROOT'].'/content/restaurants/'.$EscTitre.'/';
if(!is_dir($dossier)){
   mkdir($dossier,0777,true);
}