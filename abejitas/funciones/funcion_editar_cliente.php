<?php 

if(isset($_POST['actualizar'])){
	// validamos los nuevos datos introducidos
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $administrador = $_POST['administrador'];
	
	include "conexion.php";

	//preparamos la sentencia para actualizar los datos
	$actualizar ="UPDATE persona SET nombre='$nombre', apellidos='$apellidos',
	 				email='$email', telefono='$telefono', administrador='$administrador' WHERE idPer='$id'";

	//ejecutamos la sentencia
	$resultado = mysqli_query($conexion,$actualizar);
	
	if($resultado){
	// Saludo de todo correcto y nos lleva a la lista de productos
		echo "<script>alert('Cliente Actualizado:  $nombre '); window.location='../screens/adminScreen.php'; </script>";
		
	} else {
	 	// Aviso de fallo en la actualizacion y nos lleva a la pagina anterior para intentarlo de nuevo
	 	echo "<script>alert('Actualizacion fallida. Vuelva a intentarlo.'); window.location='../screens/adminScreen.php'; </script>";
	}

}

?>