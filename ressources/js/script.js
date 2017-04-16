function object(val,IP,Link,ON,OFF) {
	$data = $(val).prop('checked') ? ON : OFF;
	$.ajax({
		url: 'http://' + IP + Link + $data
	});
}

function myFunction2(now_state) {
	$.ajax({
		url: 'state_button_change.php', // La ressource ciblée
		type: 'GET', // Le type de la requête HTTP.
		data: 'ID' + '=' + now_state
	});
}

	
function ShowSnack(data){
	  var snackbarContainer1 = document.querySelector('#demo-toast-example');

    snackbarContainer1.MaterialSnackbar.showSnackbar({message: data});
}

$(function() {
	$(".mdl-navigation__link,.bottom").on("click", function () {
		$(".mdl-layout__drawer").removeClass("is-visible");
		$(".mdl-layout__obfuscator").removeClass("is-visible");
	});
});
