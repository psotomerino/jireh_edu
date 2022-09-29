<?php 
require_once 'conexion.php';

function getOE(){
  $id_prof = $_POST['id_profe'];

  $mysqli = getConn();
  $query = "SELECT oferta_academica.id_oferta_aca, oferta_academica.nombre_nivel FROM `docentes` 
      INNER JOIN oferta_academica ON oferta_academica.id_oferta_aca = docentes.id_oferta_aca 
      where id_ano_lectivo = 4 and id_usuario = $id_prof";
  $result = $mysqli->query($query);
  $grado = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $grado .= "<option value='$row[id_oferta_aca]'>$row[nombre_nivel]</option>";
  }
  return $grado;
}

echo getOE();
?>