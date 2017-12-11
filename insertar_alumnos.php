<?php 
		function guardar_alumno($rut,$dv, $nombre ,$apellido_paterno ,$apellido_materno, $carrera , $promocion,$estado, $correo, $foto, $filename)
	{
		require 'conexion.php';
		$sql="INSERT INTO alumno (rut, dv, nombre, apellido_paterno, apellido_materno, carrera, promocion, estado, correo, foto, qr) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		$smt = $conn -> prepare($sql);
		$smt -> bindparam(1,$rut);
		$smt -> bindparam(2,$dv);
		$smt -> bindparam(3,$nombre);
		$smt -> bindparam(4,$apellido_paterno);
		$smt -> bindparam(5,$apellido_materno);
		$smt -> bindparam(6,$carrera);
		$smt -> bindparam(7,$promocion);
		$smt -> bindparam(8,$estado);
		$smt -> bindparam(9,$correo);
		$smt -> bindparam(10,$foto);
		$smt -> bindparam(11,$filename);
		$smt -> execute();
		$conn = null;


		header("Location: crear_usuario.php?RUT=".urlencode($rut));
		
	}
	$rut=$_REQUEST['rut'];
	$dv=$_REQUEST['dv'];
	$nombre=$_REQUEST['nombre'];
	$apellido_paterno=$_REQUEST['apellido_paterno'];
	$apellido_materno=$_REQUEST['apellido_materno'];
	$carrera=$_REQUEST['carrera'];
	$promocion=$_REQUEST['promocion'];
	$estado=1;
	$correo=$_REQUEST['correo'];
	$foto="img/".$_FILES['foto']['name'];
   if ($_FILES['foto']['error']>0) {
      echo "error con el archivo ";
      //echo $_FILES ['foto']['error'];
   }else{
      move_uploaded_file($_FILES['foto']['tmp_name'],$foto);
      //echo $foto;
   }
    require'phpqrcode/qrlib.php';

	$dir='temp/';
	if(!file_exists($dir))
		mkdir($dir);
	$filename=	$dir.$rut.'.png';
	$tamanio=10;
	$level='M';
	$framesize=3;
	$contenido="http://192.168.0.7/roblero_brito/verificar_beca.php?id=$rut";
	QRcode::png($contenido,$filename,$level,$tamanio,$framesize);
	

	
$rutin=strrev($rut);
/* Invertimos el rut con la funcion “strrev” */
$cant=strlen($rutin);
/* Contamos la cantidad de numeros que tiene el rut */
$c=0;
/* Creamos un contador con valor inicial cero */
while($c<$cant)
{
$r[$c]=substr($rutin,$c,1);
$c++;
}
/* Hacemos un ciclo en el que se creara un array o arreglo que se llamara $r, en el cual se le asignara a cada valor del array, el valor correspodiente del rut, Por ej: para el rut 12346578, que invertido sería 87654321, el valor de $r[0] es 8, de $r[5] es 3 y asi sucesiva y respectivamente. */
$ca=count($r);
/* Contamos la cantidad de valores que tiene el arreglo con la función “count” */
$m=2;
$c2=0;
$suma=0;
/* En las lineas anteriores creamos 3 cosas, un multiplicador con el nombre $m y que su valor inicial es 2, ya que por formula es el primero que necesitamos, creamos tambien un segundo contador con el nombre $c2 y valor inicial cero y por ultimo creamos un acumulador de nombre $suma en el cual se guardara el total luego de multiplicar y sumar como manda la formula */
while($c2<$ca)
{
$suma=$suma+($r[$c2]*$m);
if($m==7)
{
$m=2;
}else{
$m++;
}
$c2++;
}
/* Hacemos un nuevo ciclo en el cual a $suma se le suma (valga la redundancia) su propio valor (que inicialmente es cero) más el resultado de la multiplicación entre el valor del array correspondiente por el multiplicador correspondiente, basandonos en la formula */
$resto=$suma%11;
/* Calculamos el resto de la división usando el simbolo % */
$digito=11-$resto;
/* Calculamos el digito que corresponde al Rut, restando a 11 el resto obtenido anteriormente */
if($digito==10)
{
$digito=K;
}else{
if($digito==11)
{
$digito=”0″;
}
}
/* Creamos dos condiciones, la primero dice que si el valor de $digito es 11, lo reemplazamos por un cero (el cero va entre comillas. De no hacerlo así, el programa considerará “nada” como cero, es decir si la persona no ingresa Digito Verificado y este corresponde a un cero, lo tomará como valido, las comillas, al considerarlo texto, evitan eso). El segundo dice que si el valor de $digito es 10, lo reemplazamos por una K, de no cumplirse ninguno de las condiciones, el valor de $digito no cambiará. */
if($dv==$digito)
{
echo "valido";
}else{
echo "no valido";
}

   

if ( $dv!=$digito) :
	header('Location: index_admin.php');
else :

    require 'conexion_i.php';

	$veri = $mysqli->query("SELECT rut FROM alumno WHERE rut = $rut");

	if ($veri->num_rows == 1 ) :
		header('Location: index_admin.php');
	else :   
     		guardar_alumno($rut,$dv, $nombre ,$apellido_paterno ,$apellido_materno, $carrera , $promocion,$estado, $correo, $foto, $filename);
     endif;		
endif;

?>