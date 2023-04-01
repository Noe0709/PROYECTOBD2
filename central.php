<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Tabla Central</title>

    <?php include ("conexion.php");?>
</head>
<body>
<?php include ("registro.php");?>
    <nav>
        <div class="nav-wrapper light-blue darken-3">
          <a  href="https://www.youtube.com" target="_blank"; class="material-symbols-outlined"; style="margin-left: 1150px; position: relative; display: inline-block;">database</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="https://www.youtube.com" target="_blank";>Ingreso de actividades</a></li>
            <li><a href="badges.html" target="_blank";>Consultas</a></li>
          </ul>
        </div>
    </nav> <br>

    <nav> 
        <div class="nav-wrapper blue lighten-3">
            <a style="margin-top: 10px; position: absolute; margin-left: 470px; color: black;"><h2>Tabla general programación actividades</h2></a>
        
    </nav>  <br><br>

    <div> 
    <container style="width: 40cm;">
      <table class="striped responsive-table">
        <thead style="font-size: large;">
          <tr>
              <th>Curso</th>
              <th>Mes</th>
              <th>Tema</th>
              <th>Descripcion</th>
              <th>Fecha Asignada</th>
              <th>Fecha Entrega</th>
              <th>Estatus actividad</th>
              <th>Punteo</th>
          </tr>
        </thead>

        <tbody> 
          <?php 
              $mostrar ="SELECT * FROM actividades";
              $ejecutarconsulta = mysqli_query($conexionbd, $mostrar);
              $verfilas = mysqli_num_rows($ejecutarconsulta);
              $fila = mysqli_fetch_array($ejecutarconsulta);

              if(!$ejecutarconsulta){
                echo "error en la consulta";
              }
              else{
                if($verfilas<1){
                  echo"<tr><td>SIN DATOS DE ACTIVIDADES</td></tr>";
                } else{
                    for ($cont=0; $cont<=$fila; $cont++){
                      echo'
                      <tr>
                      <td>'.$fila[4].'</td>
                      <td>'.$fila[2].'</td>
                      <td>'.$fila[5].' </td>
                      <td>'.$fila[6].' </td>
                      <td>'.$fila[7].' </td>
                      <td>'.$fila[8].' </td>
                      <td>'.$fila[9].' </td>
                      <td>'.$fila[10].' </td>
                    </tr>
                    ';
                    $fila = mysqli_fetch_array($ejecutarconsulta);
                  }
                }
              }
                  ?>
        </tbody>
      </table>
    </container>
    </div> 

      <br><br><br><br>
<div>
<footer class="page-footer light-blue darken-3">
          <div class="container" style="position: inherit; margin-left: 100px;">
            <div class="row" style="background-color: black; border-radius: 15px; width: 35cm;">
              <div class="col l6 s12" style="border-radius: 15px;">
                <br>
                <h5 class="white-text">Redirigir - - - ></h5>
                <p class="grey-text text-lighten-4">En la parte de la derecha puedes acceder a más opciones.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <br>
                <h4 class="white-text"><b>Opciones</b></h4>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="aqui va la redireccion al ingreso" target="_blank";><h5>> Ingreso de información</h5> </a></li>
                  <li><a class="grey-text text-lighten-3" href="aqui redireccion a las consultas" target="_blank";><h5>> Ver consultas en tiempo real</h5></a></li>
                <br>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="background-color: black;">
            <div class="container">
            © 2022 Copyright Gerardo Álvarez y Noé Gómez todos los derechos reservados
            <a class="grey-text text-lighten-4 right" href="aqui pone la documentacion y todo el programa" target="_blank";>Documentación de todo el proyecto</a>
            </div>
          </div>
        </footer>
    </div>

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                <script> document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.carousel');
                    var instances = M.Carousel.init(elems);
                });</script>       
</body>
</html>