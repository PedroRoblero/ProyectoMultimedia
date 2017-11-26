jQuery(document).on('submit','#formlg', function (event){
	event.preventDefault();

jQuery.ajax({
	url: 'login.php',
	type: 'POST',
	dataType: 'json',
	data:$(this).serialize(),
	beforeSend: function(){
		$('.botonlg').val('Validando...');
	}
})	
.done(function(respuesta) {
	console.log(respuesta);
	if(!respuesta.error){
		if(respuesta.tipo == 'admin'){
			location.href = 'index_admin.php';
		
		} else if(respuesta.tipo == 'alumno') {
			location.href = 'index_alumno.php'
		} else if(respuesta.tipo == 'admin_dae') {
			location.href = 'index_admin_dae.php'
		} else if(respuesta.tipo == 'admin_casino') {
			location.href = 'index_admin_casino.php'
		} else if(respuesta.tipo == 'funcionario') {
			location.href = 'index_funcionario.php'
		} else if(respuesta.tipo == 'secre') {
			location.href = 'index_secre.php'
		}else if(respuesta.tipo == 'asist_social') {
			location.href = 'index_asist_social.php'
		}
	}else {
		$('.error').slideDown('slow');
		setTimeout(function(){
			$('.error').slideUp('slow');
		},3000);
		$('.botonlg').val('Iniciar Sesion');
	}
	
})
.fail(function(resp) {
	console.log(resp.responseText);
})
.always(function() {
	console.log("complete");
	})
});