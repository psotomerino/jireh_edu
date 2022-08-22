<?php
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $consulta = "SELECT * FROM matricula_2022 ORDER BY id_matricula DESC LIMIT 1";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
    while ($fila = mysqli_fetch_array($resultado)){
        $json[]=array (
          
          $num_deMatri =  $fila['num_matri']      
          
        );
    }
    //$jsonstring = json_encode($json);
    echo $num_deMatri;

?>