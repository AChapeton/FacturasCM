
<?php
//   require('fpdf/fpdf.php');
//   $doc=new FPDF();
//   $doc->AddPage();
//   $doc->SetFont('Arial','',11);
//   $doc->Ln();
//   $doc->Cell(50,9,'Nombre: '.$_POST['name'],0,2,'L');
//   $doc->Ln();
//   $doc->Cell(50,9,'Apellido: '.$_POST['last_name'],0,2,'L');
//   $doc->Ln();
//   $doc->Cell(50,9,'Cantidad: '.$_POST['amount'],0,2,'L');
//   $doc->Output();

?>

<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $this->Image('logo.png',10,8,33);
    // // Arial bold 15
    // $this->SetFont('Arial','B',15);
    // // Movernos a la derecha
    // $this->Cell(80);
    // // Título
    // $this->Cell(30,10,'Title',1,0,'C');
    // // Salto de línea
    // $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    // $this->SetY(-15);
    // // Arial italic 8
    // $this->SetFont('Arial','I',8);
    // // Número de página
    // $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//HEADER
$pdf->SetFont('Helvetica','',9);
$pdf->Image('img\log_cat.png',18,30,50);
$pdf->Ln(30);
$pdf->setX(16);
$pdf->Cell(95,8,'THE MICHIGAN AGENCY S.A DE C.V - NCR: 292900-4',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->SetFont('Helvetica','B',12);
$pdf->Cell(75,8,'Cliente:',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->SetFont('Helvetica','',9);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'NIT: 0511-200820-101-4',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->SetFont('Helvetica','B',9);
//$pdf->Cell(50,9,''.$_POST['client'],0,2,'L');
$pdf->Cell(75,8,''.$_POST['clients'],0,0,'L');
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->SetFont('Helvetica','',9);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'89 AV NORTE Y CALLE EL MIRADOR COL. ESCALON, EDIF',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->Cell(75,8,'NIT: *EMPTY',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'WORLD TRADE CENTER',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->Cell(75,8,'21700 Oxnard Sy Ste 1700 Woodland Hills, CA,',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'El Salvador',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->Cell(75,8,'91367-7590 United States',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'Tel: 25623699',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);
$pdf->setX(117);
$pdf->Cell(75,8,'Estados Unidos',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,13,' ',0,0,'L',1);
$pdf->Ln(5);
$pdf->setX(16);
$pdf->Cell(95,8,'rrhh@catmedialatino.com',0,0,'L',0);
$pdf->SetFillColor(39, 40, 92); 
$pdf->Cell(2,8,' ',0,0,'L',1);


//BODY
$pdf->Ln(25);
$pdf->setX(16);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(39, 40, 92);  
$pdf->Cell(80,8,'Concepto',0,0,'L',1);
$pdf->Cell(20,8,'Uds.',0,0,'R',1);
$pdf->Cell(20,8,'Base Ud.',0,0,'R',1);
$pdf->Cell(20,8,'Base Total',0,0,'R',1);
$pdf->Cell(20,8,'% IVA',0,0,'R',1);
$pdf->Cell(20,8,'IVA',0,1,'R',1);

$pdf->SetTextColor(0, 0, 0); 
$pdf->setX(16);
$pdf->Cell(80,8,''.$_POST['service'],0,0,'L',0);
$pdf->Cell(20,8,''.$_POST['amount'],0,0,'R',0);
$pdf->Cell(20,8,''.$_POST['total'].' $',0,0,'R',0);
$pdf->Cell(20,8,''.$_POST['total'].' $',0,0,'R',0);
$pdf->Cell(20,8,'0%',0,0,'R',0);
$pdf->Cell(20,8,'0,00 $',0,0,'R',0);


//FOOTER
$pdf->Ln(140);
$pdf->setX(120);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(39, 40, 92);  
$pdf->Cell(80,6,'Totales',1,1,'C',1);
$pdf->SetTextColor(0, 0, 0);
$pdf->setX(120);
$pdf->Cell(80,6,'Total B.I.:      '.$_POST['total'].' $',1,1,'C',0);
$pdf->setX(120);
$pdf->Cell(80,6,'TOTAL:      '.$_POST['total'].' $',1,1,'C',0);
$pdf->Ln(2);
$pdf->Cell(100,6,utf8_decode('Las cantidades expresadas en este documento son en Dílares de los Estados Unidos de América.'),0,1,'L',0);
$pdf->Cell(100,6,utf8_decode('* recuerde que este es un presupuesto y no reemplaza ningún tipo de factura o comprobante de pago.'),0,1,'L',0);
$pdf->Output();
?>


