<?php 
require_once 'conexion.php';

function get_DocenteMaterias(){
  $mysqli = getConn();
  $id = $_POST['id_profe'];  
   
   echo $id;       
    
  /*$query = 'SELECT * FROM `niveles`';
  $result = $mysqli->query($query);
  $nivel_edu = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $nivel_edu .= "<option value='$row[id_nivel]'>$row[Nombre]</option>";
  }*/
  return;
}

echo get_DocenteMaterias();