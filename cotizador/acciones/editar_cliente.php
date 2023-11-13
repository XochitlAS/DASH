<?php
include 'conexiondb.php';

if($_POST){
    $id_cliente_edit = $_POST['id_cliente_edit'];
    $nombre_cliente_edit = $_POST['nombre_cliente_edit'];
    $tel1_cliente_edit = $_POST['tel1_cliente_edit'];
    $tel2_cliente_edit = $_POST['tel2_cliente_edit'];
    $correo_cliente_edit = $_POST['correo_cliente_edit'];
    $rfc_cliente_edit = $_POST['rfc_cliente_edit'];
    $calle_cliente_edit = $_POST['calle_cliente_edit'];
    $ext_cliente_edit = $_POST['ext_cliente_edit'];
    $int_cliente_edit = $_POST['int_cliente_edit'];
    $colonia_cliente_edit = $_POST['colonia_cliente_edit'];
    $estado_cliente_edit = $_POST['estado_cliente_edit'];
    $pais_cliente_edit = $_POST['pais_cliente_edit'];
    $cp_cliente_edit = $_POST['cp_cliente_edit'];


    $sql = "UPDATE clientes SET `nombre`='$nombre_cliente_edit',`telefono1`='$tel1_cliente_edit',`telefono2`='$tel2_cliente_edit',`correo`='$correo_cliente_edit',`calle`='$calle_cliente_edit',`interior`='$int_cliente_edit',`exterior`='$ext_cliente_edit',`colonia`='$colonia_cliente_edit',`estado`='$estado_cliente_edit',`pais`='$pais_cliente_edit',`cp`='$cp_cliente_edit',`rfc`='$rfc_cliente_edit' WHERE `id_cliente`=$id_cliente_edit";

    $editar_usuario = $conexion->prepare($sql);
    
    $editar_usuario->execute();
    
    header('Location: ../clientes.php');

}

?>