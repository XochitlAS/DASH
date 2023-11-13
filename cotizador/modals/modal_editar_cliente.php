<!--Modal para registrar Cliente-->
<form action="acciones/editar_cliente.php" method="POST">
    <div class="modal fade" name="cliente_edit" id="cliente_edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                <h5>Datos del Cliente</h5>                
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" id="id_cliente_edit" name="id_cliente_edit">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre_cliente_edit">Nombre del Cliente</label>
                                    <input type="text" class="form-control" name="nombre_cliente_edit" id="nombre_cliente_edit" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>                                
                        </div>
                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tel1_cliente_edit">Telefono 1</label>
                                        <input type="text" class="form-control" name="tel1_cliente_edit" id="tel1_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tel2_cliente_edit">Telefono 2</label>
                                        <input type="text" class="form-control" name="tel2_cliente_edit" id="tel2_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                                 
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="correo_cliente_edit">Correo</label>
                                        <input type="text" class="form-control" name="correo_cliente_edit" id="correo_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="rfc_cliente_edit">RFC</label>
                                        <input type="text" class="form-control" name="rfc_cliente_edit" id="rfc_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Domicilio del Cliente</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="calle_cliente_edit">Calle</label>
                                        <input type="text" class="form-control" name="calle_cliente_edit" id="calle_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>  
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ext_cliente_edit">No.Exterior</label>
                                        <input type="text" class="form-control" name="ext_cliente_edit" id="ext_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>  
                                <div class="col">
                                    <div class="form-group">
                                        <label for="int_cliente_edit">No.Interior</label>
                                        <input type="text" class="form-control" name="int_cliente_edit" id="int_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="colonia_cliente_edit">Colonia</label>
                                        <input type="text" class="form-control" name="colonia_cliente_edit" id="colonia_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                                 
                                <div class="col">
                                    <div class="form-group">
                                        <label for="estado_cliente_edit">Estado</label>
                                        <input type="text" class="form-control" name="estado_cliente_edit" id="estado_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="pais_cliente_edit">Pais</label>
                                        <input type="text" class="form-control" name="pais_cliente_edit" id="pais_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div> 
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cp_cliente_edit">CP</label>
                                        <input type="text" class="form-control" name="cp_cliente_edit" id="cp_cliente_edit" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>                             
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