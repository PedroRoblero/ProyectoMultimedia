<?php 
require 'conexion_i.php';

sleep(2);
session_start();

$usuarios = $mysqli->query("SELECT user,tipo_usuario FROM usuario WHERE user = '".$_POST['usuariolg']."' AND pass = '".$_POST['passlg']."'");

if ($usuarios->num_rows == 1) :
		$datos = $usuarios->fetch_assoc();
		$_SESSION['usuario'] = $datos;
		echo json_encode(array('error' => false,'tipo' => $datos['tipo_usuario']));
else:
	echo json_encode(array('error' => true));
endif;

$mysqli->close();			
 ?>