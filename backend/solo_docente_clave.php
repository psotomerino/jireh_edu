<?php 
    
    $id_usuario =$_POST["id_usu"];
    require "../main_app/conexion.php";
    $mysqli->set_charset('utf8');
    $busqueda = $mysqli->prepare("SELECT * FROM Login WHERE id_usuario = $id_usuario");
    $busqueda->execute();
    $resultado = $busqueda->get_result();
    echo 'vamos bien';

    /*if ($busqueda = $mysqli->prepare("SELECT * FROM Login WHERE id_usuario = $id_usuario")){
       
        
        if ($resultado->num_rows == 1){
           echo $id_usuario;
        }else {
           echo 'no hay datos';
        }
        $busqueda->close();
    }*/

?>