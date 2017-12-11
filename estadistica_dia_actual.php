<?php 
	session_start();
	if(isset($_SESSION['usuario'])){

		if($_SESSION['usuario']['tipo_usuario'] != "admin_casino"){

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
			} else if ($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
				header('Location: index_admin_dae.php');
			} else if($_SESSION['usuario']['tipo_usuario'] == "alumno"){
				header('Location: index_alumno.php');	
			} else if($_SESSION['usuario']['tipo_usuario'] == "funcionario"){
              	header('Location: index_funcionario.php');      
			} else if($_SESSION['usuario']['tipo_usuario'] == "secre"){
              header('Location: index_secre.php');           
        	} else if($_SESSION['usuario']['tipo_usuario'] == "asist_social"){
              header('Location: index_asist_social.php');           
        	}
	} 
	} else {
		header('Location: index.php');
	}

	require 'conexion_i.php';

	$fecha_actual=date("y/m/d");

	$query="SELECT * from uso_beca where fecha='$fecha_actual'";
	$result=$mysqli->query($query);

	$query2="SELECT * from alumno";
	$result2=$mysqli->query($query2);


	$data=$result->num_rows;
	$data2=$result2->num_rows;

	$data3=$data2-$data;

 ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>index</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Estadistica casino del dia actual'
        },
        subtitle: {
            text: 'Casino UPLA VALPO.'
        },
        xAxis: {
            categories: ['<?php echo $fecha_actual; ?>'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad de alumnos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Alumnos'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 45,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Almorzo',
            data: [<?php echo  $data; ?>]
        }, {
            name: 'No almorzo',
            data: [<?php echo $data3; ?>]
        }, {
            name: 'Cantidad de alumnos',
            data: [<?php echo $data2; ?>]
        }]
    });
});
		</script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Sistema</span>Multimedia</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#">
         				 <span class="glyphicon glyphicon-arrow-left"></span>
        				 </a>
						<input type="button" class="btn btn-info btn-xs" value="VOLVER ATRÁS" name="Back2" onclick="history.back()" />
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['usuario']['user'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="cambiar_contraseña_admin_casino.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cambiar Contraseña</a></li>
							<li><a href="salir.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="" data-toggle="modal" data-target="#myModalcasino"><svg class="glyph stroked male-user" ><use xlink:href="#stroked-male-user"></use></svg> Insertar Funcionario Casino</a></li>
			<li><a href="mostrar_casino_casino.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mostrar Funcionarios</a></li>
			<li><a href="estadistica_dia_actual.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Estadisticas Dia Actual</a></li>
			<li><a href="calendario_casino.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Estadistica Dia Particular</a></li>
			</li><li><a href="estadistica_año_actual.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Estadistica Año Actual</a></li>
		



				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-md-8">
			
				<div class="container-fluid">
					
						<div class="modal fade" id="myModalcasino">
    				<div class="modal-dialog modal-lg">
      				<div class="modal-content">
      
        			<!-- Modal Header -->
			        <div class="modal-header">
			          <h2 class="modal-title">Ingresar Funcionario Casino</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="">
			          <form action="insertar_casino.php" enctype="multipart/form-data" method="POST">
			              <div class="form-group col-md-6">
			                  <label>RUT</label>
			                  <input type="text"  name="rut" class="form-control" placeholder="Ingrese Rut" maxlength="8" required pattern="[0-9].{6,8}">
			                  <small class="form-text text-muted">Ingrese RUT sin digito verificador.</small>
			              </div>
			              <div class="form-group col-md-6">
					                  <label>DV</label>
					                  <select class="form-control" id="sel1" name="dv" >
					                      <option>0</option>
					                      <option>1</option>
					                      <option>2</option>
					                      <option>3</option>
					                      <option>4</option>
					                      <option>5</option>
					                      <option>6</option>
					                      <option>7</option>
					                      <option>8</option>
					                      <option>9</option>
					                      <option>K</option>
					                  </select>
					                  <small class="form-text text-muted">Seleccione digito verificador.</small>
					      </div>
			              <div class="form-group col-md-6">
			                  <label>Nombre</label>
			                  <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
			              </div>
			              <div class="form-group col-md-6">
			                  <label>Apellido Paterno</label>
			                  <input type="text" name="apellido_paterno" class="form-control" required placeholder="Apellido Paterno">
			              </div>
			              <div class="form-group col-md-6">
			                  <label>Apellido Materno</label>
			                  <input type="text" name="apellido_materno" class="form-control" required placeholder="Apellido Materno">
			              </div>
			              <div class="form-group col-md-6">
			                  <label>Cargo:</label>
			                  <select class="form-control" id="sel1" name="tipo_casino">
			                      <option>admin_casino</option>
			                      <option>funcionario</option>
			                  </select>
			              </div>
			              <div class="form-group col-md-6">
			                  <label>Correo</label>
			                  <input type="email" name="correo" class="form-control" required placeholder="Correo Electronico">
			              </div>
			              <div class="form-group col-md-8">
			              <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
			              </div>
			          </form>
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          
			        </div>
			        
			      </div>
			    </div>
			  </div>
			

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>




				</div>
				
			</div><!--/.col-->
			
			<div class="col-md-4">
			
				<div class="panel panel-blue">
				</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="Highcharts-4.1.5/js/highcharts.js"></script>	
	<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>