<?php
// Include the main TCPDF library (search for installation path).
require_once('../app/templeates/TCPDF-main/tcpdf.php');
include('../app/config.php');


//cargar el encabezado
$query_informacions = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = '1' ");
$query_informacions->execute();
$informacions = $query_informacions->fetchAll(PDO::FETCH_ASSOC);
foreach($informacions as $informacion){
    $id_informacion = $informacion['id_informacion'];
    $nombre_parqueo = $informacion['nombre_parqueo'];
    $actividad_empresa = $informacion['actividad_empresa'];
    $sucursal = $informacion['sucursal'];
    $direccion = $informacion['direccion'];
    $zona = $informacion['zona'];
    $telefono = $informacion['telefono'];
    $departamento_ciudad = $informacion['departamento_ciudad'];
    $pais = $informacion['pais'];
}



//cargar la información del ticket desde el id
$id_ticket_get = $_GET['id'];
$query_tickets = $pdo->prepare("SELECT * FROM tb_tickets WHERE id_ticket = '$id_ticket_get' AND estado = '1' ");
$query_tickets->execute();
$tickets = $query_tickets->fetchAll(PDO::FETCH_ASSOC);
foreach($tickets as $ticket){
    $id_ticket = $ticket['id_ticket'];
    $nombre_cliente = $ticket['nombre_cliente'];
    $nit_ci = $ticket['nit_ci'];
    $cuviculo = $ticket['cuviculo'];
    $fecha_ingreso = $ticket['fecha_ingreso'];
    $hora_ingreso = $ticket['hora_ingreso'];
    $user_sesion = $ticket['user_sesion'];
    $placa_auto = $ticket['placa_auto'];
}


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(79, 150), true, 'UTF-8', false);

$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('TCPDF Example 002');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');


$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->setMargins(2, 2, 5);


$pdf->setAutoPageBreak(true, 2);



$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}



// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 7);

// add a page
$pdf->AddPage();

$pdf->SetFont('helvetica', '', 7);


// print a message
$txt = "";
$pdf->MultiCell(5, 5, $txt, 0, 'J', false, 1, 0, 0, true, 0, false, true, 0, 'T', false);



//Create some HTML content
$html = '
<div>
    <p style="text-align: center">
        <b style="font-size: larger">'.$nombre_parqueo.'</b> <br>
        '.$actividad_empresa.' <br>
        SUCURSAL '.$sucursal.' <br>
        '.$telefono.' <br>
        '.$direccion.', '.$zona.', '.$departamento_ciudad.' - '.$pais.'
        ---------------------------------------------------------------------------
        <b style="font-size: large">TICKET Nº [ '.$id_ticket.' ]</b> <br>
        <b style="font-size: large">PUESTO: '.$cuviculo.'</b> <br>
        <b style="font-size: large">['.$fecha_ingreso.' '.$hora_ingreso.']</b> 
        ---------------------------------------------------------------------------
        <div style="text-align: left">
            <b style="font-size: larger">DATOS DEL REGISTRO</b> <br>
            <b style="font-size: large">RESPONSABLE: '.$nombre_cliente.'</b>  <br>
            <b style="font-size: large">CI.: '.$nit_ci.'</b>   <br>
            <b style="font-size: large">PLACA: '.$placa_auto.'</b>  <br>

         -------------------------------------------------------------------------- <br>
         <b style="font-size: large">USUARIO: '.$user_sesion.'</b> <br>
         -------------------------------------------------------------------------- <br>
         
        
        
        </div>
    </p>
    

</div>

';


// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// Ajustar el tamaño de la fuente
$pdf->SetFont('', '', 6); // Cambia '10' al tamaño de fuente deseado


// set style for barcode
$style = array(
    'border' => true,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);

// write RAW 2D Barcode

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// set style for barcode
$style = array(
    'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);



// QRCODE,M : QR-CODE Medium error correction
$pdf->write2DBarcode($cuviculo, 'QRCODE,Q', 10, 80, 55, 55, $style, 'N    ');
$pdf->Text(5, 5, '');


//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
