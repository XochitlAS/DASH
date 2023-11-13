<div id="modalPDF" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Cotización</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>

        </div>
        <div class="modal-body">
          <div class="">
            <div class="bodypdf" id="contentPDF">


            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" id="cancelarCotizacion">Cancelar</button>
          <button type="button" class="btn btn-dark " id="clonarCotizacion" hidden="">Clonar</button>
          <button type="button" class="btn btn-info " id="imprimirCotizacion" hidden="">Imprimir</button>
          <button type="button" class="btn btn-primary " id="descargarCotizacion" hidden="">Descargar</button>
          <button type="button" class="btn btn-success " id="editarCotizacion" hidden="">Editar</button>
          <button type="button" class="btn btn-danger " id="enviarCotizacion" hidden="">Enviar</button>

          <button type="button" class="btn btn-success " id="crearRemision">Convertir en Remisión</button>
          <button type="button" class="btn btn-warning " id="giCotizacion">Guardar/Imprimir</button>
          <button type="button" class="btn btn-primary " id="saveCotizacion">Guardar/Descargar</button>
          <button type="button" class="btn btn-danger " id="geCotizacion">Guardar/Enviar</button>
          <button type="button" class="btn btn-dark " id="guardarCotizacion">Guardar</button>
          <div class="icheck-primary d-inline">
            <input type="checkbox" title="Guardar Paquete" class="form-control total_rem" id="save_pack">
            <label for="save_pack">Guardar como Paquete</label>
          </div>

        </div>

    </div>
  </div>
</div>