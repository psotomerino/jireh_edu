<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #a_edit{
        text-decoration: none;
        color:red;
    }
    #a_editMaterial{
        text-decoration: none;
        color:red;
    }
    .conte{
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
        width: 100%;
        text-align: center;
        padding: 3px;
        background: blue;
        color: white;
    }
    #fondo_full{
        position: fixed;
        z-index: 1;
        background: #CCDEF3;
        /*opacity: 0.3;*/
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }
    #mi_area_planclas{
        position: relative;        
        z-index: 2;
        margin-top: 60px;
        width: 95%;
        margin-left: 25px;
        height: 50vh;
    }
    #fondo_full2{
        position: fixed;
        z-index: 1;
        background: #CCDEF3;
        /*opacity: 0.3;*/
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }
    #mi_area_Material{
        position: relative;        
        z-index: 2;
        margin-top: 80px;
        width: 95%;
        margin-left: 25px;
        height: 50vh;
    }
    .para_textA{
        background: red;
        width: 80%;
    }
    .boton_planes{
        background: #8DBCF2;
        /*height: 100px;*/
        margin-top: -310px;
        width: 20%;
        float: right;
    }
 
    

</style>
<div class=" conte">
    <div class="row">
        <div class="col">
            <button class="btn-info" id="edit_atras">Regresar</button>
        </div>
    </div>
    
    <table class="table-responsive" border width ="100%" border = 1 id="tablaE">
<!--       <form id="edit_planForm">-->
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
            <td rowspan="2" border width ="" ><div id="eje_Edit"></div></td>
           <input type="text" name="eje" id="eje_Edit">
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
        <!--<tr>
            <td> <button type="submit" class="btn btn-success" id="btn_act_plan">ACTUALIZAR INFORMACIÓN </button> </td>
        </tr>-->
<!--        </form>  -->
        <tr>
            <td colspan="5">
                <p class="titulo">PLAN DE CLASE</p>
                <div id="texto_"></div>
                <hr>
                <a href="#" id="a_edit"><b>Editar Plan de clase</b></a>               
                
            </td>
        </tr>
        <tr>
            <td colspan="5">
                        <p class="titulo">MATERIAL DE ESTUDIO</p>
                        <div id="texto_10"></div>
                        <hr>
                        <a href="#" id="a_editMaterial"><b>Editar Material de Estudio</b></a> 

            </td>
        </tr>
        
    </table> 
<div id="fondo_full" style="display: none ">
        <form id="form_actClase">
        <div id="mi_area_planclas" >
            <input type="hidden" id="id_plan_1" name="id_plan">
            <div class="para_textA">
            <textarea  id="texto_Edit1" name="texto_plan_edit" class="w-100"  rows="50"></textarea>     
            </div>
            <div class="boton_planes">
                    <button type="submit" id="btn_planClase" class="btn btn-primary btn-sm btn-block">Guardar Cambios</button> 
                    <button type="button" id="btn_planClaseCerrar" class="btn btn-info btn-sm btn-block mt-2">Regresar</button>   
            </div> 
        </div>
        </form>       
</div> 

<div id="fondo_full2" style="display: none ">
        <form id="form_actMaterial">
        <div id="mi_area_Material" >
            <input type="hidden" id="id_plan_2" name="id_plan">
            <div class="para_textA">
            <textarea  id="texto_Edit2" name="text_plata_edit" class="w-100"  rows="50"></textarea>    
            </div>
            <div class="boton_planes">
                <button type="submit" id="btn_planMaterial" class="btn btn-primary btn-sm btn-block">Guardar Cambios</button> 
                <button type="button" id="btn_planClaseCerrar1" class="btn btn-info btn-sm btn-block mt-2">Regresar</button>            
            </div>             
        </div>  
        </form>  
</div>   
</div>

