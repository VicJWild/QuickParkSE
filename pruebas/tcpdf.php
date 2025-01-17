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


//cargar la información del ticket
$query_tickets = $pdo->prepare("SELECT * FROM tb_tickets WHERE estado = '1' ");
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

//informacion de usuarios
$query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE Estado = '1' ");
$query_usuario->execute();
$usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){

    $nombre = $usuario['nombres'];
    $email = $usuario['email'];
}

//informacion de roles
$query_roles = $pdo->prepare("SELECT * FROM tb_roles WHERE estado = '1' ");
$query_roles->execute();
$roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);
foreach($roles as $role) {
    $id_rol = $role['id_rol'];
    $nombre_rol = $role['nombre'];
}



$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(79,120), true, 'UTF-8', false);


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
$pdf->setFont('Helvetica', '', 8);

// add a page
$pdf->AddPage();




// create some HTML content
$html = '
<div>
    <p style="text-align: center">
        <b>'.$nombre_parqueo.'</b> <br>
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
            <b>DATOS DEL REGISTRO</b> <br>
            <b>RESPONSABLE: </b> '.$placa_auto.' <br>
            <b>CI.: </b> '.$nit_ci.'  <br>
            <b style="font-size: large">PLACA: '.$placa_auto.'</b>  <br>

         -------------------------------------------------------------------------- <br>
         <b>USUARIO: </b> '.$user_sesion.' - '.$nombre_rol.'<br>
         -------------------------------------------------------------------------- <br>
         
        
        
        </div>
    </p>
    

</div>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// CODE 128 AUTO
$pdf->Cell(0, 0, '', 0, 1);

// Ajustar el tamaño de la fuente
$pdf->SetFont('', '', 6); // Cambia '10' al tamaño de fuente deseado

$style = array(
    'border' => true,  // Agrega un borde al código de barras
    'padding' => 2.5,    // Espacio alrededor del código de barras
    'fgcolor' => array(0,0,0), // Color de las líneas del código de barras (negro)
    'bgcolor' => false, // Sin color de fondo
    'text' => true,     // Muestra el texto del código de barras
);

//$pdf->write1DBarcode('www.quickparkse.com/', 'C128', '5', '', '', 12, 0.4, $style, 'N');
//
//$pdf->Ln();



//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
