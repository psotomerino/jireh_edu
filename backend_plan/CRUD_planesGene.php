<?php
require_once 'conexion.php';

function get_planes(){
    
    $mysqli = getConn();
    
    $id_docente = $_POST['id_docente'];
    
    
    $query ="SELECT Usuarios.id_usuario, contendio_ck.id_cont, Usuarios.Nombres, Usuarios.Apellidos, asignatura.nom_asignatura, Objetivo_especifico.Objetivo_especifico, Destrezas.Destrezas, Destrezas.Impresindible, IE.indicador_evaluacion, 
    oferta_academica.nombre_nivel,
    contendio_ck.id_cont,
    contendio_ck.num_estu,
    contendio_ck.num_unid,
    contendio_ck.titulo_semanal,
    contendio_ck.eje_tran,
    contendio_ck.periodo,
    contendio_ck.semana,
    contendio_ck.fecha_ini,
    contendio_ck.fecha_fin,
    contendio_ck.plan_clase, 
    contendio_ck.plan_plataforma,
    contendio_ck.Observacion,
    contendio_ck.status,
    contendio_ck.Aula_V
    FROM `contendio_ck`
	INNER JOIN Usuarios ON  contendio_ck.id_usuario = Usuarios.id_usuario
    INNER JOIN oferta_academica on contendio_ck.grado = oferta_academica.id_oferta_aca
    inner JOIN 	asignatura ON contendio_ck.id_asignatura = asignatura.id_asignatura
    INNER join Objetivo_especifico on contendio_ck.id_O = Objetivo_especifico.id_O
    INNER join Destrezas on contendio_ck.id_Destreza_1 = Destrezas.id_Destreza 
    INNER JOIN 	IE ON contendio_ck.id_IE = IE.id_IE where Usuarios.id_usuario = $id_docente ORDER BY contendio_ck.id_cont desc ";
        
   $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_plan' => $fila['id_cont'],
          'id_usuario' =>$fila['id_usuario'],    
          'Nombre' => $fila['Nombres'],
          'Apellido'=> $fila['Apellidos'],
          'Asignatura'=> $fila['nom_asignatura'],
          'Nivel' => $fila['nombre_nivel'],
          'Numero_sem' => $fila['semana'],
          'status' => $fila['status'],
          'OE' => $fila['Objetivo_especifico'],
          'Destrezas' => $fila['Destrezas'],
          'IE' => $fila['indicador_evaluacion'],
          'Estudiantes' => $fila['num_estu'],
          'Unidad' => $fila['num_unid'],
          'titulo' => $fila['titulo_semanal'],
          'Eje'=> $fila['eje_tran'],
          'periodo' => $fila ['periodo'],
          'semana'  => $fila['semana'],
          'fecha_ini' => $fila['fecha_ini'],
          'fecha_fin' => $fila['fecha_fin'],
          'Observacion' =>$fila['Observacion'],    
          'plan_clase' => $fila['plan_clase'],
          'Aula_V' => $fila['Aula_V']       
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_planes();
