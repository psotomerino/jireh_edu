<?php
    $este_profe_id =$_POST['id_docente'];
    $asignatura =$_POST['asignatura'];
    $grado =$_POST['mi_grado_'];
    $tema =$_POST['tema_ma'];    
    $material_text =$_POST['material_1'];  

    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");      
    
     $consulta = "INSERT INTO material_estudio(
                id_usuario,
                id_oferta_aca,
                id_asignatura,
                tema,
                material_es
                )VALUES(?,?,?,?,?)";
    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssss",
                        $este_profe_id,    
                        $grado,
                        $asignatura,
                        $tema,
                        $material_text);
    
    $ok = mysqli_stmt_execute($resu);
    if($ok = false){
    echo "error en la consulta";
    }else{
        echo "registro correcto vericar en la lista de sus planes microcurriculares";
    }
    mysqli_stmt_close($resu);    

?>