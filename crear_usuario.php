<?php 

require 'conexion_i.php';

$RUT=$_REQUEST['RUT'];

$query = "SELECT id_alumno,correo FROM alumno WHERE rut='$RUT'";
$result=$mysqli->query($query);

foreach($result as $fila){
	$a = $fila['id_alumno'];
	$b = $fila['correo'];

}

foreach($result as $fila){
	$b = $fila['correo'];

}

$query3 = "SELECT id_usuario FROM usuario WHERE user='$RUT'";
$result3=$mysqli->query($query3);
if ($result3->num_rows == 1 ) {
  header("location: index_admin.php");
 }
else if($result){
	$insert = "INSERT INTO usuario (id_alumno,tipo_usuario,user,pass,email) VALUES ($a , 'alumno', $RUT,$RUT, '$b')";
	$result2 = $mysqli->query($insert);
	if($result2){
		header("Location: crop.php?RUT=".urlencode($RUT)); 
	}
	
}
else{
	echo "Insercion no exitosa";
}



 ?>

