<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="./css/estilos_cabecera.css">
    <link rel="stylesheet" href="./css/estilos-formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>BeeApp</title>
</head>
<body>
    <header class="cabecera">
        <div class="container logo-nav-container">
            <a href="index.php" class="logo">
                <img src="./utils/logo.png" alt="logo" class="imagen-logo">
                <h3 class="brand">BeeApp</h3>
            </a>
            <span class="menu-icon">MENU</span>
            <nav class="navigation">
                <ul>
                    <li><a href="./screens/prensaScreen.php">Articulos de Prensa</a></li> 
                    <li><a href="./screens/shopScreen.php">Tienda</a></li> 
                    <?php 
                        session_start();
                        function logOut() {
                        session_destroy(); 
                        echo '<script>location.href = "./screens/loginScreen.php"</script>';
                        }
                        if(isset($_POST['button1'])) {
                            logOut();
                        }

                        if (isset( $_SESSION['admin'] )){
                            if($_SESSION['admin'] === 'si'){
                    ?>
                                <li><a href="./screens/adminScreen.php">Editar cliente</a></li>
                                <li><a href="./screens/insertarProductoScreen.php">Insertar producto</a></li>
                        
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
                            <li><a href="./screens/loginScreen.php">Login</a></li> 
                            <li><a href="./screens/registerScreen.php">Register</a></li>
                        <?php
                        }                                
                    ?> 
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="foto1"> 
            <img src="./utils/colmenaEntrada3.jpg" alt="Colmena fondo montaña"/> 
        </div>
        <div class="container">
            <h1>La Colmena</h1>
            <h4>Panal sin abejas, solo casas viejas</h4>
            <p>
                Las abejas son unos insectos extremadamente sociables que viven en colonias que se establecen
                 en forma de enjambres y en los que se organizan en una estricta jerarqu&iacutea de tres rangos 
                 sociales: la abeja reina, los z&aacutenganos y las abejas obreras. Habitan en todos los continentes 
                 de la Tierra excepto en la Ant&aacutertida, y se trata de uno de los insectos m&aacutes antiguos, 
                 del que se sabe, puebla nuestro planeta desde hace m&aacutes de de 30 millones de a&ntildeos. 
                 Se conocen m&aacutes de 20.000 subespecies distintas de abeja divididas en 7 familias reconocidas. 
            </p>

            <p>
                Las abejas son los insectos polinizadores por excelencia y tienen una funci&oacuten esencial para 
                el equilibrio de la naturaleza,  ya que contribuyen activamente a la supervivencia de muchas especies 
                de plantas que se reproducen gracias al transporte de polen que llevan a cabo estos pequeños animales 
                al alimentarse del n&eacutectar de las flores. Muchas de estas plantas las usamos los seres humanos 
                para producir algunos de nuestros alimentos. Viven una media de cinco a&ntildeos y no miden m&aacutes 
                de 1,5 cent&iacutemetros.
            </p>
            <p>
                Si todo va como la seda en su mundo, una abeja reina vive entre dos y tres a&ntildeos. Pero los 
                apicultores de Estados Unidos han comprobado que esa esperanza de vida se ha reducido a menos de la 
                mitad en los &uacuteltimos 10 a&ntildeos, y la ciencia trata de averiguar por qu&eacute.
            </p>
            <p>
                Es una de las muchas cuestiones que rodean el misterio de la mortandad de las abejas, un fen&oacutemeno 
                inquietante asociado a distintas causas, desde los par&aacutesitos hasta el uso de pesticidas y la 
                destrucci&oacuten del h&aacutebitat. Adem&aacutes de producir miel, la abeja europea presta un servicio 
                crucial a la agricultura: la polinizaci&oacuten. Sin ellas, muchos productos se ver&aacuten afectados. 
                Y, seg&uacuten David Tarpy, entom&oacutelogo de la Universidad Estatal de Carolina del Norte, aunque cerca 
                del 90% de los apicultores estadounidenses son aficionados, la mayor&iacutea de las colmenas forman parte 
                de operativos comerciales a gran escala.
            </p>         
        </div>
        <div class="foto2">
            <img src="./utils/panal.jpg" alt="panal de abejas" class="size-foto2">
        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-items">
                <a href="./screens/mapaWeb.php" class="mapa">Mapa Web</a>
                <a href="./screens/politicaPrivacidad.php" class="mapa">Politica de privacidad</a>
                <a href="./screens/avisoLegal.php" class="mapa">Aviso Legal</a>
                <a href="./screens/contactoScreen.php" class="mapa">Contacto</a>
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
    <script src="js/verMenu.js"></script>
    <script src="js/cookies_nuevas.js"></script>

</body>
</html>

