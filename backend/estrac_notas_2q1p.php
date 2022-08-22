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

    $consulta = "
    SELECT  notas_2q_1p.id_asignatura,asignatura.nom_asignatura, notas_2q_1p.nota_cuantitativa, notas_2q_1p.nota_cualitativa  FROM `notas_2q_1p`
    INNER JOIN asignatura on notas_2q_1p.id_asignatura = asignatura.id_asignatura
    WHERE notas_2q_1p.id_usuario = $id_usuario and notas_2q_1p.id_parciales = 5 order by notas_2q_1p.id_asignatura
    ";

    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
            $json[]=array (
                'asignatura' =>$fila['nom_asignatura'],
                'nota' =>$fila['nota_cuantitativa'],
                'nota_2' =>$fila['nota_cualitativa']              
                                
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
?>