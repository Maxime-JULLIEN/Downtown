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
		<button id="show-dialog'.$ID.'" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-color--primary mdl-color-text--white button" onClick="getDialog(\''.$Page.'\');" ><i class="material-icons">'.$Icon.'</i></button>
		<div class=" mdl-tooltip--left	mdl-tooltip" data-mdl-for="show-dialog'.$ID.'">'.$Name.'</div>
		
';
 
}
$data->closeCursor();
?>

				
</div>
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-color--accent mdl-color--primary mdl-color-text--white"> <i class="material-icons">add</i> </button>
</div>
<div id="dialog" style="display:none;">
<div id="myModal" class="modal">
  <div id="modal-content" class="modal-content">
	</div>
	</div>
</div>

<script type="text/javascript">

				function getDialog(Page) {
					jQuery.ajax({
						url: "content/"+Page+"/dialog.php"
						,beforeSend: function() {
								$("#dialog").show();
							}
						, success: function (data) {
							$('#modal-content').html(data);
						componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); //recharger le JS
						}
						
					});
				};
	
	
	$(document).on('click','.close',function(){
	$('#modal-content').empty();
	$("#dialog").hide();
});

$(window).click(function(e) {   
	if (e.target.className == "modal") {
	$('#modal-content').empty();
	$("#dialog").hide();
    }
});
	
			</script>