<?php 
	session_start();
	if(isset($_SESSION['usuario'])){

		if($_SESSION['usuario']['tipo_usuario'] != "alumno"){

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
			} else if ($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
				header('Location: index_admin_dae.php');
			} else if($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
				header('Location: index_admin_casino.php');	
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['usuario']['user'] ?>  <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="cambiar_contraseña_alumno.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cambiar Contraseña</a></li> 
							<li><a href="salir.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="mostrar_alumno_alumno.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mostrar Mis Datos</a></li>
			
		



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
