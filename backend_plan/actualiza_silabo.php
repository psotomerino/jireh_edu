<?php
require_once 'conexion.php';

function update_silabo(){
    
    $mysqli = getConn();
    
    $este_sila =$_POST['este_sila'];
    $texto_sila =$_POST['edit_silabo'];
    //echo  $texto_sila;
    //echo  $este_sila;
   
    $consulta = "UPDATE silabos SET
                silabo ='$texto_sila' WHERE id_silabo = $este_sila";

    //$resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
        die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_silabo();