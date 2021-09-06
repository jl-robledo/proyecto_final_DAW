function imprimeDatos(){
	document.write("<br> Imagen: " + this.imagen);
	document.write("<br> Noticia: " + this.noticia);
	document.write("<br> Url: " + this.url);
	document.write("<br> Descripcion: " + this.descripcion);
	document.write("<br> Fuente: " + this.fuente);
}

function novedadesNoticias(imagen, url, noticia, descripcion, fuente){
	this.imagen = imagen;
	this.url = url;
	this.noticia = noticia;
	this.descripcion = descripcion;
	this.fuente = fuente;
				
	this.imprimeDatos = imprimeDatos;
}
			

var novedades = new Array ();

	novedades[0] = new novedadesNoticias (
							"<div class='container'><img src='../utils/noticias/noticia1.jpg' class='imagen-noticia' alt='Panales con formas geometricas'>", 
							"<a href='https://elpais.com/ciencia/2020-10-02/las-abejas-que-dibujan-los-panales-mas-bellos-del-mundo.html' class='textos-link'>", "Dibujos de los panales</a></div>", 
							"<p class='textos-noticia'>Damos por hecho que las abejas son trabajadoras obedientes y solidarias y, por supuesto, armadas de aguijón. No siempre es así. La Tetragonula carbonaria, una abeja que vive en Australia, solo es trabajadora. No tiene aguijón, no sigue instrucciones de nadie y no trabaja en equipo. Y lo curioso es que, su trabajo independiente le hace producir algunos de los panales más artísticos y complejos que pueden encontrarse en la naturaleza. </p>" , 
							"<span class='textos-fuente'>(Fuente: elpais.com)</span>");
	novedades[1] = new novedadesNoticias (
							"<div class='container'><img src='../utils/noticias/noticia2.jpg' class='imagen-noticia' alt='Abejas juntas primer plano'>", 
							"<a href='https://elpais.com/ciencia/2020-04-15/como-los-animales-recurren-a-las-matematicas-para-sobrevivir.html' class='textos-link'>", "Animales y las Matematicas</a></div>",
							"<p class='textos-noticia'>Los animales usan los números en su día a día para tomar las buenas decisiones, que sea para reproducirse, comer, cazar, protegerse o desplazarse. “Los seres humanos hemos heredado de todo esto y saberlo nos ayuda a entender cómo ven el mundo en comparación con nosotros. En realidad, todas las especies, para negociar y sobrevivir, necesitamos tener bases matemáticas”</p>",
							"<span class='textos-fuente'>(Fuente: elpais.com)</span>");
	novedades[2] = new novedadesNoticias (
							"<div class='container'><img src='../utils/noticias/noticia3.jpg' class='imagen-noticia'>", 
							"<a href='https://elpais.com/elpais/2020/02/20/ciencia/1582157640_907150.html' class='textos-link' alt='Abejas realizando pruebas para estudios'>", "Inteligencia animales</a></div>",
							"<p class='textos-noticia'>El cerebro de la abeja tiene un millón de neuronas frente a los más de ochenta mil millones del de los humanos, pero cada nueva investigación sobre sus capacidades cognitivas obliga a repreguntarse cuál es el límite de la inteligencia en la familia de las abejas.</p>" ,
							"<span class='textos-fuente'>(Fuente: elpais.com)</span>");
	novedades[3] = new novedadesNoticias (
							"<div class='container'><img src='../utils/noticias/noticia4.jpg' class='imagen-noticia'>", 
							"<a href='https://elpais.com/ccaa/2019/05/20/valencia/1558366767_813573.html' class='textos-link' alt='Abeja recolectando polen'>","Polinizacion y economia</a></div>",
							"<p class='textos-noticia'>El valor que aporta la polinización apícola para la agricultura en la Comunitat Valenciana supera la cantidad de 400 millones de euros anuales, según ha destacado la Unió de Llauradors i Ramaders este lunes, Día Mundial de las Abejas.</p>",
							"<span class='textos-fuente'>(Fuente: elpais.com)</span>");

			


for ( var i = 0 ; i < novedades.length ; i++) {
	document.write(novedades[i].imagen + "<br>");			
	document.write(novedades[i].url + "<br>");
	document.write(novedades[i].noticia + "<br>");
	document.write(novedades[i].descripcion + "<br>");
	document.write(novedades[i].fuente + "<br>");
			
	document.write("<br><br>");
}