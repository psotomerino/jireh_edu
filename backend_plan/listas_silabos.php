<?php
require_once 'conexion.php';

function get_missilabos(){
    
    $mysqli = getConn();
    $id = $_POST['id']; 
    //$id_asigna = $_POST['id_asigna'];   
    //echo $id;
    //echo $id;
    
    $query ="SELECT silabos.id_silabo, oferta_academica.nombre_nivel, asignatura.nom_asignatura, silabos.silabo FROM `silabos` INNER JOIN oferta_academica on oferta_academica.id_oferta_aca = silabos.id_oferta_aca INNER JOIN asignatura on asignatura.id_asignatura = silabos.id_asignatura where silabos.id_usuario = $id";  
    
   $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_silabo' => $fila['id_silabo'],       
          'grado' => $fila['nombre_nivel'],
          'materia'=> $fila['nom_asignatura'],
          'silabo'=> $fila['silabo']
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
    return;
}
echo get_missilabos();