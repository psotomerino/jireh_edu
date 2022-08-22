<?php
    $este_profe_id =$_POST['id_docsub'];
    $grado =$_POST['mi_grado'];
    $asignatura =$_POST['asignatura'];
    $silabo =$_POST['text_sib'];
    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    // echo $este_profe_id;
    // echo $asignatura;
    // echo $grado;
    // echo $silabo;
    if($grado == 0){
        echo "debe escoger un grado para registrar su silabo";
        exit();
    }
    if($asignatura == 0){
        echo "debe escoger una asignatura para registrar su silabo";
        exit();    
    }
   $consulta = "INSERT INTO silabos(
                id_usuario,                
                id_oferta_aca,
                id_asignatura,
                silabo
                )VALUES(?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"ssss",
                        $este_profe_id,
                        $grado,         
                        $asignatura,
                        $silabo
                        );
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "Silabo guardado con exito";
     }
    mysqli_stmt_close($resu);
    

?>