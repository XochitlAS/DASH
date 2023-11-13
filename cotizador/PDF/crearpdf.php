<?php
require('FPDF/fpdf.php');
require('conectar.php');

class PDF extends FPDF{
    
    function Header(){

    //logos
    $this->Image('logoCDT.png',2,2,45);
    $this->Image('logo2CDT.png',45,2,170);
    //titulos
    $this->SetFont('Arial','B',40);
    $this->Cell(70);
    $this->Cell(10,53,'2 0 2 3',0);
    $this->SetFont('Arial','B',30);
    $this->Cell(-10);
    $this->Cell(10,80,'CONTRATO',0);
    $this->SetFont('Arial','B',15);
    $this->SetTextColor(150,0,10);
    $this->Cell(50);
    $this->Cell(10,95,'FOLIO:',0);
    $this->SetDrawColor(150,0,19);
    $this->SetLineWidth(1);
    $this->Rect(145,45,60,7);   //rectangulo de 'contrato'
    $this->Rect(160,55,45,7);  //rectamgulo de 'folio'

    //parte del centro de la hoja
    $this->SetDrawColor(0,0,0);
    $this->SetLineWidth(0);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',10);
    $this->Ln(1); 
    $this->Cell(20,90,'FECHA DE CONTRATACION: ___________ / __________ 2023',0);
    $this->Ln(4);
    $this->Cell(10,90,'FECHA DE INSTALACION: ___________ / __________ 2023',0);
    }
   
    
    function footer(){
        $this->Image('pp.png',0,276,220);
    }
}
$pdf = new PDF();
$pdf -> AliasNBPages();
$pdf -> AddPage(); 
$pdf -> SetFont('Arial','B','10');


$my = conectObj();
$sql = "SELECT cliente, marca, modelo, no_serie, descripcion, cantidad, equipo_subtotal, equipo_total, anticipo_1, anticipo_2,balance, subtotal, iva, total, notas FROM contrato WHERE id_contrato = (SELECT MAX(id_contrato) FROM contrato)";
$stm = $my->prepare($sql);
$stm->execute();
$stm->bind_result($cliente,$marca,$modelo,$nserie,$desc, $cantidad, $esubtotal, $etotal, $anticipo1, $anticipo2, $balance, $subtotal, $iva, $total, $notas);
$stm->store_result();
$stm->fetch();
        $pdf -> SetFillColor(204, 235, 255);
        $pdf -> SetXY(6,75);
        $pdf -> Cell(198, 5,$cliente,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(6,118);
        $pdf -> Cell(95,5,$marca,0,1,'C',true); //aqui van variables
        $pdf -> SetXY(6,130);
        $pdf -> Cell(95,5,$modelo,0,1,'C',true); //aqui van variables
        $pdf -> SetXY(6,144);
        $pdf -> Cell(95,5,$nserie,0,1,'C',true); //aqui van variables

$my = conectObj();
$SQL= "SELECT telefono1, telefono2, correo, calle, estado, pais FROM clientes WHERE nombre = '$cliente'";
$stm = $my->prepare($SQL);
$stm->execute();
$stm->bind_result($telefono1,$telefono2,$correo,$calle, $estado,$pais);
$stm->store_result();
$stm->fetch();
        $pdf -> SetXY(6,99);
        $pdf -> Cell(118, 5,$correo,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(125,99);
        $pdf -> Cell(39, 5,$telefono1,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(165,99);
        $pdf -> Cell(39, 5,$telefono2,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(6,87);
        $pdf -> Cell(118, 5,$calle,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(125,87);
        $pdf -> Cell(39, 5,$estado,0,0,'C',true); //aqui van variables
        $pdf -> SetXY(165,87);
        $pdf -> Cell(39, 5,$pais,0,0,'C',true); //aqui van variables
        

    

    //RECTANGULO DE DATOS DEL CLIENTE
$pdf -> Rect(5,68,200,37);  
$pdf -> SetXY(80,63);
$pdf -> Cell(50,5,'DATOS DEL CLIENTE:',0,1,'C'); 
$pdf -> SetXY(5,69);
$pdf -> Cell(200, 5,'NOMBRE DEL CLIENTE:',0,1,'C', false);


$pdf -> SetFillColor(204, 235, 255);
$pdf -> SetXY(6,81);
$pdf -> Cell(120, 5,'DIRECCION',0,0,'C',false);
$pdf -> Cell(40, 5,'CIUDAD',0,0,'C',false);
$pdf -> Cell(40, 5,'ESTADO',0,0,'C',false);
$pdf -> SetXY(6,93);
$pdf -> Cell(118, 5,'CORREO ELECTRONICO',0,0,'C',false);
$pdf -> Cell(39, 5,'TELEFONO NO#1',0,0,'C',false);
$pdf -> Cell(39, 5,'TELEFONO NO#2',0,0,'C',false);


//RECTANGULO DE INFORMACION DEL EQUIPO
$pdf -> Rect(5,110,97,40);  
$pdf -> SetXY(30,105);
$pdf -> Cell(55,5,'INFORMACION DEL EQUIPO:',0,1,'C');
$pdf -> SetXY(6,112);
$pdf -> Cell(95,5,'MARCA:',0,1,'C', false);
$pdf -> SetXY(6,124);
$pdf -> Cell(95,5,'MODELO:',0,1,'C', false);
$pdf -> SetXY(6,137);
$pdf -> Cell(95,5,'No. SERIE:',0,1,'C', false);

// RECTANGULO DE INFORMACION DE USUARIO
$pdf -> Rect(108,110,97,40); 
$pdf -> SetXY(125,105);
$pdf -> Cell(55,5,'INFORMACION DEL USUARIO:',0,1,'C', false);
$pdf -> SetXY(109,112);
$pdf -> Cell(95,5,'CORREO / TELEFONO:',0,1,'C', false);
$pdf -> SetXY(109,118);
$pdf -> Cell(88,5,'jacebedo518@gmail.com',0,1,'C',true);//aqui van variables
$pdf -> SetXY(109,124);
$pdf -> Cell(88,5,'USUARIO',0,1,'C', false);
$pdf -> SetXY(109,130);
$pdf -> Cell(88,5,'',0,1,'C',true);
$pdf -> SetXY(109,137);
$pdf -> Cell(88,5,'CONTRASENA:',0,1,'C', false);
$pdf -> SetXY(109,144);
$pdf -> Cell(88,5,'',0,1,'C',true);

$pdf -> SetFillColor(220,230,200);
$pdf -> SetXY(190,137);
$pdf -> Cell(5,5,'NUBE:',0,0,'C', false);
$pdf -> SetXY(199,137);
$pdf -> Cell(5,5,'',0,1,'C',true);

$pdf -> SetXY(190,124);
$pdf -> Cell(5,5,'NUBE',0,1,'C', false);
$pdf -> SetXY(199,124);
$pdf -> Cell(5,5,'',0,1,'C',true);

// RECTANGULO DE DETALLES DEL SISTEMA
$pdf -> Rect(5,160,69,63);  //rectangulo de la 3era fila izquierda
$pdf -> SetXY(20,155);
$pdf -> Cell(55,5,'DETALLES DEL SISTEMA:');
$pdf -> Image('CDT00.png',6,165,67);


$pdf -> Rect(75,160,10,60);  //rectangulo de la 3era fila centro
$pdf -> SetXY(75,162);
$pdf -> MultiCell(10,8,'THD IP 4K AUD PTZ CVU LTE');


$pdf -> SetFillColor(220,230,200);
$pdf -> Rect(90,160,115,65); //rectangulo de la 3era fila derecha
$pdf -> SetXY(125,155);
$pdf -> Cell(55,5,'RESUMEN DEL EQUIPO:');
$pdf -> SetXY(90,160);
$pdf -> Cell(50,5,'DESCRIPCCION:',1,0,'C',false);
$pdf -> Cell(15,5,'CANT:',1,0,'C',false);
$pdf -> Cell(25,5,'SUBTOTAL:',1,0,'C', false);
$pdf -> Cell(25,5,'TOTAL',1,0,'C',false);

$pdf -> SetXY(90,168);
$pdf -> Cell(5,5,'1',0,0,'L',false);
$pdf -> Cell(43,5,$desc,0,0,'L',true); //aqui van variables
$pdf -> SetXY(140,168);
$pdf -> Cell(13,5,$cantidad,0,0,'C',true); //aqui van variables
$pdf -> SetXY(155,168);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,$esubtotal,0,0,'',true); 
$pdf -> SetXY(180,168);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,$etotal,0,0,'',true); 

$pdf -> SetXY(90,177);
$pdf -> Cell(5,5,'2',0,0,'L',false);
$pdf -> Cell(43,5,'',0,0,'',true);   //aqui van variables
$pdf -> SetXY(140,177);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,177);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 
$pdf -> SetXY(180,177);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

$pdf -> SetXY(90,185);
$pdf -> Cell(5,5,'3',0,0,'L',false);
$pdf -> Cell(43,5,'',0,0,'',true);   //aqui van variables
$pdf -> SetXY(140,185);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,185);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 
$pdf -> SetXY(180,185);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

$pdf -> SetXY(90,193);
$pdf -> Cell(5,5,'4',0,0,'L',false);
$pdf -> Cell(43,5,'',0,0,'',true);    //aqui van variables
$pdf -> SetXY(140,193);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,193);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 
$pdf -> SetXY(180,193);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

$pdf -> SetXY(90,201);
$pdf -> Cell(5,5,'5',0,0,'L',false);
$pdf -> Cell(43,5,'',0,0,'',true); //aqui van variables
$pdf -> SetXY(140,201);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,201);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 
$pdf -> SetXY(180,201);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

$pdf -> SetXY(90,209);
$pdf -> Cell(5,5,'6',0,0,'L',false);
$pdf -> Cell(43,5,'',0,0,'',true);  //aqui van variables
$pdf -> SetXY(140,209);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,209);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 
$pdf -> SetXY(180,209);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

$pdf -> SetXY(90,217);
$pdf -> Cell(5,5,'7',0,0,'L',false);
$pdf -> Cell(43,5,'  ',0,0,'',true); //aqui van variables
$pdf -> SetXY(140,217);
$pdf -> Cell(13,5,'',0,0,'C',true);
$pdf -> SetXY(155,217);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true);
$pdf -> SetXY(180,217);
$pdf -> Cell(5,5,'$',0,0,'L',true);
$pdf -> Cell(18,5,'',0,0,'',true); 

// ARRIBA DEL PIE DE PAGINA
$pdf -> SetXY(5,-70);
$pdf -> SetTextColor(200,220,255);
$pdf -> SetFillColor(1,0,0);
$pdf -> Cell(30,5,'ANTICIPO#1',1,0,'C',true);
$pdf -> Cell(30,5,'ANTICIPO#2',1,0,'C', true);
$pdf -> Cell(30,5,'BALANCE',1,0,'C',true);
$pdf -> SetXY(5,-65);
$pdf -> SetTextColor(1,0,0);
$pdf -> Cell(5,5,'$',0,0,'L',false);
$pdf -> Cell(25,5,$anticipo1,0,0,false); //aqui van variables
$pdf -> Cell(5,5,'$',0,0,'L',false);
$pdf -> Cell(25,5,$anticipo2,0,0,false);   //aqui van variables
$pdf -> Cell(5,5,'$',0,0,'L',false);
$pdf -> Cell(25,5,$balance,0,0,false);   //aqui van variables
$pdf -> SetXY(5,-60);
$pdf -> Cell(50,5,'______ / ______ 2023     ______ / ______ 2023',0,0,false);
$pdf -> SetXY(55, -52);
$pdf -> SetFont('Arial','B', 8);
$pdf -> MultiCell(75,3,'Con esta firma acepto los terminos y condiciones de este contrato, de igual forma, estoy satisfecho(a) y conforme con el trabajo realizado y 100% terminado, estando asi consiente que dicha empresa no acepta ningun tipo de devoluciones.',0,0,false);
$pdf -> Rect(55,262,75,10);

$pdf -> SetFillColor(220,230,200);
$pdf -> SetXY(160,-70);
$pdf -> Cell(15,5,'SUBTOTAL: ',0,1,'C',false);
$pdf -> SetXY(176,-70);
$pdf -> Cell(25,5,$subtotal,0,1,'',true);  //aqui van variables
$pdf -> SetXY(160,-64);
$pdf -> Cell(15,5,'IVA: ',0,1,'C',false);
$pdf -> SetXY(176,-64);
$pdf -> Cell(25,5,$iva,0,1,'',true);  //aqui van variables
$pdf -> SetXY(160,-58);
$pdf -> Cell(15,5,'TOTAL: ',0,1,'C',false);
$pdf -> SetXY(176,-58);
$pdf -> Cell(25,5,$total,0,1,'',true);  //aqui van variables

$pdf -> SetXY(100,-70);
$pdf -> Cell(54,5,'CARGO ANUAL POR CUENTA: ',0,0,'C',false);
$pdf -> SetXY(100,-65);
$pdf -> Cell(54,10,'_______________________________',1,0,'C', false);
$pdf -> SetXY(100,-59);
$pdf -> Cell(54,5,'ACEPTO',0,0,'C',false);
$pdf -> SetXY(150,-52);
$pdf -> Cell(25,5,'NOTAS:',0,0,'C', false);
$pdf -> Rect(135,250,70,20);
$pdf -> SetXY(10,-52);
$pdf -> Cell(30,5,'FORMA DE PAGO:',1,0,'C',false);
$pdf -> Image('FP.png',10,250,30);
$pdf -> SetXY(10,-39);
$pdf -> Cell(8,5,'',0,1,'',true);   //aqui van variables
$pdf -> SetXY(21,-39);
$pdf -> Cell(8,5,'',0,1,'',true);   //aqui van variables
$pdf -> SetXY(32,-39);
$pdf -> Cell(8,5,'',0,1,'',true);   //aqui van variables

$pdf -> Output();
?> 