<?php
session_start();
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
// Check the session variable for products in cart
        $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $products = array();
        $idPer = $_SESSION['idPer'];
        $fecha = date('Y-m-d');
        $total = 0;
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
                $total += (float)$product['precio'] * (int)$products_in_cart[$product['idProd']];
                $importe = (float)$product['precio'] * (int)$products_in_cart[$product['idProd']];
                $cantidad = (int)$products_in_cart[$product['idProd']];
                $idProd = $product['idProd'];
                $sql = "INSERT INTO compra (idPer, idProd, cantidad, fecha, importe) 
                            VALUES ('$idPer','$idProd','$cantidad','$fecha','$importe')";
                $pdo->query($sql);
                $importe = 0;
            }
        }
        ?> 
                    <script type='text/javascript'>
                        alert("Enhorabuena, ha pagado usted:"+ " <?php echo $total; ?>" +"€.");
                    </script>
                    <?php
                    echo '<script>location.href = "../screens/shopScreen.php"</script>';
        ?>