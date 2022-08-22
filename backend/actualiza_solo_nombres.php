<?php
    $id_usuario=$_POST["id_usuario"];
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    

    //$Nombres = ucwords($Nombres_1);
    //$Apellidos = ucwords($Apellidos_1);
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

    $consulta ="UPDATE Usuarios SET 
                Nombres = '$Nombres',
                Apellidos ='$Apellidos'
                 WHERE id_usuario = $id_usuario";
    
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta');
        }
	echo "tarea actualizada satisfactoriamente";


    


?>