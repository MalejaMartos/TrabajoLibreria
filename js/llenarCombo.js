$(document).on('ready',llenarCombobox());

function llenarCombobox(){
	$.ajax({
		type: 'POST',
		url: 'busqueda3.php'
	})
	.done(function(data){
		$('#combo').html(data);
	})
}