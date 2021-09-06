const tarjeta = document.querySelector('#tarjeta'),
	  formulario = document.querySelector('#formulario-tarjeta'),
	  numeroTarjeta = document.querySelector('#tarjeta .numero'),
	  nombreTarjeta = document.querySelector('#tarjeta .nombre'),
	  mesExpiracion = document.querySelector('#tarjeta .mes'),
	  yearExpiracion = document.querySelector('#tarjeta .year');
	  ccv = document.querySelector('#tarjeta .ccv');



// * Select del mes generado dinamicamente.
for(let i = 1; i <= 12; i++){
	let opcion = document.createElement('option');
	opcion.value = i;
	opcion.innerText = i;
	formulario.mes.appendChild(opcion);
}

// * Select del año generado dinamicamente.
const yearAct = new Date().getFullYear();
for(let i = yearAct; i <= yearAct + 4; i++){
	let opcion = document.createElement('option');
	opcion.value = i;
	opcion.innerText = i;
	formulario.year.appendChild(opcion);
}

// VALIDACION DEL NUMERO DE LA TARJETA
formulario.inputNumero.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.inputNumero.value = valorInput
	// eliminar espacios en blanco, las letras y separamos los digitos en grupos de 4
	.replace(/\s/g, '')
	.replace(/\D/g, '')
	.replace(/([0-9]{4})/g, '$1 ')
	

});

// VALIDACION DEL TITULAR DE LA TARJETA
formulario.inputNombre.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	// eliminamos los numeros en el campo nombre
	formulario.inputNombre.value = valorInput.replace(/[0-9]/g, '');
	nombreTarjeta.textContent = valorInput;

});

// VALIDACION DEL CODIGO CCV 
formulario.inputCVV.addEventListener('keyup', () => {
	formulario.inputCVV.value = formulario.inputCVV.value
	// eliminamos los espacios y letras
	.replace(/\s/g, '')
	.replace(/\D/g, '');

	ccv.textContent = formulario.inputCVV.value;
});




// ----- MES ----- // 
formulario.selectMes.addEventListener('change', (e) => {
	mesExpiracion.textContent = e.target.value;
});

// ----- AÑO  ----- //
formulario.selectYear.addEventListener('change', (e) => {
	yearExpiracion.textContent = e.target.value.slice(2);
});

