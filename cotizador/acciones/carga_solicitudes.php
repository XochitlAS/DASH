<?php 

//Cargamos Conexion a Database
include 'conexiondb.php';

//Creamos parametros de consultas
$sql="SELECT * FROM solicitudes";

$resultado = $conexion->query($sql);
$num = $resultado->num_rows;

?>