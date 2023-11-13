<!-- Modal Editar Usuarios-->
<form method="POST" action="acciones/editar_usuario.php">
    <div class="modal fade" id="usuario_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id_usuario" id="id_usuario">
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Nombres
                    <input autocomplete="off" type="text" class="form-control" name="nombre_usuario_edit" id="nombre_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Apellido Paterno
                    <input autocomplete="off" type="text" class="form-control" name="paterno_usuario_edit" id="paterno_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Apellido Materno
                    <input autocomplete="off" type="text" class="form-control" name="materno_usuario_edit" id="materno_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Telefono
                    <input autocomplete="off" type="text" class="form-control" name="telefono_usuario_edit" id="telefono_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Correo:
                    <input autocomplete="off" type="email" class="form-control" name="correo_usuario_edit" id="correo_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        Usuario
                    <input autocomplete="off" type="text" class="form-control" name="usuario_usuario_edit" id="usuario_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        Contraseña
                    <input autocomplete="off" type="password" class="form-control" name="pass_usuario_edit" id="pass_usuario_edit" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nivel_usuario_edit">Nivel de Usuario</label>
                        <select class="form-control" id="nivel_usuario_edit" name="nivel_usuario_edit">
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