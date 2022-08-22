<?php 
require_once 'conexion.php';

function getDocentes(){
  $mysqli = getConn();
  $query = 'SELECT Usuarios.id_usuario, Usuarios.Nombres, Usuarios.Apellidos,Login.tipo_usuario FROM `Login`
	        INNER JOIN 	Usuarios on Usuarios.id_usuario = Login.id_usuario
            where Login.tipo_usuario ="docente"';
  $result = $mysqli->query($query);
  $docente = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $docente .= "<option value='$row[id_usuario]'>$row[Nombres] $row[Apellidos]</option>";
  }
  return $docente;
}

echo getDocentes();