<?php 
include "conexiondb.php";
if(isset($_POST)){

    session_start();
    // Obteniendo la fecha actual del sistema con PHP
    date_default_timezone_set("America/Mexico_City");
    $fechaActual = date('d-m-Y');
    $id_usuario = $_SESSION['id'];
    $id_cliente = $_POST['cliente_orden'];
    
    //Insersion SQL
    $sql_sol="INSERT INTO solicitudes (`fecha`, `id_usuario`, `id_cliente`, `estatus`) VALUES ('$fechaActual','$id_usuario','$id_cliente','1')";  
    $registrar_sol = $conexion->query($sql_sol);
    //Obtenemos el valor de solicitud para detallarla
    $sql_con="SELECT MAX(id_solicitud) FROM solicitudes";
    $consulta_sol = $conexion->query($sql_con);
    $row = $consulta_sol->fetch_assoc();
    
    $id_sol = $row['id_solicitud'];
    
    $items1 = $_POST['concepto'];
    $items2 = $_POST['cantidad'];



    while(true){
        
        //Recuperamos valores de array
        $item1 = current($items1);
        $item2 = current($items2);

        $concepto = (($item1 !== false) ? $item1 : ", &nbsp"));
        $cantidad = (($item2 !== false) ? $item2 : ", &nbsp"));

        
        

    }
}

?>