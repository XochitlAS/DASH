<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/carga_solicitudes.php'?>
    <section class="home">    
      <br>
      <!--Modulo de Herramientas-->
      <div class="card m-3 d-flex flex-row bd-highlight">        
        <div class="card-body">
          <h4 class="card-title"><h3>Herramientas</h3></h4>          
          <div class="row">  
            <!--ATAJO COTIZAR-->
            <div class="bd-highlight m-2">
              <a type="button" class="btn btn-info" href="cotizar.php">
                <div class="row">            
                  <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
                    <div class="p-1 bd-highlight"><h1>Cotizar</h1></div>
                    <div class="p-1 bd-highlight">Generar nueva cotizacion</div>
                  </div>          
                  <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
                    <i class="fas fa-file-alt fa-5x"></i>
                  </div>
                </div>
              </a>
            </div>   
            <!--ATAJO A SOLICITUD DE COTIZACION--> 
            <div class="bd-highlight m-2">
              <a type="button" class="btn btn-success" href="ordenar.php">
                <div class="row">            
                  <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
                    <div class="p-1 bd-highlight"><h1>Solicitud</h1></div>
                    <div class="p-1 bd-highlight">Solicitar nueva cotizacion</div>
                  </div>          
                  <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
                  <i class="fas fa-file-upload fa-5x"></i>
                </div>
                </div>
              </a>
            </div> 
            <!--ATAJO A SOLICITUD DE COTIZACION--> 
            <div class="bd-highlight m-2">
              <a type="button" class="btn btn-warning" href="">
                <div class="row">            
                  <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
                    <div class="p-1 bd-highlight"><h1>Servicios</h1></div>
                    <div class="p-1 bd-highlight">Registrar servicio</div>
                  </div>          
                  <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
                  <i class="fas fa-clipboard-list fa-5x"></i>
                </div>
                </div>
              </a>
            </div> 
            <!--ATAJO GENERAR CONTRATO-->
            <div class="bd-highlight m-2">
              <a type="button" class="btn btn-danger" href="contrato.php">
                <div class="row">            
                  <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
                    <div class="p-1 bd-highlight"><h1>Contrato</h1></div>
                    <div class="p-1 bd-highlight">Generar nuevo contrato</div>
                  </div>          
                  <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
                    <i class="fa-solid fa-file-signature fa-5x"></i>
                  </div>
                </div>
              </a>
            </div>  
          </div>
        </div>
      </div>


      <!--MODULO DE ESTADISTICAS-->
      
      <!--MODULO DE SOLICITUDES-->
      <div class = "row m-3">
        <div class="card w-50 h-100 mt-2 shadow p-2 mb-5 bg-white rounded data-spy="scroll">          
          <div class="card-body">
            <h5 class="card-title">SOLICITUDES PENDIENTES</h5>            
          </div>
          <?php foreach($resultado as $soli){?>
            <div class="card shadow-sm p-1 mb-2 bg-white rounded">              
              <div class="card-body">                
                <div class="row">
                  <div class="col-10">
                    <strong>Cliente:</strong> <?= $soli['cliente']?>
                    <br>
                    <strong>Agente:</strong> <?= $soli['agente']?>
                    <br>
                    <strong>Detalles:</strong> 
                    <br>
                    <?= $soli['conceptos']?>
                  </div>
                  <div class="col d-flex justify-content-center align-items-center">                    
                    <button type="button" name="" id="" class="btn btn-success p-3"><i class="far fa-check-square fa-3x "></i></button>
                  </div>
                </div>                              
              </div>
            </div>
          <?php }?>
        </div>
      </div>


    </section>

<?php include "estructura/footer.php"?>