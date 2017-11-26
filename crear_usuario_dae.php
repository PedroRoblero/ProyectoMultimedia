<?php 

require 'conexion_i.php';
session_start();

$RUT=$_REQUEST['RUT'];

$query = "SELECT id_dae,correo FROM dae WHERE rut='$RUT'";
$result=$mysqli->query($query);

foreach($result as $fila){
	$a = $fila['id_dae'];
	$b = $fila['correo'];

}

foreach($result as $fila){
	$b = $fila['correo'];

}
$query3 = "SELECT tipo_dae FROM dae WHERE rut='$RUT'";
$result=$mysqli->query($query3);

foreach($result as $fila){
	$c = $fila['tipo_dae'];

}

$query3 = "SELECT id_usuario FROM usuario WHERE user='$RUT'";
$result3=$mysqli->query($query3);
if ($result3->num_rows == 1 ) {
  header("location: index_admin.php");
 }

if($result){
	$insert = "INSERT INTO usuario (id_dae,tipo_usuario,user,pass,email) VALUES ($a , '$c',$RUT,$RUT, '$b')";
	$result2 = $mysqli->query($insert);
	if($result2){

			if(isset($_SESSION['usuario'])){

		

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
		

			} else if($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
				header('Location: index_admin_dae.php');	
			}
		}

	}
	
}
else{
	echo "Insercion no exitosa";
}



 ?>

 

	