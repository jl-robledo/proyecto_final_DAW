<?php 

    include "conexion.php";

    if(!isset($_POST['busqueda'])){
        $_POST['busqueda'] = "";

        //Asignamos el valor de busqueda en vacio para que no de ningun error
        $busqueda = $_POST['busqueda'];

    }

    $busqueda = $_POST['busqueda'];

    $read = "SELECT * FROM persona WHERE nombre LIKE '%".$busqueda."%' OR 
                                            apellidos LIKE '%".$busqueda."%' OR
                                            email LIKE '%".$busqueda."%' OR
                                            telefono LIKE '%".$busqueda."%' OR 
                                            administrador LIKE '%".$busqueda."%' OR 
                                            fechaNac LIKE '%".$busqueda."%'    
                                            ORDER BY idPer ASC";

    $resultado = mysqli_query($conexion, $read);

?>
