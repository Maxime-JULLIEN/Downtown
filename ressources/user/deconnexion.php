<?php
session_start();
session_destroy();
?>

<script>
getPage("Accueil","");	
	ShowSnack("Vous êtes déconnecté");
	$('.bottom-right').empty();
$(".unconnected").show();
$('.connected').hide();
</script>