    // Lorsque je soumets le formulaire
function SendForm(data){
 alert("fonctionne");0
        var $this = $(data); // L'objet jQuery du formulaire
 
        // Je récupère les valeurs
        var Titre = $('#Titre').val();
        var Lieu = $('#Lieu').val();
		var Description = $('#Description').val();
	
        if(Titre === '' ||  Lieu === ''||  Description === '') {
			if(Titre === ''){
				$('#Titre').parent('div').addClass('is-invalid');
				$("#Titre").attr('required', '');    //turns required on
			}
			if(Lieu === ''){
				$('#Lieu').parent('div').addClass('is-invalid');
				$("#Lieu").attr('required', '');    //turns required on
			}
			if(Description === ''){
				$('#Description').parent('div').addClass('is-invalid');
				$("#Description").attr('required', '');    //turns required on
			}
       } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) { // Je récupère la réponse du fichier PHP
                alert(html); // J'affiche cette réponse
				componentHandler.upgradeAllRegistered("https://code.getmdl.io/1.2.1/material.min.js"); //recharger le JS

                }
            });
        }
    };
	
	







$(document).ready(function (e) {
 $("#form").on('change',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid file')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
