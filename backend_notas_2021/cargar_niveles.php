<?php 
require_once 'conexion.php';

function getniveles_edu(){
  $mysqli = getConn();
  $query = 'SELECT oferta_academica.id_oferta_aca, oferta_academica.nombre_nivel FROM `oferta_academica`';
  $result = $mysqli->query($query);
  $niveles = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $niveles .= "<option value='$row[id_oferta_aca]'>$row[nombre_nivel]</option>";
  }
  return $niveles;
}

echo getniveles_edu();