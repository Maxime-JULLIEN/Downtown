<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col box ">
	<div class="retour" onClick="getPage('Villes','');">
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"> <i class="material-icons">&#xE317;</i> </button>
	</div>
	<style>
		.ville-title {
			position: absolute;
			font-size: 60px;
			line-height: 70px;
			top: 320px;
			left: 20px;
			width: 100%;
			color: #f5f5f5;
		}
		
		.mdl-button--mini-fab:hover {
			transition-property: background-color;
			transition-duration: 0.2s;
			transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
			background-color: white;
		}
		
		.imageville {
			background-position: center center;
			background-size: cover;
			height: 400px;
			filter: brightness(50%);
			-webkit-filter: brightness(50%);
			-moz-filter: brightness(50%);
			-o-filter: brightness(50%);
			-ms-filter: brightness(50%);
		}
		
		.mdl-card {
			margin-bottom: 16px;
		}
	</style>
	<div class="imageville">
		<style>
			.imageville {
				background-image: url(../../content/villes/<?php echo $result1['EscName']; ?>/presentation.jpg);
			}
		</style>
	</div>
	<div class="ville-title">
		<?php echo $result1['Name']; ?>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col">
					<?php echo $result1['Description']; ?>
				</div>
				<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col mdl-typography--text-center">
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--accent"> Définir comme ma ville préférée </button>
				</div>
			</div>
		</div>
		
	<?php
$villes = $bdd->query("SELECT * FROM evenements WHERE Lieu = '".$result1['EscName']."'");
$ville1 = $villes->fetch();
?>
		<style>
			.mdl-card.mdl-shadow--4dp.dphover {
    transition-property: box-shadow;
				transition-duration: 0.2s;}
			
			.mdl-card.mdl-shadow--4dp.dphover:hover {
    transition-property: box-shadow;
    transition-duration: 0.2s;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}
		</style>
		
			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp dphover" style="width : auto;">
					<div class="mdl-card__media"><img src="<?php echo "content/evenements/".$ville1['EscName']."/presentation.jpg" ?>"> </div>
					<div class="mdl-card__supporting-text"><?php echo $ville1['Name']; ?></div>
					<div class="mdl-card__supporting-text"> <?php echo $ville1['Description']; ?></div>
				</div>
			</div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp dphover" style="width : auto;">
					<div class="mdl-card__media"><img src="skytower.jpg"> </div>
					<div class="mdl-card__supporting-text"> Auckland Sky Tower, taken March 24th, 2014 </div>
					<div class="mdl-card__supporting-text"> The Sky Tower is an observation and telecommunications tower located in Auckland, New Zealand. It is 328 metres (1,076 ft) tall, making it the tallest man-made structure in the Southern Hemisphere. </div>
				</div>
			</div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp" style="width : auto;">
					<div class="mdl-card__media"><img src="<?php echo "content/evenements/".$ville1['EscName']."/presentation.jpg" ?>"> </div>
					<div class="mdl-card__supporting-text"><?php echo $ville1['Name']; ?></div>
					<div class="mdl-card__supporting-text"> <?php echo $ville1['Description']; ?></div>
				</div>
			</div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp" style="width : auto;">
					<div class="mdl-card__media"><img src="skytower.jpg"> </div>
					<div class="mdl-card__supporting-text"> Auckland Sky Tower, taken March 24th, 2014 </div>
					<div class="mdl-card__supporting-text"> The Sky Tower is an observation and telecommunications tower located in Auckland, New Zealand. It is 328 metres (1,076 ft) tall, making it the tallest man-made structure in the Southern Hemisphere. </div>
				</div>
			</div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp" style="width : auto;">
					<div class="mdl-card__media"><img src="<?php echo "content/evenements/".$ville1['EscName']."/presentation.jpg" ?>"> </div>
					<div class="mdl-card__supporting-text"><?php echo $ville1['Name']; ?></div>
					<div class="mdl-card__supporting-text"> <?php echo $ville1['Description']; ?></div>
				</div>
			</div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col ">
				<div class="mdl-card mdl-shadow--4dp" style="width : auto;">
					<div class="mdl-card__media"><img src="skytower.jpg"> </div>
					<div class="mdl-card__supporting-text"> Auckland Sky Tower, taken March 24th, 2014 </div>
					<div class="mdl-card__supporting-text"> The Sky Tower is an observation and telecommunications tower located in Auckland, New Zealand. It is 328 metres (1,076 ft) tall, making it the tallest man-made structure in the Southern Hemisphere. </div>
				</div>
			</div>
	</div>
</div>