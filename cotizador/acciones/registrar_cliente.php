<?php
//Obtenemos datos de conexion;
include 'conexiondb.php';

if($_POST){
    $nombre_cliente = strtoupper($_POST['nombre_cliente_reg']);
    $telefono1_cliente = $_POST['tel1_cliente_reg'];
    $telefono2_cliente = $_POST['tel2_cliente_reg'];
    $correo_cliente = strtoupper($_POST['correo_cliente_reg']);
    $calle_cliente = strtoupper($_POST['calle_cliente_reg']);
    $interior_cliente = strtoupper($_POST['int_cliente_reg']);
    $exterior_cliente = strtoupper($_POST['ext_cliente_reg']);
    $colonia_cliente = strtoupper($_POST['colonia_cliente_reg']);
    $estado_cliente = strtoupper($_POST['estado_cliente_reg']);
    $pais_cliente = strtoupper($_POST['pais_cliente_reg']);
    $cp_cliente = $_POST['cp_cliente_reg'];
    $rfc_cliente = strtoupper($_POST['rfc_cliente_reg']);
    


    $sql = "INSERT INTO clientes (nombre, telefono1, telefono2, correo, calle, interior, exterior, colonia, estado, pais, cp, rfc) VALUES ('$nombre_cliente','$telefono1_cliente','$telefono2_cliente','$correo_cliente','$calle_cliente','$interior_cliente','$exterior_cliente','$colonia_cliente','$estado_cliente','$pais_cliente','$cp_cliente','$rfc_cliente')";
  
    $registro_cliente = $conexion->prepare($sql);

    $registro_cliente->execute();

    header('Location: ../clientes.php');
}

?>