<?php
require_once 'conexion.php';

function get_listasEdu(){
    
    $mysqli = getConn();
    
    $id_nivel = $_POST['id_nivel'];
    $id_materia =$_POST['id_materia'];
    
    
    $query = "SELECT notas_2022.2P_1Q FROM `notas_2022` INNER JOIN Usuarios on Usuarios.id_usuario = notas_2022.id_usuario where notas_2022.id_oferta_aca =$id_nivel and notas_2022.id_asignatura = $id_materia and 2P_1Q order by Usuarios.Apellidos";
        
   $resultado1 = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado1)){
        $json[]=array (
   
        'nota2p1q' => $fila['2P_1Q']
        
          
               
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_listasEdu();