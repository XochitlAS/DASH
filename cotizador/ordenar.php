<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/mostrar_clientes.php';?>

<form method="POST" action="acciones/registrar_solicitud.php">
<section class="home">
    <div class="p-2">
        <div class="card text-lef">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Solicitar Cotizaciones</h4>            
            <div class="row">
                <div class="col">
                    <h5>Cliente</h5>
                </div>
            </div>          
            <div class="row">               
                <div class="col">
                    <select class="js-example-basic-single " name="cliente_soli" id="cliente_orden" style="width:100%">                                                                     
                        <option selected>Selecciona un Cliente</option>
                        <?php while($ver = mysqli_fetch_row($resultado)){?>
                        <option value="<?php echo $ver[0]?>">
                            <?php echo $ver[1]?>
                        </option>
                        <?php }?>
                    </select>
                </div>              
            </div>
            <!--Disputar solucion
            <div class="row mt-2">
                <div class="col">
                    <label for="telefono_orden">Telefono</label>
                    <input type="text" name="telefono_orden" id="telefono_orden" class="form-control" placeholder="Telefono" aria-describedby="helpId">
                </div>    
                <div class="col">
                    <label for="correo_orden">Correo</label>
                    <input type="email" name="correo_orden" id="correo_orden" class="form-control" placeholder="Correo" aria-describedby="helpId">
                </div>               
            </div>-->
            
            <div class="form-group mt-4">
                <h5>Conceptos</h5>
                <textarea class="form-control" id="conceptos" name="conceptos" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success">
                <i class='bx bx-send'></i>
                Solicitar
            </button>                
            </form>            
        </div>
    </div>

    
    </section>

    <script>
        $(document).ready(function() {
        $('.js-example-basic-single').select2();      
        });
    </script>
<?php include 'estructura/footer.php';?>