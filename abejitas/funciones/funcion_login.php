<?php
include "funcion_validar_login.php";



if (isset($_POST['Enviar'])){
/*-----------------------------------------------Variables.---------------------------------------*/
    $email = $_POST['email'];
    $password = $_POST['password'];
/*-----------------------------------------------Data base connection.----------------------------*/  
    $connection = new mysqli('localhost', 'root', '', 'abejitas');
    if($connection->connect_errno)
        die('Server error');
    else
        /*If logged in.*/
        if(userExists($email,$password,$connection)){
            /*If admin*/
            if(checkAdmin($email,$password,$connection)){  
                session_start(); //Iniciamos una sesión del cliente
                $_SESSION['idPer']=getId($email,$connection);
                $_SESSION['admin'] = 'si';
                echo '<script>location.href = "../index.php"</script>';
            }
            else{
                session_start(); //Iniciamos una sesión del cliente
                $_SESSION['idPer']=getId($email,$connection);
                $_SESSION['admin'] = 'no';
                echo '<script>location.href = "../index.php"</script>';
            }
            
        }
}  
echo '<script>location.href = "../screens/loginScreen.php"</script>';
?>  