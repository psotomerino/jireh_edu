   <?php
    session_start();
    $id_usuario =$_SESSION['usuario']['id_usuario'];

    $sql= "SELECT * FROM `estudiantes` WHERE id_usuario = $id_usuario";
    $resultado = $pdo->prepare($sql);
    $resultado->execute();
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
        
        $id_usuario_prueba =$registro['id_usuario'];
        $discapacidad =$registro['discapacidad'];
        $carnet_conadis =$registro['carnet_conadis'];
        $hijo_numero =$registro['hijo_numero'];
        $nacionalidad =$registro['nacionalidad'];
        $etnia =$registro['etnia'];
        $provincia =$registro['provincia'];
        $canton =$registro['canton'];
        $otra_procedencia =$registro['otra_procedencia'];
        $referencia_dir =$registro['referencia_dir'];
        
    }
    $resultado->closeCursor();




    

   /* $id_usuario=$_POST['id_usuario'];
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $consulta = "SELECT * FROM estudiantes WHERE id_usuario = $id_usuario";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    //echo $id_usuario;
    $json = array();
    while ($registro_1 = mysqli_fetch_array($resultado)){
        $json[]=array (
            
            'id_usuario_act' =>$registro_1['id_usuario'],
            'discapacidad' =>$registro_1['discapacidad'],
            'carnet_conadis' =>$registro_1['num_carnet'],
            'hijo_numero' =>$registro_1['num_hijo'],
            'nacionalidad' =>$registro_1['nacionalidad'],
            'etnia' =>$registro_1['etnia'],
            'provincia' =>$registro_1['provincia'],
            'canton' =>$registro_1['canton'],
            'otra_procedencia' =>$registro_1['otra_procedencia']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;*/

    
    ?>