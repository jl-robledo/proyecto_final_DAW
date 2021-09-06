<?php 
include "funcion_validar_producto.php";
//Comprobacion de que el formulario ha sido enviado con todas las variables que hayamos fijado en el index.view.php
if (isset($_POST['registrar'])){
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$fechaEnv = $_POST['fechaEnv'];
	$fechaCad = $_POST['fechaCad'];
	$peso = $_POST['peso'];

	$tamanio = $_POST['tamanio'];
	$material = $_POST['material'];

	$tipo = $_POST['tipo'];
	
	$connection = new mysqli('localhost', 'root', '', 'abejitas');
	/*If not connected.*/
	if ($connection->connect_errno){
		die('Connection error.');
	}
	/*If connected.*/
	else {
		if(unregistredProduct($nombre,$connection)){
			/*------------------------------------------------Product insertion.-------------------------------------*/ 
			$sql = "INSERT INTO producto (idProd, nombre, descripcion, precio, stock, imagen) 
							VALUES (null,'$nombre','$descripcion','$precio','$stock','$imagen')";
			
			if($tipo == "alimenticios"){
				if(isset($_POST['fechaEnv']) && isset($_POST['fechaCad']) && isset($_POST['peso']) )
					if(empty($_POST['fechaEnv']) || empty($_POST['fechaCad'])||empty($_POST['peso'])){
						?> 
								<script type='text/javascript'>
									alert("Algún campo vacío");
								</script>
						<?php
						}
						else{
							if(is_numeric($_POST['peso']) && $_POST['peso']>0){
								$connection->query($sql);
								$sql = "INSERT INTO alimenticio (idProd, fechaEnv, fechaCad, peso) 
										VALUES ((SELECT idProd from producto WHERE nombre='$nombre'),'$fechaEnv','$fechaCad','$peso')";
								$connection->query($sql);
								/*If inserted.*/
								if($connection->affected_rows >= 1){  
									?> 
									<script type='text/javascript'>
										alert("Product,"+ " <?php echo $nombre; ?>" +" , registered.");
									</script>
									<?php
										echo '<script>location.href = "../screens/shopScreen.php"</script>';
								}
								/*If not inserted.*/
								else{
									?>
									<script type='text/javascript'>
										alert("Error.");
									</script>
									<?php
										echo '<script>location.href = "../screens/insertarProductoScreen.php"</script>';
								}
							}else{
								?> 
								<script type='text/javascript'>
									alert("El peso debe ser un número positivo mayor que 0");
								</script>
						<?php
							}
						}

			}else{
				if(isset($_POST['tamanio']) && isset($_POST['material']))
					if(empty($_POST['tamanio']) || empty($_POST['material'])){
						?> 
							<script type='text/javascript'>
								alert("Algún campo vacío");
							</script>
						<?php
					}else{
						if(is_numeric($_POST['tamanio']) || is_numeric($_POST['material'])){
							?> 
							<script type='text/javascript'>
								alert("Tamaño y material deben ser cadenas de texto");
							</script>
							<?php

							
						}else{
							$connection->query($sql);
							$sql = "INSERT INTO utensilio (idProd, tamanio, material) 
										VALUES ((SELECT idProd from producto WHERE nombre='$nombre'),'$tamanio','$material')";
							$connection->query($sql);
							/*If inserted.*/
							if($connection->affected_rows >= 1){  
								?> 
								<script type='text/javascript'>
									alert("Product,"+ " <?php echo $nombre; ?>" +" , registered.");
								</script>
								<?php
									echo '<script>location.href = "../screens/shopScreen.php"</script>';
							}
							/*If not inserted.*/
							else{
								?>
								<script type='text/javascript'>
									alert("Error.");
								</script>
								<?php
									echo '<script>location.href = "../screens/insertarProductoScreen.php"</script>';
							}
						}

						
					}
			} 
			
			
		echo '<script>location.href = "../screens/insertarProductoScreen.php"</script>';		
		
		}else{
			?>
			<script type='text/javascript'>
				alert("Already registered.");
			</script>
			<?php
					echo '<script>location.href = "../screens/insertarProductoScreen.php"</script>';
		}
	}   

	// $sql = "SELECT * FROM producto"; //Se traen los elementos de la base de datos
	// $connect = $conexion->query($sql); //La conexion se ejecuta

	// $control_nombre = true; // variable para el control de errores del nombre ya registrado

	// //El metodo fetch_assoc trae la informacion del elemento de cada fila que queramos
	// while ($fila = $connect->fetch_assoc()){

	// 	// comprobacion de si el email introducido ya se encuentra en la BBDD
	// 	if ($fila['nombre'] === $nombre) {

	// 		$control_nombre=false; // control de errores
	// 	}
	// }

	// if ($control_nombre == false){ // sacamos el mensaje si se ha encontrado el mail

	// 	echo "<script>alert('Producto registrado.'); </script>";

	// } else { // en caso de que no se encuentre, se continua con el registro

	// 	$query = "INSERT INTO producto (idProd, nombre, descripcion, stock, precio, imagen) 
	// 			VALUES (null, '$nombre', '$descripcion', '$stock', '$precio', '$imagen')";
		
	// 	$resultado = $conexion->query($query); //La conexion se ejecuta

	// 	if($resultado){
	// 		// Saludo de todo correcto
	// 		echo "<script>alert('Producto registrado:  $nombre '); window.location='../index.php'; </script>";
			
	// 	} else {
	// 		// Aviso de fallo en el registro
	// 		echo "<script>alert('Registro fallido. Vuelva a intentarlo.'); </script>";
	// 	}
	// }
		
	
}


?>