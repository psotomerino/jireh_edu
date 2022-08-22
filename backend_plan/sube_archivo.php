<?php 
require_once 'conexion.php';

function sube_archivo(){
    
  $mysqli = getConn();
  $nom_docente = $_POST['nombre_docente_arch']; 
  $archivo =$_FILES['arch']['name']; 
  $guardado =$_FILES['arch']['tmp_name']; 
  $ruta = "archivos/$nom_docente/";    
    
   if(file_exists($ruta)){
       //echo "Directorio ya exisite";               
    }else{
       mkdir($ruta,0777,true);
       //echo "directorio creado";
       if(move_uploaded_file($guardado,$ruta.$archivo)){
           echo "Archivo subido con exito";
       }else{
           echo "Archivo no se pudo subir";
       }
       
       
   }
    if(move_uploaded_file($guardado,"archivos/$nom_docente/$archivo")){
           echo "Archivo subido con exito";
       }else{
           echo "Archivo no se pudo subir";
       }
            
  
  return;
}

echo sube_archivo();