<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>BeeApp - COOKIES</title>
</head>
<body>
    <header class="cabecera">
        <div class="container logo-nav-container">
            <a href="../index.php" class="logo">
                <img src="../utils/logo.png" alt="logo" class="imagen-logo">
                <h3 class="brand">BeeApp</h3>
            </a>
            <span class="menu-icon">MENU</span>
            <nav class="navigation">
                <ul>
                    <li><a href="./prensaScreen.php">Articulos de Prensa</a></li> 
                    <li><a href="./shopScreen.php">Tienda</a></li> 
                    <?php 
                        session_start();
                        function logOut() {
                        session_destroy(); 
                        echo '<script>location.href = "./loginScreen.php"</script>';
                        }
                        if(isset($_POST['button1'])) {
                            logOut();
                        }

                        if (isset( $_SESSION['admin'] )){
                            if($_SESSION['admin'] === 'si'){
                    ?>
                                <li><a href="./adminScreen.php">Editar cliente</a></li>
                                <li><a href="./insertarProductoScreen.php">Insertar producto</a></li>
                        
                    <?php   }  ?>        
                            <li>
                            <form method="post">
                                <input type="submit" name="button1"
                                        value="LogOut" class="formulario__logout" />
                            </form>
                    </li>
                        <?php
                        }else{
                            ?>
                            <li><a href="./loginScreen.php">Login</a></li> 
                            <li><a href="./registerScreen.php">Register</a></li>
                        <?php
                        }                                
                    ?> 
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="main">
        
        <div class="container">

        <h1>POLITICA DE COOKIES</h1>
        <p>Las cookies son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada usuario para que el servidor recuerde cierta información que posteriormente pueda utilizar.</p>

        TIPOS DE COOKIES QUE UTILIZAMOS
        <p>Esta página web utiliza cookies de terceros que son aquellas que se envían a tu ordenador o terminal desde un dominio o una página web que no es gestionada por nosotros, sino por otra entidad que trata los datos obtenidos a través de las cookies.</p>

        <p>En este caso las Cookies son utilizadas con fines estadísticos relacionados con las visitas que recibe y las páginas que se consultan, quedando aceptado su uso al navegar por ella.</p>

        <table class="tabla_legal">
            <thead class="tabla_legal">
                <tr class="tabla_legal">
                    <th>COOKIE(Y PROVEEDOR)</th>
                    <th>DURACIÓN</th>
                    <th>DESCRIPCIÓN</th>
                </tr>
            </thead>
            <tbody class="tabla_legal">
                <tr class="tabla_legal">
                    <td>__cfduid (notin.es)</td>
                    <td>Sesión</td>
                    <td>Publicidad</td>
                </tr>
                <tr class="tabla_legal">
                    <td>personalization_id(twitter.com)</td>
                    <td>Sesión</td>
                    <td>Twitter</td>
                </tr>
                <tr class="tabla_legal">
                    <td>Facebook</td>
                    <td>Publicidad, estadísticas y mediciones</td>
                    <td>Coloca Cookies en el ordenador o dispositivo y recibe la información almacenada en ellas cuando utilizas o visitas servicios prestados por otras empresas que utilizan los servicios de Facebook.</td>
                </tr>
                <tr class="tabla_legal">
                    <td> _ga (Google)</td>
                    <td>2 años</td>
                    <td>Se usa para distinguir a los usuarios.</td>
                </tr>
                <tr class="tabla_legal">
                    <td>_gid (Google)</td>
                    <td>24 horas</td>
                    <td>Se usa para distinguir a los usuarios.</td>
                </tr>
                <tr class="tabla_legal">
                    <td>_gat (Google)</td>
                    <td>1 minuto</td>
                    <td>Se usa para limitar el porcentaje de solicitudes. Si has implementado Google Analytics mediante Google Tag Manager, esta cookie se llamará _dc_gtm_property-id.</td>
                </tr>
                <tr class="tabla_legal">
                    <td>_gali (Google)</td>
                    <td>30s	</td>
                    <td>Atribución de enlace mejorada.</td>
                </tr>
                <tr class="tabla_legal">
                    <td>_unam (SHARETHIS)</td>
                    <td>Persistente</td>
                    <td>Su finalidad es cuantificar el número de Usuarios que comparten un determinado contenido y cuántas páginas web son visitadas a raíz de esa acción.</td>
                </tr>
                <tr class="tabla_legal">
                    <td>WordPress</td>
                    <td>2 años</td>
                    <td>Utilizado para el correcto funcionamiento del gestor de contenido WordPress.</td>
                </tr>
            </tbody>
        </table>
	
        <p>Si desea más información más sobre los tipos de cookies de seguimiento y análisis de datos de Google <a class="" href="https://policies.google.com/technologies/cookies?hl=es&gl=es#types-of-cookies" >haga clic aquí</a>.</p>

        <p>Para informarse sobre cómo eliminar las cookies de su explorador:</p>
        <ul>
            <li><a class="" href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias"></a>Firefox</li>
            <li><a class="" href="https://support.google.com/chrome/answer/95647?hl=es">Chrome</li>
            <li><a class="" href="https://support.microsoft.com/es-es/windows/eliminar-y-administrar-cookies-168dab11-0753-043d-7c16-ede5947fc64d">Internet Explorer</li>
            <li><a class="" href="https://support.apple.com/es-es/guide/safari/sfri11471/mac">Safari</li>
            <li><a class="" href="https://www.allaboutcookies.org/es/administrar-las-cookies/opera.html">Opera</li>
        </ul>


        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-items">
                <a href="./mapaWebScreen.php" class="mapa">Mapa Web</a>
                <a href="./politicaPrivacidad.php" class="mapa">Politica de privacidad</a>
                <a href="./avisoLegal.php" class="mapa">Aviso Legal</a>
                <a href="./contactoScreen.php" class="mapa">Contacto</a>
                <span>#JuntosPosLasAbejas</span>
            </div>
            <span>&copy;2021 pagina diseñada por @joseluisrobledo @kirillpanferov</span>
        </div>
    </footer>


    <div id="cajacookies">
        <p class="center">
        Éste sitio web usa cookies, si permanece aquí acepta su uso.
        Puede leer más sobre el uso de cookies en nuestra <a href="./screens/politicaCookies.php" class="mapa">política de privacidad</a>.
        <button onclick="aceptarCookies()" class="cookies__btn"><i class="fas fa-times"></i> Aceptar y cerrar éste mensaje</button>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/verMenu.js"></script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>