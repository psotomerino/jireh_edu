<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
   
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
    $sql = "SELECT * FROM `Login` INNER JOIN Usuarios on Login.id_usuario = Usuarios.id_usuario WHERE Login.id_usuario = $id_usuario_profe";
    $resultado = $pdo->prepare($sql);
    $resultado->execute();
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
       $Nombres_prof = $registro['Nombres'];
           
       }

       $resultado->closeCursor();
       
?>

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
        /*background: #F8F7F8;*/
        width: 100%;
       
    }
    
    #plan_new{
         
        /*float: left;*/
        margin-top: 70px;
        margin-left: 20px;
        width:95%;
        
               
    }
    .enviar {
        background: #E5E8E8;      
       
    }
    #mis_planes{
        width: 95%;
        text-align: center;
        margin-left: 20px;
    
    }
    #eje{
        width: 100%;
        border: 0;
        text-align: center;
    }
    #bloq{
        display: inline-block;
    }
    #listas_tab{
        table-layout: fixed;
    }
     #listas_tab td{
        word-wrap:break-word;
           
    }


</style>

 <main id="plan_new">

 
 <form id="form_editor">
        <div class="">
          <h1>Planificación micro curricular</h1>
        </div>
        <div class="alert alert-info d-block" role="alert"><p>Docente: <b id="nombre_docente"></b>&nbsp;<b id="apellido_docente"></b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="text" class="btn btn-info mt-2" id="btn_nuevo">Nuevo Plan </button></p>
            <p><input type="hidden" id="este_profe_id" name="este_profe_id"></p>
            
        </div>


        <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapseDatos" aria-expanded="false" aria-controls="collapseDatos"> Datos Informativos</button>
    </p>
    
    <div class="collapse" id="collapseDatos">
         <div class="col">
               <table class="table-responsive" BORDER WIDTH="100%" border=1 id="datos_info_table">
                  
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Grado</td>
                  <td colspan="3"><select required name="grado" id="grado" class="form-control"></select></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Número de estudiantes</td>
                  <td colspan="1"><input type="number" name="num_estud" id="num_estu" class="form-control"></td>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Número de Unidad</td>
                  <td colspan="1"><input type="number" name="num_unid" id="num_unid" class="form-control"></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;">Titulo de la unidad</td>
                  <td ><input required type="text" name="titulo" id="titulo"></td>
                  <td style ="background: #F9E79F;">Tema de la semana</td>
                  <td><input required type="text" name="titsem" id="titsem"></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Período</td>
                  <td colspan="1"><input type="number" name="periodo" id="periodo" class="form-control"></td>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Semana</td>
                  <td colspan="1"><input type="text" name="semana" id="semana" class="form-control"></td>
                </tr>
                <tr align = center>
                  <td style ="background: #F9E79F;" BORDER WIDTH="15%">Ejes transversales</td>
                  <td colspan="3"><select name="eje" id="eje">
                      <option value="The formation of a democratic citizenship.">The formation of a democratic citizenship.</option>
                      <option value="The health care and recreation habits of the students.">The health care and recreation habits of the students.</option>
                      <option value="Interculturality">Interculturality</option>
                      <option value="Use of technologies for educational purposes.(Tics)">Use of technologies for educational purposes. (Tics)</option>
                      <option value="Education in values.">Education in values.</option>
                      <option value="Environmental Protection.">Environmental Protection.</option>
                  </select></td>
                </tr>
                <tr align = center>
                    <td style ="background: #F9E79F;">Fecha Inicio</td>
                    <td><input  required type="date" name="fecha_ini" id="fecha_ini"></td>
                    <td style ="background: #F9E79F;">Fecha Finalización</td>
                    <td><input type="date" name="fecha_fin" id="fecha_fin"></td>
                </tr>
                   
               </table>
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
                   <!--<td><button class="btn-primary" id="1destreza">Añadir destreza</button></td>-->
                </tr>
                
                <tr align = center id= "Destrezas_final_2">
                    <td style ="background: #58D68D;" border width ="3%" >2</td>   
                    <td border width ="80%"><select id="destrezas_2" name="destrezas_2" class="form-control">
                    </select>
                    </td>

                </tr>
                
                <tr align = center id= "Destrezas_final_3">
                    <td style ="background: #58D68D;" border width ="3%" >3</td>
                    <td border width ="80%"><select id="destrezas_3" name="destrezas_3" class="form-control">
                    </select>
                    </td>

                
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
      <div class="col-md-4" id="IE_basica">
        <p><b>Indicador de Evaluación</b>
        <select id="lista_IE" name="lista_IE" class="form-control">
        </select>
      </p>
      </div> 
      <div class="col-md-4" id="IE_inicial">
        <p><b>Indicador de Evaluación</b>
        <textarea name="IE_i" id="IE_i" class="w-100" rows="10"></textarea>
      </p>
      </div>
    </div>
    <hr id="ln1">
     
    <div class="row" id="resultado_final">
        <div class="col-md-4">
            <p id="enviar" type="submit" class="btn btn-default btn-block enviar">Mostrar mi selección</p>
            <p id="ocultar" type="submit" class="btn btn-default btn-block enviar">Ocultar mi selección</p>
        </div>   
        <div class="col-md-4">
            <p><b>Usted ha seleccionado: </b></p><p id="resultado1"></p>
        </div>
    </div>

</div>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapsePlan" aria-expanded="false" aria-controls="collapsePlan"> Plan de clase</button>
    </p>
    <div class="collapse" id="collapsePlan">
       <div class="row">
           <div class="col">
           
                <textarea name="texto_plan" id="texto_1" rows="10" cols="80">
                    <div id="texto_"> 
                    <p><strong>Trabajo previo</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Motivaci&oacute;n</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Pregunta del Pizarr&oacute;n</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Trabajo en grupo</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Cierre de clase</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Diferención</strong></p>
                    </div>
                </textarea>

            </div>
       </div>
        
    </div>
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapsePlataforma" aria-expanded="false" aria-controls="collapsePlataforma"> Material de estudio</button>
    </p>
    <div class="collapse" id="collapsePlataforma">
       <div class="row">
           <div class="col">
           
                <textarea name="texto_plata" id="texto_2" rows="10" cols="80">
                    <div id="texto_10">
                     <b>Material de estudio</b>
                        
                      </div>
                </textarea>
                <script>
                    window.onload = function(){
                        editor = CKEDITOR.replace( 'texto_1' );
                        CKFinder.setupCKEditor(editor,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                        editor_1 = CKEDITOR.replace( 'texto_2' );
                        CKFinder.setupCKEditor(editor_1,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                        editor_3 = CKEDITOR.replace( 'texto_3' );
                        CKFinder.setupCKEditor(editor_3,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                        editor_4 = CKEDITOR.replace( 'text_sib' );
                        CKFinder.setupCKEditor(editor_4,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                        //editor_5 = CKEDITOR.replace( 'edit_silabo' );
                        //CKFinder.setupCKEditor(editor_5,'https://jireh.edu.ec/ckeditor.php/ckfinder');
                    }

                </script> 
                </div>
       </div>
        
    </div> 
    <div class="col-md-4 d-none" >
        <p><b>Estatus</b>
        <select id="status" name="status" class="form-control">
            <option value="Enviado">Enviado</option>
            <option value="Revisión">Revisión</option>
            <option value="Aprobado">Aprobado</option>
        </select>
      </p>
    </div> 
    <button type="submit" class="btn btn-success" id="btn_ck">ENVIAR INFORMACIÓN </button> 
</form>
<hr>
<div>
    <form id="arc_up" enctype="multipart/form-data">
       <table>
           
           <tr>
               <td>
                   <input type="hidden" id="nombre_docente_arch" name="nombre_docente_arch">
               </td>
               
               <td>
                  <input type="file" name="arch" id="arch">   
               </td>
               <td>
                  <button type="submit" class="btn btn-warning" id="btn_subir">Subir archivo</button>   
               </td>
               <td>
                <a href="#" data-toggle="modal" data-target="#modalLoginForm"><button type="button" class="btn btn-primary">Mis Archivos</button></a>
               </td>
           </tr>
       </table>        
    </form>
</div>
<hr> 

</main>
<main id="mis_planes">

<hr>
<div class="alert alert-warning" role="alert"><p>MIS PLANIFICACIONES </p>
</div> 
<div class="col-md-4" id="nivel_edu">
               <p><b>Asiganturas</b>
            <select id="lista_asignaturaG" name="asig_doc" class="form-control">
            </select>
          </p>
</div>       
    <table class="table-striped" BORDER WIDTH="100%" border=1 id="listas_tab">
        <tr align = center style ="background: #0D6CA6; color: white;"  >
            <td>Nº</td>
            <td>Nivel</td>
            <td>Nº semana</td>
            <td id="Tema">Tema Semana</td>
            <td>Observaciones</td>
            <td>Status</td>
            <td>Acciones</td>
            <td>Aula_Virtual</td>
        </tr>
        <tbody id="listados_plan"></tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100 font-weight-bold">Mi Directorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>       
      </div>
      <div class="modal-body mx-3">
      <?php 
            $contar_ar = 0;
            $ruta =  "../../backend_plan/archivos/$Nombres_prof";   

            if ($dir =  opendir ($ruta)){
                while($lista = readdir($dir)){
                    if($lista != '.' && $lista !='..'){
                      $contar_ar ++;    
                      echo "<strong>$lista</strong><br />"; 
                    }

                }
                echo "<hr/>";
                echo "Total de archivos en el servidor: $contar_ar <br />";
            }


            ?>
       
      </div>
    </div>
  </div>
</div>


 