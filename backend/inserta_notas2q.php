<?php

    $id_quimestre =$_POST['quimestre'];
    $id_parciales =$_POST['parcial'];
    $id_asignatura =$_POST['asignatura'];
    $id_nota_cualitativa =$_POST['nota_cualitativa'];
    $id_nota_cuantitativa =$_POST['nota_cuantitativa'];
    $id_usuario =$_POST['id_usuario_estu'];
    $id_oferta_aca =$_POST['id_oferta_aca'];
    $id_ano_lectivo =$_POST['id_ano_lectivo'];
    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    //echo $id_nota_cualitativa;
    //echo $id_nota_cuantitativa;
    //echo $id_quimestre; 
    //echo $id_parciales;
    //echo $id_asignatura; 
    //echo $id_usuario; 
    //echo $id_oferta_aca;
    //echo $id_ano_lectivo;
   $inserta_notas ="INSERT INTO notas(
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
        echo "registro correcto";
     }
    mysqli_stmt_close($resul);


?>