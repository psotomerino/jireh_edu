<?php
    if(!empty ($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
        
        require "conexion.php"; 
        sleep (1);
        session_start();
        $mysqli->set_charset('utf8');
        
        $usuario = $mysqli->real_escape_string($_POST['usuariolg']);
        $pass = $mysqli->real_escape_string($_POST['passlg']);
        
        if($nueva_consulta = $mysqli->prepare("SELECT id_usuario, tipo_usuario from Login WHERE nick =? AND password =?")){
            $nueva_consulta->bind_param('ss', $usuario, $pass);
            $nueva_consulta->execute();
            $resultado = $nueva_consulta->get_result();
            //echo $usuario;
            //echo $pass;
            if($resultado->num_rows == 1){
                $datos = $resultado->fetch_assoc();
                $_SESSION['usuario']= $datos;
                echo json_encode(array('error' => false, 'tipo' => $datos['tipo_usuario'], 'id_usuario' =>$datos['id_usuario']));
                
            }else{
                echo json_encode(array('error' => true));
            }
            $nueva_consulta->close();
        }
        
    }
    
   




?>