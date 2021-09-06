<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BeeApp - NEW PRODUCT</title>
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
            <a href="shopScreen.php" class="btn volver">< Volver</a>
            <h3 class="center">NUEVO PRODUCTO</h3>

            <div class="bg-white contenedor sombra">
                <!-- INICIO DEL FORMULARIO -->
                <form action="../funciones/funcion_insertar.php" method="POST" class="formulario" id="formulario" enctype="multipart/form-data">
                    <!--Grupo NOMBRE-->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre" required="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El nombre debe de contener entre 4 y 20 digitos.</p>
                    </div>

                    <!-- DESCRIPCION -->
                    <div class="formulario__grupo" id="grupo__descripcion">
                        <label for="descripcion" class="formulario__label">Descripcion</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="descripcion" id="descripcion" placeholder="Descripcion" required="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La descripcion debe de contener entre 20 y 150 digitos.</p>
                    </div>
                    
                    <!-- PRECIO -->
                    <div class="formulario__grupo" id="grupo__precio">
                        <label for="precio" class="formulario__label">Precio</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="precio" id="precio" placeholder="Precio €" required="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">Introduzca un precio correcto y los decimales con un punto(.).</p>
                    </div>
                    
                    <!-- STOCK -->
                    <div class="formulario__grupo" id="grupo__stock">
                        <label for="stock" class="formulario__label">Stock</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="stock" id="stock" placeholder="Stock" required="">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El stock debe de contener estar entre 1 y 4 digitos.</p>
                    </div>


                    <!-- IMAGEN -->
                    <div class="formulario__grupo">
                        <label for="imagen" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                            <input type="file" class="formulario__input file" name="imagen" id="imagen" required=""/>
                        </div>
                    </div>

                    <!-- TIPO-->
                    <div class="formulario__grupo">
                        <label for="imagen" class="formulario__label">Tipo</label>
                        <div class="formulario__grupo-input">
                            <input type="radio" id="radio" name="tipo" value="alimenticios" checked="" >
                            <label for="alimenticios">Alimenticio</label><br>

                            <input type="radio" id="radio" name="tipo" value="utiles">
                            <label for="utiles">Utensilio</label><br>
                        </div>
                    </div>

                    <div class="formulario__grupo">
                        
                    </div>

                    <div class="Box" style="display:none" id="Box">
                        <!-- TAMAÑO -->
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="tamanio" class="formulario__label">Tamaño</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="tamanio" id="tamanio" placeholder="Tamaño" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Introduzca un tamaño</p>
                        </div>
                        
                        <!-- MATERIAL -->
                        <div class="formulario__grupo" id="grupo__precio">
                            <label for="material" class="formulario__label">Material</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="material" id="material" placeholder="Material" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Introduzca el material del que esta fabricado el utensilio.</p>
                        </div>
                    </div>
                    <div class="Box2" id="Box2">
                        <!-- FECHA ENVASADO -->
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="fechaEnv" class="formulario__label">Fecha envasado</label>
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" name="fechaEnv" id="fechaEnv" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Introduzca una fecha de envasado.</p>
                        </div>
                        
                        <!-- FECHA CADUCIDAD -->
                        <div class="formulario__grupo" id="grupo__precio">
                            <label for="fechaCad" class="formulario__label">Fecha caducidad</label>
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" name="fechaCad" id="fechaCad" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Introduzca una fecha de caducidad.</p>
                        </div>
                        
                        <!-- PESO -->
                        <div class="formulario__grupo" id="grupo__stock">
                            <label for="peso" class="formulario__label">Peso</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="peso" id="peso" placeholder="Peso en gramos" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Peso en gramos, solo numeros.</p>
                        </div>
                    </div>
 

                    <!--Boton de ENVIAR-->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <input type="hidden" id="accion" value="crear">
                        <input type="submit" class="formulario__btn" value="Registrar" name="registrar" id="registrar" >
                    </div> 
                </form>
            </div>
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

    <!-- CONFIRMACION DE LA ACCION -->
    <script src="../js/confirmacion.js"></script>
    <script src="../js/formulario_producto.js"></script>
    <script src="../js/formulario_alimento.js"></script>
    <script src="../js/formulario_utensilio.js"></script>
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script>
        $(document).ready(function () {

            $('input[type="radio"]').click(function () {
                if ($(this).attr("value") == "alimenticios") {
                    $(".Box").hide();
                    $(".Box2").show();
                }
                if ($(this).attr("value") == "utiles") {
                    $(".Box2").hide();
                    $(".Box").show();
                }
            });     
        });
    </script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>
