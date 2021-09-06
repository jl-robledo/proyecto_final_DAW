/* --- PARA ACCEDER AL FORMULARIO --- */
const formulario = document.getElementById('formulario');

/* --- PARA ACCEDER A LOS INPUT --- */
const inputs = document.querySelectorAll('#formulario input');

/* --- PARA CONTROLAR LAS EXPRESIONES REGULARES --- */
const expresiones = {
	email: /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i, // Validacion del email
	password: /^[a-zA-Z0-9\_\-]{4,8}$/, // Letras, numeros, guion y guion_bajo. 4 a 8 caracteres
}


// iniciamos todo el objeto en false, porque si esta correcto se cambia a true despues de cada validacion
const campos = {
	email: false,
	password: false
}


const validarFormulario = (e) => {
    switch (e.target.name){

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

        case "password":
            validarCampo(expresiones.password, e.target, 'password');
        break;

    }
}

// funcion de validar campo con 3 parametros ( expresion que queremos validar, el input, el campo del objeto)
const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}



inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', () => {
    
    //terminos y condiciones chequeado
    const terminos = document.getElementById('terminos');
    
	if(campos.email && campos.password){

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});