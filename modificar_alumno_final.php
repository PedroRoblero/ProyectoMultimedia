<?php 

require 'conexion_i.php';

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$ape_pat=$_POST['apellido_paterno'];
$ape_mat=$_POST['apellido_materno'];
$carr=$_POST['carrera'];
$prom=$_POST['promocion'];
$est=$_POST['estado'];
$corre=$_POST['correo'];

$query = "UPDATE alumno SET nombre='$nombre', apellido_paterno='$ape_pat', apellido_materno='$ape_mat' , carrera='$carr' , promocion='$prom' , estado='$est' , correo='$corre' WHERE id_alumno='$id'";
$result=$mysqli->query($query);

if($result){

	header ("Location: index_admin.php");
}
else{
	echo "Insercion no exitosa";
}

 ?>