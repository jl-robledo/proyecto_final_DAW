<?php

/*
Function:checks if user is not registered.
Recieve:users email and conection to data base.
Returns:true if OK false in other case.
*/
function unregistredUser($email,$connection){
     $sql = "SELECT * FROM persona";
     $notFound = true;
        $connect = $connection->query($sql); 
        if($connect->num_rows) 
            while($row = $connect->fetch_assoc())
                /*If email in data base*/
                if($row['email']==$email)
                    $notFound = false;        
    return $notFound;
}

?>
