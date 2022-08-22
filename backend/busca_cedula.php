<?php
        //$cedula= $_POST['cedula'];
        $id_usuario = $_POST['id_envio'];
        require ("mi_conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
        //echo $cedula;
        //echo $id;
        $consulta = "SELECT * FROM `Usuarios` where id_usuario = '$id_usuario'";
        $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
                die ('Error en la consulta '. mysql_error($conexion));   
                
                }
            $json = array();
            while ($fila = mysqli_fetch_array($resultado)){
                    $json[]=array(
                    'Id_usuario'=> $fila['id_usuario'],    
                    'Cedula'=> $fila['Cedula'],    
                    'Nombres'=> $fila['Nombres'],
                    'Apellidos'=> $fila['Apellidos'],
                    'Mail'=> $fila['mail']
                    );
                }
            $jsonstring = json_encode($json[0]);
            echo $jsonstring;
                   
        
        
       
       
   
?>