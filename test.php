<?php
require('assets/lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage('<html><body><h1>This is demo </h1></body></html>');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>
