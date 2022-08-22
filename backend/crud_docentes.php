<?php
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $consulta = "SELECT * FROM Usuarios WHERE status ='docente'";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
    while ($fila = mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_usuario' => $fila['id_usuario'],
          'Cedula'=> $fila['Cedula'],
          'Nombres'=> $fila['Nombres'],
          'Apellidos'=> $fila['Apellidos'],
          'Fecha_nacimiento'=> $fila['Fecha_nacimiento'],
          'Nivel_edu_temporal'=>$fila['nivel_edu_temporal'],
          'Fono_celular_1'=> $fila['Fono_celular_1'],
          'mail'=> $fila['mail'],
          'status'=> $fila['status']      
          
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
