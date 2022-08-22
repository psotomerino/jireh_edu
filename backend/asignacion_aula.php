<?php 
    $id_usuario_e =$_POST['id_usuario_e'];
    $ano_lec = $_POST['ano_lec'];
    $aula = $_POST['aula'];

    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

    $consulta = "INSERT INTO `docentes`(
                id_usuario, 
                id_ano_lectivo,
                id_oferta_aca) VALUES(?,?,?)";
    
    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sss",
                 $id_usuario_e,
                 $ano_lec,
                 $aula);
    $ok = mysqli_stmt_execute($resu);
    if($ok = false){
            echo "error en la consulta";
        }else{
            echo "registro correcto";
     }
    mysqli_stmt_close($resu);

?>

