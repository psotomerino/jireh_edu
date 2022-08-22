<?php 
    require_once 'templates/header.php';

?>
<style>
    .conte{
        margin-top: 70px;
    }
    input {
        border: 0;
        /*text-align: center;
        background: #F8F7F8;*/
        width: 100%;
       
    }
</style>
<div class="container conte">
    <div class="row">
    <table class="table-responsive" border width ="100%" border = 1>
        <tr align = center>
            <td colspan="5"><b>PLAN DESTREZAS CON CRITERIO DE DESEMPEÑO</b></td>
        </tr>
        <tr>
            <td style ="background: #7F3AF1; color: white;" colspan="5"><b>1. DATOS INFORMATIVOS</b></td>
        </tr>
        <tr>
            <td border width ="">Docente: <input type="text" value="docente"></td>
            <td border width ="">Área/Asignatura:  <input type="text" value="asignatura"> </td>
            <td border width ="" colspan="2"><input type="text" value="oferta academica"></td>
            <td border width ="" colspan="1">Número de estudiantes:  <input type="text" value="numero estudiantes"></td>            
        </tr>
        <tr>
            <td style ="background: #7F3AF1; color: white;" colspan="5"><b>2. PLANIFICACIÓN</b></td>
        </tr>
        <tr>
            <td border width ="" colspan="3">DESTREZAS CON CRITERIOS DE DESEMPEÑO A SER DESARROLLADAS: </td>
            <td border width ="" colspan="2">INDICADORES ESENCIALES DE EVALUACIÓN: </td>
        </tr>
        <tr>
            <td border width ="" colspan="3"><input type="text" value="Destrezas"></td>
            <td border width ="" colspan="2"><input type="text" value="Indicadores de evalución"> </td>
        </tr>
        <tr >
            <td rowspan="2" ><b>Eje transversal</b></td>
            <td rowspan="2" border width ="" ><input type="text" value="eje transversal"></td>
            <td border width =""><b>Periodo</b></td>
            <td border width =""><b>Semana</b></td>
            <td border width =""><b>Fecha de inicio</b><input type="text" value="fecha de inicio"></td>
        </tr>
        <tr>
            <td><input type="text" value="periodo"></td>
            <td><input type="text" value="semana"></td>
            <td><b>Fecha de finalización</b><input type="text" value="fecha de fin"></td>
        </tr>
        <tr>
            <td colspan="5">
                <textarea name="texto_plna_edit" id="texto_3" class="w-100"  rows="10"></textarea>
                <script>
                    window.onload = function(){
                        editor = CKEDITOR.replace( 'texto_3' );
                        CKFinder.setupCKEditor(editor,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                       }

                </script> 
            
            </td>
        </tr>
    
    </table> 
      
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
