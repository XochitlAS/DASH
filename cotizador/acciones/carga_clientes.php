<?php 

//Cargamos Conexion a Database
include 'conexiondb.php';
//Creamos datos de consulta
if($_POST)
{
    $categoria = $_POST['filtro'];
    $buscar = $_POST['buscar_usuario'];
    $sql="SELECT * FROM clientes WHERE $categoria LIKE'%$buscar%'";
}
else{
    $sql="SELECT * FROM clientes";
}

$resultado = $conexion->query($sql);
$num = $resultado->num_rows;

?>