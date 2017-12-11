<?php 

require 'conexion_i.php'; 

$id=$_REQUEST['id'];


$query = "DELETE FROM beca WHERE id_alumno='$id'";
$result=$mysqli->query($query);

$query5 = "SELECT cod_beca FROM beca WHERE id_alumno='$id'";
$result5 = $mysqli->query($query5);

foreach($result5 as $fila){
	$p = $fila['cod_beca'];

}

$delete = "DELETE FROM uso_beca WHERE cod_beca = '$p'";
$resultdelet = $mysqli->query($delete);



if ($resultdelet){
	


if($result){
	$query = "DELETE FROM usuario WHERE id_alumno='$id'";
	$result=$mysqli->query($query);	
	if($result){
		$query = "DELETE FROM tarjeta WHERE id_alumno='$id'";
		$result=$mysqli->query($query);
		if($result){	
			$query = "DELETE FROM alumno WHERE id_alumno='$id'";
			$result=$mysqli->query($query);	
			if($result){
				header ("Location: index_admin.php");
		}
	}
}
}
}else{
	echo "Insercion no exitosa";
}

 ?>