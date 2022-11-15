<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Brandley Hand ITC','','BRADHITC.php');
$pdf->AddFont('Comic','','comic.php');
$pdf->AddFont('French Script','','FRSCRIPT.php');
$pdf->AddFont('Ink Free','','Inkfree.php');
$pdf->AddFont('Lucida Handwriting Italic','','LHANDW.php');



$pdf->AddPage();
$pdf->SetFont('Brandley Hand ITC','',40);
$pdf->Write(10,'"I find that the stranger life gets, the more it seems to make sense." - Ivern');
$pdf->Ln(30);

$pdf->SetFont('Comic','',40);
$pdf->Write(10,'"I have found my limit a thousand times, and still I press further." - Pantheon');
$pdf->Ln(30);

$pdf->SetFont('French Script','',40);
$pdf->Write(10,'"Never become a monster to defeat one." - Karma');
$pdf->Ln(30);

$pdf->SetFont('Ink Free','',40);
$pdf->Write(10,'"A shepherd with no flock is just an idiot with a stick." - Sylas');
$pdf->Ln(30);

$pdf->SetFont('Lucida Handwriting Italic','',40);
$pdf->Write(10,'"A lion is made from the wolves he has eaten." - Garen – God-King');
$pdf->Ln(30);


$pdf->Output();
?>