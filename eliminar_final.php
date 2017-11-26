<?php 

require 'conexion_i.php'; 

$id=$_REQUEST['id'];


$query = "DELETE FROM beca WHERE id_alumno='$id'";
$result=$mysqli->query($query);

if($result){
	$query = "DELETE FROM usuario WHERE id_alumno='$id'";
	$result=$mysqli->query($query);	
	if($result){
	$query = "DELETE FROM alumno WHERE id_alumno='$id'";
	$result=$mysqli->query($query);	
		if($result){
				header ("Location: index_admin.php");
		}
	}
}
else{
	echo "Insercion no exitosa";
}

 ?>