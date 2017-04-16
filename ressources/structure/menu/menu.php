<div class="mdl-layout__drawer"> <span class="mdl-layout-title mdl-layout-title--menu">
		<img class="logo-menu" src="/ressources/img/target.png">
	</span>
	<?php

if (isset($_SESSION['id']) AND isset($_SESSION['login'])){ 
	echo ('<style>.unconnected{display:none;}</style>');
} 
	else
	{
		echo ('<style>.connected{display:none;}</style>');
	}
	?>

		<a class="mdl-navigation__link unconnected mdl-typography--text-center" onClick="getPage('Identification','');">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Se connecter</button>
		</a>
		<a class="mdl-navigation__link connected mdl-typography--text-center" onClick="getPage('Espace membre','');">
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Espace membre</button>
		</a>
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
			
				<div class="center">
					<div class="bottom connected" onClick="getPage('Deconnexion','');">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Se déconnecter</button>
					</div>
				</div>
		</nav>

</div>