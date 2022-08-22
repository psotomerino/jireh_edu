<?php 
require_once 'conexion.php';

function getOE(){
    
  $mysqli = getConn();
  $id = $_POST['id']; 
  $id_nivel =$_POST['id_nivel'];    
  $query = "SELECT * FROM `Destrezas` where id_asignatura = $id and id_nivel = $id_nivel";
  $result = $mysqli->query($query);
  $Destreza = '<option  value="980">Sin destreza</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $Destreza .= "<option   value='$row[id_Destreza]'>$row[Destrezas] $row[Impresindible]</option>";
  }
  return $Destreza;
}

echo getOE();