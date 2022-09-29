<?php
require_once 'conexion.php';

function update_material_es(){
    
    $mysqli = getConn();
    
    $id_material =$_POST['mi_material_es'];
    $este_titulo =$_POST['mi_titulo'];
    $texto_material =$_POST['este_material'];

    $consulta = "UPDATE material_estudio SET
        tema = '$este_titulo',
        material_es ='$texto_material'
        WHERE material_estudio.id_material = $id_material";

    $resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
         die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_material_es();

