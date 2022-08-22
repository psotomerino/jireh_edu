<?php 
require_once 'conexion.php';

function getOE(){
    
  $mysqli = getConn();
  $id = $_POST['id']; 
  $id_nivel =$_POST['id_nivel'];   
  $query = "SELECT * FROM `IE` where id_asignatura = $id and id_nivel = $id_nivel";
  $result = $mysqli->query($query);
  $IE = '<option value="314">Sin Indicador de evaluación</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $IE .= "<option value='$row[id_IE]'>$row[indicador_evaluacion]</option>";
  }
  return $IE;
}

echo getOE();