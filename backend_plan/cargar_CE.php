<?php 
require_once 'conexion.php';

function getOE(){
    
  $mysqli = getConn();
  $id = $_POST['id']; 
  $id_nivel =$_POST['id_nivel'];   
  $query = "SELECT * FROM `CE` where id_asignatura = $id and id_nivel = $id_nivel";
  $result = $mysqli->query($query);
  $CE = '<option value="167">Sin criterio de evaluación</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $CE .= "<option value='$row[id_CE]'>$row[criterio_evaluacion]</option>";
  }
  return $CE;
}

echo getOE();