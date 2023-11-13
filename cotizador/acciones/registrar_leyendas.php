<?php
//Obtenemos datos de conexion;
include 'conexiondb.php';

if($_POST){
    $idenificador = $_POST['identificador_reg'];
    $terms = $_POST['terminos_reg'];    

    $sql = "INSERT INTO leyendas(`identificador`, `descripcion`) VALUES ('$idenificador','$terms')";

    $registro_leyenda = $conexion->prepare($sql);

    $registro_leyenda->execute();

    header('Location: ../leyendas.php');
}

?>