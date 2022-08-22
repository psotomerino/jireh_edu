<?php 
require_once 'conexion.php';

function getOE(){
    
  $mysqli = getConn();
  $id = $_POST['id']; 
  $id_nivel =$_POST['id_nivel'];   
  $query = "SELECT * FROM `Objetivo_especifico` where id_asignatura = $id and id_nivel = $id_nivel";
  $result = $mysqli->query($query);
  $OE = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $OE .= "<option value='$row[id_O]'>$row[Objetivo_especifico]</option>";
  }
  return $OE;
}

echo getOE();