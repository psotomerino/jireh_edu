<?php
require_once 'conexion.php';

function update_plan(){
    
    $mysqli = getConn();
    
    $este_plan =$_POST['id_plan'];
    $num_estud =$_POST['numestu_Edit'];
    $titulo =$_POST['titunidad_Edit'];
    $titsem =$_POST['titsem_Edit'];
    $IE_i =$_POST['IE_Edit_ini'];
    $eje =$_POST['eje_Edit'];
    $periodo =$_POST['periodo_Edit'];
    $semana =$_POST['semana_Edit'];
    $fecha_ini =$_POST['fechaini_Edit'];
    $fecha_fin =$_POST['fechafin_Edit'];
    $texto_plan =$_POST['texto_plan_edit'];
    $texto_plata =$_POST['text_plata_edit'];
   
    $consulta = "UPDATE contendio_ck SET
                num_estu ='$num_estud',
                titulo ='$titulo',
                titulo_semanal ='$titsem',
                inicialE ='$IE_i',
                eje_tran ='$eje',
                periodo ='$periodo',
                semana ='$semana',
                fecha_ini ='$fecha_ini',
                fecha_fin ='$fecha_fin',
                plan_clase ='$texto_plan',
                plan_plataforma ='$texto_plata' WHERE id_cont = $este_plan ";

    //$resu =mysqli_query($conexion, $consulta);
    $resu = $mysqli->query($consulta);
    
    if(!$resu){
        die ('Error en la consulta');
        }
	
    echo "tarea actualizada satisfactoriamente";
    return;
}
echo update_plan();