<?php
include "funcion_validar_registro.php";
include "funcion_validar_login.php";

if (isset($_POST['Enviar'])) {
/*-----------------------------------------------Variables.---------------------------------------*/
	$nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fechaNac'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
  
/*-----------------------------------------------Data base connection.----------------------------*/
        $connection = new mysqli('localhost', 'root', '', 'abejitas');
        /*If not connected.*/
		if ($connection->connect_errno){
			die('Connection error.');
		}
		/*If connected.*/
		else {
/*------------------------------------------------Users check,if not registered.-------------------------------------*/    
			if(unregistredUser($email,$connection)){
/*------------------------------------------------Users insertion.-------------------------------------*/ 
				$sql = "INSERT INTO persona (idPer,nombre,apellidos,fechaNac,email,telefono,password,administrador) VALUES (null,'$nombre','$apellidos','$fechaNac','$email','$telefono','$password','no')";
				$connection->query($sql); 
				/*If inserted.*/
				if($connection->affected_rows >= 1){  
		            ?> 
		            <script type='text/javascript'>
		                alert("Hi,"+ " <?php echo $nombre; ?>" +" , you are registered.");
		            </script>
		            <?php
		             if(checkAdmin($email,$password,$connection)){   
		                session_start(); //Iniciamos una sesión del cliente
		                $_SESSION['admin'] = 'si';
		                $_SESSION['idPer']=getId($email,$connection);
		                echo '<script>location.href = "../screens/shopScreen.php"</script>';
			            }
			            else{
			                session_start(); //Iniciamos una sesión del cliente
			                $_SESSION['idPer']=getId($email,$connection);
			                $_SESSION['admin'] = 'no';
			                echo '<script>location.href = "../screens/prensaScreen.php"</script>';
			            }
				}
				/*If not inserted.*/
				else{
					 ?>
		            <script type='text/javascript'>
		                alert("Error.");
		            </script>
		            <?php
				}
			/*If registered.*/		
			}else{
			    ?>
		        <script type='text/javascript'>
		            alert("Already registered.");
		        </script>
		        <?php
		        echo '<script>location.href = "../screens/registerScreen.php"</script>';
		    }
		}   
	
}




?>