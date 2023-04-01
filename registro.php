<?php
include_once('CONEXION.php');

//botones
$boton1=""; //INGRESAR PROYECCION ACTIVIDADES
$boton2=""; //PARA GRAFICA
$boton3=""; // INGRESAR ACTIVIDAD

if(isset($_POST['boton1']))$boton1=$_POST['boton1'];
if(isset($_POST['boton2']))$boton2=$_POST['boton2'];
if(isset($_POST['boton3']))$boton3=$_POST['boton3'];


    if($boton1){
        
        //Creacion de variables ingreso planificacion
        $numtarea=$_POST['tareaslbl'];
        $proyectos=$_POST['proyectoslbl'];
        $examenescortos=$_POST['examcortolbl'];
        $parciales=$_POST['parcialeslbl'];
        $extraordinarios=$_POST['extraordinariolbl'];
        $semana=$_POST['semanalbl'];
        $mes=$_POST['meslbl'];

        $consulta="INSERT INTO proyeccion_mes (tareas, proyectos, examenes_cortos, parciales, extraordinarios, semana_p, mes_p)
        VALUES ('$numtarea','$proyectos', '$examenescortos','$parciales','$extraordinarios','$semana', '$mes')";

        if ($conexionbd->query($consulta) === TRUE) {
            $ultimo_id = $conexionbd->insert_id;
            $conexionbd->close();
             echo "<script>"; 
             echo "alert('Proyeccion semanal agregada, EL NUMERO DE PROYECCION SEMANAL  '+'$ultimo_id');";  
             echo 'history.back();'; 
             echo "</script>"; 
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conexionbd->error;
        }
        
    }


//--------------------------NOEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE------------------------------------------

    if($boton2){
        //Creacion variables ingresar actividades graficas NOE
        $idcurso=$_POST['idcursolbl'];
        $proyecmes=$_POST['proyecmes'];
        $proyecsemana=$_POST['proyecsemana'];

 
    
    }

    if($boton3){
        // Creacion de variables para actividades
        $semanaactiv=$_POST['semanaactiv'];
        $mesactiv=$_POST['mesactiv'];
        $idproyec=$_POST['idproyec'];
        $nocurso=$_POST['nocurso'];
        $tipoactiv=$_POST['tipoactiv'];
        $descripactiv=$_POST['descripactiv'];
        $fechaasig=$_POST['fechaasig'];
        $fechaentrega=$_POST['fechaentrega'];
        $statusactiv=$_POST['statusactiv'];
        $punteo=$_POST['punteo'];

        $consulta2="INSERT INTO actividades (semana_act, mes_act, id_proy, id_curso, nombre_act, descripcion, fecha_asignacion, fecha_entrega, status_activ, punteo_asignado )
        VALUES ('$semanaactiv','$mesactiv', '$idproyec','$nocurso','$tipoactiv','$descripactiv', '$fechaasig','$fechaentrega', '$statusactiv', '$punteo')";
        $result = mysqli_query($conexionbd, $consulta2);
        $cerrar = mysqli_close($conexionbd);
        
        echo "<script>"; 
        echo "alert('Datos de Actividad guardados correctamente en la base de datos ');"; 
        echo 'history.back();'; 
        echo "</script>";
    

    }


?>