<?php
        $cedula= $_POST['cedula'];
        require "../main_app/conexion.php";
        $mysqli->set_charset('utf8');
        if($busqueda = $mysqli->prepare("SELECT * FROM `Usuarios` WHERE Cedula = '$cedula' and  status = 'con_cupo_2021'") )
        $busqueda->execute();
        $resultado = $busqueda->get_result();
        if ($resultado->num_rows >= 1){
           echo json_encode(array(success => 1));
        }else {
            echo json_encode(array(success => 0));
            $consulta = $mysqli->prepare("UPDATE `Usuarios` SET `status` = 'con_cupo_2021' WHERE  Cedula = $cedula");
            $consulta->execute();
            
        }
?>