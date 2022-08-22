<?php
    $id_usuario =$_POST['id_usuario'];
    $cedula_papa =$_POST['cedula_papa'];
    $nombres_papa =$_POST['nombres_papa'];
    $fono_papa =$_POST['fono_papa'];
    $dir_trabajo_papa =$_POST['dir_trabajo_papa'];
    $mail_papa=$_POST['mail_papa'];
    $vive_papa =$_POST['vive_estudiante_papa'];

    $cedula_mama =$_POST['cedula_mama'];
    $nombres_mama =$_POST['nombres_mama'];
    $fono_mama =$_POST['fono_mama'];
    $dir_trabajo_mama =$_POST['dir_trabajo_mama'];
    $mail_mama=$_POST['mail_mama'];
    $vive_mama =$_POST['vive_estudiante_mama'];

    $cedula_repre =$_POST['cedula_repre'];
    $nombres_repre =$_POST['nombres_repre'];
    $fono_repre =$_POST['fono_repre'];
    $dir_trabajo_repre =$_POST['dir_trabajo_repre'];
    $mail_repre=$_POST['mail_repre'];
    $vive_repre =$_POST['vive_estudiante_repre'];

    $observacion =$_POST['observacion'];

    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

    //echo $id_usuario;
    //echo $cedula_papa;
    //echo $cedula_repre;

    $consulta2 = "INSERT INTO `datos_familia_estudiantes`(
                            id_usuario,
                            nombres_apellidos_padre,
                            cedula_padre,
                            telefono_papa,
                            trabajo_papa_lugar,
                            mail_papa,
                            vive_estudiante_papa,
                            nombres_apellidos_mama,
                            cedula_mama,
                            telefono_mama,
                            trabajo_mama_lugar,
                            mail_mama,
                            vive_estudiante_mama,
                            nombres_apellidos_repre,
                            cedula_repre,
                            telefono_repre,
                            trabajo_repre_lugar,
                            mail_repre,
                            vive_estudiante_repre,
                            observaciones) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $resul =mysqli_prepare($conexion, $consulta2);
    $ok = mysqli_stmt_bind_param($resul,"ssssssssssssssssssss",
                                 
                            $id_usuario, 
                            $nombres_papa,
                            $cedula_papa,
                            $fono_papa, 
                            $dir_trabajo_papa,
                            $mail_papa,
                            $vive_papa, 
                            $nombres_mama,
                            $cedula_mama, 
                            $fono_mama, 
                            $dir_trabajo_mama,
                            $mail_mama,
                            $vive_mama,
                            $cedula_repre, 
                            $nombres_repre, 
                            $fono_repre, 
                            $dir_trabajo_repre,
                            $mail_repre,
                            $vive_repre, 
                            $observacion);
    $ok = mysqli_stmt_execute($resul);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resul);




?>








