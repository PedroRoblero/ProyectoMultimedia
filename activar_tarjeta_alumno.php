<?php 

require 'conexion_i.php';

$id = $_REQUEST['id'];

$query = "UPDATE tarjeta SET estado_tarjeta=1 WHERE id_alumno = $id";
$result=$mysqli->query($query);
if ($result) {
	header("Location: index.php");
}


 ?>