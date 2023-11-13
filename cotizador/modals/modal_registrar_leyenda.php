<!--Modal para registrar Cliente-->
<form action="acciones/registrar_leyendas.php" method="POST">
    <div class="modal fade" name="leyenda-reg" id="leyenda-reg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Leyenda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">                               
                <div class="card">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre_cliente_edit">Identificador</label>
                                    <input type="text" class="form-control" name="identificador_reg" id="identificador_reg" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>                                
                        </div>
                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tel1_cliente_edit">Terminos & Condiciones</label>
                                        <textarea type="text" class="form-control" name="terminos_reg" id="terminos_reg" aria-describedby="helpId" placeholder="" rows="10"></textarea>
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