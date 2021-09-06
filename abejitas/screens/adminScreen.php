<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <title>BeeApp - ADMIN</title>
</head>
<body>

    <?php 
        session_start();
        function logOut() {
            session_destroy(); 
            echo '<script>location.href = "../screens/loginScreen.php"</script>';
        }
        if(isset($_POST['button1'])) {
            logOut();
        }

       
        if (isset( $_SESSION['admin'] ) && $_SESSION['admin'] === 'si'){
    ?>
    <?php
        }else  
             echo '<script>location.href = "../screens/loginScreen.php"</script>';
    ?>
   
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
                    <li><a href="./adminScreen.php">Editar cliente</a></li>
                    <li><a href="./insertarProductoScreen.php">Insertar producto</a></li> 
                    <li>
                        <form method="post">
                            <input type="submit" name="button1"
                                    value="LogOut" class="formulario__logout" />
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container-formulario">
            <a href="shopScreen.php" class="btn volver">< Volver</a>
            <h1 class="center">EDITAR CLIENTE</h1>
            <form action="../screens/adminScreen.php" method="POST" class="formulario__buscar">
                <input type="text" id="busqueda" name="busqueda" class="formulario__input" placeholder="Buscar cliente" >
                <button type="submit" name="buscar" class="formulario__btn lupa" value="Buscar">
                    <i class="fas fa-search"></i>
                </button>
            </form>       
        </div>
        <div class="container-formulario">
            <table class="table__clientes">
                <thead>
                    <tr>
                        <?php 
                            if (isset( $_SESSION['admin'] ) && $_SESSION['admin'] === 'si'){
                                ?>
                                    <th>Cliente</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                <?php
                            }                                
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../funciones/funcion_buscar_cliente.php';

                        while ($fila = mysqli_fetch_array($resultado)){
                        // cierro php para abrir las celdas de la tabla        
                    ?>
                        <tr >
                            <td>
                                <?php 
                                    echo  "<b>Nombre: </b>" . $fila['nombre'] . "&nbsp;" . $fila['apellidos'] . 
                                        "<br><b>Fecha nacimiento: </b>" . $fila['fechaNac'] .
                                        "<br><b>Email: </b>" . $fila['email'] . 
                                        "<br><b>Teléfono: </b>" . $fila['telefono'] . 
                                        "<br><b>Administrador: </b>" . $fila['administrador']; 
                                ?>
                            </td>
                            <td class="color_editar">
                                <a href="editClientScreen.php?idPer=<?php echo $fila['idPer']; ?>" class="btn-editar btn">
                                    <i class="far fa-edit btn-editar"></i>
                                </a>
                            </td>
                            <td class="color_eliminar">
                                <a href="../funciones/funcion_eliminar_cliente.php?idPer=<?php echo $fila['idPer']; ?>" class="btn">
                                    <i class="far fa-trash-alt btn-borrar"></i>
                                </a>       
                            </td>         
                        </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
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
    <script src="../js/confirmacion_cliente.js"></script>

</body>
</html>