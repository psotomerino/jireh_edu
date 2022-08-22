<?php
require_once 'conexion.php';

function get_listasSabana(){
    
    $mysqli = getConn();
    
    $id_nivel = $_POST['id_nivel'];     
    
/*    $query ="SELECT Usuarios.Nombres, Usuarios.Apellidos, notas_2022.1P_1Q, asignatura.nom_asignatura FROM `notas_2022`     
            INNER JOIN Usuarios on Usuarios.id_usuario = notas_2022.id_usuario 
            INNER JOIN asignatura on asignatura.id_asignatura = notas_2022.id_asignatura             
            where notas_2022.id_oferta_aca =$id_nivel and 1P_1Q order by Usuarios.Apellidos";*/
    
    $query ="SELECT Usuarios.Nombres, Usuarios.Apellidos FROM `matricula_2021`
            INNER JOIN Usuarios on Usuarios.id_usuario = matricula_2021.id_usuario             
            where id_oferta_aca = $id_nivel order by Usuarios.Apellidos";
        
   $resultado1 = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado1)){
        $json[]=array (
   
        'nombre' => $fila['Nombres'],
        'apellido' => $fila['Apellidos']   
        
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_listasSabana();