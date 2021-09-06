/* --- PARA ACCEDER AL FORMULARIO --- */
const formulario = document.getElementById('formulario');

/* --- PARA ACCEDER A LOS INPUT --- */
const inputs = document.querySelectorAll('#formulario input');

/* --- PARA CONTROLAR LAS EXPRESIONES REGULARES --- */
const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ0-9\s]{4,20}$/, // Letras y espacios, pueden llevar acentos. 3 a 20 caracteres
	descripcion: /^[a-zA-ZÀ-ÿ0-9\s\()]{20,150}$/, // Letras y espacios, pueden llevar acentos. 4 a 60 caracteres
	precio: /^[0-9\.]{1,8}$/, // Solo numeros, decimales con punto. 1 a 8 caracteres
	stock: /^[0-9]{1,4}$/, // Solo numeros. 1 a 4 caracteres
}


// iniciamos todo el objeto en false, porque si esta correcto se cambia a true despues de cada validacion
const campos = {
	nombre: false,
	descripcion: false,
	precio: false,
	stock: false,
}


const validarFormulario = (e) => {
    switch (e.target.name){
        
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "descripcion":
            validarCampo(expresiones.descripcion, e.target, 'descripcion');
        break;

        case "precio":
            validarCampo(expresiones.precio, e.target, 'precio');
        break;

        case "stock":
            validarCampo(expresiones.stock, e.target, 'stock');
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
    
	if(campos.nombre && campos.descripcion && campos.precio && campos.stock ){

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


