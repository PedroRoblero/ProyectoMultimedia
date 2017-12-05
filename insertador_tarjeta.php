<?php 

require 'conexion_i.php';

$RUT = $_REQUEST['id'];

$query = "SELECT id_alumno FROM alumno WHERE rut = $RUT";
$result=$mysqli->query($query);

foreach($result as $fila){
	$b = $fila['id_alumno'];
}

if ($result->num_rows == 1) {

	$query2 = "SELECT * FROM beca WHERE id_alumno = $b AND estado_beca = 1";
	$result2=$mysqli->query($query2);

	if ($result2->num_rows == 1) {

		$query3 = "SELECT id_alumno FROM tarjeta WHERE id_alumno = $b";
		$result4=$mysqli->query($query3);
		if ($result4->num_rows == 1) {
			header("Location: generador_tarjeta_pdf.php?RUT=".urlencode($RUT)); 
		} else {

		$insert = "INSERT INTO tarjeta (id_alumno,estado_tarjeta) VALUES ($b , 1)";
		$result3 = $mysqli->query($insert);
		if($result3){
		
		header("Location: generador_tarjeta_pdf.php?RUT=".urlencode($RUT)); 
		
		}
	 }

	} else {
			header("Location: index.php"); 
	}

} else {
	header("Location: index.php");
}


?>


	
	