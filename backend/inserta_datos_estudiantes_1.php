<?php 
    $id_usuario =$_POST['id_usuario'];
    $discapacidad =$_POST['discapacidad'];
    $carnet_conadis =$_POST['num_carnet'];
    $hijo_numero =$_POST['num_hijo'];
    $nacionalidad =$_POST['nacionalidad'];
    $etnia =$_POST['etnia'];
    $provincia =$_POST['provincia'];
    $canton =$_POST['canton'];
    $otra_procedencia =$_POST['otra_procedencia'];
    $referencia_dir =$_POST['referencia_dir'];
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    //echo $id_usuario;
    //echo $discapacidad;
    $consulta1 = "INSERT INTO estudiantes(
                        id_usuario,
                        discapacidad,
                        carnet_conadis,
                        hijo_numero,
                        nacionalidad,
                        etnia,
                        provincia,
                        canton,
                        otra_procedencia,
                        referencia_dir) VALUES (?,?,?,?,?,?,?,?,?,?)";
    
    $resul =mysqli_prepare($conexion, $consulta1);
    $ok = mysqli_stmt_bind_param($resul,"ssssssssss",
                        
                        $id_usuario, 
                        $discapacidad,
                        $carnet_conadis,
                        $hijo_numero, 
                        $nacionalidad,
                        $etnia,
                        $provincia, 
                        $canton,
                        $otra_procedencia,         
                        $referencia_dir);
    
    $ok = mysqli_stmt_execute($resul);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resul);

        
        
        


?>