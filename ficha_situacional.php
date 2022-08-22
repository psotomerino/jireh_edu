<?php 
    require_once 'templates/header.php';

?>
<style>
    input {
        border: 0;
        text-align: center;
        background: #F8F7F8;
       
    }
    select {
        border: 0;
        text-align: center;
        background: #F8F7F8;
    }
    .largo {
        width: 100%;
    }
</style>
<main>
   <center>
    <table class="table-responsive" BORDER WIDTH="90%" border=1>
        <tr align = center>
           <td style ="background: #E13713;  color: white; " colspan="8">DATOS DE IDENTIFICACIÓN DEL ALUMNO/A</td>
        </tr>
        <tr>
           <td style ="background: #F0CFAE" border width ="15%" colspan="2">Apellidos</td>
           <td colspan="2"><input class="largo" type="text" name="Apellidos"></td>
           <td style ="background: #F0CFAE" border width ="15%" colspan="2">Nombres </td>
           <td colspan="2"><input class="largo" type="text" name="Nombres"></td>
        </tr>
        <tr>
           <td style ="background: #F0CFAE" border width ="5%">GRADO</td>
           <td><input type="text" name="grado"></td>
           <td style ="background: #F0CFAE" border width ="15%">N° de hermanos</td>
           <td><input type="number" name="num_hermanos"></td>
           <td style ="background: #F0CFAE" border width ="30%">N° de personas que  <br> vivien con el menor</td>
           <td><input type="number" name="num_personas_viven"></td>
           <td> <input type="text" name="cedula"></td>
           <td style ="background: #F0CFAE">Cedula/Pasaporte</td>
        </tr>
        <tr>
           <td style ="background: #F0CFAE" border width ="5%">Domicilio</td>
           <td colspan="3"><input class="largo" type="text" name="direccion"></td>
           <td style ="background: #F0CFAE" border width ="5%">Número</td>
           <td colspan="1"><input type="text" name="numero_casa"></td>
           <td style ="background: #F0CFAE" border width ="5%">Piso</td>
           <td colspan="1"><input type="text" name="piso_casa"></td>
        </tr>
        <tr>
           <td style ="background: #557CEE" border width ="15%" colspan="2"><b>Nombre del Padre</b></td>
           <td colspan="3"><input class="largo" type="text" name="nom_padre"></td>
           <td colspan="2"><input class="largo" type="text" name="ci_padre"></td>
           <td style ="background: #557CEE">CI</td>
        </tr>
        <tr>
           <td style ="background: #9FB4F0" border width ="15%" colspan="2">Estudios</td>
           <td colspan="2"><input class ="largo" type="text" name="estudios_padre"></td>
           <td style ="background: #9FB4F0" border width ="15%" colspan="2">Profesión/Oficio</td>
           <td colspan="2"><input class="largo" type="text" name="profesion_padre"></td>
        </tr>
        <tr>
           <td style ="background: #9FB4F0" border width ="15%" colspan="2">Celular</td>
           <td colspan="2"><input class="largo" type="text" name="celular_padre"></td>
           <td style ="background: #9FB4F0" border width ="15%" colspan="2">Dirección Trabajo</td>
           <td colspan="123"><input class="largo" type="text" name="dir_trabajo_padre"></td>
       </tr>
       <tr>
           <td style ="background: #449F44" border width ="15%" colspan="2"><b>Nombre de la Madre</b></td>
           <td colspan="3"><input  class ="largo" type="text" name="nom_nmadre"></td>
           <td colspan="2"><input class="largo" type="text" name="ci_madre"></td>
           <td style ="background: #449F44" colspan="2">CI</td>
        </tr>
        <tr>
           <td style ="background: #6EEE6E" border width ="15%" colspan="2">Estudios</td>
           <td colspan="2"><input  class ="largo" type="text" name="estudios_madre"></td>
           <td style ="background: #6EEE6E" border width ="15%" colspan="2">Profesión/Oficio</td>
           <td colspan="2"><input class="largo" type="text" name="profesion_madre"></td>
        </tr>
        <tr>
           <td style ="background: #6EEE6E" border width ="15%" colspan="2">Celular</td>
           <td colspan="2"><input class ="largo" type="text" name="celular_madre"></td>
           <td style ="background: #6EEE6E" border width ="15%" colspan="2">Dirección Trabajo</td>
           <td colspan="123"><input class="largo" type="text" name="dir_trabajo_madre"></td>
        </tr>
        <tr>
           <td style ="background: #F03D4B" border width ="15%" colspan="2"><b>Persona de contacton en caso de emergencia</b></td>
           <td colspan="3"><input class ="largo" type="text" name="contacto_emergencia"></td>
           <td style ="background: #F03D4B" border width ="15%" colspan="2"><b>Teléfono</b></td>
           <td colspan="0"><input class="largo" type="text" name="celular_emergencia"></td>
        </tr>
        
        <tr align = center>
           <td style ="background: #050951;  color: white; " colspan="8">DATOS MÉDICOS </td>
        </tr>
        <tr>
            <td style ="background: #3D1185; color: white;" border width ="10%">Presentan tratamiento </td>
            <td style ="background: #B58FF3" border width ="10%">Médico</td>
            <td><select  class ="largo" name="trata_medico">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
            </td>
            <td style ="background: #B58FF3" border width ="10%">Psicológico</td>
            <td><select  class ="largo" name="trata_psicologico">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #B58FF3" border width ="10%">Adjunta informe médico</td>
            <td colspan="2"><select  class ="largo" name="informe_medico">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #B58FF3" border width ="10%" colspan="2">¿Ha sido hospitalizado?</td>
            <td><select  class ="largo" name="hospitalizado">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #B58FF3" border width ="10%">¿Ha sido operado?</td>
            <td><select  class ="largo" name="operado">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #B58FF3" border width ="10%">Adjunta diagnóstico</td>
            <td colspan="2"><select  class ="largo" name="diagnostico">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Alergias_1</td>
            <td><select  class ="largo" name="alergias1">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_1</td>
            <td><input type="text" class="largo" name="tipo_alergia1"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_1</td>
            <td colspan="2"><input type="text" class="largo" name="caracteristica_alergia1"></td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Alergias_2</td>
            <td><select  class ="largo" name="alergias2">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_2</td>
            <td><input type="text" class="largo" name="tipo_alergia2"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_2</td>
            <td colspan="2"><input type="text" class="largo" name="caracteristica_alergia2"></td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Alergias_3</td>
            <td><select  class ="largo" name="alergias3">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_3</td>
            <td><input type="text" class="largo" name="tipo_alergia3"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_3</td>
            <td colspan="2"><input type="text" class="largo" name="caracteristica_alergia3"></td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Enfermedad_1</td>
            <td><select  class ="largo" name="enfermedad1">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_1</td>
            <td><input type="text" class="largo" name="tipo_enfermedad1"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_1</td>
            <td colspan="2"><input type="text" class="largo" name="tipo_enferemdad1"></td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Enfermedad_2</td>
            <td><select  class ="largo" name="enfermedad2">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_2</td>
            <td><input type="text" class="largo" name="tipo_enfermedad2"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_2</td>
            <td colspan="2"><input type="text" class="largo" name="tipo_enferemdad2"></td>
        </tr>
        <tr>
            <td style ="background: #6698F1" border width ="10%" colspan="2">Presenta Enfermedad_3</td>
            <td><select  class ="largo" name="enfermedad3">
                  <option value=""></option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select>
                
            </td>
            <td style ="background: #6698F1" border width ="10%">Tipo_3</td>
            <td><input type="text" class="largo" name="tipo_enfermedad3"></td>
            <td style ="background: #6698F1" border width ="10%">Caracteristicas_3</td>
            <td colspan="2"><input type="text" class="largo" name="tipo_enferemdad3"></td>
        </tr>
        <tr>
            <td style ="background: #B2E8E6" colspan="5"><b>PRESENTA DÉFICIT GRADO (A: Alto; M: Medio; B: Bajo)</b></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Auditivo</td>
            <td colspan="3"> <select  class ="largo" name="auditivo">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Visual</td>
            <td colspan="3"><select  class ="largo" name="visual">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Táctil</td>
            <td colspan="3"><select  class ="largo" name="tactil">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Respiratorio</td>
            <td colspan="3"><select  class ="largo" name="respiratorio">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Cardiáco</td>
            <td colspan="3"><select  class ="largo" name="cardiaco">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="5">Motórico</td>
            <td colspan="3"><select  class ="largo" name="motorico">
                  <option value=""></option>
                  <option value="alto">Alto</option>
                  <option value="medio">Medio</option>
                  <option value="bajo">Bajo</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="8"><b>OBSERVACIONES:</b> Escribir si toma medicación, tipo y horarios, si es alergico a algun alimento o medicación; escribir el tipo. 
            </td>    
        </tr>
        <tr>
            <td colspan="8"><textarea name="observacion_medica" class ="largo w-100" rows="3"></textarea></td>
        </tr>
        
        <tr align = center>
           <td style ="background: #EE8C2B;" colspan="8"><b>CONTEXTO FAMILIAR</b></td>
        </tr>
        <tr align = center>
            <td style ="background: #E7C715;" colspan="5"><b>Conductas familiares</b></td>   
            <td style ="background: #E7C715;" colspan="3"><b>Situación familiar</b></td> 
        </tr>
        <tr>
            <td rowspan="12" colspan="3"><p>

                <input type="checkbox" name="situacion_hijo" value="X">Aceptan situación hijo/a<br>
                <input type="checkbox" name="conocimiento_de_la_enfermedad" value="X">Conocen las causas de la enfermedad o minusvalía<br>
                <input type="checkbox" name="alcoholismo" value="X">Alcoholismo <br>
                <input type="checkbox" name="drogas" value="X">Drogas <br>
                <input type="checkbox" name="sobreproteccion" value="X">Sobreprotección  <br>
                <input type="checkbox" name="refuerzan_logros" value="X">Refuerzan logros <br>
                <input type="checkbox" name="conducta_negativa" value="X">Castigan conductas negativas <br>
                <input type="checkbox" name="violencia" value="X">Violencia <br>
                <input type="checkbox" name="reprenden_positiva" value="X">Reprenden con disciplina positiva    

                
            </p></td>
            <td rowspan="12" colspan="2"><p>

                <input type="checkbox" name="colaboracion" value="X" >Presentan colaboración<br>
                <input type="checkbox" name="comunicacion" value="X" >Comunicación<br>
                <input type="checkbox" name="dialogo_hijo" value="X" >Dialogan con su hijo/a<br>
                <input type="checkbox" name="participativos" value="X">Participativos<br>
                <input type="checkbox" name="ambiente_seguro" value="X">Ambiente  seguro<br>
                <input type="checkbox" name="organiza_tiempo" value="X">Organizan el tiempo de estudio<br>
                <input type="checkbox" name="refuerzo_aprendizaje" value="X">Refuerzan el aprendizaje<br>
                <input type="checkbox" name="ambiente_favorable" value="X">Ambiente no favorable <br>
                <input type="checkbox" name="controlan_estudio" value="X">Controlan el estudio diario    

                
            </p></td>
            <td style ="background: #E48EF9;" colspan="3" align="center">Fallecimientos</td>                   
        </tr>
        <tr align = center>
            <td><input type="checkbox" name="fallece_papa" value="X">Papá</td>
            <td><input type="checkbox" name="fallece_mama" value="X">Mamá</td>
            <td><input type="checkbox" name="fallece_ambos" value="X">Ambos</td>
        </tr>
        <tr>
            <td style ="background: #E48EF9;" colspan="3" align="center">Desempleo</td>    
        </tr>
        <tr align = center>
            <td><input type="checkbox" name="desempleo_papa" value="X">Papá</td>
            <td><input type="checkbox" name="desempleo_mama" value="X">Mamá</td>
            <td><input type="checkbox" name="desempleo_ambos" value="X">Ambos</td>
        </tr>
        <tr>
            <td style ="background: #E48EF9;" colspan="3" align="center">Privación de libertad</td>    
        </tr>
        <tr align = center>
            <td><input type="checkbox" name="ppl_papa" value="X">Papá</td>
            <td><input type="checkbox" name="ppl_mama" value="X">Mamá</td>
            <td><input type="checkbox" name="ppl_ambos" value="X">Ambos</td>
        </tr>
        <tr>
            <td style ="background: #E48EF9;" colspan="3" align="center">Discapacidad</td>    
        </tr>
        <tr align = center>
            <td><input type="checkbox" name="discapacidad_papa" value="X">Papá</td>
            <td><input type="checkbox" name="discapacidad_mama" value="X">Mamá</td>
            <td><input type="checkbox" name="discapacidad_ambos" value="X">Ambos</td>
        </tr>
        <tr>
            <td style ="background: #E48EF9;" colspan="3" align="center">Custodia por padres separados / divorciados</td>    
        </tr>
        <tr align = center>
            <td><input type="checkbox" name="custodia_papa" value="X">Papá</td>
            <td><input type="checkbox" name="custodia_mama" value="X">Mamá</td>
            <td><input type="checkbox" name="custodia_otros" value="X">Otros</td>
        </tr>
        <tr>
            <td style ="background: #E48EF9;" colspan="3" align="center">Personas que conviven en el seno familiar</td>    
        </tr>
        <tr align = center>
            <td colspan="3"><textarea name="observacion_seno_familiar" class ="largo w-100" rows="3"></textarea></td>
        </tr>
        <tr>
            <td style ="background: #82F3EC" colspan="5">Conexiòn WIFI </td>
            <td colspan="3"><select  class ="largo" name="wifi">
                  <option value=""></option>
                  <option value="buena">Buena</option>
                  <option value="regular">Regular</option>
                  <option value="mala">Mala</option>
                </select>
                
            </td>    
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="8"><b>OBSERVACIONES:</b> especificar cualquier situación familiar que sea relevante
            </td>    
        </tr>
        <tr>
            <td colspan="8"><textarea name="observacion_situacion_familiar" class ="largo w-100" rows="3"></textarea></td>
        </tr>
        
        <tr align = center>
           <td style ="background: #AD0CA0; color: white" colspan="8"><b>CONTEXTO ESCOLAR</b></td>
        </tr>
        <tr align = center>
            <td style ="background: #C663BE;" colspan="2"><b>Caracteristicas de aprendizaje</b></td>   
            <td style ="background: #C663BE;" colspan="2"><b>Dificultades de aprendizaje</b></td> 
            <td style ="background: #C663BE;" colspan="2"><b>Inserción Social </b></td>
        </tr>
        <tr>
            <td rowspan="8" colspan="2"><p>

                <input type="checkbox" name="responsable" value="X">Responsable<br>
                <input type="checkbox" name="motivado" value="X">Motivado<br>
                <input type="checkbox" name="atento" value="X">Atento<br>
                <input type="checkbox" name="reflexivo" value="X">Reflexivo<br>
                <input type="checkbox" name="independiente" value="X">Independiente<br>
                <input type="checkbox" name="organizado" value="X">Organizado      

                
            </p></td>
            <td rowspan="8" colspan="2"><p>

                <input type="checkbox" name="despreocupado" value="X">Despreocupado<br>
                <input type="checkbox" name="desmotivado" value="X">Desmotivado<br>
                <input type="checkbox" name="distraido" value="X">Distraído<br>
                <input type="checkbox" name="impulsivo" value="X">Impulsivo<br>
                <input type="checkbox" name="dependiente" value="X">Dependiente<br>
                <input type="checkbox" name="desorganizado" value="X">Desorganizado      

                
            </p></td>
        </tr>
        <tr>
            <td rowspan="7" colspan="2"><p>

                <input type="checkbox" name="comprension_lectora" value="X">Comprensión lectora<br>
                <input type="checkbox" name="comprension_oral" value="X">Comprensión oral<br>
                <input type="checkbox" name="expresion_escrita" value="X">Expresión escrita<br>
                <input type="checkbox" name="expresion_oral" value="X">Expresión oral<br>
                <input type="checkbox" name="calculo" value="X">Cálculo<br>
                <input type="checkbox" name="resolucion_de_problemas" value="X">Resolución de Problemas<br>  
                <input type="checkbox" name="ortografia" value="X">Ortografía <br>
                <input type="checkbox" name="vocabulario" value="X">Vocabulario     

                
            </p></td>
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Interés por el aprendizaje</td>
            <td colspan="1"><select  class ="largo" name="interes_aprendizaje">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Relación con alumnos</td>
            <td colspan="1"><select  class ="largo" name="relacion_alumnos">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Relación con Docentes</td>
            <td colspan="1"><select  class ="largo" name="relacion_docentes">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Hábitos de Trabajo</td>
            <td colspan="1"><select  class ="largo" name="habitos_trabajo">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Hábitos de Estudio</td>
            <td colspan="1"><select  class ="largo" name="habitos_estudio">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td  border width ="50%" whustyle ="background: #82F3EC" colspan="1">Comportamiento</td>
            <td colspan="1"><select  class ="largo" name="comportamiento">
                  <option value=""></option>
                  <option value="Muy bueno">Muy Bueno</option>
                  <option value="Adecuado">Adecuado</option>
                  <option value="Presenta dificultades">Presenta dificultades</option>
                </select>
                
            </td> 
        </tr>
        <tr>
            <td style ="background: #E8F5A1" colspan="8"><b>OBSERVACIONES:</b> 
            </td>    
        </tr>
        <tr>
            <td colspan="8"><textarea name="observacion_escolar" class ="largo w-100" rows="3"></textarea></td>
        </tr>
   
    </table><br><br><br>
    </center>
</main>

