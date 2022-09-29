<?php
require_once 'conexion.php';

function get_temas(){
    
    $mysqli = getConn();
    $id = $_POST['id'];    
    
    $query ="SELECT material_estudio.id_material, oferta_academica.nombre_nivel, asignatura.id_asignatura, asignatura.nom_asignatura, material_estudio.tema, material_estudio.material_es 
    FROM `material_estudio` 
      INNER JOIN oferta_academica on oferta_academica.id_oferta_aca = material_estudio.id_oferta_aca
      INNER JOIN asignatura on asignatura.id_asignatura =  material_estudio.id_asignatura
      where id_usuario = $id";  
    
   $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_material' => $fila['id_material'],   
          'id_asignatura' => $fila['id_asignatura'],   
          'grado' => $fila['nombre_nivel'],
          'materia'=> $fila['nom_asignatura'],
          'tema'=> $fila['tema'],
          'material_es'=> $fila['material_es']
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
    return;
}
echo get_temas();