<?php
//Obtenemos datos de conexion;
include 'conexiondb.php';

if($_POST){
    $nombre_usuario = $_POST['nombre_usuario'];
    $paterno_usuario = $_POST['paterno_usuario'];
    $materno_usuario = $_POST['materno_usuario'];
    $telefono_usuario = $_POST['telefono_usuario'];
    $correo_usuario = $_POST['correo_usuario'];
    $usuario_usuario = $_POST['usuario_usuario'];
    $pass_usuario = $_POST['pass_usuario'];
    $nivel_usuario = $_POST['nivel_usuario'];


    $sql = "INSERT INTO usuarios(nombre, paterno, materno, telefono, correo, usuario, password, nivel) VALUES ('$nombre_usuario','$paterno_usuario','$materno_usuario','$telefono_usuario','$correo_usuario','$usuario_usuario','$pass_usuario',$nivel_usuario)";

    $registro_usuario = $conexion->prepare($sql);

    $registro_usuario->execute();

    header('Location: ../usuario.php');
}

?>