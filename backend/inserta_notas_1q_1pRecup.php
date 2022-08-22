<?php
        $id_quimestre =$_POST['quimestre'];
        $id_parciales =$_POST['parcial'];
        $id_asignatura =$_POST['asignatura'];
        $id_nota_cualitativa =$_POST['nota_cualitativa'];
        $id_nota_cuantitativa =$_POST['nota_cuantitativa'];
        $id_usuario =$_POST['id_usuario_estu'];
        $id_oferta_aca =$_POST['id_oferta_aca'];
        $id_ano_lectivo =$_POST['id_ano_lectivo'];
    $mysqli = new mysqli('localhost','jirehedu','Pasm.2021jc','jirehedu_usuarios');
        if($mysqli->connect_errno):
        echo "Error al conectarse con Mysql debido al error: ".$mysqli->connect_errno;
    endif;
    if ($result = $mysqli->query("SELECT * FROM `notas_1q_1pRec` where id_asignatura = $id_asignatura and id_usuario = $id_usuario")) {
    $row_cnt = $result->num_rows;
    if ($row_cnt == 1){
       printf("La materia ya está asignada una calificación.\n", $row_cnt); 
    } else{
        //echo $id_usuario;
        require ("mi_conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        //echo 'vamos bien';
        $inserta_notas ="INSERT INTO notas_1q_1pRec(
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

                                    $id_ano_lectivo,
                                    $id_usuario,
                                    $id_quimestre, 
                                    $id_parciales,
                                    $id_asignatura,
                                    $id_oferta_aca,     
                                    $id_nota_cualitativa, 
                                    $id_nota_cuantitativa                      
                                    );

            $ok = mysqli_stmt_execute($resul);

             if($ok = false){
                echo "error en la consulta";
             }else{
                echo "La nota ha sido asiganda correctamente";
             }
            mysqli_stmt_close($resul);
    }
    $result->close();
    }
    $mysqli->close();

    


?>