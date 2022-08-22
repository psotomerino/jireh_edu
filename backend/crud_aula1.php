<?php
    
    $id_usuario = $_POST['id_envio'];
    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    //echo $id_usuario;

    $consulta = "SELECT a_lectivo.ano_lectivo, oferta_academica.nombre_nivel, oferta_academica.id_oferta_aca, docentes.id_usuario FROM docentes INNER JOIN a_lectivo ON docentes.id_ano_lectivo = a_lectivo.id_ano_lectivo INNER JOIN oferta_academica on docentes.id_oferta_aca = oferta_academica.id_oferta_aca WHERE docentes.id_usuario = $id_usuario";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
            $json[]=array (
              'id_usuario'  => $fila['id_usuario'],
              'id_oferta_aca' => $fila['id_oferta_aca'], 
              'ano_lectivo' => $fila['ano_lectivo'],
              'nombre_nivel'=> $fila['nombre_nivel']
              
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;

?>