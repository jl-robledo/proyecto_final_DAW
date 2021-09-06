<?php
	function showTable($connection){
	   
	    $sql = "SELECT * FROM persona";
	    $connect = $connection->query($sql); 
	    if($connect->num_rows) {
	        echo "<table class='mostrar__producto-tabla'>";
	        echo "<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Fecha Nacimiento</th><th>Email</th><th>Telefono</th><th>Administrador</th></tr>";
	        while($row = $connect->fetch_assoc())
	            echo "<tr>"."<td>".$row["idPer"]."</td>"."<td>".$row["nombre"]."</td>"."<td>".$row["apellidos"]."</td>"."<td>".$row["fechaNac"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["telefono"]."</td>"."<td>".$row["administrador"]."</td>"."</tr>";
	        echo "</table>";   
	    }
	}
?>