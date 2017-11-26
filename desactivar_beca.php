<?php 

require 'conexion_i.php';

$id=$_REQUEST['id'];

$query = "UPDATE beca SET estado_beca=0  WHERE id_alumno='$id'";
$result=$mysqli->query($query);

if($result){

	header ("Location: index_admin.php");
}
else{
	echo "Insercion no exitosa";
}

 ?>