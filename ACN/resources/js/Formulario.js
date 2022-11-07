
function validar(){
	
	var form = document.form;
	var nombre = document.getElementById('emailConfirmacion');
	var apellido = document.getElementById('emailConfirmacion');
	var email = document.getElementById('emailConfirmacion');
	var emailConfirmacion = document.getElementById('emailConfirmacion');

	alert(form.nombre.value());

	if (nombre.value() == 0) {
		// Alerta Nombre 
		alert("Ahhhh");
	} else if (apellido == 0) {
		// Alerta Apellido
	} else if (email == 0){

	} else if (emailConfirmacion == 0){

	}

	if (email.replace(" ","") != emailConfirmacion.replace(" ","")) {
		// Error email no ingresado
	}


}

//$("#btnConfirmacion").click(function ()){
//	swal("¡El mensaje se ha enviado correctamente!", {icon: "success",});
//}