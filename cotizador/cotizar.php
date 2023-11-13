<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/mostrar_clientes.php';?>
<?php include 'acciones/mostrar_leyendas.php';?>
<?php include "modals/modal_pdf_view.php";?>
<?php include "modals/modal_tools.php";?>

<form action="acciones/registro_cotizacion.php" method="POST"  onkeydown="return event.key != 'Enter';" >
<section class="home">
  <div class="p-2">
    <div class="card text-lef">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
            <div class="d-flex m-3">
              <h4 class="card-title">              
                  <div class=" mt-2 p-2"> Generarador de Cotizacion</div>    
                  <div>
                    <!--DATOS FANTASMA-->
                    <input type="hidden" value="" >
                  </div>
              </h4>    
              <!--<button type="button" class="btn btn-dark ml-auto p-2" data-toggle="modal" data-target="#modal_tools">
                <i class="fas fa-toolbox fa-2x"></i>
              </button>-->        
            </div>
            <div class="card">
              <div class="card-header text-center">
                Informacion General
              </div>
              <div class="card-body">                  
                <div class="row">               
                  <div class="col-9">
                        <h6>Cliente</h6>
                        <select class="js-example-basic-single " name="cliente_cot" id="cliente_cot" style="width:100%">                                                                     
                          <option selected>Nombre del cliente...</option>
                            <?php while($ver = mysqli_fetch_row($resultado)){?>
                            <option value="<?php echo $ver[0]?>">
                                <?php echo $ver[1]?>
                            </option>
                            <?php }?>
                        </select>                        
                  </div>   
                                  
                  <div class="col-2" hidden >      
                    <h6>Leyenda</h6>
                    <select class="js-example-basic-single " name="leyenda" id="leyenda" style="width:100%">                                                                     
                      <option selected>Seleccione Leyenda</option>
                      <?php while($ver = mysqli_fetch_row($resultado1)){?>
                        <option value="<?php echo $ver[0]?>">
                          <?php echo $ver[1]?>
                        </option>
                      <?php }?>
                    </select>  
                  </div>                                                                                     
                </div> 
                                          
                            
              </div>              
            </div>
            <!--Productos o Servicios a cotizar-->
            <div class="card mt-3 d-flex">
              <div class="card-header">
                <div class = "row">
                  <div class="col mt-2">
                   Productos o Servicios
                  </div>
                  <div class="col text-right">
                    
                  </div>
                </div>                
              </div>
              <div class="card-body">                  
              <table class="table" id="tabla">
                <thead>
                  <tr>
                  
                    <th>Descripcion</th>
                    <th style="width: 200px">SKU</th>
                    <th style="width: 200px">Cantidad</th>
                    <th style="width: 200px">P.Unit</th>
                    <th style="width: 200px">Total</th>  
                    <th style="width: 80px">
                      <button type="button" id="adicional" name="adicional" class="btn btn-success" onclick="BtnAdd()">
                      <i class="fas fa-plus"></i>
                      </button>
                    </th>                  
                  </tr>
                </thead>
                <tbody id="TBody">
                <tr  id="TRow" class="fila-fija" >                    
                    <td>                      
                      <input autocomplete="off" required type="text" class="form-control" name="descripcion[]" id="descripcion" placeholder="Descripcion">                      
                    </td>
                    <td>
                      <input type="text" class="form-control" name="sku[]" id="sku" placeholder="SKU">                      
                    </td>
                    <td>
                      <input required type="number" class="form-control" name="qty[]" id="qty" value="1" placeholder="Cantidad" onchange="Calc(this);">                      
                    </td>
                    <td>
                      <input required type="number" step ="any" class="form-control" name="rate[]" id="rate" placeholder="P.Unit" onchange="Calc(this);">                      
                    </td>
                    <td>
                      <input type="text" class="form-control" name="mount[]" id="amt" placeholder="Total" onchange="Calc(this);" >                      
                    </td>
                    <td>
                      <button disable="true" type="button" class="btn btn-danger" onclick="BtnDel(this)">
                        <i class="fas fa-times"></i>
                      </button>
                    </td>                    
                  </tr>                                     
                </tbody>               
              </table>                                                                             
              </div>      
              <!--ENTRADA DE TOTALES-->
              <div class="row">
                <div class="col-9">
                  
                </div>
                <div class="col">
                  <div class="input-group p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Subtotal:</span>
                    </div>
                    <input type="text" class="form-control" id="FSubTotal" name="subtotal-sum"  style="background-color:white;">                 
                  </div>
                  <div class="input-group p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">IVA 8%:</span>
                    </div>
                    <input type="text" class="form-control" id="FIVA" name="impuesto-sum"  style="background-color:white;">                  
                  </div>
                  <div class="input-group p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Total:</span>
                    </div>
                    <input type="text" class="form-control" id="FTotal" name="total-sum"  style="background-color:white;">                 
                  </div>
                </div>              
              </div>         

            </div>  
            
            <!--ROW NOTES AND IMAGES-->
            <div class="row mt-3 ">
              <!--<div class="col">
                <div class="card-header">
                  Imagenes
                </div>
                <div class="card col">                  
                  <div class="card-body">                       
                    <div class="form-group agregarMultimedia">                   

                      =====================================
                      SUBIR MULTIMEDIA DE PRODUCTO FÍSICO
                      ======================================

                        <div class="multimediaFisica needsclick dz-clickable">

                          <div class="dz-message needsclick">
                            
                            Arrastrar o dar click para subir imagenes.

                          </div>

                        </div>
                      </div>                                   
                    </div>
                </div>
              </div>-->
              <div class="col">
                <div class="card-header">
                  Notas
                </div>
                <div class="card">
                  <div class="card-body">
                    <textarea class="form-control" name="notepad" id="notepad" rows="7"></textarea>
                  </div>
                </div>
              </div>               
            </div>
          

            <div class="row  d-flex justify-content-center">
              <button type="submit" name="gen-cot" class="btn btn-primary btn-lg btn-block p-2 m-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                Generar Cotizacion
              </button>
            </div>  
        </div>
    </div>   

    </section>
    <?php include "modals/modal_pdf_view.php";?>

    </form>
    

    <script>
      //CALCULOS DE SUMATORIAS
      function Calc(v){
        var index = $(v).parent().parent().index();
        var qty = document.getElementsByName("qty[]")[index].value;        
        var rate = document.getElementsByName("rate[]")[index].value;        

        var amt = qty * rate;

        document.getElementsByName("mount[]")[index].value = amt.toFixed(2);

        GetTotal();
      }

      function GetTotal(){
        var sum = 0;
        var amts = document.getElementsByName("mount[]");

        for(let index = 0; index < amts.length; index++){
          var amt = amts[index].value;
          sum = +(sum)+ +(amt); 
        }

        document.getElementById("FSubTotal").value =sum.toFixed(2);
        var iva = sum * .08;
        document.getElementById("FIVA").value =iva.toFixed(2);
        var total = sum + iva;
        document.getElementById("FTotal").value =total.toFixed(2);

      }
      
      function BtnAdd()
      {
        /*Add Button*/
        var v = $("#TRow").clone().appendTo("#TBody") ;
        $(v).find("input").val('');
        $(v).removeClass("d-none");
        $(v).find("th").first().html($('#TBody tr').length - 1);
      }

      function BtnDel(v)
      {
        let nFilas = $("#tabla tbody tr").length;
          if(nFilas >= 2){                 
            $(v).parent().parent().remove(); 
            GetTotal();
    
              $("#TBody").find("tr").each(
              function(index)
              {
                $(this).find("th").first().html(index);
              }
    
            );
          }
      
      }

    </script>

    <script>
      $(document).ready(function() {
        $('.js-example-basic-single').select2();   
      });      
    </script>  

    

   <script>
			/*
      $(function(){
        // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
        $("#adicional").on('click', function(){
          $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");           
          let nFilas = $("#tabla tbody tr").length;                    
        });
      
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){          
          let nFilas = $("#tabla tbody tr").length;
          if(nFilas >= 2){
            var parent = $(this).parents().get(0);
            $(parent).remove();       
          }
        });
      });*/
    </script>

    <!--DROPZONE-->
    <script>
     var arrayFiles = [];

    $(".multimediaFisica").dropzone({

    url: "/",
    addRemoveLinks: true,
    acceptedFiles: "image/jpeg, image/png",
    maxFilesize: 2, //2mb
    maxFiles: 5, 	//maximo 10 archivos
    init: function(){

      this.on("addedfile", function(file){

        arrayFiles.push(file);

        console.log("arrayFiles", arrayFiles);

      })

      this.on("removedfile", function(file){

        var index = arrayFiles.indexOf(file);

        arrayFiles.splice(index, 1);

        console.log("arrayFiles", arrayFiles);

      })

    }

    });
    $(".guardarproducto").click(function(){
      var listaMultimedia = [];
      var finalFor = 0;
      for(var i = 0; i < array.length; i++){
        var datosMultimedia = new formData();
        datosMultimedia.append("file",arrayFiles[i]);
        datosMultimedia.append("tituloProducto",);
      }
    });
    </script>

    <script src="printThis.js"></script>
    <script src="custom.js"></script>

<?php include 'estructura/footer.php';?>