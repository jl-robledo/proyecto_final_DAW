/* --- PARA ACCEDER AL FORMULARIO --- */
const formularioAlimento = document.getElementById('Box2');

/* --- PARA ACCEDER A LOS INPUT --- */
const inputsAlimento = document.querySelectorAll('#formulario input');

/* --- PARA CONTROLAR LAS EXPRESIONES REGULARES --- */
const expresionesAlimento = {
	fechaEnv: /^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/, // Fecha envasado
	fechaCad: /^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/, // Fecha caducidad
	peso: /^[0-9\.]{1,4}$/, // Solo numeros. 1 a 4 caracteres
}


// iniciamos todo el objeto en false, porque si esta correcto se cambia a true despues de cada validacion
const camposAlimento = {
	fechaEnv: false,
	fechaCad: false,
	peso: false
}


const validarFormularioAlimento = (e) => {
    switch (e.target.name){
        
        case "fechaEnv":
            validarCampoAlimento(expresionesAlimento.fechaEnv, e.target, 'fechaEnv');
        break;

        case "fechaCad":
            validarCampoAlimento(expresionesAlimento.fechaCad, e.target, 'fechaCad');
        break;

        case "peso":
            validarCampoAlimento(expresionesAlimento.peso, e.target, 'peso');
        break;
    }
}

// funcion de validar campo con 3 parametros ( expresion que queremos validar, el input, el campo del objeto)
const validarCampoAlimento = (expresion, input, campo) => {
    if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fas fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fas fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fas fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fas fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputsAlimento.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


formularioAlimento.addEventListener('submit', (e) => {
    
	if(camposAlimento.fechaEnv && camposAlimento.fechaCad && camposAlimento.peso ){

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