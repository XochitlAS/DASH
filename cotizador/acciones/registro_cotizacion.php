<?php
//Conectamos con la base de datos 
include 'conexiondb.php';
//Recibimos los datos enviados de cotizacion

if(isset($_POST["gen-cot"])){    
    //Obtenemos datos generales 
    session_start();
    date_default_timezone_set("America/Mexico_City");
    $fechaActual = date('Y-m-d');
    $vigencia = date('Y-m-d',strtotime($fechaActual."+15 dayss"));
    $id_cotizacion = ""; 
    $id_usuario = $_SESSION['id'];
    $id_leyenda = NULL; 
    $notas = $_POST['notepad'];
    $id_cliente = $_POST['cliente_cot'];
    $subtotal = $_POST['subtotal-sum'];     
    $impuesto = $_POST['impuesto-sum'];
    $totales = $_POST['total-sum'];

    //Obtenemos el nombre del cliente 
    $SQL_CLIENT = "SELECT nombre FROM clientes WHERE id_cliente='$id_cliente' ";
    $CLIENT_RES = $conexion->query($SQL_CLIENT);
    $NAME_CLIENT = mysqli_fetch_row($CLIENT_RES);
    $Cliente = $NAME_CLIENT[0];

    

    //Registramos datos a datos generales
    $SQL_COT = "INSERT INTO cotizacion(fecha,vigencia,agente,id_cliente,cliente,subtotal,iva,total,notas,id_leyenda)
     VALUES ('$fechaActual','$vigencia','$id_usuario','$id_cliente','$Cliente','$subtotal','$impuesto','$totales','$notas','$id_leyenda')";
    
    $ejecucion = $conexion -> prepare($SQL_COT);  
    $ejecucion -> execute(); 

    //Recuperamos el Id del general de la cotizacion
    $SQL_GEN_COT = "SELECT id_cotizacion FROM cotizacion WHERE id_cotizacion = (SELECT MAX(id_cotizacion) FROM cotizacion)";
    $GEN_COT_RES = $conexion->query($SQL_GEN_COT);
    $COT_RES = mysqli_fetch_row($GEN_COT_RES);
    $id_cotizacion = $COT_RES[0];

   
    //Recuperamos los arrays de items para iterar y registrar
    $items1 = ($_POST['descripcion']);
    $items2 = ($_POST['sku']);
    $items3 = ($_POST['qty']);
    $items4 = ($_POST['rate']);
    $items5 = ($_POST['mount']);
    
    
    //-----------------------FUNCIONANDO--------------------------------------

    while(true){

        //SEPARAR VALORES DE LOS ARREGLOS
        $item1 = current($items1);
        $item2 = current($items2);
        $item3 = current($items3);
        $item4 = current($items4);
        $item5 = current($items5);
        

        //Asignacion  de variables 
        $descripcion = (($item1 !== false) ? $item1: ",&nbsp;");
        $sku = (($item2 !== false) ? $item2: ",&nbsp;");
        $cantidad = (($item3 !== false) ? $item3: ",&nbsp;");
        $unitario = (($item4 !== false) ? $item4: ",&nbsp;");
        $total = (($item5 !== false) ? $item5: ",&nbsp;");

        $valores = "('$id_cotizacion','$descripcion','$sku','$cantidad','$unitario','$total'),";

        $valoresQ = substr($valores,0,-1);


        $SQL = "INSERT INTO detalles_cotizacion(id_cotizacion,descripcion,sku,cantidad,unitario,total) VALUES $valoresQ";

        $sqlRes = $conexion->query($SQL) or mysql_error();

        $item1 = next ($items1);
        $item2 = next ($items2);
        $item3 = next ($items3);
        $item4 = next ($items4);
        $item5 = next ($items5);

        if($item1 == false && $item2==false && $item3==false && $item4==false && $item5==false) break;
    };


}

//Creamos sentencia SQL

//Cargamos los datos a DB 

//Redirigimos a Animacion y/o a Cotizacion Creada*/
    /*  header('location: ');  */
?>
