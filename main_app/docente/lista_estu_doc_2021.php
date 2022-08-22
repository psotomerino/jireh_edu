<?php 
    include '../../templates/header.php';
    
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #txt_nivel{
        padding: 2px;
        background: #5C73F2;
        color: whitesmoke;
    }
</style>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    #lista_estu{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 80px;
    }
</style>

<main id="lista_estu">
    <h5 id="txt_gen">Nivel de educación <span id="txt_nivel"></span></h5>
    <div class="table-responsive">
    <table id="" class="table table-bordered table-hover table-striped">
       <thead class="thead-light">
           <tr>
               <th width="10%">Ord.</th>
               <th width="10%">Nombres</th>
               <th width="20%">Apellidos</th>
               <th width="20%">Contacto</th>
               <th width="10%">Acciones</th>
           </tr>
         
       </thead>
       <tbody id="listados_estu"></tbody>
       
    </table>
</div>
</main>