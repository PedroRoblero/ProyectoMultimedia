<?php 
require 'conexion_i.php'; 
$rut=$_GET['RUT'];

$query = "SELECT a.*,u.fecha FROM alumno a join beca b on b.id_alumno=a.id_alumno join uso_beca u on b.cod_beca=u.cod_beca where rut=$rut";
$result= $mysqli->query($query);
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>
</head>
<body>
<div class="container">
	
	<img class="img-responsive" src="img/logo_upla.png" alt="Chania">		

  <h2><p class="bg-success">BOLETA.</p></h2> <br>


  <table class="table">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>RUT</th>
        <th>Nombre</th>
      </tr>
    </thead>
    <tbody>

    <?php
            foreach($result as $fila){
    ?> 
      
      <tr class="info">
      	<td><?php echo $fila['fecha']; ?></td>
        <td><?php echo $fila['rut']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>

      </tr>
	<?php }  
    ?>
    </tbody>
  </table> <br>
  <h3><p class="bg-warning">Total a pagar: $1600</p></h3> <br>
</div>

</body>
</html>

</div>

</body>
</html>



     
