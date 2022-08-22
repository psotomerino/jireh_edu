<?php 
    include '../../templates/header.php';
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
    //require('reportes/fpdf.php');
    
?>
<style>
    #area_sabana{
        position:absolute;
        margin-left: 5px;
        margin-top: 60px;
    }
</style>
<section  id="area_sabana">
<main id="">
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Informes anuales (MINEDUC)</button>
          <button class="btn btn-warning" id="nueva_s">Nueva consulta</button>
    </p>    
    <div class="collapse" id="collapseExample">
     <div class="row">
        <div class="ml-3" id="nivel_edu_sabana">
          <p><b>Nivel de educación</b>
            <select id="nivelS" name="nivelS" class="form-control">
            </select>
          </p>
        </div>         
    </div> 
    </div> 
    <br>  
</main> 
<div class="container_S">
    <table>
       <tr>
           <td><button id="cal_informes">Calcular promedios</button></td>
       </tr>
        <tr>
           <td><table class="table" id="notas_cal_sab"></table></td>
           <!--<td><table class="table" id="notas_cal1"></table></td>
           <td><table class="table" id="notas_cal2"></table></td>
           <td><table class="table" id="notas_cal3"></table></td>
           <td><table class="table" id="notas_cal4"></table></td>
           <td><table class="table" id="notas_cal5"></table></td>-->
        </tr>
        <tr>
            
            <td colspan="5" id="tot_Al">Total estudiantes</td>
            <td id="tot_AlN">0</td>
            
        </tr>
        
    </table> 
</div>      
</section>
<script src="../../js_informes/sabanas.js"></script>