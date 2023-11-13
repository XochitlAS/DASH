<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/mostrar_clientes.php';?>
<?php include "modals/modal_tools.php";?>

<form action="mvc/views/store.php" method="POST"  onkeydown="return event.key != 'Enter';" >
<section class="home">
  <div class="p-2">
    <div class="card text-lef">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
            <div class="d-flex m-3">
              <h4 class="card-title">              
                  <div class=" mt-2 p-2"> Generarador de Contrato</div>    
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
                        <select class="js-example-basic-single " name="cliente" id="cliente" style="width:100%">                                                                     
                          <option selected>Nombre del cliente...</option>
                            <?php while($ver = mysqli_fetch_row($resultado)){?>
                            <option value="<?php echo $ver[0]?>">
                                <?php echo $ver[1]?>
                            </option>
                            <?php }?>
                        </select>                        
                  </div>   
                                      
                            
              </div>              
            </div>
            <!--Imformacion del equipo-->
            <div class="card mt-3">
              <div class="card-header">
                <div class = "row">
                  <div class="col mt-2">
                   Informacion del equipo
                  </div>
                  <div class="col text-right">
                    
                  </div>
                </div>                
              </div>
              <div class="card-body">                  
              <table class="table" id="tabla">
                <thead>
                  <tr>
                  
                    <th style="width: 200px">Marca</th>
                    <th style="width: 200px">Modelo</th>
                    <th style="width: 200px">No. Serie</th> 
                                
                  </tr>
                </thead>
                <tbody id="TBody">
                <tr  id="TRow" class="fila-fija" >                    
                    <td>                      
                    <input type="text" name="marca"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="modelo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="nserie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    

                  </tr>                                     
                </tbody>               
              </table>                                                                             
              </div>  
              <div class="card mt-3 d-flex">
              <div class="card-header">
                <div class = "row">
                  <div class="col mt-2">
                   Informacion del equipo
                  </div>
                  <div class="col text-right">
                    
                  </div>
                </div>                
              </div>
              <div class="card-body">                  
              <table class="table" id="tabla">
                <thead>
                  <tr>
                  
                    <th style="width: 200px">Descripcion</th>
                    <th style="width: 200px">Cantidad</th>
                    <th style="width: 200px">Subtotal</th> 
                    <th style="width: 200px">Total</th> 
                    <th style="width: 80px">
                      <button type="button" id="adicional" name="adicional" class="btn btn-success" onclick="BtnAdd()">
                      <i class="fas fa-plus"></i>
                      </button>
                    </th>                  
                  </tr>
                </thead>
                <tbody id="TBoody">
                <tr  id="TRoow" class="fila-fija" >                    
                    <td>                      
                    <input type="text" name="descr" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="cantidad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="esubtotal" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="etotal" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
              <!--Costo y pago del equipo-->
            <div class="card mt-3">
              <div class="card-header">
                <div class = "row">
                  <div class="col mt-2">
                   Costo y pago del equipo
                  </div>
                  <div class="col text-right">
                    
                  </div>
                </div>                
              </div>
              <div class="card-body">                  
              <table class="table" id="tabla">
                <thead>
                  <tr>
                  
                    <th style="width: 200px">Anticipo#1</th>
                    <th style="width: 200px">Anticipo#2</th>
                    <th style="width: 200px">Balance</th> 
                                
                  </tr>
                </thead>
                <tbody id="TBody">
                <tr  id="TRow" class="fila-fija" >                    
                    <td>                      
                    <input type="text" name="anticipo1" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="anticipo2" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                    <input type="text" name="balance" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                  </tr>                                     
                </tbody> 
                <thead>
                  <tr>
                  
                    <th style="width: 200px">Cheque</th>
                    <th style="width: 200px">Efectivo</th>
                    <th style="width: 200px">Tarjeta</th> 
                                
                  </tr>
                </thead>
                <tbody id="TBody">
                <tr  id="TRow" class="fila-fija" >                    
                    <td>                      
                      <input  type="text" class="form-control" name="Cheque[]" id="Cheque" placeholder="Cheque">                      
                    </td>
                    <td>
                      <input type="text" class="form-control" name="Efectivo[]" id="Efectivo" placeholder="Efectivo">                      
                    </td>
                    <td>
                      <input type="text" class="form-control" name="Tarjeta[]" id="Tarjeta" placeholder="Tarjeta">                      
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
                    <input type="text" class="form-control" id="FSubTotal" name="subtotal"  style="background-color:white;">                 
                  </div>
                  <div class="input-group p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">IVA 8%:</span>
                    </div>
                    <input type="text" class="form-control" id="FIVA" name="iva"  style="background-color:white;">                  
                  </div>
                  <div class="input-group p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Total:</span>
                    </div>
                    <input type="text" class="form-control" id="FTotal" name="total"  style="background-color:white;">                 
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
                    <textarea class="form-control" name="notas" id="notepad" rows="7"></textarea>
                  </div>
                </div>
              </div>               
            </div>
          

            <div class="row  d-flex justify-content-center">
              <button type="submit" name="gen-cot" class="btn btn-primary btn-lg btn-block p-2 m-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                Generar Contrato
              </button>
            </div>  
        </div>
    </div>   

    </section>
    
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
        var v = $("#TRoow").clone().appendTo("#TBoody") ;
        $(v).find("input").val('');
        $(v).removeClass("d-none");
        $(v).find("th").first().html($('#TBoody tr').length - 1);
      }

      function BtnDel(v)
      {
        let nFilas = $("#tabla tboody tr").length;
          if(nFilas >= 2){                 
            $(v).parent().parent().remove(); 
            GetTotal();
    
              $("#TBoody").find("tr").each(
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