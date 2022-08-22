<?php
require_once 'conexion.php';

function get_listasEdu(){
    
    $mysqli = getConn();
    
    $id_nivel = $_POST['id_nivel'];
    
    
    $query ="SELECT Usuarios.Nombres, Usuarios.Apellidos, matricula_2021.id_usuario, matricula_2021.id_ano_lectivo,matricula_2021.id_oferta_aca FROM `matricula_2021` INNER JOIN Usuarios on Usuarios.id_usuario = matricula_2021.id_usuario where id_oferta_aca = $id_nivel ORDER by Usuarios.Apellidos ASC";
        
   $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
   
          'Nombre' => $fila['Nombres'],
          'Apellido'=> $fila['Apellidos'],
          'id_usuario'=> $fila['id_usuario'],
          'id_ano_lectivo' => $fila['id_ano_lectivo'],
          'id_oferta_aca' => $fila['id_oferta_aca']
               
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_listasEdu();



