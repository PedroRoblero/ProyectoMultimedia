<?php 
session_start();
require 'conexion_i.php';

$newpass=$_REQUEST['newpass'];

$query = "UPDATE usuario SET pass='$newpass' WHERE user = '".$_SESSION['usuario']['user']."'";
$result=$mysqli->query($query);

if($result){

	if(isset($_SESSION['usuario'])){

		if($_SESSION['usuario']['tipo_usuario'] != "admin_dae"){

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
			} else if ($_SESSION['usuario']['tipo_usuario'] == "alumno"){
				header('Location: index_alumno.php');
			} else if($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
				header('Location: index_admin_casino.php');	
			} else if($_SESSION['usuario']['tipo_usuario'] == "funcionario"){
              header('Location: index_funcionario.php');           
        }else if($_SESSION['usuario']['tipo_usuario'] == "secre"){
              header('Location: index_secre.php');           
        }else if($_SESSION['usuario']['tipo_usuario'] == "asist_social"){
              header('Location: index_asist_social.php');           
        }
		}

	}

	header ("Location: index_admin_dae.php");
}
else{
	echo "Insercion no exitosa";
}

 ?>
