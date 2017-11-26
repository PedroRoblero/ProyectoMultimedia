<?php 

function guardar_beca($id_alumno,$detonao)
	{
		require 'conexion.php';
		$sql="INSERT INTO beca (id_alumno,estado_beca) VALUES (?,?)";
		$smt = $conn -> prepare($sql);
		$smt -> bindparam(1,$id_alumno);
		$smt -> bindparam(2,$detonao);
		$smt -> execute();
		$conn = null;


		header("location:index_admin.php");
		
	}
	$id_alumno=$_REQUEST['id'];
	$detonao=1;

require 'conexion_i.php';

$veri = $mysqli->query("SELECT id_alumno FROM beca WHERE id_alumno = $id_alumno");


if($veri->num_rows == 1){

		$veriestado = $mysqli->query("SELECT estado_beca FROM beca WHERE estado_beca == 1");
		if($veriestado->num_rows == 1){
				header('Location: index_admin.php');
		} else  {
				$query = "UPDATE beca SET estado_beca = 1 WHERE id_alumno = $id_alumno";
				$result=$mysqli->query($query);

				if($result){

						header ("Location: index_admin.php");
				}		
		}

} else {
		guardar_beca($id_alumno,$detonao);
}


?>