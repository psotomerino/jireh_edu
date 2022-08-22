<?php 
require_once 'conexion.php';

function get_asignatura(){
  $mysqli = getConn();
  $query = 'SELECT * FROM asignatura';
  $result = $mysqli->query($query);
  $materia = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $materia .= "<option value='$row[id_asignatura]'>$row[nom_asignatura]</option>";
    
  }
  return $materia;
 
}

echo get_asignatura();

?>