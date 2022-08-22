<?php 
require_once 'conexion.php';

function get_notasExa1Q(){
    
    $mysqli = getConn();
    
    $id_usuario = $_POST['id_envio'];   
    
    $query ="SELECT notas_2022.EXA_1Q ,asignatura.nom_asignatura, notas_2022.EXA_1QCuali  FROM `notas_2022` INNER JOIN asignatura on notas_2022.id_asignatura = asignatura.id_asignatura where id_usuario = $id_usuario and nom_parcial = 3";
    
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'notaExa1Q' => $fila['EXA_1Q'], 
          'notaExa1QCuali' => $fila['EXA_1QCuali'],    
          'asigantura' => $fila['nom_asignatura']
          
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
    //echo $id_usuario;
        
}
echo get_notasExa1Q();