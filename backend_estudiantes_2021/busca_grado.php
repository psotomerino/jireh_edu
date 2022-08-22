<?php 
    
   
    $id = $_POST['id_estudiante'];

    require ("mi_conexion.php");
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    $consulta = "SELECT matricula_2021.id_oferta_aca FROM `matricula_2021` where id_usuario = $id";
    $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
                die ('Error en la consulta '. mysql_error($conexion));
            }
        
    $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
                $json[]=array(
                  
                'id_oferta_aca'=> $fila['id_oferta_aca']

                  );
            }
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
    

?>
