<?php include 'estructura/header.php';?>
<?php include 'estructura/sidebar.php';?>
<?php include 'acciones/carga_clientes.php'?>
    <section class="home">
      <div class="p-2">
        <div class="card text-lef">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Administracion de Clientes</h4>
            <div class="row">
              <button type="button" class="btn btn-primary btn-lg ml-3" data-toggle="modal" data-target="#cliente_reg" >
                  <i class="fa-solid fa-user-plus"></i>
                  Agregar Cliente
              </button>            
            </div>
            <form method="POST"action="">
            <p>Buscar Usuario</p>   
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
                  <option value="nombre">Nombre</option> 
                  <option value="correo">Correo</option>
                  <option value="rfc">RFC</option>             
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
            <p class="card-text">Clientes Registrados</p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <!--Concatenare todo el nombre-->
                  <th>Nombre</th>                  
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Direccion</th>        
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($resultado as $cliente){?>              
                  <tr scope="row">
                    <td hidden><?= $cliente['id_cliente'];?></td>
                    <td><?= $cliente['nombre'];?></td>
                    <td><?= $cliente['telefono1'];?></td>
                    <td hidden><?= $cliente['telefono2'];?></td>
                    <td><?= $cliente['correo'];?></td>
                    <td><?= $cliente['calle']." # ".$cliente['exterior'].",".$cliente['colonia'];?></td>
                    <td hidden><?= $cliente['calle'] ?></td>
                    <td hidden><?= $cliente['exterior']?></td>
                    <td hidden><?= $cliente['interior']?></td>
                    <td hidden><?= $cliente['colonia']?></td>
                    <td hidden><?= $cliente['estado']?></td>
                    <td hidden><?= $cliente['pais']?></td>
                    <td hidden><?= $cliente['cp']?></td>
                    <td hidden><?= $cliente['rfc']?></td>
                    <td>
                      <button type="button" class="btn btn-success editbtn" style="color:white;" data-toggle="modal" data-target="#cliente_edit" >Editar</button>
                      <button type="button" class="btn btn-danger ml-1 delbtn" style="color:white;" data-toggle="modal" data-target="#cliente_delete">Eliminar</button>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
<?php include 'modals/modal_registrar_cliente.php';?>
<?php include 'modals/modal_editar_cliente.php';?>
<?php include 'modals/modal_eliminar_cliente.php';?>
<!--Enviamos los datos al modal de edicion-->
<script>
  $('.editbtn').on('click',function(){

    $tr=$(this).closest('tr');
    var datos = $tr.children("td").map(function(){
      return $(this).text();
    });
    $('#id_cliente_edit').val(datos[0]);
    $('#nombre_cliente_edit').val(datos[1]);
    $('#tel1_cliente_edit').val(datos[2]);
    $('#tel2_cliente_edit').val(datos[3]);
    $('#correo_cliente_edit').val(datos[4]);
    $('#rfc_cliente_edit').val(datos[13]);
    $('#calle_cliente_edit').val(datos[6]);
    $('#ext_cliente_edit').val(datos[7]);
    $('#int_cliente_edit').val(datos[8]);
    $('#colonia_cliente_edit').val(datos[9]);
    $('#estado_cliente_edit').val(datos[10]);
    $('#pais_cliente_edit').val(datos[11]);
    $('#cp_cliente_edit').val(datos[12]);

  });
</script>
<!--Enviamos el id al modal para eliminar-->
<script>
  $('.delbtn').on('click',function(){

    $tr=$(this).closest('tr');
    var datos = $tr.children("td").map(function(){
      return $(this).text();
    });
    $('#id_cliente_del').val(datos[0]);
 


  });
</script>
<?php include "estructura/footer.php";?>