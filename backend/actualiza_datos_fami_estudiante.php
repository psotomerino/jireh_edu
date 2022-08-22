<?php 
    $id_usuario =$_POST['id_usuario'];
    $cedula_papa =$_POST['cedula_papa_act'];
    $nombres_papa =$_POST['nombres_papa_act'];
    $fono_papa =$_POST['fono_papa_act'];
    $dir_trabajo_papa =$_POST['dir_trabajo_papa_act'];
    $mail_papa=$_POST['mail_papa_act'];
    $vive_papa =$_POST['vive_estudiante_papa_act'];

    $cedula_mama =$_POST['cedula_mama_act'];
    $nombres_mama =$_POST['nombres_mama_act'];
    $fono_mama =$_POST['fono_mama_act'];
    $dir_trabajo_mama =$_POST['dir_trabajo_mama_act'];
    $mail_mama=$_POST['mail_mama_act'];
    $vive_mama =$_POST['vive_estudiante_mama_act'];

    $cedula_repre =$_POST['cedula_repre_act'];
    $nombres_repre =$_POST['nombres_repre_act'];
    $fono_repre =$_POST['fono_repre_act'];
    $dir_trabajo_repre =$_POST['dir_trabajo_repre_act'];
    $mail_repre=$_POST['mail_repre_act'];
    $vive_repre =$_POST['vive_estudiante_repre_act'];

    $observacion =$_POST['observacion_act'];

    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
    if(mysqli_connect_errno()){
       echo "Fallo al conectar con la BBDD";
       exit();
     };
     mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
     mysqli_set_charset($conexion, "utf8");

    $consulta ="UPDATE datos_familia_estudiantes SET 
    
                nombres_apellidos_padre ='$nombres_papa',
                cedula_padre ='$cedula_papa',
                telefono_papa ='$fono_papa',
                trabajo_papa_lugar ='$dir_trabajo_papa',
                mail_papa ='$mail_papa',
                vive_estudiante_papa ='$vive_papa',
                nombres_apellidos_mama ='$nombres_mama',
                cedula_mama ='$cedula_mama',
                telefono_mama ='$fono_mama',
                trabajo_mama_lugar ='$dir_trabajo_mama',
                mail_mama ='$mail_mama',
                vive_estudiante_mama ='$vive_mama',
                nombres_apellidos_repre ='$nombres_repre',
                cedula_repre ='$cedula_repre',
                telefono_repre ='$fono_repre',
                trabajo_repre_lugar ='$dir_trabajo_repre',
                mail_repre ='$mail_repre',
                vive_estudiante_repre ='$vive_repre',
                observaciones='$observacion' WHERE id_usuario = $id_usuario";

    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
            die ('Error en la consulta');
            }
    echo "tarea actualizada satisfactoriamente";



?>




















