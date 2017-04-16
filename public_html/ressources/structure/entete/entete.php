	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
			<header class="mdl-layout__header mdl-layout__header--waterfall mdl-color--primary">
				<div class="mdl-layout__header-row"> 
					<span class="mdl-layout-title">Downtown<span class="only-large-screen mdl-layout--large-screen-only"> - Ciblez les évenements autour de vous</span></span>
					<div class="mdl-layout-spacer"></div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp"> <i class="material-icons">search</i> </label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="search" name="search" id="fixed-header-drawer-exp" onsearch="Search(this.value);">
</div>
						
					</div>
				</div>
			</header>
			
			<script>

							function Search(Data) {
					jQuery.ajax({
						url: "ressources/search/index.php"
						, data: 'Data=' + Data
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
			
			</script>