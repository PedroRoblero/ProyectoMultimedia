<?php 

require 'conexion_i.php'; 

session_start();

$id=$_REQUEST['id'];


$query = "DELETE FROM usuario WHERE id_dae='$id'";
$result=$mysqli->query($query);

if($result){
	$query = "DELETE FROM dae WHERE id_dae='$id'";
	$result=$mysqli->query($query);	
	
		if($result){

			if(isset($_SESSION['usuario'])){

		

				if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
		

				} else if($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
				header('Location: index_admin_dae.php');	
				}
			}

		}
				
		}else {
			echo "Insercion no exitosa";
		}

?>