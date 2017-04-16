
<?php	
$devices = $bdd->query("SELECT * FROM villes");
while ($donnees = $devices->fetch())
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
$devices->closeCursor();
			
			?>