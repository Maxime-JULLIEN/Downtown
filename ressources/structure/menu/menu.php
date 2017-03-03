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
										$Link = "#rien";
										echo '<a class="mdl-navigation__link" onClick="getPage(\''.$Name.'\');">'.$Name.'</a> ';
									}
							$categories->closeCursor(); 
								?>
		
		</nav>
		<div class="center">
			<div class="bottom">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--white">Ajouter une catégorie</button>
			</div>
		</div>
	</div>