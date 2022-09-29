<?php
        
        $id= $_POST['id_envio'];
        $id_materia= $_POST['id_mimateria'];
        
        require ("mi_conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");

        //echo $id;
        $consulta = "SELECT * FROM `material_estudio` 
        INNER JOIN oferta_academica ON oferta_academica.id_oferta_aca = material_estudio.id_oferta_aca 
        INNER JOIN asignatura ON asignatura.id_asignatura = material_estudio.id_asignatura 
        where material_estudio.id_material = $id and asignatura.id_asignatura = $id_materia";

        $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
                die ('Error en la consulta '. mysql_error($conexion));
            }
        $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
                $json[]=array(
                  'id_material'=> $fila['id_material'],
                  'nom_asignatura' => $fila['nom_asignatura'],
                  'tema'=> $fila['tema'],
                  'material'=> $fila['material_es']                  
                );
            }
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
       
   
?>