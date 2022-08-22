<?php
    $db_host = "localhost";
    $db_nombre="jirehedu_usuarios";
    $db_usuario="jirehedu";
    $db_contra="Pasm.2021jc";

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    //echo $conexion;
?>


