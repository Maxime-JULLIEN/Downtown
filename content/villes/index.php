<?php	
$devices = $bdd->query("SELECT * FROM villes");

while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$description = $donnees['Description'];
	echo '
	<style>
	.mdl-card-picture'.$ID.' {
	 background:url(\'/content/villes/'.$name .'/presentation.jpg\') center center #324a5e;
	    background-size: cover;
}
</style>';
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col" onClick="getPage(\'/content/villes/'.$name.'/index.php\');" >
						<div class="mdl-card-picture'.$ID.' mdl-card--expand"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
					</div> ';
};

$devices->closeCursor();
			
			?>