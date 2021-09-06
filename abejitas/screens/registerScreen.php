<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BeeApp</title>
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
        <div class="container-formulario">
            <h3 class="center">Datos del nuevo Usuario</h3>
            <form action="../funciones/funcion_registrar.php" method="post" class="formulario" id="formulario">
                <!--Grupo NOMBRE-->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre debe de contener entre 4 y 16 dígitos(solo letras).</p>
                </div>

                <!--Grupo APELLIDOS-->
                <div class="formulario__grupo" id="grupo__apellidos">
                    <label for="apellidos" class="formulario__label">Apellidos</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellidos" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Los apellidos deben de contener entre 4 y 60 dígitos(solo letras).</p>
                </div>

                <!--Grupo PASSWORD-->
                <div class="formulario__grupo" id="grupo__password">
                    <label for="password" class="formulario__label">Password</label>
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input" name="password" id="password" placeholder="Password" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El password debe de contener entre 4 y 8 digitos(letras y números).</p>
                </div>

                <!--Grupo EMAIL-->
                <div class="formulario__grupo" id="grupo__email">
                    <label for="email" class="formulario__label">Email</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="email" id="email" placeholder="Email" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Introduzca un email valido</p>
                </div>

                <!--Grupo FECHA NACIMIENTO-->
                <div class="formulario__grupo" id="grupo__fecha">
                    <label for="nombre" class="formulario__label">Fecha de Nacimiento</label>
                    <div class="formulario__grupo-input">
                        <input type="date" class="formulario__input" name="fechaNac" id="fechaNac" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Introduce tu fecha de nacimiento.</p>
                </div>

                <!--Grupo TELEFONO-->
                <div class="formulario__grupo" id="grupo__telefono">
                    <label for="telefono" class="formulario__label">Telefono</label>
                    <div class="formulario__grupo-input">
                        <input type="telefono" class="formulario__input" name="telefono" id="telefono" placeholder="Telefono" required="">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">introduzca un telefono valido, solo numeros.</p>
                </div>

                <!--Boton de ENVIAR-->
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <input type="submit" name="Enviar" class="formulario__btn" value="Enviar" id="Enviar" onchange="validarFormulario()">
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"> Formulario enviado con exito</p>
                </div>
 
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
    <script src="../js/formulario_registro.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin = "anonymous"></script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>

		