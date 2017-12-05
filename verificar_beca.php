<?php
require 'conexion_i.php'; 
session_start();
if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['tipo_usuario'] != "funcionario"){
              header('Location: index_funcionario.php');
        } else if($_SESSION['usuario']['tipo_usuario'] == "alumno"){
              header('Location: index_alumno.php');
        } else if($_SESSION['usuario']['tipo_usuario'] == "admin_dae"){
              header('Location: index_admin_dae.php'); 
        } else if($_SESSION['usuario']['tipo_usuario'] == "admin_casino"){
              header('Location: index_admin_casino.php');           
        } else if($_SESSION['usuario']['tipo_usuario'] == "admin"){
              header('Location: index_admin.php');           
        } else if($_SESSION['usuario']['tipo_usuario'] == "secre"){
              header('Location: index_secre.php');           
        } else if($_SESSION['usuario']['tipo_usuario'] == "asist_social"){
              header('Location: index_asist_social.php');           
          }
    }
    else {
        header('Location: index.php');
    }
  
  $RUT = $_REQUEST['id'];
  $fecha_actual=date("y/m/d");
  $query = "SELECT * FROM alumno WHERE rut = $RUT";
  $result=$mysqli->query($query);
  
  foreach($result as $fila){
  $b = $fila['id_alumno'];
  }

$veritarj = "SELECT * FROM tarjeta WHERE id_alumno = $b";
$resulttarj=$mysqli->query($veritarj);

          foreach($resulttarj as $fila){
          $t = $fila['estado_tarjeta'];
          }
          if ($t==0) {
            header("Location: tarjeta_desactivada.php");
          }else if ($result->num_rows == 1 ) {
          
          $query2 = "SELECT * FROM beca WHERE id_alumno = $b AND estado_beca=1";
          $result2=$mysqli->query($query2);
          
          foreach($result2 as $fila){
          $c = $fila['cod_beca'];
          }

          if ($result2->num_rows == 1 ) {
            

                  $query5="SELECT cod_beca FROM  uso_beca WHERE fecha='$fecha_actual' AND cod_beca = $c";
                  $result5=$mysqli->query($query5);
                        if ($result5->num_rows == 1) {
                                  header("Location: beca_usada.php");
                        }else {
                 
                
                        $insert = "INSERT INTO uso_beca (cod_beca,uso_beca,fecha) VALUES ($c , 1, '$fecha_actual')";
                        $result4 = $mysqli->query($insert);

                        if($result4){
                          header("Location: esta_servio.php?RUT=".urlencode($RUT)); 
                          } 
                        }
                    

              } else {
                 header("Location: beca_usada.php");
              }


          

  } else {
      header("Location: index.php");
  }

?>        