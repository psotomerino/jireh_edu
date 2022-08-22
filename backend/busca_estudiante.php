<?php
    if(isset($_POST['id_envio'])){
        session_start();
        $id_usuario =$_SESSION['usuario']['id_usuario'];
        $id= $_POST['id_envio'];
        require ("mi_conexion.php");
        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        //echo $id_usuario;
        //echo $id;
        $consulta = "SELECT docentes.id_usuario, docentes.id_oferta_aca, matricula.id_usuario, matricula.id_ano_lectivo,Usuarios.Apellidos, Usuarios.Nombres, oferta_academica.nombre_nivel from docentes 
        INNER JOIN matricula on docentes.id_oferta_aca = matricula.id_oferta_aca 
        INNER JOIN Usuarios on matricula.id_usuario = Usuarios.id_usuario INNER JOIN oferta_academica on matricula.id_oferta_aca = oferta_academica.id_oferta_aca
        where matricula.id_usuario = $id and docentes.id_usuario = $id_usuario";
        $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
                die ('Error en la consulta '. mysql_error($conexion));
            }
        $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
                $json[]=array(
                  
                  'id_oferta_aca'=> $fila['id_oferta_aca'],
                  'id_usuario_estu'=> $fila['id_usuario'],
                  'id_ano_lectivo'=> $fila['id_ano_lectivo'],
                  'nombre_nivel'=> $fila['nombre_nivel'],    
                  'Nombres'=> $fila['Nombres'],
                  'Apellidos'=> $fila['Apellidos']
                  );
            }
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
       
    }
?>