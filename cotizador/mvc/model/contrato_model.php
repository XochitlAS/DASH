<?php
    class contratoModel{
        private $PDO;
        public function __construct(){
            require_once("c://xampp/htdocs/DASH/cotizador/mvc/core/db.php");
            $con = new db();
            $this->PDO = $con->conexion();

        }
        public function insertar($Cliente,$marca,$modelo,$nserie,$descr,$cantidad,$esubtotal,$etotal,$anticipo1,$anticipo2,$balance,$subtotal,$iva,$total,$notas){
            $id_cliente = $_POST['cliente'];
            $SQL_CLIENT = "SELECT nombre FROM clientes WHERE id_cliente='$id_cliente' ";
            $CLIENT_RES = $this->PDO->query($SQL_CLIENT);
            $CLIENT_RES-> execute();
            $NAME_CLIENT = $CLIENT_RES->fetch(PDO::FETCH_BOTH);
            $Cliente = $NAME_CLIENT[0];
            $stament = $this->PDO->prepare("INSERT INTO contrato VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stament->execute([$Cliente,$marca,$modelo,$nserie,$descr,$cantidad,$esubtotal,$etotal,$anticipo1,$anticipo2,$balance,$subtotal,$iva,$total,$notas]);
            
            
        }
    }

?>