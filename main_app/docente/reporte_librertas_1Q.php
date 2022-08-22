<?php
session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    require('reportes/fpdf.php');



    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    header('location: index.php');
    exit();
    }
    session_start();
    $id_usuario =$_SESSION['usuario']['id_usuario'];

   
    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('landscape','a4'); 

    


    $pdf->Output();
?>
