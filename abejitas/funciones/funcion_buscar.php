<?php 

    include "conexion.php";

    if(!isset($_POST['busqueda'])){
        $_POST['busqueda'] = "";

        //Asignamos el valor de busqueda en vacio para que no de ningun error
        $busqueda = $_POST['busqueda'];

    }

    $busqueda = $_POST['busqueda'];

    $read = "SELECT * FROM producto WHERE nombre LIKE '%".$busqueda."%' OR 
                                            descripcion LIKE '%".$busqueda."%' OR
                                            precio LIKE '%".$busqueda."%'      
                                            ORDER BY idProd ASC";

    $resultado = mysqli_query($conexion, $read);

?>
