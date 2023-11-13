<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/carga_leyenda.php';?>


<section class="home">
      <div class="p-2">
        <div class="card text-lef">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Leyendas</h4>
            <div class="row">
              <button type="button" class="btn btn-primary btn-lg ml-3" data-toggle="modal" data-target="#leyenda-reg" >
                <i class='bx bx-right-indent'></i>
                 Crear Leyenda
              </button>            
            </div>
            <!--Hacemos la busqueda-->
            <form method="POST"action="">
            <p>Buscar Leyendas</p>   
            <div class="row">
              <div class="col-2">
                <label for="filtro">Filtrar por:</label>
              </div>
              <div class="col">
                <label for="filtro">Buscar:</label>
              </div>
            </div>                        
            <div class="row">  
              <div class="col-2">
                <select class="form-control" id="filtro" name="filtro">
                  <option value="nombre">Identificador</option> 
                  <option value="telefono">Terminos & Condiciones</option>                        
                </select>
              </div>            
              <div class="col">
                <input autocomplete="off" type="text" class="form-control" name="buscar_usuario" id="buscar_usuario" aria-describedby="helpId" placeholder="Buscar:">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">
                  <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
            </form>
            <p class="card-text">Leyendas Registradas</p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <!--Concatenare todo el nombre-->
                  <th style="width: 200px">Identificador</th> 
                  <th style="width: 1800px">Terminos & Condiciones</th>                                 
                  <th style="width: 200px">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($resultado as $usuario){?>              
                  <tr scope="row">                                       
                    <td><?= $usuario['identificador']?></td>
                    <td><?= $usuario['descripcion']?></td>                   
                    <td>
                      <button type="button" class="btn btn-success editbtn" style="color:white;" data-toggle="modal" data-target="#usuario_edit"><i class='bx bx-edit' ></i></button>
                      <button type="button" class="btn btn-danger ml-1 delbtn" style="color:white;" data-toggle="modal" data-target="#usuario_delete"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
<?php include "modals/modal_registrar_leyenda.php"?>

<!--Enviamos los datos al modal de edicion-->
<script>
  $('.editbtn').on('click',function(){

    $tr=$(this).closest('tr');
    var datos = $tr.children("td").map(function(){
      return $(this).text();
    });
    $('#id_usuario').val(datos[0]);
    $('#nombre_usuario_edit').val(datos[1]);
    $('#paterno_usuario_edit').val(datos[2]);
    $('#materno_usuario_edit').val(datos[3]);
    $('#telefono_usuario_edit').val(datos[4]);
    $('#correo_usuario_edit').val(datos[5]);
    $('#usuario_usuario_edit').val(datos[6]);
    $('#pass_usuario_edit').val('indefinido');
    $('#nivel_usuario_edit').val(datos[7]);


  });
</script>
<!--Enviamos el id al modal para eliminar-->
<script>
  $('.delbtn').on('click',function(){

    $tr=$(this).closest('tr');
    var datos = $tr.children("td").map(function(){
      return $(this).text();
    });
    $('#id_usuario_del').val(datos[0]);
 


  });
</script>
<?php include "estructura/footer.php";?>