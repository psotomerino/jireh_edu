<?php 
require_once 'conexion.php';

function get_materias(){
  $id_prof = $_POST['id_profe'];

  $mysqli = getConn();
  $query = "SELECT asignatura.id_asignatura , asignatura.nom_asignatura FROM `docente_asignatura_2021` 
  INNER JOIN asignatura ON asignatura.id_asignatura = docente_asignatura_2021.id_asignatura 
  where id_usuario = $id_prof";
  $result = $mysqli->query($query);
  $mi_materia = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $mi_materia .= "<option value='$row[id_asignatura]'>$row[nom_asignatura]</option>";
  }
  return $mi_materia;
}

echo get_materias();
?>