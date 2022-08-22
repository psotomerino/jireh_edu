<?php 
    include '../templates/header.php';
    /*session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }*/
?>
<link rel="stylesheet" href="css/estilo_curr.css">
<style>
#enca{
    width: 98%;
    margin-top: 3px;
    text-align: center;
    background-color: rgb(39, 200, 240);

}
</style>
<div id="enca">
<h3>Curriculo priorizado con enfasis en competencias</h3>
<div id="menu_curri">
    <p class="menu_item" id="_OB">Objetivos Generales</p>
    <p class="menu_item" id="_OE">Objetivos Especificos</p>
    <p class="menu_item">Destrezas</p>
    <p class="menu_item">Criterio de Evaluación</p>
    <p class="menu_item">Indicador</p>
</div>
</div>
<div class ="Contenedor_OB">
    <div>
        <p><b>Asignaturas</b>
        <select id="lista_asignatura" name="asignatura" class="form-control"></select>
      </p>
      <p><button  type="button" class="btn btn-success"  data-bs-toggle="modal"  data-bs-target="#newOB">NUEVO OBJETIVO GENERAL</button></p>
    </div>
    <div>
        <table id="table_OB" class="table table-striped">
            <thead class="thead-light">
                <th><b>OBJETIVOS GENERALES</b></th>
                <th><b>OPCIONES</b></th>
            </thead>
            <tbody id="OB_template"></tbody>
        </table>
    </div>
</div>
<div class ="Contenedor_OE">
    <div>
        <p><b>Asignaturas</b>
        <select id="lista_asignatura" name="asignatura" class="form-control"></select>
        </p>
        <p><b>Nivel Educativo</b>
        <select id="lista_nivel" name="nivel_edu" class="form-control"></select>
        </p>
    </div>
    <div>
        <table id="table_OE" class="table table-striped">
            <thead class="thead-light">
                <th><b>OBJETIVOS ESPECIFICOS</b></th>
            </thead>
            <tbody id="OB_template"></tbody>
        </table>
    </div>
</div>
<!-- ***************************
*       VENTANAS POP UP        *
********************************
** INGRESO OBJETIVOS GENERALES ** -->
<!-- Modal -->
<div class="modal fade" id="newOB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php 
            include '../main_app/docente/ingreso_curriculum_OE.php';
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


<script src="js/para_curr.js"></script>
<script src="https://kit.fontawesome.com/1f8e03fea0.js" crossorigin="anonymous"></script>    
