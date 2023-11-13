<?php 
//LLamamos los datos de conexion
include 'conexiondb.php';

if($_POST)
{
    $id_usuario = $_POST['id_usuario_del'];

    $sql = "DELETE FROM usuarios WHERE id_usuario='$id_usuario'";

    $del_usuario = $conexion->prepare($sql);

    $del_usuario->execute();
    header('Location: ../usuario.php');

}


?>