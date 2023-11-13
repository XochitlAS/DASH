<?php 

//incluimos los datos de conexion a base de datos;
include 'conexiondb.php';

if($_POST){
    session_start();
    date_default_timezone_set("America/Mexico_City");
    $fechaActual = date('Y-m-d');
    //Obtenemos los datos para registro
    $id_usuario = $_SESSION['id'];
    $id_cliente = $_POST['cliente_soli'];
    $conceptos = $_POST['conceptos'];

    
    //CONSULTAMOS AL CLIENTE
    $sql="SELECT * FROM clientes WHERE id_cliente = $id_cliente ";


    $resultado = $conexion->query($sql);
    $cliente = mysqli_fetch_row($resultado);

    //CONSULTAMOS AL USUARIO
    $sql="SELECT * FROM usuarios WHERE id_usuario = $id_usuario";


    $resultado = $conexion->query($sql);
    $agente = mysqli_fetch_row($resultado);

    $sql = "INSERT INTO `solicitudes`(`fecha`, `id_usuario`, `id_cliente`, `conceptos`, `estatus`,`agente`,`cliente`) VALUES ('$fechaActual','$id_usuario','$id_cliente','$conceptos','1','$agente[1]','$cliente[1]')";

    $insertar = $conexion->query($sql);

    header("Location: ../ordenar.php");
}

?>