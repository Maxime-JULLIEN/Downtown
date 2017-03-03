<?php
require $_SERVER['DOCUMENT_ROOT'].'/bbd_connect.php';
if(isset($_POST['Titre']) && isset($_POST['Lieu'])&& isset($_POST['Description'])) {
    if(($_POST['Titre'] !== '') && ($_POST['Lieu'] !== '')&& ($_POST['Description'] !== '')) {
				$Titre = $_POST['Titre'];
		$Lieu = $_POST['Lieu'];
		$Description = $_POST['Description'];
		
	$EscTitre=str_replace(' ','-',$Titre); // on remplace l'espace par un - 

	$EscTitre = htmlentities($EscTitre, ENT_NOQUOTES, 'utf-8');
$EscTitre = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $EscTitre);
$EscTitre = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $EscTitre);
$EscTitre = preg_replace('#&[^;]+;#', '', $EscTitre);

	$dossier = $_SERVER['DOCUMENT_ROOT'].'/content/evenements/'.$EscTitre.'/';
if(!is_dir($dossier)){
   mkdir($dossier,0777,true);
}

		

		$bdd->exec("INSERT INTO `evenements` (`ID`, `Titre`, `EscTitre`, `Lieu`, `Description`) VALUES (NULL, '".$Titre."','".$EscTitre."', '".$Lieu."', '".$Description."')");
        $reponse = "ok";
    } else {
        $reponse = 'Les champs sont vides';
    }
} else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}
 
echo $reponse;
?>