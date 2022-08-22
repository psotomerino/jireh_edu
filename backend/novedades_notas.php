<?php
    $Nombres = $_POST["name_nom"];
    $Apellidos = $_POST["name_ape"];
    $Nivel = $_POST["name_nivel"];
    $Materia =$_POST["name_materia"];
    $Nota_anterior = $_POST["name_notaAnterior"];
    $Nota_Actual = $_POST["name_notaRectificada"];
    $Motivo =$_POST ["message"];
        
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

    $consulta = "INSERT INTO novedades_notas(
                Nombres, 
                Apellidos, 
                nivel, 
                materia,
                nota_anterior, 
                nota_rectificada,
                motivo
                ) VALUES (?,?,?,?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssssss",
                $Nombres,
                $Apellidos,
                $Nivel,
                $Materia,                 
                $Nota_anterior,
                $Nota_Actual,
                $Motivo);
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resu);
    

?>