<?php
    include '../../templates/header.php';
    include '../../templates/footer.php';
    session_start();
    $varsession = $_SESSION['usuario']['tipo_usuario'];
    
    if($varsession == null || $varsession =''){
        echo 'usted no tiene autorización';
        die();
    }
?>
<div>soy super Administrador</div>
<a  href="../salir.php"><button class="btn btn-primary float-right">Salir</button></a>