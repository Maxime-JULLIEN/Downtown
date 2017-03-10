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
										echo '<a class="mdl-navigation__link" onClick="getPage(\''.$Name.'\');">'.$Name.'</a> ';
									}
							$categories->closeCursor(); 
								?>
		
		</nav>

	</div>