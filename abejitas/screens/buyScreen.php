<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <link rel="stylesheet" href="../css/estilos-tarjeta.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BeeApp - PAY</title>
</head>
<body>
    <header class="cabecera">
        <div class="container logo-nav-container">
            <a href="../index.php" class="logo">
                <img src="../utils/logo.png" alt="logo" class="imagen-logo">
                <h3 class="brand">BeeApp</h3>
            </a>
            <nav class="navigation">
                <ul>
                    <li><a href="./prensaScreen.php">Articulos de Prensa</a></li> 
                    <li><a href="./shopScreen.php">Tienda</a></li> 
                    <?php 
                        session_start();
                        function logOut() {
                        session_destroy(); 
                        echo '<script>location.href = "../screens/loginScreen.php"</script>';
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
            <div class="centrar_volver">
                <a href="shopScreen.php" class="btn volver">< Volver</a>
            </div>
            <!-- Formulario de la tarjeta  -->
            <form action="../funciones/funcion_pagar.php" id="formulario-tarjeta" class="formulario-tarjeta">
                <div class="grupo">
                    <label for="inputNumero">Numero de Tarjeta</label>
                    <input type="text" id="inputNumero" maxlength="19" autocomplete="off" required="">
                </div>
                <div class="grupo">
                    <label for="inputNombre">Titular de la Tarjeta</label>
                    <input type="text" id="inputNombre" maxlength="19" autocomplete="off" required="">
                </div>
                <div class="flexbox">
                    <div class="grupo expira">
                        <label for="mes">Fecha Caducidad</label>
                        <div class="flexbox">
                            <div class="grupo-select">
                                <select name="mes" id="mes" >
                                    <option disabled selected value="1">Mes 1</option>
                                </select>
                            </div>
                            <div class="grupo-select">
                                <select name="year" id="year" >
                                    <option disabled selected value="2022">Año 2022</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grupo cvv">
                        <label for="inputCVV">CVV</label>
                        <input type="text" id="inputCVV" maxlength="3" required="">
                    </div>
                </div>
                <button type="submit" class="btn-enviar">Pagar</button>
            </form>

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
            <span class="autores">&copy;2021 pagina diseñada por @joseluisrobledo @kirillpanferov</span>
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
    <script src="../js/tarjeta.js"></script>
    <script src="../js/cookies_nuevas.js"></script>

</body>
</html>
