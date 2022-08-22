<?php 
    require_once 'templates/header.php';
   
?>
<script src="ckfinder/ckfinder.js"></script>
<style>
    .coman{  
        width: 30%;  
        
    }
    #datos_info_table{
        margin-bottom: 15px;
    }
    input {
        border: 0;
        text-align: center;
        background: #F8F7F8;
        width: 100%;
       
    }
</style>
  <div class="container">
    <div class="page-header text-left">
      <h1>Planificación micro curricular</h1>
    </div>
    <div class="alert alert-info" role="alert">Docente: </div>
    <main>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapseDatos" aria-expanded="false" aria-controls="collapseExample"> Datos Informativos</button>
    </p>
    <div class="collapse" id="collapseDatos">
       <div class="row">
           <div class="col">
               <table class="table-responsive" BORDER WIDTH="100%" border=1 id="datos_info_table">
                  
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Grado</td>
                  <td colspan="3"><select name="grado" id="grado" class="form-control"></select></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Titulo de la unidad</td>
                  <td colspan="3"><input type="text" name="titulo" id="titulo"></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Ejes transversales</td>
                  <td colspan="3"><input type="text" name="eje" id="eje"></td>
                </tr>
                <tr align = center>
                    <td style ="background: #F9E79F;">Fecha Inicio</td>
                    <td><input type="date" name="fecha_ini" id="fecha_ini"></td>
                    <td style ="background: #F9E79F;">Fecha Finalización</td>
                    <td><input type="date" name="fecha_fin" id="fecha_fin"></td>
                </tr>
                   
               </table>
           </div>
       </div>
        
    </div>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Curriculum</button>
    </p>    
    <div class="collapse" id="collapseExample">
    <div class="row">
        <div class="col-md-4" id="nivel_edu">
               <p><b>Nivel de educación</b>
            <select id="nivelE" name="nivelE" class="form-control">
            </select>
          </p>
        </div>
   
    
      <div class="col-md-4" id="materiaS">
          <p><b>Asignaturas</b>
          <select id="lista_asignatura" name="asignatura" class="form-control">
          </select>
        </p>
      </div>

      <div class="col-md-4" id="OE_final">
        <p><b>Objetivos Especificos</b>
        <select id="videos" name="video" class="form-control">
        </select>
      </p>
      </div>
      

    </div>
    <div class="row destre" id="Destrezas_final">
        <table class="table-responsive" border width ="100%" border = 0>            
                <tr align = center >
                    <td style ="background: #9F6DED; " colspan="3"><b>Destrezas seleccionadas</b></td>
                </tr>
                <tr align = center>
                   <td style ="background: #58D68D;" border width ="3%" >1</td>
                    <td border width ="80%"><select id="destrezas" name="destrezas_1" class="form-control">
                        </select>
                    </td>
                    <td><button class="btn-primary" id="1destreza">Añadir destreza</button></td>
                </tr>
                
                <tr align = center id= "Destrezas_final_2">
                    <td style ="background: #58D68D;" border width ="3%" >2</td>   
                    <td border width ="80%"><select id="destrezas_2" name="destrezas_2" class="form-control">
                    </select>
                    </td>
                    <td><button class="btn-primary" id="2destreza">Añadir destreza</button>&nbsp;<button class="btn-danger" id="1destreza_Quitar">Quitar</button></td>
                </tr>
                
                <tr align = center id= "Destrezas_final_3">
                    <td style ="background: #58D68D;" border width ="3%" >3</td>
                    <td border width ="80%"><select id="destrezas_3" name="destrezas_3" class="form-control">
                    </select>
                    </td>
                    <td><button class="btn-danger" id="3destreza_Quitar">Quitar</button></td>
                </tr>                
           </table>       
    </div>
    <hr>
    <div class="row" id="fila_2">
      <div class="col-md-4">
          <p><b>Criterio de Evaluacón</b>
          <select id="lista_CE" name="CE" class="form-control">
          </select>
        </p>
      </div>
      <div class="col-md-4">
        <p><b>Indicador de Evaluación</b>
        <select id="lista_IE" name="lista_IE" class="form-control">
        </select>
      </p>
      </div> 
    </div>
    <hr id="ln1">
     
    <div class="row" id="resultado_final">
        <div class="col-md-4">
            <p><br><button id="enviar" type="submit" class="btn btn-default btn-block">Mostrar mi selección</button></p>
            <p><br><button id="ocultar" type="submit" class="btn btn-default btn-block">Ocultar mi selección</button></p>
        </div>   
        <div class="col-md-4">
            <p><b>Usted ha seleccionado: </b></p><p id="resultado1"></p>
        </div>
    </div>    
    </div>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapsePlan" aria-expanded="false" aria-controls="collapseExample"> Plan de clase</button>
    </p>
    <div class="collapse" id="collapsePlan">
       <div class="row">
           <div class="col">
           
                <textarea name="texto_plan" id="texto_1" rows="10" cols="80"></textarea>

            </div>
       </div>
        
    </div>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapsePlataforma" aria-expanded="false" aria-controls="collapseExample"> Plan de plataforma</button>
    </p>
    <div class="collapse" id="collapsePlataforma">
       <div class="row">
           <div class="col">
           
                <textarea name="texto_plata" id="texto_2" rows="10" cols="80"></textarea>
                <script>
                    window.onload = function(){
                        editor = CKEDITOR.replace( 'texto_1' );
                        CKFinder.setupCKEditor(editor,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                        editor_1 = CKEDITOR.replace( 'texto_2' );
                        CKFinder.setupCKEditor(editor_1,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                    }

                </script> 
                </div>
       </div>
        
    </div> 
    </main>
    
  </div>
  <script type="text/javascript" src="js_plan/nuevo_plan.js"></script>
