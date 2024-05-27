<?php
//$conexion = new mysqli('localhost','root','','asistema2',3306);
//if (mysqli_connect_errno()) {
//    	printf("La conexion con el servidor de base de datos fallo: %s\n", mysqli_connect_error());
//    	exit();
//	}
        
        $conexion = new mysqli('localhost','root','','base_datos_superior',3306);
if (mysqli_connect_errno()) {
    	printf("La conexion con el servidor de base de datos fallo: %s\n", mysqli_connect_error());
    	exit();
	}
        
        
        
?>