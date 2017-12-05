<?php 

require 'conexion_i.php';

$id=$_REQUEST['id'];

$query = "UPDATE beca SET estado_beca=0  WHERE id_alumno='$id'";
$result=$mysqli->query($query);

if($result){
	$query2 = "UPDATE tarjeta SET estado_tarjeta=0  WHERE id_alumno='$id'";
	$result2=$mysqli->query($query2);
	if ($result2){
		header ("Location: index_admin.php");
	}
	
}
else{
	echo "Insercion no exitosa";
}

 ?>