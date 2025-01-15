<?php

// Include the main TCPDF library (search for installation path).
require_once('../app/templeates/TCPDF-main/tcpdf.php');
include ('../app/config.php');

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


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(79,150), true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('TCPDF Example 002');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(5, 5, 5);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, 5);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->setFont('helvetica', '', 8);

// add a page
$pdf->AddPage();

// Calcular la posición X para centrar la imagen
$pageWidth = $pdf->getPageWidth();
$imageWidth = 25; // Ancho de la imagen en mm
$xPosition = ($pageWidth - $imageWidth) / 2;

$imagePath = realpath('../public/img/minimalist--futuristic--quickpark-letter.svg.png');
// Insertar la imagen en el encabezado
$pdf->Image($imagePath, $xPosition, 1, $imageWidth);

// Añadir un salto de línea para asegurar que el contenido HTML comience después de la imagen
$pdf->Ln(6);

// create some HTML content
$html = '
<div>
    
    <p style="text-align: center">
        <b>'.$nombre_parqueo.'</b> <br>
        '.$actividad_empresa.' <br>
        SUCURSAL No '.$sucursal.' <br>
        '.$direccion.' <br>
        ZONA: '.$zona.' <br>
        TELÉFONO: '.$telefono.' <br>
        '.$departamento_ciudad.' - '.$pais.'
        ------------------------------------------------------------------------
        <b>TICKET Nro</b> 01
        ------------------------------------------------------------------------
        <div style="text-align: left">
            <b>DATOS DEL CLIENTE</b> <br>
            <b>SEÑOR(A): </b> LUIS PEREZ <br>
            <b>C.I: </b> 12345678 
        ------------------------------------------------------------------------
        <div style="text-align: left">
        <b>Fecha de Ingreso:</b> 13/01/2025 <br>
        <b>Hora de Ingreso:</b> 20:30 <br>
        <b>Placa: </b> ABC1234 <br>
        <b>Puesto:</b> 1 <br>
        <b>Total:</b> 3$
        ------------------------------------------------------------------------
        <div style="text-align: left">
        <b>USUARIO:</b> Victor Jesus <br><br><br><br><br><br><br><br><br>

        <div style="text-align: center">
        <b>GRACIAS POR SU PREFERENCIA</b>
    </p>
</div>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// set style for barcode

$style = array(
    'border' => 0,
    'vpadding' => '3',
    'hpadding' => '3',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);

$QR = ''; //Esto es un ejemplo
$pdf->write2DBarcode($QR,'QRCODE,L', 25, 76, 26, 26, $style);

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
