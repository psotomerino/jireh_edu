<?php
    $id= $_POST['id_envio'];

    if(isset($_POST['id_envio'])){
        $id= $_POST['id_envio'];
        require ("mi_conexion.php");
        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");
          
        $consulta = "DELETE FROM `Usuarios` WHERE id_usuario = $id";
        $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
            die ('Error en la consulta '. mysql_error($conexion));
        }
        echo "Resgistro eliminado con exito";
        
        
    }
    echo  $id;
   
?>