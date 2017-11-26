<?php 

include 'plantilla_casino.php';

require 'conexion_i.php';

$query = "SELECT * FROM casino";
$result= $mysqli->query($query);

$pdf = new PDF();
//$pdf->AliasPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell('7','6','ID',1,0,'C',1);
$pdf->Cell('20','6','RUT',1,0,'C',1);
$pdf->Cell('7','6','DV',1,0,'C',1);
$pdf->Cell('25','6','Nombre',1,0,'C',1);
$pdf->Cell('25','6','Apellido P',1,0,'C',1);
$pdf->Cell('25','6','Apellido M',1,0,'C',1);
$pdf->Cell('25','6','Cargo',1,0,'C',1);
$pdf->Cell('60','6','Correo',1,1,'C',1);



$pdf->SetFont('Arial','',10);

while($row = $result->fetch_assoc())
{
	$pdf->Cell('7','6',$row['id_casino'],1,0,'C',1);
	$pdf->Cell('20','6',$row['rut'],1,0,'C',1);
	$pdf->Cell('7','6',$row['dv'],1,0,'C',1);
	$pdf->Cell('25','6',$row['nombre'],1,0,'C',1);
	$pdf->Cell('25','6',$row['apellido_pat'],1,0,'C',1);
	$pdf->Cell('25','6',$row['apellido_mat'],1,0,'C',1);
	$pdf->Cell('25','6',$row['tipo_casino'],1,0,'C',1);
	$pdf->Cell('60','6',$row['correo'],1,1,'C',1);
	
}

$pdf->Output();

 ?>