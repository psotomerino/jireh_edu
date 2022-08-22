<?php 
require_once 'conexion.php';

function get_notas1P2Q(){
    
    $mysqli = getConn();
    
    $id_usuario = $_POST['id_envio'];   
    
    $query ="SELECT notas_2022.1P_2Q ,asignatura.nom_asignatura, notas_2022.1P_2QCuali FROM `notas_2022` INNER JOIN asignatura on notas_2022.id_asignatura = asignatura.id_asignatura where id_usuario = $id_usuario and nom_parcial = 4";
    
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'nota1P2Q' => $fila['1P_2Q'], 
          'nota1P2QCuali' => $fila['1P_2QCuali'],     
          'asigantura' => $fila['nom_asignatura']
          
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
    //echo $id_usuario;
        
}
echo get_notas1P2Q();