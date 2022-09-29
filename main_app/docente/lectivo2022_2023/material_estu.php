<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<link rel="stylesheet" href="lectivo2022_2023/css_/estilo_material.css">
<style>


</style>

<div class="material_estudio">
    <div id="ma_estu"><button id="cerrar_ma" class="btn btn-primary">Cerrar</button> MATERIAL DE ESTUDIO / <span id="new_material">Nuevo Material</span> / <span id="mi_material">Mi Material de estudio</span></div>
    <div class="nuevo_material ml-3 mt-2">
        <div class="row">
            <form action="" id="form_material">
                <div class="col-4 mt-2">
                
                    <div id="datos_enca">
                        <input class="form-control" type="hidden" name="id_docente" id="id_docente">                     
                        <select class="form-control mt-1" id="mi_grado_" name="mi_grado_"></select> 
                        <select id="lista_materias_" name="asignatura" class="form-control mt-1"></select>                          
                    </div> 
                
                </div>
                <div class="col-12 mt-2">
                    <input type="text" class="form-control mt-1 mb-2" id="tema_ma" name="tema_ma" placeholder ="!! IMPORTANTE  AQUI..¡¡..escribir el Tema del Material de estudio">
                    <textarea name="material_1" id="material_1"></textarea> <!-- editor -->
                    <button class="btn btn-success mt-4" id="btn_material_es">Guardar material de estudio</button>
                </div>
                
            </form> 
        </div>
        
    </div>
    <div class="mis_materiales">
        <table class="table table-stripped mt-2" id="tb_temas">
            <thead>
                <tr>
                    <th>Num.</th>
                    <th>Grado EGB</th>
                    <th>Asignatura</th>
                    <th><center>Temas</center></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="mis_temas"></tbody>
        </table>   
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MATERIAL DE ESTUDIO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" class="form-control" id="update_material">
            <div id="inputs_form">
                <input type="hidden" class="form-control mt-2" id="mi_material_es" name="mi_material_es">
                <input type="text" class="form-control mt-2" id="mi_materia" name="mi_materia" readonly>
                <input type="text" class="form-control mt-1 mb-2" id="mi_titulo" name="mi_titulo">
            </div>
            <textarea name="este_material" id="este_material" ></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="act_material" class="btn btn-primary">Guardar Cambios</button> 
      </div>
    </div>
  </div>
</div>


<script>
    window.onload = function()
    {
        editor = CKEDITOR.replace( 'material_1' );
        CKFinder.setupCKEditor(editor,'https://jireh.edu.ec/ckeditor.php/ckfinder');
        // editor_1 = CKEDITOR.replace( 'este_material' );
        // CKFinder.setupCKEditor(editor_1,'https://jireh.edu.ec/ckeditor.php/ckfinder');
    }
</script>

