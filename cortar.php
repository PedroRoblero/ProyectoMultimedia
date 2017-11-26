<?php 	
$targ_w = $targ_h = 150;
$jpeg_quality = 90;

require 'conexion_i.php';
$RUT = $_REQUEST['rut'];

 $query="SELECT foto FROM alumno WHERE rut=$RUT";
 $result= $mysqli-> query($query);
 foreach($result as $fila){
 	$b = $fila['foto'];
}



$src = $b;
$output_filename=$b;
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);

//header('Content-type: image/jpeg');
imagejpeg($dst_r, $output_filename, $jpeg_quality);

header('Location: index_admin.php');

?>