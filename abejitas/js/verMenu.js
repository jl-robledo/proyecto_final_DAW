
//funcion para el boton de menu con resoluciones mas pequeñas de 768px
jQuery('document').ready(function($){
    
    // item que abre y cierra el menu de la clase menu-icon
    var menuBtn = $('.menu-icon'),
        //variable para el menu
        menu = $('.navigation ul');

    // cuando se pulse el boton        
    menuBtn.click(function() {
        // comprobacion de si tiene la clase mostrar
        if (menu.hasClass('mostrar')){
            menu.removeClass('mostrar');
        } else {
            menu.addClass('mostrar');
        }
    });
});