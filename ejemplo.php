<?php
	require("fpdf/fpdf.php");

	$ejemplo = new FPDF();

	$ejemplo->AddPage();
	$ejemplo->SetFont("Times", "I",18);
	$ejemplo->Cell(80,10,utf8_decode("Programacion web"));
	$ejemplo->Cell(80,10,utf8_decode("Programacion web"));
	$ejemplo->Cell(80,10,utf8_decode("Programacion web"));
	$ejemplo->OutPut();
?>