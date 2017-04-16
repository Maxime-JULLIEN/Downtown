<?php
session_start();
	require_once "ressources/bdd/bbd_connect.php" ;
	include 'ressources/structure/head/head.php';
	include 'ressources/structure/entete/entete.php';
	include 'ressources/structure/menu/menu.php';
?>
	<main class=" mdl-layout__content mdl-color--grey-100">
					<div class="loader"><div class="mdl-spinner mdl-js-spinner is-active"></div></div>
		<script type="text/javascript">
				function getPage(Name,Data1) {
					jQuery.ajax({
						url: "get_page.php"
						, data: 'Name=' + Name  + '&Data1=' + Data1
						, type: "POST"
						,beforeSend: function() {
								$('#output').hide();
								$(".loader").show();
							}
						, success: function (data) {
							$(".loader").hide();
							$('#output').show();
							$('#output').html(data);
							$("div.lazy").lazyload({effect : "fadeIn"});
							componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); //recharger le JS
						}
						
					});
					
				}
$(function() {
getPage("Accueil","");
});	

			</script>
		
		<div class="page-content mdl-grid" id="output">

			
			
		</div>
		
<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>

		
		
	</main>
<div id="hoover_button" class="bottom-right" >
		<?php if (isset($_SESSION['IP'])) {
    if ($_SESSION['IP'] == $_SERVER['REMOTE_ADDR']) {
	include("ressources/hoover_button/hoover_button.php"); 
		}
    } 
	?>
</div>

<div id="dialog" style="display:none;">
<div id="myModal" class="modal">
  <div id="modal-content" class="modal-content">
	</div>
	</div>
</div>

	</div>
	</body>

	</html>