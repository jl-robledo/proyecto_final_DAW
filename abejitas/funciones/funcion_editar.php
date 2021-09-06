<?php 

if(isset($_POST['actualizar'])){
	// validamos los nuevos datos introducidos
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	
	function tipoProducto($connection,$id){
        $sql = "SELECT * FROM alimenticio WHERE idProd='$id'";
        $tipo = "utensilio";
        $connect = $connection->query($sql); 
            if($connect->num_rows) 
                while($row = $connect->fetch_assoc())
                    /*If email in data base*/
                if($row['idProd']==$id)
                    $tipo = "alimenticio";  
        return $tipo;
    }
	
	include "conexion.php";
	$tipo = tipoProducto($conexion,$id);
	//preparamos la sentencia para actualizar los datos
	$actualizar ="UPDATE producto SET nombre='$nombre', descripcion='$descripcion',
	 				stock='$stock', precio='$precio', imagen='$imagen' WHERE idProd='$id'";


/*------------------------------------------------Product insertion.-------------------------------------*/ 	
			if($tipo == "alimenticio"){
				//alimenticio
				$fechaEnv = $_POST['fechaEnv'];
				$fechaCad = $_POST['fechaCad'];
				$peso = $_POST['peso'];
				
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
								$conexion->query($actualizar);
								$actualizar = "UPDATE alimenticio SET fechaEnv='$fechaEnv', fechaCad='$fechaCad',peso='$peso' WHERE idProd='$id'";
								$conexion->query($actualizar);
								/*If inserted.*/
								if($conexion->affected_rows >= 1){  
									echo "<script>alert('Producto Actualizado:  $nombre '); window.location='../screens/shopScreen.php'; </script>";
										echo '<script>location.href = "../screens/shopScreen.php"</script>';
								}
								/*If not inserted.*/
								else{
									?>
									<script type='text/javascript'>
										alert("Error.");
									</script>
									<?php
										echo '<script>location.href = "../screens/shopScreen.php"</script>';
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
				//utiles
				$tamanio = $_POST['tamanio'];
				$material = $_POST['material'];
				
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
							$conexion->query($actualizar);
							$actualizar ="UPDATE utensilio SET tamanio='$tamanio', material='$material'
	 							WHERE idProd='$id'";
							$conexion->query($actualizar);
							/*If inserted.*/
							if($conexion->affected_rows >= 1){  
								echo "<script>alert('Producto Actualizado:  $nombre '); window.location='../screens/shopScreen.php'; </script>";
							}
							/*If not inserted.*/
							else{
								?>
								<script type='text/javascript'>
									alert("Error.");
								</script>
								<?php
									echo '<script>location.href = "../screens/shopScreen.php"</script>';
							}
						}

						
					}
			} 
			
		echo '<script>location.href = "../screens/shopScreen.php"</script>';

}

?>