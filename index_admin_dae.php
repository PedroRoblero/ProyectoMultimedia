<?php 
	session_start();
	if(isset($_SESSION['usuario'])){

		if($_SESSION['usuario']['tipo_usuario'] != "admin_dae"){

			if($_SESSION['usuario']['tipo_usuario'] == "admin"){
				header('Location: index_admin.php');
			} else if ($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
				header('Location: index_admin_casino.php');
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['usuario']['user'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="cambiar_contraseña_admin_dae.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cambiar Contraseña</a></li> 
							<li><a href="salir.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="" data-toggle="modal" data-target="#myModaldae"><svg class="glyph stroked male-user" ><use xlink:href="#stroked-male-user"></use></svg> Insertar Funcionario DAE</a></li>
			<li><a href="mostrar_dae_dae.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mostrar Personal DAE</a></li>
			<li><a href="mostrar_alumnos_becados.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mostrar Alumnos Becados</a></li>
			<li><a href="mostrar_alumnos_no_becados.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mostrar Alumnos No Becados</a></li>
			<li><a href="mostrar_alumnos.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Estadistica de un Alumno Particular</a></li>
			


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
			<li><a href="pdf_completo.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Genenrar PDF de Alumnos </a></li>
      <li><a href="pdf_completo_dae.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Genenrar PDF de Personal DAE </a></li>
		

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
					
						<div class="modal fade" id="myModaldae">
    				<div class="modal-dialog modal-lg">
      				<div class="modal-content">
      
        			<!-- Modal Header -->
			        <div class="modal-header">
			          <h2 class="modal-title">Ingresar Funcionario Dae</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="">
			          <form action="insertar_dae.php" enctype="multipart/form-data" method="POST">
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
			                  <select class="form-control" id="sel1" name="tipo_dae" >
			                      <option>admin_dae</option>
			                      <option>secre</option>
			                      <option>asist_social</option>
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
