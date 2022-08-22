<?php
    $id_estu =$_POST['id_estu'];
    $Voto =$_POST['mi_voto'];
    
    require "../main_app/conexion.php";
    $mysqli->set_charset('utf8');
    //echo $id_usuario;
    if ($busqueda = $mysqli->prepare("SELECT * FROM elecciones_2021 WHERE id_usuario = $id_estu")){
        $busqueda->execute();
        $resultado = $busqueda->get_result();
        if ($resultado->num_rows == 1){
           echo "USTED YA HA REALIZADO SU VOTACIÓN";
        }else {
            require ("mi_conexion.php");

                $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
                if(mysqli_connect_errno()){
                       echo "Fallo al conectar con la BBDD";
                       exit();
                    };
                mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
                mysqli_set_charset($conexion, "utf8");
                // echo $este_profe_id;
                // echo $asignatura;
                // echo $grado;
                // echo $silabo;
               $consulta = "INSERT INTO elecciones_2021(
                            id_usuario,                
                            mi_voto
                            )VALUES(?,?)";

                $resu =mysqli_prepare($conexion, $consulta);
                $ok = mysqli_stmt_bind_param($resu,"ss",
                                    $id_estu,
                                    $Voto         
                                    );

                $ok = mysqli_stmt_execute($resu);

                 if($ok = false){
                    echo "error en la consulta";
                 }else{
                    echo "SU VOTO HA SIDO REGISTRADO CON EXITO ¡¡¡¡¡GRACIAS POR EJERCER SU DERECHO!!!!!";
                 }
                mysqli_stmt_close($resu);
        }
    }
    $busqueda->close();
    


   
    

?>