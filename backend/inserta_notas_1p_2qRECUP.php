<?php 
    $usuarios = $_POST['usuarios'];
    $a_lectivo =$_POST['alectivo'];
    $quimestre = $_POST['quimestre'];
    $parcial = $_POST['parcial'];
    $oferta_aca =$_POST['id_oferta_aca'];
    $asignatura = $_POST['asignatura'];
    $nota_cuantitativa = $_POST['nota_cuantitativa'];
    $nota_cualitativa =$_POST['nota_cualitativa'];

    $mysqli = new mysqli('localhost','jirehedu','Pasm.2021jc','jirehedu_usuarios');
    if($mysqli->connect_errno):
        echo "Error al conectarse con Mysql debido al error: ".$mysqli->connect_errno;
    endif;
    foreach ($usuarios as $usu)
    {
        $usuario1 = $usu[0];
    }
    
    if ($result = $mysqli->query("SELECT * FROM `notas_2q_1pRec` where  id_usuario = $usuario1")) 
    {
            $row_cnt = $result->num_rows;
            if ($row_cnt == 1){
                printf("La materia ya está asignada una calificación.\n", $row_cnt); 
            } else
                {
        
                    require ("mi_conexion.php");

                    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
                    if(mysqli_connect_errno()){
                           echo "Fallo al conectar con la BBDD";
                           exit();
                        };
                    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
                    mysqli_set_charset($conexion, "utf8");

                    for($i = 0; $i<sizeof($usuarios); ++$i)
                    {
                         $inserta_notas ="INSERT INTO notas_2q_1pRec(
                                    id_ano_lectivo,
                                    id_usuario,
                                    id_quimestre,
                                    id_parciales,
                                    id_asignatura,
                                    id_oferta_aca,
                                    nota_cualitativa,
                                    nota_cuantitativa) VALUES
                                    (?,?,?,?,?,?,?,?)";
                    $resul =mysqli_prepare($conexion, $inserta_notas);
                    $ok = mysqli_stmt_bind_param($resul,"ssssssss",

                                            $a_lectivo[$i],
                                            $usuarios[$i],
                                            $quimestre[$i], 
                                            $parcial[$i],
                                            $asignatura[$i],
                                            $oferta_aca[$i],     
                                            $nota_cualitativa[$i], 
                                            $nota_cuantitativa[$i]                      
                                            );

                    $ok = mysqli_stmt_execute($resul);

                     if($ok = false){
                        echo "error en la consulta";
                     }else{
                        echo "La nota ha sido asiganda correctamente";
                     }
                    mysqli_stmt_close($resul);    

                    }
                }
    }



       
    
    

/* echo    "id_usuario :" . $usuarios[$i] ."  " 
                        ."Año Lectivo:" . $a_lectivo[$i]."  " 
                        ."Quimestre:" .$quimestre[$i]." "
                        ."Parcial:" .$parcial[$i]." "
                        ."Oferta_aca:" .$oferta_aca[$i]." "
                        ."Asignatura:" .$asignatura[$i]." "
                        ."Nota_cuantitativa:" .$nota_cuantitativa[$i]." "
                        ."Nota_cualitativa:" .$nota_cualitativa[$i]." "
                        . "\n";*/





?>