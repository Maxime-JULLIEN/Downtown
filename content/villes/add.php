<?php
require $_SERVER['DOCUMENT_ROOT'].'/bbd_connect.php';
if(isset($_POST['Name']) && isset($_POST['Ville'])&& isset($_POST['Description'])) {
    if(($_POST['Name'] !== '') && ($_POST['Ville'] !== '')&& ($_POST['Description'] !== '')) {
		$Name = $_POST['Name'];
		$Ville = $_POST['Ville'];
		$Description = $_POST['Description'];
		$bdd->exec("INSERT INTO `evenements` (`ID`, `Name`, `Ville`, `Description`) VALUES (NULL, '".$Name."', '".$Ville."', '".$Description."')");
        $reponse = 'ok';
    } else {
        $reponse = 'Les champs sont vides';
    }
} else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}
 
echo $reponse;
?>