<?php
    $este_profe_id =$_POST['este_profe_id'];
    $asignatura =$_POST['asignatura'];
    $grado =$_POST['grado'];
    $num_estud =$_POST['num_estud'];
    $num_unid =$_POST['num_unid'];
    $titulo =$_POST['titulo'];
    $titsem =$_POST['titsem'];
    $video =$_POST['video'];
    $destreza_1 =$_POST['destrezas_1'];
    $destreza_2 =$_POST['destrezas_2'];
    $destreza_3 =$_POST['destrezas_3'];
    $lista_IE =$_POST['lista_IE'];
    $IE_i =$_POST['IE_i'];
    $eje =$_POST['eje'];
    $periodo =$_POST['periodo'];
    $semana =$_POST['semana'];
    $fecha_ini =$_POST['fecha_ini'];
    $fecha_fin =$_POST['fecha_fin'];
    $texto_plan =$_POST['texto_plan'];
    $texto_plata =$_POST['texto_plata'];
    $estatus =$_POST['status'];



    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
//     echo $este_profe_id;
//     echo $asignatura;
//     echo $grado;
//     echo $num_estud;
//     echo $num_unid;
//     echo $titulo;
//     echo $video;
//     echo $destreza_1;
//     echo $destreza_2;
//     echo $destreza_3;
//     echo $lista_IE;
//     echo $eje;
//     echo $periodo;
//     echo $semana;
//     echo $IE_i;
//     echo $fecha_fin;
//     echo $texto_plan;
//     echo $texto_plata;
    
    $consulta = "INSERT INTO contendio_ck(
                id_usuario,
                id_asignatura,
                grado,
                num_estu,
                num_unid,
                titulo,
                titulo_semanal,
                id_O,
                id_Destreza_1,
                id_Destreza_2,
                id_Destreza_3,
                id_IE,
                inicialE,
                eje_tran,
                periodo,
                semana,
                fecha_ini,
                fecha_fin,
                plan_clase,
                plan_plataforma,
                status
                )VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssssssssssssssssssss",
                        $este_profe_id,
                        $asignatura,
                        $grado,
                        $num_estud,
                        $num_unid,
                        $titulo,
                        $titsem,         
                        $video,
                        $destreza_1,
                        $destreza_2,
                        $destreza_3,         
                        $lista_IE,
                        $IE_i,         
                        $eje,
                        $periodo,
                        $semana,
                        $fecha_ini,
                        $fecha_fin,
                        $texto_plan,
                        $texto_plata,
                        $estatus);
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto vericar en la lista de sus planes microcurriculares";
     }
    mysqli_stmt_close($resu);
    

?>