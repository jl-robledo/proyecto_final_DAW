
// PRIVACIDAD 
window.onload = function privacidad(){
    if (confirm("¿Acepta Politica de Privacidad?")){ 
        // creo una cookie de usuario, se podria hacer de una manera que pidiera el nombre de usuario
        // o que se creara cuando se registre con el nombre de usuario
        setCookie("user", "user", 3);

        // creo una cookie del momento exacto de la conexion a la pagina 
        var hoy = new Date ();
        var fecha = hoy.getDate() + '-' + (hoy.getMonth()+1) + '-' + hoy.getFullYear();
        var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
        var fechaHora = fecha + ' ' + hora;
        setCookie("date", "fechaHora",3);
        
        
        //comprobacion de que se han creado
        //verCookies();
        console.log(fechaHora);
       

    } else { 
        // en caso de que no acepte la politica de privacidad le lleva a la pagina de google
        window.location.replace("https://www.google.com/");
    }
}




// FUNCIONES PARA EL TRATAMIENTO DE LAS COOKIES

// funcion para visualizarlas rapido
function verCookies(){
    alert("Cookies actuales:\n" + document.cookie);
}

// funcion para establecer una cookie
function setCookie(nombre, valor, expiracion){
    var fecha = new Date ();
    fecha.setTime(fecha.getTime() + expiracion * 24 * 60 * 60 * 1000);
    var expiracion = "expires=" + fecha.toUTCString();
    document.cookie = nombre + "=" + valor + ";" + expiracion + "; path=/";
}


// funcion para obtener la cookie
function getCookie(nombre){
    var nom = nombre + "=";
    var array = document.cookie.split(";");
    for (var i=0 ; i < array.length ; i++){
        var c = array[i];
        while (c.charAt(0)==" "){
            c = c.substring(1);
        }
        if (c.indexOf(nombre)==0){
            return c.substring(nom.length, c.length);
        }
    }
    // en caso de que no encuentre nada que devuelva algo vacio
    return "";
}


// funcion para borrar una cookie
function deleteCookie(nombre){
    // le pasamos por parametros el nombre de la cookie, cadena vacia, y 0 para los dias, para que sea al instante.
    setCookie(nombre,"",0);
}