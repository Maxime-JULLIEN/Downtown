<?php	
$devices = $bdd->query("SELECT * FROM evenements");

while ($donnees = $devices->fetch())
{
	
	$ID = $donnees['ID'];
	$Titre = $donnees['Titre'];
	$escTitre = $donnees['EscTitre'];
	$description = $donnees['Description'];

	
	echo '
	<style>
	.mdl-card-picture'.$ID.' {
	 background:url(\'/content/evenements/'.$escTitre.'/presentation.jpg\') center center #324a5e;
	    background-size: cover;
}
</style>';
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col box " >
						<div class="mdl-card-picture'.$ID.' mdl-card--expand"></div>
						<div class="mdl-card__actions mdl-card--border">'.$Titre.'</div>
						<a href="/content/evenements/'.$escTitre.'/presentation.jpg"><span></span></a>
					</div> ';
};

$devices->closeCursor();
			
			?>