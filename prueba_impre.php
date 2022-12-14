<?php
require('reportes/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
        {
            
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(20);
            // Título
            $this->Cell(80,10,'PRUEBA DE CERTIFICADO',0,0,'C');
            // Salto de línea
            $this->Ln(20);
        }

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape','a4');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
$pdf->Output();
?>