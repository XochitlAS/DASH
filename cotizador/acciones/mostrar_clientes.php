<?php 
include 'conexiondb.php';

$SQL = "SELECT * FROM clientes";

$resultado = mysqli_query($conexion,$SQL);

?>