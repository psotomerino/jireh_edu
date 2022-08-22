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

    $consulta = "SELECT matricula_2021.id_usuario, 
                        matricula_2021.id_ano_lectivo, 
                        matricula_2021.fecha_matri, 
                        matricula_2021.jornada, 
                        matricula_2021.tipo_matri, 
                        matricula_2021.num_matri, 
                        Usuarios.Apellidos, 
                        Usuarios.Nombres, 
                        oferta_academica.nombre_nivel 
                        from matricula_2021 
                                INNER JOIN Usuarios on matricula_2021.id_usuario = Usuarios.id_usuario 
                                INNER JOIN oferta_academica on matricula_2021.id_oferta_aca = oferta_academica.id_oferta_aca 
                                where matricula_2021.id_usuario = $id_usuario and matricula_2021.id_ano_lectivo =2";

    $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
                die ('Error en la consulta '. mysql_error($conexion));
            }
        $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
                $json[]=array(
                  
                'id_usuario_estu'=> $fila['id_usuario'],
                'id_ano_lectivo'=> $fila['id_ano_lectivo'],
                'fecha_matri'=> $fila['fecha_matri'], 
                'jornada'=> $fila['jornada'],    
                'tipo_matri'=> $fila['tipo_matri'],
                'num_matri'=> $fila['num_matri'],
                'nombre_nivel'=> $fila['nombre_nivel'],   
                'Nombres'=> $fila['Nombres'],
                'Apellidos'=> $fila['Apellidos']

                  );
            }
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
?>