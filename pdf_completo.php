<?php 

include 'plantilla.php';

require 'conexion_i.php';

$query = "SELECT * FROM alumno";
$result= $mysqli->query($query);

$pdf = new PDF();
//$pdf->AliasPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell('20','6','ID',1,0,'C',1);
$pdf->Cell('25','6','RUT',1,0,'C',1);
$pdf->Cell('15','6','DV',1,0,'C',1);
$pdf->Cell('25','6','Nombre',1,0,'C',1);
$pdf->Cell('25','6','Apellido P',1,0,'C',1);
$pdf->Cell('25','6','Apellido M',1,0,'C',1);
$pdf->Cell('20','6','Prom',1,0,'C',1);
$pdf->Cell('15','6','Estado',1,1,'C',1);



$pdf->SetFont('Arial','',10);

while($row = $result->fetch_assoc())
{
	$pdf->Cell('20','6',$row['id_alumno'],1,0,'C',1);
	$pdf->Cell('25','6',$row['rut'],1,0,'C',1);
	$pdf->Cell('15','6',$row['dv'],1,0,'C',1);
	$pdf->Cell('25','6',$row['nombre'],1,0,'C',1);
	$pdf->Cell('25','6',$row['apellido_paterno'],1,0,'C',1);
	$pdf->Cell('25','6',$row['apellido_materno'],1,0,'C',1);
	$pdf->Cell('20','6',$row['promocion'],1,0,'C',1);
	$pdf->Cell('15','6',$row['estado'],1,1,'C',1);
	
}

$pdf->Output();

 ?>