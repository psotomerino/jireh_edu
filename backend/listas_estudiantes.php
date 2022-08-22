<?php 
    $id_oferta_aca =$_POST['id_envio'];
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    //echo $id_oferta_aca;

    $consulta ="SELECT oferta_academica.nombre_nivel, Usuarios.id_usuario, Usuarios.Apellidos, Usuarios.Nombres , Usuarios.Fono_celular_1,Usuarios.mail FROM matricula INNER JOIN oferta_academica on oferta_academica.id_oferta_aca = matricula.id_oferta_aca INNER JOIN Usuarios ON Usuarios.id_usuario=matricula.id_usuario WHERE oferta_academica.id_oferta_aca= $id_oferta_aca ORDER BY Usuarios.Apellidos";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado){
        die ('Error en la consulta '. mysql_error($conexion));
    }
    //echo 'hasta aqui bien';
    $json = array();
        while ($fila = mysqli_fetch_array($resultado)){
            $json[]=array (
              'id_usuario'  => $fila['id_usuario'],   
              'Nombres' => $fila['Nombres'],
              'Apellidos'=> $fila['Apellidos'],
              'Aula'=> $fila['nombre_nivel'],
              'Email'=>$fila['mail'],    
              'Contacto_cel'=>$fila['Fono_celular_1']
                   
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;




?>







