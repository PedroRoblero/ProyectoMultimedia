<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['tipo_usuario'] == "admin"){
              header('Location: index_admin.php');
        } else if($_SESSION['usuario']['tipo_usuario'] == "alumno"){
              header('Location: index_alumno.php');
        } else if($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
              header('Location: index_admin_dae.php'); 
        } else if($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
              header('Location: index_admin_casino.php');           
        } else if($_SESSION['usuario']['tipo_usuario'] == "funcionario"){
              header('Location: index_funcionario.php');           
        }else if($_SESSION['usuario']['tipo_usuario'] == "secre"){
              header('Location: index_secre.php');           
        }else if($_SESSION['usuario']['tipo_usuario'] == "asist_social"){
              header('Location: index_asist_social.php');           
        }
    }    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
      <link rel="stylesheet" href="css/css.css">

    <script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="fullscreen_bg" class="fullscreen_bg"/>
    <div class="container">
        <div class="row">      
          <div class="col-md-6 col-md-offset-3">
          	<div class="error" >
          		<span>Datos de ingreso no Validos, intentelo denuevo.</span>
          	</div>

            <form class="form-signin" id="formlg" >
                <h1 class="form-signin-heading text-muted">Iniciar Sesion</h1>
                <input type="text" class="form-control" name="usuariolg"  placeholder="RUT" required="" autofocus="">
                <input type="password" class="form-control" name="passlg"  placeholder="Contraseña" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="botonlg">
                  Iniciar Sesion
                </button>
            </form>
            </div>
        </div>    

    </div>

	

  </body>
</html>