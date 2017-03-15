<?php
	require_once "ressources/bdd/bbd_connect.php" ;
	include 'ressources/structure/head/head.php';
	include 'ressources/structure/entete/entete.php';
	include 'ressources/structure/menu/menu.php';
?>
	<main class=" mdl-layout__content mdl-color--grey-100">
		<script type="text/javascript">
				function getPage(Name) {
					jQuery.ajax({
						url: "get_page.php"
						, data: 'Name=' + Name
						, type: "POST"
						, success: function (data) {
							$('#output').html(data);
							$("div.lazy").lazyload({effect : "fadeIn"});
							componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); //recharger le JS
						}
						
					});
					
				}
				
$(function() {
getPage("Accueil");
});			

			</script>
		
		<div class="page-content mdl-grid" id="output">
			
			
			
		</div>
	</main>
		<?php include("ressources/hoover_button/hoover_button.php");  ?>
	</div>
	</body>

	</html>