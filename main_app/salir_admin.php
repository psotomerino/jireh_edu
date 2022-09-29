<?php
    session_start();
    $_SESSION=[];
    session_destroy();
    // header('location: http://jireh.edu.ec/main_app/administrador/#');
    header('location: http://jireh.edu.ec/index.php');
    
?>