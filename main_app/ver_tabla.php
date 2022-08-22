<?php
  
   include '../global/config.php';
   include '../global/conexion.php';
    
   session_start();
    $id_usuario =$_SESSION['usuario']['id_usuario'];

   $sql = "SELECT * FROM `Login` INNER JOIN Usuarios on Login.id_usuario = Usuarios.id_usuario WHERE Login.id_usuario = $id_usuario";
   $resultado = $pdo->prepare($sql);
   $resultado->execute();
   while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
       $nick= $registro['nick'];
       $id_usuario_tabla =$registro['id_usuario'];
       $Apellidos = $registro['Apellidos'];
       $Nombres = $registro['Nombres'];
   }
   
   $resultado->closeCursor();
?>
<div><?php echo $nick; ?></div>
<div><?php echo $id_usuario?></div>
<div><?php echo $Apellidos?></div>
<div><?php echo $Nombres?></div>
