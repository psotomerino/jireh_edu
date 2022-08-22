<?php
    $id_nivel =$_POST["nivel"];
    $id_asignatura =$_POST ["asignatura"];
    $CE =$_POST['CE'];    
        
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    /*echo $id_nivel;
    echo $id_asignatura;
    echo $Destreza;
    echo $Impresindible;*/
    $consulta = "INSERT INTO CE(
                id_nivel,
                id_asignatura, 
                criterio_evaluacion )VALUES(?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sss",
                $id_nivel,
                $id_asignatura,                 
                $CE
                );
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resu);
    

?>