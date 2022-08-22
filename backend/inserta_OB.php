<?php
    $Materia =$_POST["asignatura"];
    $OB =$_POST ["OG_texto"];
        
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    //echo $Materia;
    //echo ('hola');
    $consulta = "INSERT INTO Objetivo_General(
                id_asignatura, 
                Objetivo_General) VALUES (?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"ss",
                $Materia,                 
                $OB);
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resu);
    

?>