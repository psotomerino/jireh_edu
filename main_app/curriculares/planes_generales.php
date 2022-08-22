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
    table{
        table-layout: fixed;
    }
    td{
        word-wrap:break-word;
           
    }
</style>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    #planes_general{
        position:absolute;
        float: left;    
        width: 95%;
        margin-top: 80px;
        margin-left: 10px;   
       
    }
</style>

<main id="planes_general">
   
    <div class="alert alert-warning" role="alert"><p>PLANIFICACIONES MICROCURRICULARES </p>
    </div>
    <div class="col-md-4" id="nivel_edu">
               <p><b>Docente</b>
            <select id="docente_" name="docente_" class="form-control">
            </select>
              </p>
    </div> 
    <div class="col-md-4">
        <b>Total de planes subidos:   </b> <span class="bg-info" id="tot_plan" style="color: white;"></span> <br>
    </div>   
    <table class="table-striped" BORDER WIDTH="100%" border=1>
        <tr align = center style ="background: #0D6CA6; color: white;"  >
            <td>Asignatura</td>
            <td>Nivel</td>
            <td>Nº semana</td>
            <td id="Tema">Tema Semana</td>
            <td>Observaciones</td>
            <td>Status</td>
            <td>Acciones</td>
            <td>Aula_Virtual</td>
        </tr>
        <tbody  id="planesG"></tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>