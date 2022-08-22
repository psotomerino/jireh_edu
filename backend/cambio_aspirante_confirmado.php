<?php 
    $id_usuario =$_POST['id_envio'];
    //echo $id_usuario;
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $status ='confirmado';
    $nievl_edu_temporal ='';
    $consulta2 ="UPDATE Usuarios SET
                nivel_edu_temporal ='$nievl_edu_temporal',
                status ='$status' WHERE id_usuario = $id_usuario";
    
    $resultado = mysqli_query($conexion,$consulta2);
    if(!$resultado){
        die ('Error en la consulta');
        }
	echo "tarea actualizada satisfactoriamente";


    mysqli_stmt_close($resu);




?>