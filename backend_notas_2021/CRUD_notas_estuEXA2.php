<?php
require_once 'conexion.php';

function get_listasEdu(){
    
    $mysqli = getConn();
    
    $id_nivel = $_POST['id_nivel'];
    $id_materia =$_POST['id_materia'];
    
    
    $query ="SELECT notas_2022.EXA_2Q FROM `notas_2022` INNER JOIN Usuarios on Usuarios.id_usuario = notas_2022.id_usuario where notas_2022.id_oferta_aca =$id_nivel and notas_2022.id_asignatura = $id_materia and EXA_2Q order by Usuarios.Apellidos";
        
   $resultado1 = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado1)){
        $json[]=array (
   
        'exa_2q' => $fila['EXA_2Q']      
               
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_listasEdu();