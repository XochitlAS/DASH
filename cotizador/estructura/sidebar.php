<?php 

session_start();

if(!isset($_SESSION['id'])){
  header('location: index.php');
}

$nivel = $_SESSION['nivel'];
$id_user = $_SESSION['id'];

?>
<section class="sidebar">
      <div class="nav-header">
        <img src="assets/img/logo.png" style="width:190px;" class="logo"></p>
        <i class="bx bx-menu-alt-right btn-menu"></i>
      </div>
      <div>
    
      </div>
      <ul class="nav-links">                        
        <li>
          <a href="home.php">
            <i class="bx bx-home-alt-2"></i>
            <span class="title">Inicio</span>
          </a>
          <span class="tooltip">Inicio</span>
        </li>
        <li>
          <a href="ordenar.php">
            <i class='bx bx-receipt'></i>
            <span class="title">Solicitar Cotizacion</span>
          </a>
          <span class="tooltip">Solicitar Cot.</span>
        </li>
        <li>
          <a href="cotizar.php">
            <i class='bx bx-spreadsheet'></i>
            <span class="title">Cotizar</span>
          </a>
          <span class="tooltip">Cotizar</span>
        </li>
        
        <li>
          <a href="clientes.php">
            <i class='bx bxs-business' ></i>
            <span class="title">Clientes</span>
          </a>
          <span class="tooltip">Clientes</span>
        </li>
        <?php if($nivel == 2){?>
        <li>
          <a href="usuario.php">
            <i class='bx bxs-group'></i>
              <span class="title">Usuarios</span>
          </a>
          <span class="tooltip">Usuarios</span>
        </li> 
        <!--
        <li>
          <a href="usuario.php">
            <i class='bx bxs-package' ></i>
            <span class="title">Paquetes</span>
          </a>
          <span class="tooltip">Paquetes</span>
        </li> 
        
        <li>
          <a href="contrato.php">
            <i class='bx bxs-file'></i>
            <span class="title">Contratos</span>
          </a>
          <span class="tooltip">Contratos</span>
        </li>         
        <li>
          <a href="leyendas.php">
            <i class='bx bx-text'></i>            
             <span class="title">Leyendas</span>
          </a>
          <span class="tooltip">Leyendas</span>
        </li>-->
        <?php }?> 
        <li>
          <a href="acciones/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="title">Cerrar Sesion</span>
          </a>
          <span class="tooltip">Cerrar Sesion</span>
        </li>       
      </ul>      
    </section>