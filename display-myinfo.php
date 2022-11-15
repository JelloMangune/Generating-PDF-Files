<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name: Jello P. Mangune', 0,2);
$pdf->Cell(40,10,'Program: BSIT', 0,2);
$pdf->Cell(40,10,'Email Address: mangune.jello@auf.edu.ph', 0,2);
$pdf->Cell(40,10,'Student Number: 20-0730-992',0 ,2);
$pdf->Output();