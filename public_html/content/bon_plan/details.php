<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col box " >
	
    <div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col box " >
			<div class="retour"  onClick="getPage('Bons Plans','');" >
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
<i class="material-icons">&#xE317;</i>
	</button>
	</div>

        
      <div class="image">
        <div class="imgville">
<style>
.imgville 
{
    background-image: url(../../content/bon_plan/<?php echo $result1['EscName']; ?>/presentation.jpg);
}
</style>
          <div class="h2bis"><?php echo $result1['Name']; ?></div>
        </div>

      </div>   
        
    <div class="mdl-grid">
        
        <div class="mdl-cell mdl-cell--5-col">
            
            <div class="description">
                    
<?php echo $result1['Description']; ?>
                
            </div>
            
        </div>
        
        <div class="mdl-cell mdl-cell--6-col">
            
            <div class="align">
                
           Bon Plan dans la ville <?php echo $result1['ville']; ?>
            </div>
            
        </div>
        
    </div>

</div>