<?php
require_once("c://xampp/htdocs/DASH/cotizador/mvc/controller/contrato_controller.php");
$obj = new contratoController();
$obj->guardar($_POST['cliente'],
            $_POST['marca'],
            $_POST['modelo'],
            $_POST['nserie'],
            $_POST['descr'],
            $_POST['cantidad'],
            $_POST['esubtotal'],
            $_POST['etotal'],
            $_POST['anticipo1'],
            $_POST['anticipo2'],
            $_POST['balance'],
            $_POST['subtotal'],
            $_POST['iva'],
            $_POST['total'],
            $_POST['notas']);


            ?>
       
