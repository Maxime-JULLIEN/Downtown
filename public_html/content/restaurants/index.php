<?php
$devices = $bdd->query("SELECT * FROM restaurants");
while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$escname = $donnees['EscName'];
        $prix = $donnees['Prix'];
        $lieu = $donnees['Lieu'];
        $ville= $donnees['ville'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col" onClick="getPage(\'Restaurants\',\''.$escname.'\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/restaurants/'.$escname .'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};
$devices->closeCursor();
			
			?>