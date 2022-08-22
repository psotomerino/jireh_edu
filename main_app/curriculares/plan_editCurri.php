<?php 
    include '../../templates/header.php';
    include '../../templates/footer.php';
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    .conte_Cur{
        position: relative;
        float: left;
        margin-left: 15px; 
        margin-top: 80px;
        
    }
    input {
        border: 0;
        /*text-align: center;
        background: #F8F7F8;*/
        width: 100%;
       
    }
    .largo{
        border: 0;
        
    }
    .titulo{
        width:  100%;
        background: blue;
        color: white;
        text-align: center;
        padding: 2px;
    }
    #fondo_full2{
        position: fixed;
        z-index: 1;
        background: black;
        /*opacity: 0.3;*/
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }
    #mi_area_obser{
        position: relative;        
        z-index: 2;
        margin-top: 50px;
        width: 95%;
        margin-left: 25px;
        height: 50vh;
    }


</style>
<div class="conte_Cur">
  
   <div class="row">
        <div class="col">
            <button class="btn-info" id="edit_atras">Regresar</button>
        </div>
    </div>
    
   <table class="table-responsive" border width ="100%" border = 1 id="tablaE">
        <tr align = center>
            <td colspan="4"><b>PLAN DESTREZAS CON CRITERIO DE DESEMPEÑO</b></td>
            <td><input type="hidden" id="id_plan" name="id_plan"></td>
        </tr>
        <tr>
            <td style ="background: #7F3AF1; color: white;" colspan="5"><b>1. DATOS INFORMATIVOS</b></td>
        </tr> 
        <tr>
            <td border width ="">Docente: <input type="text" name="nombre_Edit" id="nombre_Edit"></td>
            <td border width ="">Área/Asignatura:  <input type="text" name="asignatura_Edit" id="asignatura_Edit"> </td>
            <td border width ="" colspan="2"><input type="text" name="grado_Edit" id="grado_Edit"></td>
            <td border width ="" colspan="1">Número de estudiantes:  <input type="text" name="numestu_Edit" id="numestu_Edit"></td>            
        </tr>
        <tr>
            <td style ="background: #7F3AF1; color: white;" colspan="5"><b>2. PLANIFICACIÓN</b></td>
        </tr>
        <tr>
            <td border width ="" colspan="3">DESTREZAS CON CRITERIOS DE DESEMPEÑO A SER DESARROLLADAS: </td>
            <td border width ="" colspan="2">INDICADORES ESENCIALES DE EVALUACIÓN: </td>
        </tr>
        <tr>
            <td border width ="" colspan="3"><textarea class ="largo w-100" rows="4" name="destreza1_Edit" id="destreza1_Edit" ></textarea>
            <textarea class ="largo w-100" rows="3" name="destreza2_Edit" id="destreza2_Edit" ></textarea>
            <textarea class ="largo w-100" rows="3" name="destreza3_Edit" id="destreza3_Edit" ></textarea>
            <td border width =""  colspan="2"><textarea class ="largo w-100" rows="7" name="IE_Edit" id="IE_Edit" ></textarea> 
            <textarea class ="largo w-100" rows="7" name="IE_Edit_ini" id="IE_Edit_ini" ></textarea> </td>
        </tr>
        <tr >
            <td rowspan="2" ><b>Eje transversal</b></td>
            <td rowspan="2" border width ="" ><input type="text" name="eje" id="eje_Edit"></td>
            <td border width =""><b>Periodo</b></td>
            <td border width =""><b>Semana</b></td>
            <td border width =""><b>Fecha de inicio</b><input type="date" name="fechaini_Edit" id="fechaini_Edit"></td>
        </tr>
        <tr>
            <td><input type="text" name="periodo_Edit" id="periodo_Edit" ></td>
            <td><input type="text" name="semana_Edit" id="semana_Edit" ></td>
            <td><b>Fecha de finalización</b><input type="date" name="fechafin_Edit" id="fechafin_Edit" ></td>
        </tr>
        <tr>
            <td>Título de la Unidad</td>
            <td colspan="1"><input type="text" name="titunidad_Edit" id="titunidad_Edit"></td>
            <td>Título de la semana</td>
            <td colspan="2"><input type="text" name="titsem_Edit" id="titsem_Edit"></td>
        </tr>
        <tr>
            <td colspan="5">
                        <div class="titulo">PLAN DE CLASE</div>
                        <div id="texto_">  </div>            
            </td>
        </tr>
        <tr>    
            <td> 
            <button type="submit" class="btn btn-secondary" id="abre_obs">AÑADIR OBSERVACIÓN</button> 
            </td>
           
        </tr>
        <tr>
            <td colspan="5">
               <div class="titulo">MATERIAL DE ESTUDIO</div>
                <div id="texto_10"> </div>
            </td>
        </tr>
        <!--<tr>
            <td> <button type="submit" class="btn btn-success" id="btn_act_plan">ACTUALIZAR INFORMACIÓN </button> </td>
        </tr>-->
    </table> 
    <div id="fondo_full2" style="display: none ">
        <div id="mi_area_obser" >
            <form id="form_actobser">
            <input type="hidden" id="id_plan_2" name="id_plan">
            <textarea  id="editor_p" name="observa_" class="w-100"  rows="25">
            </textarea> 
            <table>
                <tr>
                    <td><b style="color: white;">Estatus</b>
                    <select id="status_EE" name="status_E" class="form-control">
                        <option value="Revisión">Revisión</option>
                        <option value="Aprobado">Aprobado</option>
                    </select></td>
                    <td><b style="color: white;">Subido al Aula virtual</b>
                    <select id="Aula_V" name="Aula_V" class="form-control">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="Parcial">Parcial</option>
                    </select></td>
                </tr>
            </table>      

              

            <button type="submit" class="btn btn-info" id="btn_planobser">GUARDAR CAMBIOS</button> <div type="button" class="btn btn-secondary" id="btn_planClaseCerrar1">CANCELAR</div>  
            </form>
                            
        </div>    
</div>     
</div>
