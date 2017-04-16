<div class="mdl-layout__drawer"> 
	<span class="mdl-layout-title mdl-layout-title--menu">
		<img class="logo-menu" src="/ressources/img/target.png">
	</span>
	<div class="mdl-drawer-separator"></div>
	<nav class="mdl-navigation">

			<?php
				$categories = $bdd->query('SELECT * FROM link ORDER BY ID ASC');

								while ($donnees = $categories->fetch())
									{
										$Name = $donnees['Name'];
										echo '<a class="mdl-navigation__link" onClick="getPage(\''.$Name.'\',\'\');" >'.$Name.' </a> '."\n";
									}
							$categories->closeCursor(); 
								?>
		<a class="mdl-navigation__link" onClick=' jQuery.ajax({ url: "content/villes/Bourges/index.php" , success: function (data) { $("#output").html(data); $("div.lazy").lazyload({effect : "fadeIn"}); componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); }});'>Afficher Ville statique</a> 
		</nav>
<script>
	    $(".mdl-navigation__link").click(function(){
        $(".mdl-layout__drawer").removeClass("is-visible");
		$(".mdl-layout__obfuscator").removeClass("is-visible");
    });	
</script>
	</div>