<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col box " > 
<div class="retour" onClick="getPage('Villes','');">
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"> <i class="material-icons">&#xE317;</i> </button> </div>
    <div class="image"> 
<style>
.imgville 
{
background-image: url("<?php echo "content/villes/". $result1['EscName']."/presentation.jpg" ?>");
}
</style>      
    <div class="imgville">
         
        </div> <div class="h2bis"> <?php echo $result1['Name']; ?> </div>
        </div>

        
    <div class="mdl-grid">
        
        <div class="mdl-cell mdl-cell--6-col">
            
            <div class="description">
                    
            <p><?php echo $result1['Description']; ?></p>
                
            </div>
            
        </div>
        
        <div class="mdl-cell mdl-cell--6-col">
            
            <div class="petitevent">
<?php
$evenement = $bdd->query("SELECT * FROM evenements WHERE Lieu = '".$result1['EscName']."'");
$evenement1 = $evenement->fetch();
?>
<table>
   <tr>
<style>
.imgevent1
{
background-image:url("<?php echo "content/evenements/".$evenement1['EscName']."/presentation.jpg" ?>");
 }

</style>
       <th rowspan="3"><div class="imgevent imgevent1"></div></th>
       <td><div class="titrevent"><?php echo $evenement1['Name']; ?></div></td>
   </tr>
   <tr>
       <td><div class="infog"> </div></td>
   </tr>
   <tr>
       <td><div class="infob"><?php echo $evenement1['Description']; ?></div></td>
   </tr>

</table>    
  
            </div>
            <div class="petitevent">
<?php
$bonplan = $bdd->query("SELECT * FROM bon_plan WHERE ville = '".$result1['EscName']."'");
$bonplan1 = $bonplan->fetch();
?>
<style>
.imgevent2
{
background-image:url("<?php echo "content/bon_plan/".$bonplan1['EscName']."/presentation.jpg" ?>");
 }

</style>
<table>
   <tr>
       <th rowspan="3"><div class="imgevent imgevent2"></div></th>
       <td><div class="titrevent"><?php echo $bonplan1['Name']; ?></div></td>
   </tr>
   <tr>
       <td><div class="infog"> </div></td>
   </tr>
   <tr>
       <td><div class="infob"><?php echo $bonplan1['Description']; ?></div></td>
   </tr>
</table>  
            </div>
            
        </div>

</div>