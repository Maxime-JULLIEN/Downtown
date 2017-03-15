<div class="bottom-right">
	<div class="button-menu">
		
		<?php 
$data = $bdd->query("SELECT * FROM hoover_button");
while ($donnees = $data->fetch())
{ 
	$ID = $donnees['ID'];
	$Name = $donnees['Name'];
	$Page = $donnees['Page'];
	$Icon = $donnees['Icon'];
	echo'
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-color--primary mdl-color-text--white button" onClick="getDialog(\''.$Page.'\');" ><i class="material-icons">'.$Icon.'</i></button>
		<div class=" mdl-tooltip--left	mdl-tooltip" data-mdl-for="show-dialog'.$ID.'">'.$Name.'</div>
		
';
 
}
$data->closeCursor();
?>

				
</div>
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-color--accent mdl-color--primary mdl-color-text--white"> <i class="material-icons">add</i> </button>
</div>
<div id="dialog"></div>

<script type="text/javascript">

				function getDialog(Page) {
					jQuery.ajax({
						url: "content/"+Page+"/dialog.php"
						, success: function (data) {
							$('#dialog').html(data);
							componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); //recharger le JS
						}
						
					});
				}
	
			</script>