<?php 

require 'conexion_i.php';
session_start();

$RUT=$_REQUEST['RUT'];

$query = "SELECT id_casino,correo FROM casino WHERE rut='$RUT'";
$result=$mysqli->query($query);

foreach($result as $fila){
	$a = $fila['id_casino'];
	$b = $fila['correo'];

}

foreach($result as $fila){
	$b = $fila['correo'];

}
$query3 = "SELECT tipo_casino FROM casino WHERE rut='$RUT'";
$result=$mysqli->query($query3);

foreach($result as $fila){
	$c = $fila['tipo_casino'];

}

$query3 = "SELECT id_usuario FROM usuario WHERE user='$RUT'";
$result3=$mysqli->query($query3);
if ($result3->num_rows == 1 ) {
  header("location: index_admin.php");
 }

else if($result){
	$insert = "INSERT INTO usuario (id_casino,tipo_usuario,user,pass,email) VALUES ($a , '$c',$RUT,$RUT, '$b')";
	$result2 = $mysqli->query($insert);
	if($result2){

			if(isset($_SESSION['usuario'])){

		

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
		

			} else if($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
				header('Location: index_admin_casino.php');	
			}
		}

	}
	
}
else{
	echo "Insercion no exitosa";
}



 ?>