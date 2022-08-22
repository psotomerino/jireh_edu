<?php 
require_once 'conexion.php';

function getOE(){
    
  $mysqli = getConn();
  $query = "SELECT * FROM `oferta_academica`";
  $result = $mysqli->query($query);
  $grado = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $grado .= "<option value='$row[id_oferta_aca]'>$row[nombre_nivel]</option>";
  }
  return $grado;
}

echo getOE();