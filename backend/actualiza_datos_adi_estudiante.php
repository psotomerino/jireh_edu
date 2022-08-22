<?php 
        $id_usuario =$_POST['id_usuario_act'];
        $discapacidad =$_POST['discapacidad_act'];
        $carnet_conadis =$_POST['num_carnet_act'];
        $hijo_numero =$_POST['num_hijo_act'];
        $nacionalidad =$_POST['nacionalidad_act'];
        $etnia =$_POST['etnia_act'];
        $provincia =$_POST['provincia_act'];
        $canton =$_POST['canton_act'];
        $otra_procedencia =$_POST['otra_procedencia_act'];
        $referencia_dir =$_POST['referencia_dir_act'];
        
         require ("mi_conexion.php");

        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
        if(mysqli_connect_errno()){
               echo "Fallo al conectar con la BBDD";
               exit();
            };
        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");

        $consulta ="UPDATE estudiantes SET
                        discapacidad ='$discapacidad',
                        carnet_conadis ='$carnet_conadis',
                        hijo_numero =' $hijo_numero',
                        nacionalidad ='$nacionalidad',
                        etnia = '$etnia',
                        provincia ='$provincia',
                        canton ='$canton',
                        otra_procedencia ='$otra_procedencia',
                        referencia_dir = '$referencia_dir' WHERE id_usuario = $id_usuario";
        $resultado = mysqli_query($conexion,$consulta);
        if(!$resultado){
            die ('Error en la consulta');
            }
        echo "tarea actualizada satisfactoriamente";
        


?>












