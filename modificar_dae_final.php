<?php 


require 'conexion_i.php';

session_start();

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$ape_pat=$_POST['apellido_pat'];
$ape_mat=$_POST['apellido_mat'];
$tipo_dae=$_POST['tipo_dae'];
$corre=$_POST['correo'];

$query = "UPDATE dae SET nombre='$nombre', apellido_pat='$ape_pat', apellido_mat='$ape_mat' , tipo_dae='$tipo_dae' , correo='$corre' WHERE id_dae=$id";
$result=$mysqli->query($query);

if($result){

 		$query2 = "UPDATE usuario SET tipo_usuario='$tipo_dae', email='$corre' WHERE id_dae=$id";
 		$result2=$mysqli->query($query2);
		if($result2){

				if(isset($_SESSION['usuario'])){

		

				if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
		

				} else if($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
				header('Location: index_admin_dae.php');	
				}
			}

		}
	
} else {
	echo "Insercion no exitosa";
}



 ?>