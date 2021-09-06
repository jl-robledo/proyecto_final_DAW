<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BeeApp - Shop</title>
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
            <h3 class="center">EDITAR CLIENTE</h3>

            <div class="bg-white contenedor sombra">
                <p class="center">Rellena todos los campos de nuevo</p>
                <!-- INICIO DEL FORMULARIO -->
                <label for="formulario" class="label__form"></label>
                <form action="../funciones/funcion_editar_cliente.php" method="POST" class="formulario" id="formulario" enctype="multipart/form-data">
                    
                <?php 
                    include '../funciones/conexion.php';
                    //recogemos la variable id mediante GET
                    $id= $_GET['idPer'];
                    $id_person = "SELECT * FROM persona WHERE idPer='$id'";
                    //ejecutamos la conexion y nos traemos los datos del ID seleccionado 
                    $resultado = mysqli_query($conexion, $id_person);

                    //si lo encuentra lo muestra en el formulario
                    while($fila = mysqli_fetch_assoc($resultado)){
                ?>
                        <!-- Añado un input oculto(hidden), para recoger el valor de ID, para determinar
                                cual es el producto que vamos a modificar -->
                        <input type="hidden" class="formulario__input" value="<?php echo $fila['idPer']; ?>" name='id' id='id'>

                        <!--Grupo NOMBRE-->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="nombre" class="formulario__label">Nombre</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $fila['nombre']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El nombre debe de contener entre 4 y 20 digitos.</p>
                        </div>

                        <!-- APELLIDOS -->
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="apellidos" class="formulario__label">Apellidos</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $fila['apellidos']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Los apellidos deben de contener entre 4 y 20 digitos.</p>
                        </div>
                        <!--Grupo FECHA-->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="fechaNac" class="formulario__label">Fecha nacimiento</label>
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" name="fechaNac" id="fechaNac" placeholder="Fecha" value="<?php echo $fila['fechaNac']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Fecha incorrecta.</p>
                        </div>

                        <!-- EMAIL -->
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="email" class="formulario__label">Email</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="email" id="email" placeholder="Email" value="<?php echo $fila['email']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Email incorrecto.</p>
                        </div>
                        <!--Grupo TELEFONO-->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="telefono" class="formulario__label">Telefono</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $fila['telefono']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Telefono incorrecto.</p>
                        </div>

                        <!-- ADMINISTRADOR -->
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="administrador" class="formulario__label">Administrador</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="administrador" id="administrador" placeholder="si/no" value="<?php echo $fila['administrador']; ?>" required="">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">Valor incorrecto</p>
                        </div>

                        <!--Boton de ENVIAR-->
                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <input type="hidden" id="accion" value="crear">
                            <input type="submit" name="actualizar" class="formulario__btn" value="Actualizar" id="actualizar" >
                        </div> 

                        <?php
                    }  
                    ?>
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
    
    <!-- CONFIRMACION DE LA ACCION -->
    <script src="../js/confirmacion.js"></script>
    <script src="../js/formulario_registro.js"></script>
</body>
</html>