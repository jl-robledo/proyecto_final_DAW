<?php

/*
Function:checks if user is not registered.
Recieve: nombre product and conection to data base.
Returns:true if OK false in other case.
*/
function unregistredProduct($nombre,$connection){
     $sql = "SELECT * FROM producto";
     $notFound = true;
        $connect = $connection->query($sql); 
        if($connect->num_rows) 
            while($row = $connect->fetch_assoc())
                /*If nombre in data base*/
                if($row['nombre']===$nombre)
                    $notFound = false;        
    return $notFound;
}

?>