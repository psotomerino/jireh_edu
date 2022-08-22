<?php 
    
    $id_usuario =$_POST["id_envio"];

    //echo $id_usuario;

    require "../main_app/conexion.php";
    $mysqli->set_charset('utf8');
    if ($busqueda = $mysqli->prepare("SELECT * FROM docentes WHERE id_usuario = $id_usuario")){
        $busqueda->execute();
        $resultado = $busqueda->get_result();
        if ($resultado->num_rows == 1){
           echo json_encode(array(success => 1));
        }else {
           echo json_encode(array(success => 0));
        }
        $busqueda->close();
    }

?>