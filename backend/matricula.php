<?php
    
    $id_usuario = $_POST["id_usuario"];
    $id_ano_lectivo = $_POST["ano_lectivo"];
    $id_oferta_aca = $_POST["aula"];
    $Fecha_matricula = $_POST["fecha_matri"];
    $jornada =$_POST["jornada"];
    $tipo_matri = $_POST["tipo_matri"];
    $num_matri =$_POST["num_matri"];
    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $consulta = "INSERT INTO matricula_2022(
                id_usuario, 
                id_ano_lectivo, 
                id_oferta_aca, 
                fecha_matri, 
                jornada,
                tipo_matri,
                num_matri) VALUES (?,?,?,?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssssss",
                $id_usuario,
                $id_ano_lectivo,
                $id_oferta_aca, 
                $Fecha_matricula,
                $jornada,
                $tipo_matri,
                $num_matri);
    
    $ok = mysqli_stmt_execute($resu);
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     };
    
    $status ='matriculado';
    $consulta2 ="UPDATE Usuarios SET 
                status ='$status' WHERE id_usuario = $id_usuario";
    
    $resultado = mysqli_query($conexion,$consulta2);
    if(!$resultado){
        die ('Error en la consulta');
        }
	echo "tarea actualizada satisfactoriamente";


    mysqli_stmt_close($resu);
    



?>
