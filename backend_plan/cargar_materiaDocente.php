<?php 
require_once 'conexion.php';

function getListasAsig(){
  $mysqli = getConn();
  $id = $_POST['id_profe_M']; 
  //echo $id;
  $query = "SELECT asignatura.id_asignatura, Usuarios.nombres, Usuarios.Apellidos, asignatura.nom_asignatura FROM docente_asignatura_2021
	INNER JOIN Usuarios on Usuarios.id_usuario = docente_asignatura_2021.id_usuario
    INNER join asignatura on asignatura.id_asignatura = docente_asignatura_2021.id_asignatura where Usuarios.id_usuario = $id";
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_asignatura]'>$row[nom_asignatura]</option>";
  }
  return $listas;
}

echo getListasAsig();