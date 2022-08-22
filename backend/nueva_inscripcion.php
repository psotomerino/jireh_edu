<?php
    $Cedula = $_POST["cedula"];
    $Nombres_1 = $_POST["nombre"];
    $Apellidos_1 = $_POST["apellido"];
    $Fecha_nacimiento = $_POST["fecha_nac"];
    $Sexo = $_POST["sexo"];
    $Nivel_temporal =$_POST["nivel_edu_temporal"];
    $Numero_contacto = $_POST["fono_contacto_1"];
    $mail= $_POST["mail"];   
    $status = $_POST["status"];

    $Nombres = ucwords($Nombres_1);
    $Apellidos = ucwords($Apellidos_1);

    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    //echo 'conectado';
    //echo $Cedula;
    //echo $Nombres;
    //echo $Apellidos;
    //echo $Fecha_nacimiento;
    //echo $Sexo;
    //echo $Numero_contacto;
    //echo $mail;
    //echo $status;
    
    $consulta = "INSERT INTO Usuarios(
                Cedula, 
                Apellidos, 
                Nombres, 
                Fecha_nacimiento, 
                Sexo,
                nivel_edu_temporal,
                Fono_celular_1, 
                mail, 
                status) VALUES (?,?,?,?,?,?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssssssss",
                $Cedula,
                $Apellidos,
                $Nombres,
                $Fecha_nacimiento,
                $Sexo,
                $Nivel_temporal,                 
                $Numero_contacto,
                $mail,
                $status);
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resu);
    

?>


 