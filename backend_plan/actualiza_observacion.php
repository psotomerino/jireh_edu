<?php
require_once 'conexion.php';

function update_observa(){
    
    $mysqli = getConn();
    
    $este_plan =$_POST['id_plan'];
    $observacion =$_POST['observa_'];
    $estatus_E =$_POST['status_E'];
    $Aula_V =$_POST['Aula_V'];
    
   //echo $estatus_E;
   
    $consulta = "UPDATE contendio_ck SET
                Observacion ='$observacion',
                status = '$estatus_E',
                Aula_V = '$Aula_V'
                WHERE id_cont = $este_plan ";

    //$resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
        die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_observa();