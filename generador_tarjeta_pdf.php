<?php 

include 'plantillatarjeta.php';

require 'conexion_i.php'; 
$rut=$_GET['RUT'];

$query = "SELECT * FROM alumno where rut=$rut";
$result= $mysqli->query($query);

$pdf = new PDF();
//$pdf->AliasPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',30);

while($row = $result->fetch_assoc())
{
	$pdf->SetFillColor(232,232,232);

	$pdf->SetFont('Arial','B',12);
	$pdf->MultiCell(190,40, $pdf->Image('img/3Q8H.jpg', $pdf->GetX(), $pdf->GetY()) ,0,"C");
	$pdf->SetXY(75,35);
	$pdf->MultiCell(90,40, $pdf->Image('img/logo_upla.png', $pdf->GetX(), $pdf->GetY(),50) ,0,"C");
	$pdf->SetXY(15,35);
	$pdf->MultiCell(190,40, $pdf->Image($row['foto'], $pdf->GetX(), $pdf->GetY() , 20) ,0,"C");	
	$pdf->SetXY(15,60);
	$pdf->MultiCell(190,40, $pdf->Image($row['qr'], $pdf->GetX(), $pdf->GetY(), 30) ,0,"C");
	$pdf->SetXY(85,62);	
	$pdf->Cell('20','6','Nombre :',0,0,'C',0);
	$pdf->Cell('20','6',$row['nombre'],0,1,'C',0);
	$pdf->SetXY(85,72);
	$pdf->Cell('20','6','Apellido :',0,0,'C',0);
	$pdf->Cell('20','6',$row['apellido_paterno'],0,1,'C',0);
	$pdf->SetXY(85,82);
	$pdf->Cell('20','6','rut :',0,0,'C',0);
	$pdf->Cell('15','6',$row['rut'],0,0,'C',0);
	$pdf->Cell('10','6','-',0,0,'C',0);
	$pdf->SetXY(125,82);
	$pdf->Cell('10','6',$row['dv'],0,1,'C',0);		
}

$pdf->Output();

 ?>