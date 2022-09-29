<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../templates/footer.php';
    
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
        echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
        exit();
    }
    
    $id_usuario =$_SESSION['usuario']['id_usuario'];

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
       $Cedula = $registro['Cedula'];
       $Fecha_nacimiento =$registro['Fecha_nacimiento'];
       $Fono_celular_1=$registro['Fono_celular_1'];
       $mail=$registro['mail'];
   }
   
   $resultado->closeCursor();
   
?>
<style>
    #barra_arriba{
        -webkit-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
    }
</style>
<link rel="stylesheet" href="css/estilos.css">
<header>
 <div class="container-fluid fixed-top">
    <div class="row bg-dark" id="barra_arriba">
         <div class="col-2 p-1 ">
			 <div class="text-white"> Sistema Integrado Acádemico </div>
			 
		 </div>
         <div class="col-7 p-1 ">
            <a href="index.php" class="bg-warning p-1 mt-1">Escritorio</a> 
		 </div>

		 <div class="col-3 p-1">
             <a  href="../salir_admin.php"><button class="btn btn-primary float-right">Salir</button></a>
        </div>
    </div>
</div>
</header>
<div class="contiene_modulo">
    <div class="tit_ruta"><b>Módulo Facturación</b></div>
    <div class="grid-container g-0">
                <div class="grid-item" id="btn_factura"><p><img src="imagenes/factura_icono.jpg" class="img_" alt=""></p><p>FACTURACIÓN</p></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
    </div>
</div>
<?php include 'factura.php'; ?>
<script type="text/javascript" src="js/main.js"></script>