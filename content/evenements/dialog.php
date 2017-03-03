<?php
require $_SERVER['DOCUMENT_ROOT'].'/bbd_connect.php';
?>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Ajouter un évenement</h3>
	  
	<div class="container">
 <div id="preview"><img src="no-image.jpg" /></div>
    
 <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
  <input id="uploadImage" type="file" accept="image/*" name="image" />
 </form>
    <div id="err"></div>
</div>
	  
<form id="monForm" action="/content/evenements/add.php" method="post" onsubmit="SendForm(this); return false;">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
    <input class="mdl-textfield__input" type="text" id="Titre" name="Titre"> 
    <label class="mdl-textfield__label" for="Titre">Titre</label>
  </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="Lieu" name="Lieu" >
    <label class="mdl-textfield__label" for="Lieu">Lieu</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="Description" name="Description">
    <label class="mdl-textfield__label" for="Description">Description</label>
  </div>
<button type="submit" id="envoyer" value="Envoyer" class="mdl-button mdl-js-button mdl-button--primary">Envoyer</button>
</form>

  </div>

</div>


<script src="/ressources/js/dialog.js"></script>

