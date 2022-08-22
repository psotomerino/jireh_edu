<?php


    $id_usuario =$_POST['id_usu'];
    $id_ano_lectivo =$_POST['este_anoLec'];
    $id_grado =$_POST['este_grado'];
    $id_materia =$_POST['esta_materia'];
    $parcial_nom =$_POST['esta_parcial'];
    $nota1=$_POST['nota1P_1Q'];
    $nota1Cuali =$_POST['nota1P_1QCuali'];

    $mysqli = new mysqli('localhost','jirehedu','Pasm.2021jc','jirehedu_usuarios');
    if($mysqli->connect_errno):
        echo "Error al conectarse con Mysql debido al error: ".$mysqli->connect_errno;
    endif;
    foreach ($parcial_nom as $parcial)
    {
        $parcial1 = $parcial[0];   
        
    }
    foreach ($id_materia as $mat)
    {
        $mate1 = $mat;
        
    }
    foreach ($id_grado as $gra)
    {
        $gra1 = $gra[0];
        
    }
    foreach ($nota1Cuali as $NCuali)
    {
        $NCuali = $NCuali[0];
        
    }
    foreach ($nota1 as $N1)
    {
        $N1 = $N1[0];
        
    }
    //echo $parcial1;
    //echo $gra1;
    //echo $mate1;
    if ($N1>0)
    {
        if ($result = $mysqli->query("SELECT * FROM `notas_2022` where nom_parcial = $parcial1 and id_asignatura = $mate1 and id_oferta_aca=$gra1")) 
        {       
        
        
            $row_cnt = $result->num_rows;
            //echo $row_cnt;
        
            if ($row_cnt != 0){
                printf("La materia ya está asignada una calificación.\n", $row_cnt); 
            } else {
                    //echo ("grabar materia");
    
                    require ("mi_conexion.php");

                    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
                    if(mysqli_connect_errno()){
                           echo "Fallo al conectar con la BBDD";
                           exit();
                        };
                    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
                    mysqli_set_charset($conexion, "utf8");

                    //foreach ($id_materia as $k => $v) {
                    //echo "\$a[$k] => $v.\n";
                    //}
                    //echo $id_usuario;
                    //echo $id_usuario;
                    //echo $id_nota_cuantitativa;
                    //echo $id_quimestre; 
                    //echo $id_parciales;
                    //echo $id_asignatura; 
                    //echo $id_usuario; 
                    //echo $id_oferta_aca;
                    //echo $id_ano_lectivo;

                    for($i = 0; $i<sizeof($id_usuario); ++$i)
                    {
                    $inserta_notas_2021 ="INSERT INTO notas_2022(
                                            id_usuario,
                                            id_ano_lectivo,
                                            id_oferta_aca,
                                            id_asignatura,
                                            nom_parcial,
                                            EXA_2Q 
                                            ) VALUES
                                            (?,?,?,?,?,?)";
                    $resul =mysqli_prepare($conexion, $inserta_notas_2021);
                    $ok = mysqli_stmt_bind_param($resul,"ssssss",

                                            $id_usuario[$i],
                                            $id_ano_lectivo[$i],
                                            $id_grado[$i],
                                            $id_materia[$i],
                                            $parcial_nom[$i],    
                                            $nota1[$i] 
                                            );

                    $ok = mysqli_stmt_execute($resul);
                    if($ok = false){
                        echo "error en la consulta";
                     }else{
                        echo "registro correcto";
                     }
                    mysqli_stmt_close($resul);

                    }
            }
        }
    }else{
        if ($result = $mysqli->query("SELECT * FROM `notas_2022` where nom_parcial = $parcial1 and id_asignatura = $mate1 and id_oferta_aca=$gra1")) 
        {       
        
        
            $row_cnt = $result->num_rows;
            //echo $row_cnt;
        
            if ($row_cnt != 0){
                printf("La materia ya está asignada una calificación.\n", $row_cnt); 
            } else {
                    //echo ("grabar materia");
    
                    require ("mi_conexion.php");

                    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
                    if(mysqli_connect_errno()){
                           echo "Fallo al conectar con la BBDD";
                           exit();
                        };
                    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
                    mysqli_set_charset($conexion, "utf8");

                    //foreach ($id_materia as $k => $v) {
                    //echo "\$a[$k] => $v.\n";
                    //}
                    //echo $id_usuario;
                    //echo $id_usuario;
                    //echo $id_nota_cuantitativa;
                    //echo $id_quimestre; 
                    //echo $id_parciales;
                    //echo $id_asignatura; 
                    //echo $id_usuario; 
                    //echo $id_oferta_aca;
                    //echo $id_ano_lectivo;

                    for($i = 0; $i<sizeof($id_usuario); ++$i)
                    {
                    $inserta_notas_2021 ="INSERT INTO notas_2022(
                                            id_usuario,
                                            id_ano_lectivo,
                                            id_oferta_aca,
                                            id_asignatura,
                                            nom_parcial,
                                            EXA_2QCuali 
                                            ) VALUES
                                            (?,?,?,?,?,?)";
                    $resul =mysqli_prepare($conexion, $inserta_notas_2021);
                    $ok = mysqli_stmt_bind_param($resul,"ssssss",

                                            $id_usuario[$i],
                                            $id_ano_lectivo[$i],
                                            $id_grado[$i],
                                            $id_materia[$i],
                                            $parcial_nom[$i],    
                                            $nota1Cuali[$i]
                                            );

                    $ok = mysqli_stmt_execute($resul);
                    if($ok = false){
                        echo "error en la consulta";
                     }else{
                        echo "registro correcto";
                     }
                    mysqli_stmt_close($resul);

                    }
            }
        }
    }


?>