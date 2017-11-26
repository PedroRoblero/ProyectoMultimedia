<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css"/>	
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.Jcrop.min.js"></script>
	<script type="text/javascript">
				$(function(){

				$('#cropbox').Jcrop({
					aspectRatio: 1,
					onSelect: updateCoords
					
				});

			});

			function updateCoords(c)
			{
				$('#x').val(c.x);
				$('#y').val(c.y);
				$('#w').val(c.w);
				$('#h').val(c.h);
			};

			function checkCoords()
			{
				if (parseInt($('#w').val())) return true;
				alert('Seleccione la imagen para cortar.');
				return false;
			};

		</script>
					<div id="outer">
					<div class="jcExample">
					<div class="article">

					<?php
						require 'conexion_i.php';
						$RUT = $_REQUEST['RUT'];
         				$query="SELECT * FROM alumno WHERE rut=$RUT";
          				$result= $mysqli-> query($query);
          				foreach($result as $fila){
					 echo "<img src='".$fila['foto']."' width='500 px' height='700 px'  id='cropbox'>";
					}
					?>
					
					<!-- This is the form that our event handler fills -->
					<form action="cortar.php" method="post" onsubmit="return checkCoords();">
					<input type="hidden" id="x" name="x" />
					<input type="hidden" id="y" name="y" />
					<input type="hidden" id="w" name="w" />
					<input type="hidden" id="h" name="h" />
					<input type="hidden" name="rut" value="<?php echo $RUT ?>"> 
					<input type="submit" value="Crop Image" />
					</form>



	</div>
	</div>
	</div>
			



</body>

</html>