<div id="connexion">
<form name="connexionForm" id="connexionForm" action="#"><!-- début du formulaire de connexion -->   
	<span id="erreur"></span><!-- span qui contiendra les éventuels messages d'erreur -->
 
	<label for="login">Nom d'utilisateur :</label>
        <input type="text" name="login" id="login" /><!-- champ pour le login -->
 
	<label for="pass">Mot de passe :</label>
	<input type="password" name="pass" id="pass" /><!-- champ pour le mot de passe -->
 
        <input type="submit" value="Je me connecte" class="bouton" /><!-- bouton de connexion -->
</form><!-- fin du formulaire -->
	</div>

<script>

 $("#connexionForm").submit( function() {	// à la soumission du formulaire						 
		$.ajax({ // fonction permettant de faire de l'ajax
		   type: "POST", // methode de transmission des données au fichier php
		   url: "ressources/user/connexion.php", // url du fichier php
		   data: "login="+$("#login").val()+"&pass="+$("#pass").val(), // données à transmettre
		   success: function(msg){
			   	$('#output').html(msg);
			   // si l'appel a bien fonctionné
				if(msg==1) // si la connexion en php a fonctionnée
				{
					$("div#connexion").html("<span id=\"confirmMsg\">Vous &ecirc;tes maintenant connect&eacute;.</span>");
					// on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
				}
				else // si la connexion en php n'a pas fonctionnée
				{
					$("span#erreur").html("<img src=\"bomb.png\" style=\"float:left;\" />&nbsp;Erreur lors de la connexion, veuillez v&eacute;rifier votre login et votre mot de passe.");
					// on affiche un message d'erreur dans le span prévu à cet effet
				}
		   }
		});
		return false; // permet de rester sur la même page à la soumission du formulaire
	});


</script>