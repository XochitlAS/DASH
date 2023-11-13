<?php 
//LLamamos los datos de conexion
include 'conexiondb.php';

if($_POST)
{
    $id_usuario = $_POST['id_cliente_del'];

    $sql = "DELETE FROM clientes WHERE id_cliente='$id_usuario'";

    $del_usuario = $conexion->prepare($sql);

    $del_usuario->execute();
    header('Location: ../clientes.php');

}

?>