<?php	
$devices = $bdd->query("SELECT * FROM bon_plan");

while ($donnees = $devices->fetch())
{
	
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$escname = $donnees['EscName'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col box" onClick="getPage(\'Bons Plans\',\''.$escname.'\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/bon_plan/'.$escname.'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};

$devices->closeCursor();
			
			?>