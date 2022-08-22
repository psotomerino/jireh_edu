<?php 
require_once 'conexion.php';

function getListasNivel_edu(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `niveles`';
  $result = $mysqli->query($query);
  $nivel_edu = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $nivel_edu .= "<option value='$row[id_nivel]'>$row[Nombre]</option>";
  }
  return $nivel_edu;
}

echo getListasNivel_edu();