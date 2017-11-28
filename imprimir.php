<?php 
require("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(40,10,utf8_decode("¡Hola, Mundo!"));
$pdf->Output();

?>