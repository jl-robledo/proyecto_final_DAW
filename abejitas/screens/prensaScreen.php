<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BeeApp - NEWS</title>
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
        <div class="container-titulo">
            <h3>Noticias Colmeneras</h3>
        </div>
        <div class="novedades">
			<script type="text/javascript" src="../js/prensa.js"></script>
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
    <script src="../js/cookies_nuevas.js"></script>

</body>
</html>

		

	
