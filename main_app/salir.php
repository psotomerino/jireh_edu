<?php
    session_start();
    $_SESSION=[];
    session_destroy();
    header('location: http://jireh.edu.ec/main_app/estudiante/#');
    
?>