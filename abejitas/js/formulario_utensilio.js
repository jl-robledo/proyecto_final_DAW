// iniciamos todo el objeto en false, porque si esta correcto se cambia a true despues de cada validacion
const camposUtensilio = {
	tamaño: false,
	material: false
}


const validarFormularioUtensilio = (e) => {
    switch (e.target.name){
        
        case "tamaño":
            validarCampoUtensilio(expresionesUtensilio.tamaño, e.target, 'tamaño');
        break;

        case "material":
            validarCampoUtensilio(expresionesUtensilio.material, e.target, 'material');
        break;

    }
}

// funcion de validar campo con 3 parametros ( expresion que queremos validar, el input, el campo del objeto)
const validarCampoUtensilio = (expresion, input, campo) => {
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

inputsUtensilio.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


formularioUtensilio.addEventListener('submit', (e) => {
    
	if(camposUtensilio.tamaño && camposUtensilio.material && camposUtensilio.peso ){

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