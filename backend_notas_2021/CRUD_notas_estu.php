<?php
require_once 'conexion.php';

function get_listasEdu(){
    
    $mysqli = getConn();
    
    $id_nivel = $_POST['id_nivel'];
    $id_materia =$_POST['id_materia'];
    
    
    $query ="SELECT Usuarios.Nombres, Usuarios.Apellidos, notas_2022.1P_1Q FROM `notas_2022` INNER JOIN Usuarios on Usuarios.id_usuario = notas_2022.id_usuario where notas_2022.id_oferta_aca =$id_nivel and notas_2022.id_asignatura = $id_materia and 1P_1Q order by Usuarios.Apellidos";
        
   $resultado1 = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado1)){
        $json[]=array (
   
        'nombre' => $fila['Nombres'],
        'apellido' => $fila['Apellidos'],    
        'nota1p1q' => $fila['1P_1Q']
        
          
               
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_listasEdu();

/*INSERT INTO `notas_2022` (`id_notas_2022`, `id_usuario`, `id_ano_lectivo`, `id_oferta_aca`, `id_asignatura`, `nom_parcial`, `1P_1Q`, `2P_1Q`, `EXA_1Q`, `1P_2Q`, `2P_2Q`, `EXA_2Q`) 
    VALUES  (NULL, '463', '2', '7', '12', '1', '0.1', '', '', '', '', ''), 
            (NULL, '463', '2', '7', '12', '2', '', '0.1', '', '', '', ''), 
            (NULL, '463', '2', '7', '12', '3', '', '', '0.1', '', '', '');*/