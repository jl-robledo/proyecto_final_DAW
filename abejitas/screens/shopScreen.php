<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_cabecera.css">
    <link rel="stylesheet" href="../css/estilos-formulario.css">
    <title>BeeApp - SHOP</title>
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
                        function pdo_connect_mysql() {
                            // Update the details below with your MySQL details
                            $DATABASE_HOST = 'localhost';
                            $DATABASE_USER = 'root';
                            $DATABASE_PASS = '';
                            $DATABASE_NAME = 'abejitas';
                            try {
                                return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
                            } catch (PDOException $exception) {
                                // If there is an error with the connection, stop the script and display the error.
                                exit('Failed to connect to database!');
                            }
                        }  
                        $pdo = pdo_connect_mysql();

                        // Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
                        $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'shopScreen';

                        // The amounts of products to show on each page
                        $num_products_on_each_page = 4;
                        // The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
                        $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
                        // Select products ordered by the date added
                        $stmt = $pdo->prepare('SELECT * FROM producto ORDER BY idProd DESC LIMIT ?,?');
                        // bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
                        $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
                        $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
                        $stmt->execute();
                        // Fetch the products from the database and return the result as an Array
                        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // Get the total number of products
                        $total_products = $pdo->query('SELECT * FROM producto')->rowCount();                            
                    ?> 
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">

        <div class="container-formulario">
            <h1 class="center">NUESTRA TIENDA</h1>
            <form action="../screens/shopScreen.php" method="POST" class="formulario__buscar">
                <input type="text" id="busqueda" name="busqueda" class="formulario__input" placeholder="Buscar Producto" >
                <button type="submit" name="buscar" class="formulario__btn lupa" value="Buscar">
                    <i class="fas fa-search"></i>
                </button>
            </form>       
        </div>
        <div class="container-formulario">
            <table class="mostrar__producto-tabla">
                <thead>
                    <tr>
                        <th>    </th>
                        <th>    </th>
                            <?php 
                                if (isset( $_SESSION['admin'] ) && $_SESSION['admin'] === 'si'){
                                    ?>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    <?php
                                }                                
                            ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../funciones/funcion_buscar.php';


                        while ($fila = mysqli_fetch_array($resultado)){
                        // cierro php para abrir las celdas de la tabla        
                    ?>
                        <tr class="tabla__productos">
                            <td>
                                <img src= "data:image/png;base64,<?php echo base64_encode($fila['imagen']); ?>" class="size-foto3"/>
                            </td>
                            <td colspan="1">
                                <?php 
                                        echo  "<b>" . $fila['nombre'] . 
                                            "&nbsp&nbsp". $fila['precio'] . " €</b>"; 
                                ?>

                                <!--Boton de AÑADIR CARRITO-->
                                <div class="container-formulario_compra">
                                    <form action="shopScreen.php?page=cart" method="post" class="formulario__buscar">
                                        <input type="number" name="quantity" value="1" min="1" max="<?=$fila['stock']?>" placeholder="Quantity" class="formulario__input_cantidad" required>
                                        <input type="hidden" name="product_id" value="<?=$fila['idProd']?>">
                                        <input type="submit" value="Añadir" class="formulario__btn lupa"> 
                                    </form>
                                </div>
                            </td>
                                <?php 
                                    // condicional de si eres admin o no  y asi se aprovecha el screen de la tienda para editar o eliminar
                                    if (isset( $_SESSION['admin'] ) && $_SESSION['admin'] === 'si'){
                                        ?>
                                            <td>
                                                <?php echo $fila['stock'] ?>
                                            </td>
                                            <td class="color_editar">
                                                <a href="editProductScreen.php?idProd=<?php echo $fila['idProd']; ?>" class="btn-editar btn">
                                                    <i class="far fa-edit btn-editar"></i>
                                                </a>
                                            </td>
                                            <td class="color_eliminar">
                                                <a href="../funciones/funcion_eliminar.php?idProd=<?php echo $fila['idProd']; ?>" class="btn">
                                                    <i class="far fa-trash-alt btn-borrar"></i>
                                                </a>       
                                            </td>
                                        <?php
                                    } 
                                ?>
                        </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>



        <?php
        // If the user clicked the add to cart button on the product page we can check for the form data
        if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
            // Set the post variables so we easily identify them, also make sure they are integer
            $product_id = (int)$_POST['product_id'];
            $quantity = (int)$_POST['quantity'];
            // Prepare the SQL statement, we basically are checking if the product exists in our databaser
            $stmt = $pdo->prepare('SELECT * FROM producto WHERE idProd = ?');
            $stmt->execute([$_POST['product_id']]);
            // Fetch the product from the database and return the result as an Array
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            // Check if the product exists (array is not empty)
            if ($product && $quantity > 0) {
                // Product exists in database, now we can create/update the session variable for the cart
                if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                    if (array_key_exists($product_id, $_SESSION['cart'])) {
                        // Product exists in cart so just update the quanity
                        $_SESSION['cart'][$product_id] += $quantity;
                    } else {
                        // Product is not in cart so add it
                        $_SESSION['cart'][$product_id] = $quantity;
                    }
                } else {
                    // There are no products in cart, this will add the first product to cart
                    $_SESSION['cart'] = array($product_id => $quantity);
                }
            }
        }

        // Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
        if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
            // Remove the product from the shopping cart
            unset($_SESSION['cart'][$_GET['remove']]);
        }

        // Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
        if (isset($_POST['update']) && isset($_SESSION['cart'])) {
            // Loop through the post data so we can update the quantities for every product in cart
            foreach ($_POST as $k => $v) {
                if (strpos($k, 'quantity') !== false && is_numeric($v)) {
                    $id = str_replace('quantity-', '', $k);
                    $quantity = (int)$v;
                    // Always do checks and validation
                    if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                        // Update new quantity
                        $_SESSION['cart'][$id] = $quantity;
                    }
                }
            }
        }


        // Check the session variable for products in cart
        $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $products = array();
        $subtotal = 0.00;
        // If there are products in cart
        if ($products_in_cart) {
            // There are products in the cart so we need to select those products from the database
            // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
            $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
            $stmt = $pdo->prepare('SELECT * FROM producto WHERE idProd IN (' . $array_to_question_marks . ')');
            // We only need the array keys, not the values, the keys are the id's of the products
            $stmt->execute(array_keys($products_in_cart));
            // Fetch the products from the database and return the result as an Array
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Calculate the subtotal
            foreach ($products as $product) {
                $subtotal += (float)$product['precio'] * (int)$products_in_cart[$product['idProd']];
            }
        }
        if (isset( $_SESSION['admin'] )){
        ?>

        <div class="cart content-wrapper">
            <h1 class="center">Tu Compra</h1>
            <form action="shopScreen.php?page=cart" method="post" class="carrito">
                <table class="table__productos">
                    <thead>
                        <tr>
                            <td colspan="2"><b>Producto</b></td>
                            <td><b>Precio</b></td>
                            <td><b>Cantidad</b></td>
                            <td><b>Total</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="5" style="text-align:center;">No hay productos en tu carrito</td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="img">
                                <a href="shopScreen.php?page=product&id=<?=$product['idProd']?>">
                                    <img src= "data:image/png;base64,<?php echo base64_encode($product['imagen']); ?>" class="size-foto3"/>
                                </a>
                            </td>
                            <td>
                                <?=$product['nombre']?>
                                <br>
                                <a href="shopScreen.php?page=cart&remove=<?=$product['idProd']?>" class="btn__pagar_eliminar">Eliminar</a>
                            </td>
                            <td class="price"><?=$product['precio']?> €</td>
                            <td class="quantity" >
                                <input type="number" name="quantity-<?=$product['idProd']?>" value="<?=$products_in_cart[$product['idProd']]?>" min="1" max="<?=$product['stock']?>" placeholder="Quantity" class="formulario__input_cant" required>
                            </td>
                            <td class="price"><?=$product['precio'] * $products_in_cart[$product['idProd']]?> €</td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="subtotal">
                    <span class="text">Total</span>
                    <span class="price"><b><?=$subtotal?> €</b></span>
                </div>
                <div class="buttons">
                    <input type="submit" value="Actualizar" name="update" class="btn__pagar">
                    
                    <a href="buyScreen.php" class="a_limpio">Pagar</a>
                </div>
            </form>
        </div>
        <?php 
    } ?>



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
    <!-- CONFIRMACION DE LA ACCION ELIMINAR -->
    <script src="../js/confirmacion.js"></script>
    <script src="../js/cookies_nuevas.js"></script>
</body>
</html>