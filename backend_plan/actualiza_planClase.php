<?php
require_once 'conexion.php';

function update_planClase(){
    
    $mysqli = getConn();
    
    $este_plan =$_POST['id_plan'];
    $texto_planClase =$_POST['texto_plan_edit'];
    //echo  $texto_planClase;
   
    $consulta = "UPDATE contendio_ck SET
                plan_clase ='$texto_planClase' WHERE id_cont = $este_plan ";

    //$resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
        die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_planClase();