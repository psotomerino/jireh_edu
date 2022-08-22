<?php
    $id_nivel =$_POST["nivel"];
    $id_asignatura =$_POST ["asignatura"];
    $OE =$_POST['OE'];
        
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    //echo $id_nivel;
    //echo $OE;
    $consulta = "INSERT INTO Objetivo_especifico(
                id_nivel,
                id_asignatura, 
                Objetivo_especifico) VALUES (?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sss",
                $id_nivel,
                $id_asignatura,                 
                $OE);
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resu);
    

?>