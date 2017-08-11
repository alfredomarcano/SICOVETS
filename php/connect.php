<?php
/**
 * Conexion a la base de datos
 */

$conex = mysqli_connect ("localhost","root","","sicovets");
if ($conex =1){
    echo "conexion exitosa";
}else {
   echo "error de conexion con la base de datos";
}
  
?>
