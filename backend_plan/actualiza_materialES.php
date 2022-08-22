<?php
require_once 'conexion.php';

function update_materialES(){
    
    $mysqli = getConn();
    
    $este_plan =$_POST['id_plan'];
    $texto_plata =$_POST['text_plata_edit'];
    //echo  $texto_planClase;
   
    $consulta = "UPDATE contendio_ck SET
                plan_plataforma ='$texto_plata' WHERE id_cont = $este_plan ";

    //$resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
        die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_materialES();