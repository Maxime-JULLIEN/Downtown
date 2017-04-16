<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col box " >
	
<div class="retour"  onClick="getPage('Villes','');" >
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
<i class="material-icons">&#xE317;</i>
	</button>
	</div>
        
		
<style>
.image { 
    width: 100%;
    position: center; 
}
.h2bis { 
   text-align: center;  
   top: 85%; 
   position: relative;
   height: 50%;
   font-size: 60px;
}


.imgville{
    background-image:url('../../content/villes/Bourges/presentation.jpg');
    background-position: center center;
    height: 400px;
    border: none;
    border-radius: initial;
}		
</style>		
		
		
      <div class="image">
        <div class="imgville">
<style>
.imgville 
{
    background-image: url(../../content/villes/<?php echo $result1['EscName']; ?>/presentation.jpg);
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
        
      <!--  <div class="mdl-cell mdl-cell--6-col">
            
            <div class="align">
                
            Evenements dans la ville Bourges
                
            </div>
            
        </div> -->
        
    </div>

</div>