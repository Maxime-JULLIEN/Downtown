<?php
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
	</main>
		<?php include("ressources/hoover_button/hoover_button.php");  ?>
	</div>
	</body>

	</html>