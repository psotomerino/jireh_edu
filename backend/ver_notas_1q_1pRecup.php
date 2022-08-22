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

    $consulta = "SELECT Usuarios.Apellidos,Usuarios.Nombres, oferta_academica.nombre_nivel, asignatura.nom_asignatura,notas_1q_1pRec.nota_cuantitativa FROM `notas_1q_1pRec` INNER JOIN Usuarios on Usuarios.id_usuario = notas_1q_1pRec.id_usuario INNER JOIN oferta_academica on oferta_academica.id_oferta_aca = notas_1q_1pRec.id_oferta_aca INNER JOIN asignatura ON asignatura.id_asignatura = notas_1q_1pRec.id_asignatura where notas_1q_1pRec.id_usuario = $id_usuario ORDER BY asignatura.nom_asignatura";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
            $json[]=array (
                'Apellidos' =>$fila['Apellidos'],
                'Nombres' =>$fila['Nombres'],
                'nivel'  => $fila['nombre_nivel'],
                'asignatura' => $fila['nom_asignatura'],
                'nota_cuantitativa' => $fila['nota_cuantitativa'],
                'nota_cualitativa' => $fila['nota_cualitativa']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
?>