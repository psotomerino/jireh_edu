<?php 
require_once 'conexion.php';

function get_usuario(){
    
    $mysqli = getConn();
    
    $id_usuario = $_POST['id_envio'];   
    
//    $query ="SELECT * FROM `Usuarios` where id_usuario = $id_usuario";
    $query ="SELECT Usuarios.Nombres, Usuarios.Apellidos, oferta_academica.nombre_nivel FROM `matricula_2021` inner JOIN oferta_academica on matricula_2021.id_oferta_aca = oferta_academica.id_oferta_aca inner JOIN Usuarios on matricula_2021.id_usuario = Usuarios.id_usuario where Usuarios.id_usuario = $id_usuario";
    
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_usuario' => $fila['id_usuario'],       
          'Cedula' => $fila['Cedula'],
          'Apellidos'=> $fila['Apellidos'],
          'Nombres'=> $fila['Nombres'],
          'Nivel'=> $fila['nombre_nivel']          
        );
    }
    $jsonstring = json_encode($json[0]);   
    return $jsonstring;
}
echo get_usuario();
