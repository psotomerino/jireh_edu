<?php
require_once 'conexion.php';

function get_editsilabos(){
    
    $mysqli = getConn();
    
    $id_profe = $_POST['id_profe'];
    $id_silabo = $_POST['id_sil'];
    
    $query ="SELECT * FROM `silabos` where id_usuario = $id_profe and id_silabo = $id_silabo";
        
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_silabo' => $fila['id_silabo'],       
          'silabo' => $fila['silabo']
             
        );
    }
    $jsonstring = json_encode($json[0]);   
    return $jsonstring;
}
echo get_editsilabos();
