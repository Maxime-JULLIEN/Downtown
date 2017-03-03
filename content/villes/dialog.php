<?php
require $_SERVER['DOCUMENT_ROOT'].'/bbd_connect.php';
$ID = $_REQUEST['ID'];
$pages = $bdd->query("SELECT * FROM hoover_button WHERE ID = '".$ID."'");
$result = $pages->fetch();
$Name = $result['Name'];

/*	
	$namenospaces=str_replace(' ','-',$name); // on remplace l'espace par un - 
		$str = $namenospaces;

	$str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
$str = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $str);
$str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
$str = preg_replace('#&[^;]+;#', '', $str);
	$namenospaces = $str;

	$dossier = 'content/evenements/'.$namenospaces.'/';
if(!is_dir($dossier)){
   mkdir($dossier,0777,true);
}
*/
echo'
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>'.$Name.'</h3>
<form id="monForm" action="/content/add.php" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id=" Name" name="Name"> 
    <label class="mdl-textfield__label" for="Name">Name</label>
  </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="Ville" name="Ville">
    <label class="mdl-textfield__label" for="Ville">Ville</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="Description" name="Description">
    <label class="mdl-textfield__label" for="Description">Description</label>
  </div>
      <input type="submit" id="envoyer" value="Envoyer" />

</form>

  </div>

</div>
';
?>

<script>
	$(document).ready(function() {
    // Lorsque je soumets le formulaire
    $('#monForm').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
 
        var $this = $(this); // L'objet jQuery du formulaire
 
        // Je récupère les valeurs
        var pseudo = $('#pseudo').val();
        var mail = $('#mail').val();
 
        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(pseudo === '' || mail === '') {
            alert('Les champs doivent êtres remplis');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) { // Je récupère la réponse du fichier PHP
                    alert(html); // J'affiche cette réponse
                }
            });
        }
    });
});
	
	
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var dialog = document.getElementById("show-dialog");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
dialog.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

