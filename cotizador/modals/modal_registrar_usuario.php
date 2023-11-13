<!-- Modal Registro de Usuarios-->
<form method="POST" action="acciones/registrar_usuario.php">
    <div class="modal fade" id="usuario_reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Nuevo Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Nombres
                    <input autocomplete="off" type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Apellido Paterno
                    <input autocomplete="off" type="text" class="form-control" name="paterno_usuario" id="paterno_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Apellido Materno
                    <input autocomplete="off" type="text" class="form-control" name="materno_usuario" id="materno_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Telefono
                    <input autocomplete="off" type="text" class="form-control" name="telefono_usuario" id="telefono_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Correo:
                    <input autocomplete="off" type="email" class="form-control" name="correo_usuario" id="correo_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Usuario
                    <input autocomplete="off" type="text" class="form-control" name="usuario_usuario" id="usuario_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Contraseña
                    <input autocomplete="off" type="password" class="form-control" name="pass_usuario" id="pass_usuario" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="nivel_usuario" name="nivel_usuario">
                            <option value="1">Agente de ventas</option> 
                            <option value="2">Administrador</option>               
                        </select>
                    </div>
                </div>
            </div>      
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        </div>
    </div>
    </div>
</form>
