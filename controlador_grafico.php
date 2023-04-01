<?php
    require 'modelo_grafico.php';


    ///declarando e instanciando variable 
    $MG = new Modelografico();
    $consulta = $MG -> TraerDatosGrafico();
    echo json_encode($consulta);



?>