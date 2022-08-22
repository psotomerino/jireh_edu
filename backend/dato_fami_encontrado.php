<?php
    session_start();
    $id_usuario =$_SESSION['usuario']['id_usuario'];

    $sql= "SELECT * FROM `datos_familia_estudiantes` WHERE id_usuario = $id_usuario";
    $resultado = $pdo->prepare($sql);
    $resultado->execute();
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
        
        
        
        $id_usuario =$registro['id_usuario'];
        $cedula_papa =$registro['cedula_padre'];
        $nombres_papa =$registro['nombres_apellidos_padre']; 
        $fono_papa =$registro['telefono_papa']; 
        $dir_trabajo_papa =$registro['trabajo_papa_lugar'];
        $mail_papa=$registro['mail_papa'];
        $vive_papa =$registro['vive_estudiante_papa']; 
        $cedula_mama =$registro['cedula_mama']; 
        $nombres_mama =$registro['nombres_apellidos_mama']; 
        $fono_mama =$registro['telefono_mama'];  
        $dir_trabajo_mama =$registro['trabajo_mama_lugar'];
        $mail_mama=$registro['mail_mama'];
        $vive_mama =$registro['vive_estudiante_mama'];
        $cedula_repre =$registro['cedula_repre']; 
        $nombres_repre =$registro['nombres_apellidos_repre']; 
        $fono_repre =$registro['telefono_repre']; 
        $dir_trabajo_repre =$registro['trabajo_repre_lugar'];
        $mail_repre=$registro['mail_repre'];
        $vive_repre =$registro['vive_estudiante_repre']; 
        $observacion =$registro['observaciones'];
        
        
        
    }
    $resultado->closeCursor();

?>