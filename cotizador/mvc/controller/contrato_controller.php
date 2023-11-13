<?php
    class contratoController{
        private $model;
        public function __construct(){
            require_once("c://xampp/htdocs/DASH/cotizador/mvc/model/contrato_model.php");
            $this->model = new contratoModel();
        }
        public function guardar($Cliente,$marca,$modelo,$nserie,$descr,$cantidad,$esubtotal,$etotal,$anticipo1,$anticipo2,$balance,$subtotal,$iva,$total,$notas){
            $id = $this->model->insertar($Cliente,$marca,$modelo,$nserie,$descr,$cantidad,$esubtotal,$etotal,$anticipo1,$anticipo2,$balance,$subtotal,$iva,$total,$notas);
        }
    }