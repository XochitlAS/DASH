<?php 

ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Recursos Plantilla NavigationBar-->
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!--SELECT2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--DROPZONE-->
     <!-- Dropzone -->
    <link rel="stylesheet" href="files/plugins/dropzone/dropzone.css">
    <!-- Dropzone http://www.dropzonejs.com/-->
  <script src="files/plugins/dropzone/dropzone.js"></script>
  <link rel="stylesheet" href="background.css">


</head>
<body class="m-2">
  <header>
        
        <div class="d-flex ">
          <img class="mt-3 p-2" src="../assets/img/logo.png" style="width:700px; height:120px" class="logo"></img>  
          <div class="ms-auto p-2">
            <h2  style="font-size: 70px;"><strong>COTIZACIÓN</strong></h2>
            <div style="font-size: 35px"><strong>FOLIO</strong> #</div>
          </div>                      
        </div> 
        <br>
        <div class="d-flex">
          <div class="d-flex flex-column">
            <div style="font-size: 30px"><strong>DATOS DEL CLIENTE</strong></div>
            <div style="font-size: 20px">CLIENTE: </div>          
            <div style="font-size: 20px">DOMICILIO: </div>
            <div style="font-size: 20px">CIUDAD: </div>          
            <div style="font-size: 20px">TELEFONO: </div>         
            <div style="font-size: 20px">CORREO:</div>          
          </div>  
          <div class="d-flex flex-column ms-auto">
            <div class="d-flex">
              <div class="d-flex flex-column">
                
                <div style="font-size: 20px"><strong>FECHA:</strong></div>
                <div style="font-size: 20px"><strong>VIGENCIA:</strong></div>
                <div style="font-size: 20px"><strong>AGENTE:</strong></div>
              </div>
              <div class="d-flex flex-column">                
                <img class="p-2" src="../assets/img/Info.png" style="width:400px;" class="logo"></img>  
              </div>
            </div>
          </div>                        
        </div>
  </header>
  <br>
  <main>
  <div>
          <table class="table table-borderless">
            <thead>
              <tr class="bg-primary text-light">
                <th style="font-size: 20px;" >DESCRIPCIÓN</th>
                <th style="font-size: 20px; width: 100px;">SKU</th>
                <th style="font-size: 20px; width: 80px; ">CANT.</th>
                <th style="font-size: 20px; width: 100px;">P.UNIT</th>
                <th style="font-size: 20px; width: 100px">TOTAL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="font-weight-normal" style="font-size: 20px">Sistema de camaras CCTV Hikvision DVR 16 canales con 2 años de garantia</td>                
                <td class="font-weight-normal" style="font-size: 20px">1000029</td>
                <td class="font-weight-normal" style="font-size: 20px">20</td>
                <td class="font-weight-normal" style="font-size: 20px">1.00</td>
                <td class="font-weight-normal" style="font-size: 20px">20.00</td>                
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-size: 25px"><strong>Subtotal:</strong></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-size: 25px"><strong>IVA 8%:</strong></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-size: 25px"><strong>Total:</strong></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
  </main>

  <br>

  <footer>
    <div class="d-flex justify-content-center" style="font-size: 20px">SITIO WEB: WWW.COMPUDIGITAL.COM.MX</div>
    <div class="d-flex justify-content-center" style="font-size: 20px"><strong>TERMINOS & CONDICIONES</strong></div>
    <br>
    <!--Alineacion Central de Terminos y condiciones-->
    <div class="d-flex justify-content-center">
      <textarea class="form-control ml-5 mr-5 border" name="" id="" rows="7"></textarea>
    </div>
  </footer>

    


<!--FontAwesome-->
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


</body>
</html>
<?php 
  $html = ob_get_clean();
  //echo $html;

  //COMENZAMOS A DESARROLLAR LA CREACION PDF
  require '../dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnabled'=> true));
  $dompdf->setOptions($options);

  $dompdf->loadHtml($html);
  $dompdf->setPaper('letter');

  $dompdf->render();

  $dompdf->stream("archivo_.pdf",array("Attachment"=>true));

?>