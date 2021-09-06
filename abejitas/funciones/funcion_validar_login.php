<?php
/*
Function:checks if user is already registered.
Recieve:users email , password and conection to data base.
Returns:true if OK false in other case.
*/
function userExists($email,$password,$connection){
     $sql = "SELECT * FROM persona";
     $found = false;
     $foundEmail = false;
    $connect = $connection->query($sql);
    if($connect->num_rows){ 
        while($row = $connect->fetch_assoc()){
            /*If email and password are in the data base */
            if($row['email'] === $email && $row['password'] === $password)
                $found = true; 
            /*If email is found */  
            if($row['email'] === $email)
                $foundEmail = true;
        }
        /*If user exists */
        if($found === true)
            return $found;
        /*If user doesnt exist but email yes , then password is wrong.*/
        elseif($foundEmail === true){
            ?><script type='text/javascript'> alert("Wrong password."); </script><?php
        /*If email and pass dont exist and email wasnt found then... the email doesnt exist.*/
        }else{
            ?><script type='text/javascript'>alert("Wrong email. Sending back...");</script><?php
            echo '<script>location.href = "../screens/loginScreen.php"</script>';
        }
    }/*User doesnt exist*/
    return $found; 
}

/*
Function:checks if user is admin.
Recieve:users email , password and conection to data base.
Returns:true if OK false in other case.
*/
function checkAdmin($email,$password,$connection){
    $sql = "SELECT email,password FROM persona WHERE administrador = 'si'";
    $found = false;
    $connect = $connection->query($sql);
    if($connect->num_rows){ 
        $row = $connect->fetch_assoc();
        /*If admin */
        if($row['email'] === $email && $row['password'] === $password)
            $found = true;  
    }    
    return $found; 
}
/*
Function:returns users id
Recieve:users email and conection to data base.
Returns:true if OK false in other case.
*/
function getId($email,$connection){
    $sql = "SELECT * FROM persona";
    $id = 0;
    $connect = $connection->query($sql);
    if($connect->num_rows)
        while($row = $connect->fetch_assoc())
            if($row['email'] === $email )
                $id = $row['idPer']; 
    return $id; 
}

?>