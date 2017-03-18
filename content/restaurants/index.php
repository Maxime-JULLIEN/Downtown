<?php/*	
$devices = $bdd->query("SELECT * FROM restaurants");
while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Nom'];
	$escname = $donnees['EscName'];
        $prix = $donnees['Prix'];
        $lieu = $donnees['Lieu'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col" onClick="getPage(\'content/restaurants/'.$escname.'/index.php\');" >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/restaurants/'.$escname .'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};
$devices->closeCursor();
			*/
			?>


<?php	
$devices = $bdd->query("SELECT * FROM evenements");

while ($donnees = $devices->fetch())
{
	
	$ID = $donnees['ID'];
	$Titre = $donnees['Titre'];
	$escTitre = $donnees['EscTitre'];
	$description = $donnees['Description'];
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col box " >
						<div class="mdl-card-picture lazy mdl-card--expand" data-original="content/evenements/'.$escTitre.'/presentation.jpg"></div>
						<div class="mdl-card__actions mdl-card--border">'.$Titre.'</div>
						<a href="/content/evenements/'.$escTitre.'/presentation.jpg"><span></span></a>
					</div> ';
};

$devices->closeCursor();
			
			?>