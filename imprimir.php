<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();


	 ?>

</body>
</html>