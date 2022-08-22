<?php
session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';

require('reportes/fpdf.php');

 if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    header('location: index.php');
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


$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape','a4');

$pdf->Image('../../imagenes/certificado_top.jpg',0,0,300,100,'jpg');


$pdf->SetFont('Arial','B',19);
$pdf->SetXY(99,105);
$pdf->Cell(69,10,utf8_decode($Nombres),0,0,'C',0);
$pdf->Cell(46,10,utf8_decode ($Apellidos),0 ,0,'C',0);

$pdf->Image('../../imagenes/certificado_bot-01-01.jpg',0,125,300,80,'jpg');





$pdf->Output();
?>