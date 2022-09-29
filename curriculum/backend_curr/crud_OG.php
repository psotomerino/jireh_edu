<?php
require_once 'conexion.php';

function get_OB(){
    
    $mysqli = getConn();  

    $id_nivel = $_POST['id_asignatura'];   
    $query ="SELECT * FROM `Objetivo_General` where id_asignatura = $id_nivel";
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (  
          'id_OG' => $fila['id_OG'],
          'Objetivo_General' => $fila['Objetivo_General']    
               
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_OB();
