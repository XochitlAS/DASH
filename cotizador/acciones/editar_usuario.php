<?php
include 'conexiondb.php';

if($_POST){
    $id_usuario = $_POST['id_usuario'];
    $nombre_edit = $_POST['nombre_usuario_edit'];
    $paterno_edit = $_POST['paterno_usuario_edit'];
    $materno_edit = $_POST['materno_usuario_edit'];
    $telefono_edit = $_POST['telefono_usuario_edit'];
    $correo_edit = $_POST['correo_usuario_edit'];
    $usuario_edit = $_POST['usuario_usuario_edit'];
    $password_edit = $_POST['pass_usuario_edit'];
    $nivel_edit = $_POST['nivel_usuario_edit'];

    $sql = "UPDATE usuarios SET nombre='$nombre_edit',paterno='$paterno_edit',materno='$materno_edit',telefono='$telefono_edit',correo='$correo_edit',usuario='$usuario_edit',password='$password_edit',nivel='$nivel_edit' WHERE id_usuario='$id_usuario'";

    $editar_usuario = $conexion->prepare($sql);
    
    $editar_usuario->execute();
    
    header('Location: ../usuario.php');

}

?>