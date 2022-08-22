<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #silabo{
        margin-top: 50px;
    }
    #div_sib{
        width: 70%;
        margin-left: 150px;
        
    }
    #datos_sub{
        width: 30%;
        margin-bottom: 10px;
    }
    #aviso_sil{
        width: 30%;
        margin-left: 80px;
    }
    #tabla_sil{
        margin-left: 80px;
    }
    .document-editor {

        margin-top: 60px;
        border: 1px solid var(--ck-color-base-border);
        border-radius: var(--ck-border-radius);
        width: 70%;

        /* Set vertical boundaries for the document editor. */
        max-height: 100%;

        /* This element is a flex container for easier rendering. */
        /*display: flex;
        flex-flow: column nowrap;*/
        margin-left: 130px;
    }
    .document-editor__toolbar {
        /* Make sure the toolbar container is always above the editable. */
        z-index: 1;

        /* Create the illusion of the toolbar floating over the editable. */
        box-shadow: 0 0 5px hsla( 0,0%,0%,.2 );

        /* Use the CKEditor CSS variables to keep the UI consistent. */
        border-bottom: 1px solid var(--ck-color-toolbar-border);
    }

    /* Adjust the look of the toolbar inside the container. */
    .document-editor__toolbar .ck-toolbar {
        border: 0;
        border-radius: 0;
    }
    .document-editor__editable-container {
        padding: calc( 2 * var(--ck-spacing-large) );
        background: var(--ck-color-base-foreground);

        /* Make it possible to scroll the "page" of the edited content. 
        overflow-y: scroll;*/
    }

    .document-editor__editable-container .ck-editor__editable {
        /* Set the dimensions of the "page". */
        width: 60%;
        min-height: 200cm;

        /* Keep the "page" off the boundaries of the container. */
        padding: 1cm 2cm 2cm;

        border: 1px hsl( 0,0%,82.7% ) solid;
        border-radius: var(--ck-border-radius);
        background: blue;

        /* The "page" should cast a slight shadow (3D illusion). */
        box-shadow: 0 0 5px hsla( 0,0%,0%,.1 );

        /* Center the "page". */
        margin: 0 auto;
    }  
    #boton{
        background: #CFE2F8;
        height: 100px;
        width: 20%;
        float: right;
    }



   


</style>       
    <div  id="silabo">
     <div class="row">
        <div class="col">
            <button class="btn-info" id="silabo_atras">Regresar</button>
        </div>
    </div>
    <button class="btn btn-primary coman" type="button"  id="btn_pruebaSib">CREAR SÍLABO </button>
        
        
        <div class="row mt-5" id="div_sib">
        <form id="form_sib">
            <div id="datos_sub">
                <input class="form-control" type="hidden" name="id_docsub" id="id_docsub"> 
                <input class="form-control"  name="nombres_ape" id="nombres_ape">
                <select class="form-control" id="mi_grado" name="mi_grado">
                    <option value="0">Seleccione:</option> 
                    <option value="1">Inicial 2- Tres años</option>
                    <option value="2">Inicial 2- Cuatro años</option>
                    <option value="3">Preparatoria</option>
                    <option value="4">Segundo grado</option>
                    <option value="5">Tercer grado</option>
                    <option value="6">Cuarto grado</option>
                    <option value="7">Quinto grado</option>
                    <option value="8">Sexto grado</option>
                </select> 
                <select id="lista_asignatura_sib" name="asignatura" class="form-control"></select>    
            </div>       
            
            <textarea name="text_sib" id="text_sib"> <!--editor_4-->
                 
            <p><img src="/ckfinder/userfiles/files/image(219).png" style="height:85px; width:740px" /></p>
            <hr>

            <p style="text-align:center"><strong>S&Iacute;LABO</strong></p>

            <!--<p style="margin-left:80px; text-align:justify"><strong>1. DATOS GENERALES DE LA ASIGNATURA</strong></p>

            <p style="margin-left:120px; text-align:justify"><strong>Asignatura:</strong></p>

            <p style="margin-left:120px; text-align:justify"><strong>Nivel de educaci&oacute;n B&aacute;sica:</strong></p>-->

            <p style="margin-left:80px; text-align:justify"><strong>2. PLAN DE CLASE (ESTRUCTURA DE LA ASIGNATURA, DESARROLLO DE LA ASIGNATURA)</strong></p>

            <p style="margin-left:80px; text-align:justify">&nbsp;</p>

            <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td style="background-color:#3399ff; text-align:center; white-space:nowrap; width:30%"><span style="color:#ffffff"><strong>Unidad</strong></span></td>
                        <td style="background-color:#3399ff; text-align:center"><span style="color:#ffffff"><strong>DOS</strong></span></td>
                    </tr>
                    <tr>
                        <td>Tema #1</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tema #2</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tema #3</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tema #4</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tema #5</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tema #6</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <p style="margin-left:80px">&nbsp;</p>

            <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">
                <tbody>
                    <tr>
                        <td colspan="2" style="background-color:#ffff33; text-align:center; width:30%"><strong>EVALUACIONES&nbsp;</strong></td>
                    </tr>
                    <tr>
                        <td style="width:30%"><strong>Formativas</strong></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:30%">Formtiva # 1&nbsp;</td>
                        <td>Fecha #1 / posterior al tema ?</td>
                    </tr>
                    <tr>
                        <td style="width:30%">Formtiva # 2</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:30%">Formtiva # 3</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:30%">Formtiva # 4</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="background-color:#ccffcc; width:30%"><strong>Sumativa</strong></td>
                        <td style="background-color:#ccffcc"><strong>Fecha&nbsp;</strong></td>
                    </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>

            <p style="margin-left:80px"><strong>Elaborado por:</strong></p>

            <p style="margin-left:80px">&nbsp;</p>

            <p style="margin-left:80px">&nbsp;</p>
            
            <p style="margin-left:80px"><strong><span>Nombre Docente</span><br>Docente</strong></p>
            <p style="margin-left:80px"><strong>Aprobado por:</strong></p>

            <p style="margin-left:80px">&nbsp;</p>

            <p style="margin-left:80px">&nbsp;</p>
            
            <p style="margin-left:80px"><strong><span>Marilin Molina Alonso</span><br>Directora</strong></p>
            
              
                
                
             
            </textarea>
         <br>
            <button type="submit" id="envia_sib" class="btn-success"> GUARDAR SILABO</button>

        </form>    
        </div>
        <div class="mt-5" id="mis_silabos">  
            


               
            <div class="alert alert-warning" id="aviso_sil" role="alert">MIS SILABOS </div>  
                <table class="table-striped" BORDER WIDTH="80%" border=1 id="tabla_sil">
                <tr align = center style ="background: #0D6CA6; color: white;"  >
                    <td>Nº</td>
                    <td>Grado</td>
                    <td>Asignatura</td>        
                </tr>
                <tbody id="this_sib"></tbody>
                </table>
                <br>                
                <br>   
        </div>
       
    </div>
    <div id="div_silabo">
      <form id="form_act_silabo">
       <div id="boton">
          <input type="text" id="este_sila" name="este_sila">
          <button type="submit" id="btn_envia_sila" class="btn btn-primary btn-sm btn-block">Guardar Silabo</button> 
          <button type="button" id="btn_regresa_silabo" class="btn btn-info btn-sm btn-block mt-2">Regresar</button>
       </div>
        <div class="document-editor" >
                   <div class="document-editor__toolbar"></div>
                <div class="document-editor__editable-container">
                    <div class="document-editor__editable">
                        <textarea name="edit_silabo" id="edit_silabo" ></textarea>
                    </div>
                </div>
        </div>
        </form>        
    </div>
        
    
   