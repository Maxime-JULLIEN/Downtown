<?php
require "../bdd/bbd_connect.php" ;
$Data = $_REQUEST['Data'];
$villes = $bdd->query("SELECT * FROM villes WHERE Name LIKE '%".$Data."%' OR Description LIKE '%".$Data."%'");
while ($donnees = $villes->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$escname = $donnees['EscName'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col" onClick="getPage(\'Villes\',\''.$escname.'\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/villes/'.$escname .'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};
$villes->closeCursor();

$Evenements = $bdd->query("SELECT * FROM evenements WHERE Name LIKE '%".$Data."%' OR Lieu LIKE '%".$Data."%' OR Description LIKE '%".$Data."%'");
while ($donnees = $Evenements->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$escname = $donnees['EscName'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col box" onClick="getPage(\'Événements\',\''.$escname.'\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/evenements/'.$escname.'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};
$Evenements->closeCursor();

$Restaurants = $bdd->query("SELECT * FROM restaurants WHERE Name LIKE '%".$Data."%' OR Lieu LIKE '%".$Data."%' OR Description LIKE '%".$Data."%'");
while ($donnees = $Restaurants->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$escname = $donnees['EscName'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col box" onClick="getPage(\'Événements\',\''.$escname.'\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/evenements/'.$escname.'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};
$Restaurants->closeCursor();
?>


