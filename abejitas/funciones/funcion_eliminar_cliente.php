<?php 

include "conexion.php";
// lo mandamos a traves de la URL
$id = $_GET['idPer'];

//consulta para eliminar el registro
$eliminar ="DELETE FROM persona WHERE idPer = '$id'";

//ejecutamos la consulta
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
    // Saludo de todo correcto y nos lleva a la lista de productos
    echo "<script>alert('Persona eliminada:  $id '); </script>";
    header("Location: ../screens/adminScreen.php");
                
    } else {
        // Aviso de fallo en la actualizacion y nos lleva a la pagina anterior para intentarlo de nuevo
        echo "<script>alert('Eliminacion fallida. Vuelva a intentarlo.'); window.history.go(-1); </script>";
    }

?>