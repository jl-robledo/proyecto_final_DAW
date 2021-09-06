/* --- PARA ACCEDER AL FORMULARIO --- */
const formulario = document.getElementById('formulario');

/* --- PARA ACCEDER A LOS INPUT --- */
const inputs = document.querySelectorAll('#formulario input');

/* --- PARA CONTROLAR LAS EXPRESIONES REGULARES --- */
const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{3,20}$/, // Letras y espacios, pueden llevar acentos. 3 a 20 caracteres
	apellidos: /^[a-zA-ZÀ-ÿ\s]{4,60}$/, // Letras y espacios, pueden llevar acentos. 4 a 60 caracteres
	password: /^[a-zA-Z0-9\_\-]{4,8}$/, // Letras, numeros, guion y guion_bajo. 4 a 8 caracteres
	email: /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i, // Validacion del email
	telefono: /^[0-9\-]{9}$/, // Solo numeros. 9 caracteres
}


// iniciamos todo el objeto en false, porque si esta correcto se cambia a true despues de cada validacion
const campos = {
	nombre: false,
	apellidos: false,
	password: false,
	email: false,
	telefono: false
}


const validarFormulario = (e) => {
    switch (e.target.name){
        
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "apellidos":
            validarCampo(expresiones.apellidos, e.target, 'apellidos');
        break;

        case "password":
            validarCampo(expresiones.password, e.target, 'password');
        break;

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

		case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
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


formulario.addEventListener('submit', (e) => {
    
    //terminos y condiciones chequeado
    const terminos = document.getElementById('terminos');
    
	if(campos.nombre && campos.apellidos && campos.password && campos.email && campos.telefono ){

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 3000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});


