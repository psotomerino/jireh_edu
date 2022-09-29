$(document).ready(function(){
    
   console.log('jquery funciona PERFECTO PARA docente'); 
    $('#lista_estu').hide();
    $('#aula').hide();
    $('#asig_notas_inicial').hide();
    $('#1q1p_inicial').hide();
    $('#asig_elemental').hide(); 
    $('#ver_boleta').hide();
    $('#ver_boleta_ini').hide(); 
    $('#1q1p').hide();
    $('#1q2p').hide();
    $('#1q1pRecup').hide();    
    $('#1q2pRecup').hide();
    $('#1q_proy_integral').hide();
    $('#1q_proy_ingles').hide();
    $('#1q_1pinicial').hide();
    $('#1q_2pinicial').hide();
    $('#conducta_vista').hide();
    $('#1q_conducta').hide();
    $('.plant').hide();
    $('.plant_inicial').hide();
    $('.reg_notas_menu').hide();
    $('#menu_de_2q').hide();
    $('.menu_sub_3_1p2q').hide();
    $('.menu_sub_3_2p2q').hide();
    $('#form_notas1p2qR').hide();
    $('#form_notas2p2q').hide();
    $('#form_notas2p2qR').hide();
    $('#form_notas2p2qInicial').hide();
    $('#cursos_notasR').hide();
    
   
      
    
   $(document).on('click','#btn_control', function(){
        $('#escritorio').show();
        $('#lista_estu').hide();
        $('#aula').hide();
        $('#listados_estu').empty();
        $('#asig_notas_inicial').hide();
        $('#asig_elemental').hide();
        $('#asig_basica').hide();
        $('#ver_boleta').hide();
        $('#ver_boleta_ini').hide();
        $('#1q1p').hide();
        $('#1q2p').hide();
        $('#1q1pRecup').hide();    
        $('#1q2pRecup').hide();
        $('#1q_proy_integral').hide();
        $('#1q_proy_ingles').hide();
        $('#1q_1pinicial').hide();
        $('.plant').hide();
        $('.plant_inicial').hide();
        $('#cursos_notas').empty();
        $('#OG_menu').hide();
        location.reload();
    });
   $(document).on('click','#btn_lista_doc', function(){
        var id_usu = $('#id_usua').val();
        busq_aula(id_usu); //busca las aulas de cada docente
        $('#escritorio').hide();
        $('#asig_notas_inicial').hide();
        $('#asig_elemental').hide();
        $('#asig_basica').hide();
        $('#eval_pa').empty();
        $('#1q_1p').empty();
        $('#1q_1pRecup').empty();
        $('#1q_2p').empty();
        $('#1q_2pRecup').empty();
        $('#1q_exa').empty();
        $('#1q_exa_ingles').empty();
        $('#aula').show(); 
        $('#lista_estu').show();
        $('#1q_1p_inicial').empty();
        $('#1q_2p_inicial').empty();
        $('.reg_notas').trigger();
        
        
        
        
    });
    
    $(document).on('click','#ls_nivel', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id_cur = $(elemento).attr('elmentoid');
        $('#este_curso').val(id_cur);
        $('#listado_estu').show();
        $('.menu_sub_1').hide();
        $('.menu_sub_2').hide();
        $('.menu_sub_3_2p2q').show();
        $('#envio_notas2QQ').show();
        $('#oferta_aca').val(id_cur);
        lista_4EGB(id_cur);
        //lista_para_notas(id_cur);
        //lista_para_notasR(id_cur);
        //lista_para_notasInicial(id_cur);
        lista_para_notas_2p2q(id_cur);
        lista_para_notasR_2p2q(id_cur);
        lista_para_notasInicial_2p2q(id_cur);
        
        Mostrar_sub_menu3();
    });
    
    $(document).on('click','#notas',function(){
        $('#escritorio').hide();
        $('#lista_estu').hide();
        $('#aula').hide();
        $('.extraer_notas').show();
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        let id_usu_notas = $(elemento).attr('elmentoid');
        $('#este_alumno').val(id_usu_notas);       
        //console.log (id_usu_notas);
        busca_estudiante(id_usu_notas);
        recup_auto_eval(id_usu_notas);
        recup_notas_1q_1p(id_usu_notas);
        recup_notas_1q_2p();
        recup_notas_1q_1pRecup(); 
        recup_notas_1q_2pRecup();
        recup_notas_1q_exa_ingles();
        recup_notas_1q_exa(); 
        recup_notas_1q1p_inical();
        recup_notas_1q2p_inical();
        busca_estudiante_conducta();
        recup_notas_conducta(); 
        estrac_notas_1q1p(id_usu_notas);
        estrac_notas_1q2p(id_usu_notas);
        estrac_notas_1q1pRec(id_usu_notas);
        estrac_notas_1q2pRec(id_usu_notas);
        estrac_notas_1qporta(id_usu_notas);
        estrac_notas_proyecto1q(id_usu_notas);
        estrac_notas_proyingles1q(id_usu_notas);
        estrac_notas_1q1p_inicial(id_usu_notas);
        estrac_notas_2q1p_inicial(id_usu_notas);
        estrac_notas_2q1p(id_usu_notas);
        estrac_notas_2q1pRec(id_usu_notas);
        
    });

    $(document).on('click','#1p_bas', function(){
            $('#1q1p').show();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
    });
    $(document).on('click','#2p_bas', function(){
            $('#1q1p').hide();
            $('#1q2p').show();            
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide(); 
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            busca_estudiante_1q2p();
    });
    $(document).on('click','#1p_bas_recup', function(){
            $('#1q2p').hide();
            $('#1q1p').hide();
            $('#1q1pRecup').show();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            busca_estudiante_1q1pRecup();
            
    });
    $(document).on('click','#2p_bas_recup', function(){
            $('#1q2p').hide();
            $('#1q1p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').show();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            busca_estudiante_1q2pRecup();
            
    });
    $(document).on('click','#1q_exa', function(){
            $('#1q2p').hide();
            $('#1q1p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').show();
            $('#1q_proy_ingles').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            busca_estudiante_1qexa();
            
    });
    $(document).on('click','#1q_exa_ingles', function(){
            $('#1q2p').hide();
            $('#1q1p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').show();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            busca_estudiante_1qexaIngle();
            
    });
    $(document).on('click','#1p_ini_btn', function(){ 
            $('#1q_1pinicial').show();
            $('#1q_2pinicial').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
               
            
    
    });
    $(document).on('click','#1p_ini_conducta', function(){ 
            $('#conducta_vista').show();
            $('#1q_conducta').show();
            $('#1q1p').hide();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            recup_notas_conducta();
               
            
    
    });
    
    $(document).on('click','#2p_ini_btn', function(){ 
            $('#1q_1pinicial').hide();
            $('#1q_2pinicial').show();
            busca_estudiante_1q2piniicial();
               
            
    
    });
    
    $(document).on('click','#actualiza_notas',function(){
            $('#lista_estu').show();
            $('#ver_boleta').hide();
            $('#ver_boleta_ini').hide(); 
            $('#1q1p').hide();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#eval_pa').empty();
            $('#1q_1p').empty();
            $('#1q_1pRecup').empty();
            $('#1q_2p').empty();
            $('#1q_2pRecup').empty();
            $('#1q_exa').empty();
            $('#1q_exa_ingles').empty();
            $('#1q_1pinicial').hide();
            $('#1q_2pinicial').hide();
            $('#1q_1p_inicial').empty();
            $('#1q_2p_inicial').empty();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            $('.plant').hide();
            $('.plant_inicial').hide();
        
    });
    
    $(document).on('click','#1q_bas', function(){
            $('#1q1p').hide();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            
    });
    $(document).on('click','#1q_ini', function(){
            $('#1q_1pinicial').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            
           
    });
    
    
    $(document).on('click','#extrac_N', function(){
            $('#ver_boleta').hide();
            $('#ver_boleta_ini').hide();
            $('#1q1p').hide();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#1q_1pinicial').hide();
            $('#1q_2pinicial').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            $('.plant_inicial').hide();
            //$('.extraer_notas').hide();
            $('.identidad').show();
            $('.plant').show();
            $('.print_1').hide();
            $('.print_2').hide();
           
            
    });
    $(document).on('click','#certi_promo', function(){
            $('.print_1').show();
            $('.print_2').hide();
    });
    $(document).on('click','#imprime_boleta', function(){
            $('.print_1').hide();
            $('.print_2').show();
            
    });
     $(document).on('click','#extrac_N_inicial', function(){
            $('#ver_boleta').hide();
            $('#ver_boleta_ini').hide();
            $('#1q1p').hide();
            $('#1q2p').hide();
            $('#1q1pRecup').hide();    
            $('#1q2pRecup').hide();
            $('#1q_proy_integral').hide();
            $('#1q_proy_ingles').hide();
            $('#1q_1pinicial').hide();
            $('#1q_2pinicial').hide();
            $('#conducta_vista').hide();
            $('#1q_conducta').hide();
            $('.plant').hide();
            $('.identidad').show();
            $('.plant_inicial').show();
            calcula_notas_2Q_incial(); 
         
     });
    
    $(document).on('click','#btn_reg_notas', function(){
            $('#escritorio').hide();
            $('#aside_left').hide();
            $('.reg_notas_menu').show();
    });
    
    $(document).on('click','#a_lectivo', function(){
        $('#menu_de_2q').show();
            
            
    });
    
    
    $(document).on('click','#2Q_primera_parcial', function(){
        //var id_usu = $('#id_usua').val();
        //busq_aula(id_usu);
        $('.menu_sub_2').hide();
        $('.menu_sub_3_1p2q').hide();
        
        alert ("LAS NOTAS CORRESPONDIENTES A LA PRIMERA PARCIAL DEL SEGUNDO QUIMESTRE YA FUERON INGRESADAS");        
        
    });
        $(document).on('click','#2Q_segunda_parcial', function(){
        var id_usu = $('#id_usua').val();
        busq_aula(id_usu);
        $('.menu_sub_2').show();
        $('.menu_sub_3_2p2q').hide(); 
        $('.menu_sub_4_2pPatricio').hide();
        $('.menu_sub_5_2p').hide(); 
        $('.menu_sub_4_2pNellyEdilmaInicial').hide();
        $('#form_notas2p2q').hide();
        $('#form_notas2p2qR').hide();
        $('#form_notas2p2qInicial').hide();
        
        
        
    });
    
    $(document).on('click','#rectificaN', function(){
       
        $('#rectifica_nota').show();
        $('.menu_sub_1').hide();
        $('.menu_sub_4_Patricio').hide();
        $('.menu_sub_4_Silvia').hide();
        $('.menu_sub_4_NellyEdilmaInicial').hide();
        $('.menu_sub_4_NellyEdilmaBasica').hide();
        $('.menu_sub_4_Jonathan').hide();
        $('.menu_sub_4_Yenny').hide();
        $('.menu_sub_4_SilviaG').hide();
        $('.menu_sub_4_Jessica').hide();
        $('.menu_sub_4_YennyBasica').hide(); 
        $('.menu_sub_5').hide();
        $('#form_notas1p2q').hide();
        $('#form_notas1p2qR').hide();
        $('#form_notas1p2qInicial').hide();
        $('#form_notas2p2q').hide();
        $('#form_notas2p2qR').hide();
        $('#form_notas2p2qInicial').hide();
        $('#menu_de_2q').hide();
        $('.menu_sub_2').hide();
        
        
    });
    
    
//******** aulas asiganadas *******
function busq_aula(id_usu){
    $('#bolet').show();
    $('#este_docente').val(id_usu);
    var id_envio = {"id_envio":id_usu};
    $.ajax({
      url: '../../backend/crud_aula.php',
      type: 'POST',
      data: id_envio,    
      success: function (respuesta)
      {
         console.log(respuesta); 
        
         let i = 1;  
         let listas = JSON.parse(respuesta);
         let template='';
         listas.forEach(lista =>{
            template+=`
            <tr elmentoid="${lista.id_oferta_aca}">
               <td><a href="#" id="ls_nivel">${lista.nombre_nivel}</a></td>
            </tr>`;
            $('#listado_aulas').html(template);
            $('#mis_cursos').html(template); 
           
         });
      }
      
   });
}
//********* lista 4EGB**********
function lista_4EGB(id_cur){
    //$('.menu_sub_3').hide();
    let id = id_cur;
    var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 1;  
         let listas = JSON.parse(respuesta);
         let template='';
         listas.forEach(lista =>{
            template+=`
            <tr elmentoid="${lista.id_usuario}">
               <td>${i++}</td>   
               <td>${lista.Nombres}</td>
               <td>${lista.Apellidos}</td>
               <td>${lista.Contacto_cel}</td>
                <td colspan="2">
				<a href="#" data-toggle="modal" data-target="#modalLoginForm_doc">
                <a href="#"><i class="fas fa-user" id="notas"></i></a>  
               </td>
            </tr>`;
            $('#listados_estu').html(template);
          });
        
      }
      
   });
    
}
//********** BOTON ASIGNAR IDAsignatura notas 1p2q
    $(document).on('click','#carga_notas_envio', function(e){
        e.preventDefault();
        alert ('boton azul cargar notas');
        var idAsig = $('#asignatura_1p2q').val();
        //alert (idAsig);
        console.log (idAsig);
        let asig = `<input type="text" id="asig2" class="form-control" name="asignatura[]" value="${idAsig}">`
        $('#cursos_notas').show();
        $('.idAsignatura').html(asig);
        $('#id_asignatura').val(idAsig);
        $('.menu_sub_4_Patricio').hide();
        comprobar_ingreso_notas();
              
        
    });
//********** BOTON ASIGNAR IDAsignatura notas 2p2q
    $(document).on('click','#carga_notas_envio_2p2q', function(e){
        e.preventDefault();
        //alert ('boton azul cargar notas');
        var idAsig = $('#asignatura_2p2q').val();
        //alert (idAsig);
        console.log (idAsig);
        let asig = `<input type="text" id="asig2_2p2q" class="form-control" name="asignatura[]" value="${idAsig}">`
        //alert (asig);
        $('#cursos_notas_2p2q').show();
        $('.idAsignatura_2p2q').html(asig);
        $('#id_asignatura').val(idAsig);
        $('.menu_sub_4_2pPatricio').hide();
        comprobar_ingreso_notas_2p2q();
              
        
    });
    
//*******COMPROBAR INGRESO NOTAS  1p2q************
function comprobar_ingreso_notas(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_4').hide();
            $('#carga_notas_1p2q').trigger();
            $('#form_notas1p2q').hide();
            
        }else{
             $('#form_notas1p2q').show();
        } 
        
      }
      
   });
    
}

//*******COMPROBAR INGRESO NOTAS  2p2q************
function comprobar_ingreso_notas_2p2q(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas_2q.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_4').hide();
            $('#carga_notas_2p2q').trigger();
            $('#cursos_notas_2p2q').hide();
            $('#form_notas2p2q').hide();
            
        }else{
            $('#cursos_notas_2p2q').show();
            $('#form_notas2p2q').show();
            
        } 
        
      }
      
   });
    
}    
   
//*********LISTA PARA EL INGRESO DE NOTAS 1p2Q**********
function lista_para_notas(id_cur){
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas = JSON.parse(respuesta);
         //alert (listas); 
         let template='';
       
         listas.forEach(lista =>{
            template+=`
            <div class="form-inline" >
                <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="5">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignatura" >


                  </div>
                <div class="form-group mx-sm-3 mb-2 NCuantitativa" >
                    <input type="number" id="Ncuant2" class="form-control" required name="nota_cuantitativa[]" placeholder="Nota Cuantitativa"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
                </div>


        </div>   `;
             
            $('#cursos_notas').html(template); 
            $('#cursos_notas').hide();  
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignatura').hide();
            $('.idAlectivo').hide(); 
  
            
             
         });
 
           
         
      }
     
   });
  
}
    //*********LISTA PARA EL INGRESO DE NOTAS 2p2q**********
function lista_para_notas_2p2q(id_cur){
   //alert  (id_cur);
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas_2p2q = JSON.parse(respuesta);
         console.log (listas_2p2q);
         let template='';
       
         listas_2p2q.forEach(lista =>{
            template+=`
        <div class="form-inline" >
                
               <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignatura_2p2q" >


                  </div>
                <div class="form-group mx-sm-3 mb-2 NCuantitativa" >
                    <input type="number" id="Ncuant2" class="form-control" required name="nota_cuantitativa[]" placeholder="Nota Cuantitativa"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
                </div>
                


        </div>   `;
             
            $('#cursos_notas2p2q').html(template); 
            //$('#cursos_notas_2p2q').hide();  
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignatura_2p2q').hide();
            $('.idAlectivo').hide(); 
  
           
             
         }); 
 
           
         
      }
     
   });
  
}
//********** BOTON ASIGNAR IDAsignatura notas 1p2q Recuperación
    $(document).on('click','#carga_notas_envioR', function(e){
        e.preventDefault();
       
        var idAsig = $('#asignatura_1p2qR').val();
        
        console.log (idAsig);
        let asig = `<input type="text" id="asig2" class="form-control" name="asignatura[]" value="${idAsig}">`
        $('#cursos_notasR').hide();
        $('.idAsignaturaR').html(asig);
        $('#id_asignatura').val(idAsig);
        $('.menu_sub_5').hide();
        comprobar_ingreso_notasR();
              
        
    }); 
//********** BOTON ASIGNAR IDAsignatura notas 2p2q Recuperación
    $(document).on('click','#carga_notas_envioR_2p2q', function(e){
        e.preventDefault();       
        var idAsig = $('#asignatura_2p2qR').val();        
        console.log (idAsig);
        let asig = `<input type="text" id="asig2" class="form-control" name="asignatura[]" value="${idAsig}">`
        $('#cursos_notasR2p2q').show();
        $('.idAsignaturaR').html(asig);
        $('#id_asignatura').val(idAsig);
        //$('#form_notas2p2qR').show();
        $('.menu_sub_5_2p').hide();
        comprobar_ingreso_notasR_2p2q();
              
        
    }); 
//*******COMPROBAR INGRESO NOTAS RECUPERACION ************
function comprobar_ingreso_notasR(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas_Recup1p2q.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_5').hide();
            $('#carga_notas_1p2qR').trigger();
            $('#form_notas1p2qR').hide();
            
        }else{
             $('#form_notas1p2qR').show();
        } 
        
      }
      
   });
    
}
//*******COMPROBAR INGRESO NOTAS RECUPERACION 2p2q ************
function comprobar_ingreso_notasR_2p2q(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas_Recup2p2q.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_5').hide();
            $('#carga_notas_2p2qR').trigger();
            $('#form_notas2p2qR').hide();
            $('#cursos_notasR2p2q').hide();
        }else{
            $('#form_notas2p2qR').show();
            $('#cursos_notasR2p2q').show();
        } 
        
      }
      
   });
    
}
    
//*********LISTA PARA EL INGRESO DE NOTAS 2Q 1Parcial Recuperación**********
function lista_para_notasR(id_cur){
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas = JSON.parse(respuesta);
         let template='';
       
         listas.forEach(lista =>{
            template+=`
            <div class="form-inline" >
                <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="5">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignaturaR" >


                  </div>
                <div class="form-group mx-sm-3 mb-2 NCuantitativa" >
                    <input type="number" id="Ncuant2" class="form-control" required name="nota_cuantitativa[]" placeholder="Nota Cuantitativa"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
                </div>
 

        </div>   `;
             
            $('#cursos_notasR').html(template); 
            $('#cursos_notas').hide();  
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignaturaR').hide();
            $('.idAlectivo').hide(); 
            
            
             
         });
 
           
         
      }
     
   });
  
}
//*********LISTA PARA EL INGRESO DE NOTAS 2Q 2Parcial Recuperación**********
function lista_para_notasR_2p2q(id_cur){
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas = JSON.parse(respuesta);
         let template='';
       
         listas.forEach(lista =>{
            template+=`
            <div class="form-inline" >
                <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignaturaR" >


                  </div>
                <div class="form-group mx-sm-3 mb-2 NCuantitativa" >
                    <input type="number" id="Ncuant2" class="form-control" required name="nota_cuantitativa[]" placeholder="Nota Cuantitativa"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
                </div>
 

        </div>   `;
             
            $('#cursos_notasR2p2q').html(template); 
            $('#form_notas1p2qR').hide();  
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignaturaR').hide();
            $('.idAlectivo').hide();
            
            
             
         });
 
           
         
      }
     
   });
  
}    
//********** BOTON ASIGNAR IDAsignatura notas 1p2q INICIAL Y PRIMERO 
    $(document).on('click','#carga_notas_envio_inicial', function(e){
        e.preventDefault();
        var idAsigI = $('#materiaI').val();       
        //alert(idAsigI);
        //console.log (idAsigI);
        let asig = `<input type="text" id="asig2" class="form-control" name="asignatura[]" value="${idAsigI}">`
        $('#cursos_notasInicial').show();
        $('.idAsignaturaInicial').html(asig);
        $('#id_asignatura').val(idAsigI);
        $('.menu_sub_4_NellyEdilmaInicial').hide();
        comprobar_ingreso_notasInicial();
              
        
    }); 
//********** BOTON ASIGNAR IDAsignatura notas 2p2q INICIAL Y PRIMERO 
    $(document).on('click','#carga_notas_envio_inicial_2p2q', function(e){
        e.preventDefault();
        var idAsigI = $('#materiaI_2p2q').val();       
        //alert(idAsigI);
        //console.log (idAsigI);
        let asig = `<input type="text" id="asig2" class="form-control" name="asignatura[]" value="${idAsigI}">`
        $('#cursos_notasInicial2p2q').show();
        $('.idAsignaturaInicial').html(asig);
        $('#id_asignatura').val(idAsigI);
        //$('#form_notas2p2qInicial').show();
        $('.menu_sub_4_2pNellyEdilmaInicial').hide();
        comprobar_ingreso_notasInicial_2p2q();
              
        
    });
//*******COMPROBAR INGRESO NOTAS INICILA Y PRIMERO ************
function comprobar_ingreso_notasInicial(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_5').hide();
            $('#carga_notas_envio_inicial').trigger();
            $('#form_notas1p2qInicial').hide();
            
        }else{
             $('#form_notas1p2qInicial').show();
        } 
        
      }
      
   });
    
}
//*******COMPROBAR INGRESO NOTAS INICILA Y PRIMERO SEGUNDA PARCIAL ************
function  comprobar_ingreso_notasInicial_2p2q(){
    let oferta = $('#oferta_aca').val();
    let materia = $('#id_asignatura').val();
    var envio_data = {"id_oferta_aca":oferta,"id_materia":materia};
    $.ajax({
      url: '../../backend/comprobar_ingreso_notas_2q.php',
      type: 'POST',
      data: envio_data,   
      success: function (respuesta)
      {
        //alert (respuesta);
        //console.log (respuesta);
        const item = JSON.parse(respuesta);
        let coincidencia  = item.success;
        console.log (coincidencia);  
        if (coincidencia == 1){
            alert ("Ya existe notas ingresadas para esta asignatura y nivel");
            $('.menu_sub_4').hide();
            $('#cursos_notasInicial2p2q').trigger();
            $('#cursos_notas_2p2q').hide();
            $('#form_notas2p2qInicial').hide();
            
        }else{
            $('#cursos_notasInicial2p2q').show();
            $('#form_notas2p2qInicial').show();
            
            
        } 
        
      }
      
   });
    
}  

//*********LISTA PARA EL INGRESO DE NOTAS 2Q 1Parcial INICIAL Y PRIMERO**********
function lista_para_notasInicial(id_cur){
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas = JSON.parse(respuesta);
         let template='';
       
         listas.forEach(lista =>{
            template+=`
            <div class="form-inline" >
                <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="5">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignaturaInicial" >


                  </div>

                <div class="form-group mx-sm-3 mb-2 NCualitativa" style="display: block;" >
                    
                    <select  class="form-control" id="Ncual2" required name="nota_cualitativa[]">
										<option value="Inicio">Inicio</option>
										<option value="Proceso ">Proceso</option>
										<option value="Adquirido">Adquirido</option>
                    </select> 

                
                </div>

        </div>   `;
             
            $('#cursos_notasInicial').html(template); 
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignaturaInicial').hide();
            $('.idAlectivo').hide();
            $('.NCualitativao').show(); 
             
            
             
         });
 
           
         
      }
     
   });
  
}
//*********LISTA PARA EL INGRESO DE NOTAS 2Q 2Parcial INICIAL Y PRIMERO**********
function lista_para_notasInicial_2p2q(id_cur){
   let id = id_cur;
   var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
         //alert (respuesta); 
         let i = 0;
         let listas = JSON.parse(respuesta);
         let template='';
       
         listas.forEach(lista =>{
            template+=`
            <div class="form-inline" >
                <div class="form-group mb-2" id="nom_ape">                                  ${lista.Nombres}${lista.Apellidos}
                </div>
                <div class="form-group mx-sm-3 mb-2 idUsuario">
                    <input type="text" id="usu2" class="form-control" name="usuarios[]" value="${lista.id_usuario }">
                </div>
                <div class="form-group mx-sm-3 mb-2 idAlectivo">
                    <input type="text" id="alectivo" class="form-control" name="alectivo[]" value ="1">
                </div>    
                <div class="form-group mx-sm-3 mb-2 idQuimestre">
                    <input type="text" id="quimestre2" class="form-control" name="quimestre[]" value ="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idParciales" >
                    <input type="text" id="parcial2" class="form-control" name="parcial[]" value="2">
                </div> 
                <div class="form-group mx-sm-3 mb-2 idOfertaca" >
                    <input type="text" id="oferta2" class="form-control" name="id_oferta_aca[]" value="${id}">
                </div>
                  <div class="form-group mx-sm-3 mb-2 idAsignaturaInicial" >


                  </div>

                <div class="form-group mx-sm-3 mb-2 NCualitativa" style="display: block;" >
                    
                    <select  class="form-control" id="Ncual2" required name="nota_cualitativa[]">
										<option value="Inicio">Inicio</option>
										<option value="Proceso ">Proceso</option>
										<option value="Adquirido">Adquirido</option>
                    </select> 

                
                </div>

        </div>   `;
             
            $('#cursos_notasInicial2p2q').html(template); 
            $('.idUsuario').hide();
            $('.idQuimestre').hide();
            $('.idParciales').hide();
            $('.idOfertaca').hide(); 
            $('.idAsignaturaInicial').hide();
            $('.idAlectivo').hide();
            $('.NCualitativao').show(); 
             
            
             
         });
 
           
         
      }
     
   });
  
}
//********* busca estudiante **********
function busca_estudiante(id_usu_notas){
    let id = id_usu_notas;
    var id_envio ={"id_envio":id};
    
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            let oferta_aca = item.id_oferta_aca;
            console.log (oferta_aca);
            if (oferta_aca == 1 || oferta_aca == 2 || oferta_aca == 3 ){
            //$('#asig_notas_inicial').hide();
             
            $('#ver_boleta_ini').show();    
            $('#id_usuario_estu_ele').val(item.id_usuario_estu);
            $('#id_oferta_aca_ele').val(item.id_oferta_aca);
            $('#id_ano_lectivo_ele').val(item.id_ano_lectivo);
            $('#nombre_estu').val(item.Nombres);
            $('#apellido_estu').val(item.Apellidos);
            $('#nombre_estu_ini_1').val(item.Nombres);
            $('#apellido_estu_ini_1').val(item.Apellidos);    
            }else {            
                    $('#asig_basica').hide();
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                    $('#nombre_estu_bas_1').val(item.Nombres);
                    $('#apellido_estu_bas_1').val(item.Apellidos);
                    $('#nombre_estu_bas_cer').text(item.Nombres);
                    $('#nombre_estu_bas_boleta').text(item.Nombres);
                    $('#apellido_estu_bas_cer').text(item.Apellidos);
                    $('#apellido_estu_bas_boleta').text(item.Apellidos);
                    $('#nivel_promo_cer').text(item.nombre_nivel);
                    $('#nivel_promo_boleta').text(item.nombre_nivel);
                                        
                    }
        }      
            
               
    });        
   
} 
//*************************grabar nota elemental *************************
$(document).on('click','#btn_ele',function(e){
                 e.preventDefault();
                 alert ('formulario detenido para elemental');
                 let datos = new FormData($("#notas_ele")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                     }

                  });
                    
    
                });
    
//*************************grabar nota inicial  *************************
$(document).on('click','#btn_ini',function(e){
                 e.preventDefault();
                 alert ('formulario detenido para inicial');
                 let datos = new FormData($("#formu_notas")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                     }

                  });
                    
    
                });
    
//*************************grabar nota basica 1q1p  *************************
$(document).on('click','#btn_bas',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas').val();
                 let datos = new FormData($("#notas_basica")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_1p.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_1p(id_usu_notas);    
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });     

//*************************grabar nota basica 1q2p  *************************
$(document).on('click','#btn_bas_2p',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas_2p').val();
                 let datos = new FormData($("#notas_basica_2p")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_2p.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_2p();    
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });  
//*************************grabar nota basica primera parcial recuperacion  *************************
$(document).on('click','#btn_bas_1pRecup',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas_2p').val();
                 let datos = new FormData($("#notas_basica_1pRecup")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_1pRecup.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_1pRecup();    
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });  
//*************************grabar nota basica Segunda paracial recuperacion  *************************
$(document).on('click','#btn_bas_2pRecup',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas_2p').val();
                 let datos = new FormData($("#notas_basica_2pRecup")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_2pRecup.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_2pRecup();   
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });  
//*************************grabar nota basica Examen quimetral  *************************
$(document).on('click','#btn_bas_1q_proy_integral',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas_2p').val();
                 let datos = new FormData($("#notas_basica_proy_integral")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_exa.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_exa();    
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });  
//*************************grabar nota basica examen quimetrasl ingles *************************
$(document).on('click','#btn_bas_1q_proy_ingles',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_bas_2p').val();
                 let datos = new FormData($("#notas_basica_proy_ingles")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_exainlges.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q_exa_ingles();   
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
                });  
   
//*************************grabar nota elemental *************************
function recup_auto_eval(id_usu_notas){
    
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/ver_notas.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="decimal">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#eval_pa').html(template);
                    });              
                    
                    
                }
                    
                
                                 
            })
    
}
//*************************recup notas 1q_1p *************************
function recup_notas_1q_1p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/ver_notas_1q_1p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_1p').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}

//********* busca estudiante 1q2p **********
function busca_estudiante_1q2p(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas2p').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas2p').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas2p').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
}
//*************************recup notas 1q_2p *************************
function recup_notas_1q_2p(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_2p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_2p').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
//********* busca estudiante 1q1pRecuperacion **********
function busca_estudiante_1q1pRecup(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas1pRecup').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas1pRecup').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas1pRecup').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
}
//********* busca estudiante 1q2pRecuperacion **********
function busca_estudiante_1q2pRecup(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas2pRecup').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas2pRecup').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas2pRecup').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
} 
//********* busca estudiante 1q EXAMEN**********
function busca_estudiante_1qexa(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas1q_proy_integral').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas1q_proy_integral').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas1q_proy_integral').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
} 
//********* busca estudiante 1q EXAMEN INGLES**********
function busca_estudiante_1qexaIngle(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta').show();   
                    $('#id_usuario_estu_bas1q_proy_ingles').val(item.id_usuario_estu);
                    $('#id_oferta_aca_bas1q_proy_ingles').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_bas1q_proy_ingles').val(item.id_ano_lectivo);
                    $('#nombre_estu_bas').val(item.Nombres);
                    $('#apellido_estu_bas').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
}
//*****************recup notas 1q recuperacion primera parcial ********************
function recup_notas_1q_1pRecup(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_1pRecup.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_1pRecup').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
//*****************recup notas 1q recuperacion segunda parcial ********************
function recup_notas_1q_2pRecup(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_2pRecup.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_2pRecup').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
//*****************recup notas 1q examen  ********************
function recup_notas_1q_exa(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_exa.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_exa').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
//*****************recup notas 1q examen ingles  ********************
function recup_notas_1q_exa_ingles(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_exa_ingles.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cuantitativa}</td>
                    </tr>`;
                    $('#1q_exa_ingles').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}

//********* busca estudiante 1q EXAMEN INGLES**********
function busca_estudiante_1q2piniicial(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    $('#ver_boleta_ini').show();   
                    $('#id_usuario_estu_ele2p').val(item.id_usuario_estu);
                    $('#id_oferta_aca_ele2p').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_ele2p').val(item.id_ano_lectivo);
                    $('#nombre_estu').val(item.Nombres);
                    $('#apellido_estu').val(item.Apellidos);
                        
                    
                    
                   
        }
                  
            
                 
    });        
   
}
//*************************grabar nota inicial primer quimestre primera parcial *************************
$(document).on('click','#btn_ele_1p',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_ele').val();
                 let datos = new FormData($("#notas_inicial_1q1p")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_1p.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q1p_inical();   
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
}); 
//*************************grabar nota inicial primer quimestre segunda parcial *************************
$(document).on('click','#btn_ele_2p',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_ele2p').val();
                 let datos = new FormData($("#notas_inicial_1q2p")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_2p.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_1q2p_inical();    
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
});
//*****************recup notas 1q primera parcial inicial ********************
function recup_notas_1q1p_inical(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_1p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cualitativa}</td>
                    </tr>`;
                    $('#1q_1p_inicial').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
} 
//*****************recup notas 1q segunda parcial inicial ********************
function recup_notas_1q2p_inical(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_2p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    let list = JSON.parse(respues);
                    let template='';
                    list.forEach(item =>{
                    template+=`
                    <tr >
                    <td id="">${item.asignatura}</td>
                    <td id="">${item.nota_cualitativa}</td>
                    </tr>`;
                    $('#1q_2p_inicial').html(template);
                    });
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
    
//********* busca estudiante 1q CONDUCTA**********
function busca_estudiante_conducta(){
    var id = $('#este_alumno').val();
    var id_envio ={"id_envio":id};
    console.log (id);
    $.ajax({
        
        url: '../../backend/busca_estudiante.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            //let oferta_aca = item.id_oferta_aca;
            //console.log (oferta_aca);
                    //$('#ver_boleta_ini').show();   
                    $('#id_usuario_estu_cond').val(item.id_usuario_estu);
                    $('#id_oferta_aca_cond').val(item.id_oferta_aca);
                    $('#id_ano_lectivo_cond').val(item.id_ano_lectivo);
                    $('#nombre_estu').val(item.Nombres);
                    $('#apellido_estu').val(item.Apellidos);
        } 
    });        
   
}
    
//*****************GRABA CONDUCTA*************************
$(document).on('click','#btn_conducta',function(e){
                 e.preventDefault();
                 var id_usu_notas = $('#id_usuario_estu_cond').val();
                 let datos = new FormData($("#notas_conducta")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas_1q_1p.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos)
                    {
                    console.log(datos);
                    alert (datos);
                    recup_notas_conducta();   
                    //$('#notas_basica').trigger('reset');
                     

                     }

                  });
                    
    
});
//*****************recup notas 1q segunda parcial inicial ********************
function recup_notas_conducta(){
    var id_usu_notas = $('#este_alumno').val();
    var id_envio = {"id_envio":id_usu_notas};
    console.log (id_usu_notas);
    $.ajax({
            url: '../../backend/ver_notas_1q_1p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    const item = JSON.parse(respues);
                    
                    
                    //let oferta_aca = item.id_oferta_aca;
                    //console.log (oferta_aca);
                    //$('#ver_boleta_ini').show();   
                    //$('#conducta_nota').text(item.nota_cualitativa);
                    
                    
                    
                    
                }
                    
                
                                 
            })
    
    
}
//************* ESTRACCION DE NOTAS 1QUIMESTRE 1patrcial *****
function estrac_notas_1q1p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_1q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){
                        $("#pos_1").text(elemento.asignatura);
                        $("#pos_1n").text(elemento.nota);
                        $("#lengua_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        $("#pos_2").text(elemento.asignatura);
                        $("#pos_2n").text(elemento.nota);
                        $("#mate_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        $("#pos_3").text(elemento.asignatura);
                        $("#pos_3n").text(elemento.nota);
                        $("#cnn_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        $("#pos_4").text(elemento.asignatura);
                        $("#pos_4n").text(elemento.nota);
                        $("#eess_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_5").text(elemento.asignatura);
                        $("#pos_5n").text(elemento.nota);
                        $("#arti_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_6").text(elemento.asignatura);
                        $("#pos_6n").text(elemento.nota);
                        $("#culfi_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_7").text(elemento.asignatura);
                        $("#pos_7n").text(elemento.nota);
                        $("#ingles_boleta_1Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_8").text(elemento.asignatura);
                        $("#pos_8n").text(elemento.nota);
                        $("#valores_boleta_1Q_1p").text(elemento.nota);   
                        }
                        
                        
                        
                    }

                }

            })
    
    
}
//************* ESTRACCION DE NOTAS 1QUIMESTRE 2patrcial *****
function estrac_notas_1q2p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_1q2p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){                        
                            $("#pos_1n_2p").text(elemento.nota);
                            $('#lengua_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Matemáticas" ){                        
                            $("#pos_2n_2p").text(elemento.nota);
                            $('#mate_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){                        
                            $("#pos_3n_2p").text(elemento.nota);
                            $('#cnn_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){                        
                            $("#pos_4n_2p").text(elemento.nota);
                            $('#eess_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){                        
                            $("#pos_5n_2p").text(elemento.nota);
                            $('#arti_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){                        
                            $("#pos_6n_2p").text(elemento.nota);
                            $('#culfi_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){                        
                            $("#pos_7n_2p").text(elemento.nota);
                            $('#ingles_boleta_1Q_2p').text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){                        
                            $("#pos_8n_2p").text(elemento.nota);
                            $('#valores_boleta_1Q_2p').text(elemento.nota);
                        }
                         
                     }
                    
                }
            })
    
    
} 
//************* ESTRACCION DE NOTAS 1QUIMESTRE 1patrcial recuperacuion *****
function estrac_notas_1q1pRec(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_1q1pRec.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                    /*$(".notas_pr").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>"); */                   
                    if (elemento.asignatura == "Lenguaje y Comunicación")     {                        
                        $("#pos_1n_1Rec").text(elemento.nota);
                        $("#lengua_boleta_1Q_1prec").text(elemento.nota);
                        }
                    if (elemento.asignatura == "Matemáticas")     {                        
                        $("#pos_2n_1Rec").text(elemento.nota);
                        $("#mate_boleta_1Q_1prec").text(elemento.nota);
                        }    
                    
                    
                    }
                    
                     
                }
            })
    
    
}
//************* ESTRACCION DE NOTAS 1QUIMESTRE 2patrcial recuperacuion *****
function estrac_notas_1q2pRec(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_1q2pRec.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                    /*$(".notas_pr").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>"); */
                        
                    if (elemento.asignatura == "Lenguaje y Comunicación")     {                        
                        $("#pos_1n_2Rec").text(elemento.nota);
                        $("#lengua_boleta_1Q_2prec").text(elemento.nota);
                        
                        }
                    if (elemento.asignatura == "Matemáticas")     {                        
                        $("#pos_2n_2Rec").text(elemento.nota);
                        $("#mate_boleta_1Q_2prec").text(elemento.nota);
                        }  
                    
                    
                    }
                    
                     
                }
            })
    
    
} 
//************* ESTRACCION DE NOTAS 1QUIMESTRE PORTAFOLIO Y PROYECTO *****
function estrac_notas_1qporta(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_porta.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                    /*$(".notas_pr").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>"); */
                        
                    if (elemento.asignatura == "Portafolio")     {                        
                        $("#pos_1n_porta1q").text(elemento.nota);
                        $("#pos_2n_porta1q").text(elemento.nota);
                        $("#pos_3n_porta1q").text(elemento.nota);
                        $("#pos_4n_porta1q").text(elemento.nota);
                        $("#pos_5n_porta1q").text(elemento.nota);
                        $("#pos_6n_porta1q").text(elemento.nota);
                        $("#pos_7n_porta1q").text(elemento.nota);
                        $("#pos_8n_porta1q").text(elemento.nota);
                        
                        }
                    if (elemento.asignatura == "Proyecto"){
                        $("#proyecto_1npf").text(elemento.nota);
                        $("#proyecto_2npf").text(elemento.nota);
                        $("#proyecto_3npf").text(elemento.nota);
                        $("#proyecto_4npf").text(elemento.nota);
                        $("#proyecto_5npf").text(elemento.nota);
                        $("#proyecto_6npf").text(elemento.nota);
                        $("#proyecto_7npf").text(elemento.nota);
                        $("#proyecto_8npf").text(elemento.nota);
                        
                    }
                    
                    }
                                         
                }
            })
}
   
//************* ESTRACCION DE NOTAS 1QUIMESTRE PROYECTO INTEGRAL  *****
function  estrac_notas_proyecto1q(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_proyint1q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                    /*$(".notas_pr").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>"); */
                    if (elemento.asignatura == "Proyecto I Quimestre")     {                 $("#proyecto_1n").text(elemento.nota);
                        $("#proyecto_2n").text(elemento.nota);
                        $("#proyecto_3n").text(elemento.nota);
                        $("#proyecto_4n").text(elemento.nota);
                        $("#proyecto_5n").text(elemento.nota);
                        $("#proyecto_6n").text(elemento.nota);
                        $("#proyecto_8n").text(elemento.nota);                                                    
 
                        }
                   
                    
                    
                    }
                    
                     
                }
            })
    
    
} 
//************* ESTRACCION DE NOTAS 1QUIMESTRE PROYECTO INGLES  *****
function  estrac_notas_proyingles1q(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_proyingles1q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);
                    function miFuncion(elemento, indice){
                    /*$(".notas_pr").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");*/ 
                    $("#proyecto_7n").text(elemento.nota);    
                    }
                }
            })
    
    
}
// ***************** CALCULOS MATEMATICOS LIBRETRAS ****************
$(function(){
    
    $('#extrac_N').click (function(e){
        e.preventDefault();
        
    //************LENGUAJE ********************   
        var lengua_1p = $('#pos_1n').html();
        var lengua_1rec = $('#pos_1n_1Rec').html();
        var lengua_2p = $('#pos_1n_2p').html();
        var lengua_2rec= $('#pos_1n_2Rec').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (lengua_1p >= 0 && lengua_2p >= 0){
            
            if (lengua_1rec >= 0){
                
                if(lengua_2rec >= 0){
                    var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p)+parseFloat(lengua_1rec)+parseFloat(lengua_2rec);
                    var promedio = suma/4;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Lengua').text(parcial_1);
                    $('#lengua_boleta_1Q_pn8').text(parcial_1);
                }else{
                    var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p)+parseFloat(lengua_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Lengua').text(parcial_1);
                    $('#lengua_boleta_1Q_pn8').text(parcial_1);
                }
            }else{
                var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Lengua').text(parcial_1);
                $('#lengua_boleta_1Q_pn8').text(parcial_1);
            }
            
        }else {
            alert ('falta una nota de LENGUAJE Y COMUNICACIÓN ');
        }
        //************MATEMATICAS ********************   
        var mate_1p = $('#pos_2n').html();
        var mate_1rec = $('#pos_2n_1Rec').html();
        var mate_2p = $('#pos_2n_2p').html();
        var mate_2rec= $('#pos_2n_2Rec').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (mate_1p >= 0 && mate_2p >= 0){
            
            if (mate_1rec >= 0){
                
                if(mate_2rec >= 0){
                    var suma = parseFloat(mate_1p)+parseFloat(mate_2p)+parseFloat(mate_1rec)+parseFloat(mate_2rec);
                    var promedio = suma/4;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Mate').text(parcial_1);
                    $('#mate_boleta_1Q_pn8').text(parcial_1);
                }else{
                    var suma = parseFloat(mate_1p)+parseFloat(mate_2p)+parseFloat(mate_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Mate').text(parcial_1);
                    $('#mate_boleta_1Q_pn8').text(parcial_1);
                }
            }else{
                var suma = parseFloat(mate_1p)+parseFloat(mate_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Mate').text(parcial_1);
                $('#mate_boleta_1Q_pn8').text(parcial_1);
            }
            
        }else {
            alert ('falta una nota de MATEMÁTICAS ');
        }
//************CIENCIAS NATURALES ********************   
        var ccnn_1p = $('#pos_3n').html();
        var ccnn_2p = $('#pos_3n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (ccnn_1p >= 0 && ccnn_2p >= 0){
            
            var suma = parseFloat(ccnn_1p)+parseFloat(ccnn_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Ccnn').text(parcial_1);
            $('#cnn_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota CIENCIAS NATURALES ');
        }
//************SOCIALES ********************   
        var sociales_1p = $('#pos_4n').html();
        var sociales_2p = $('#pos_4n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (sociales_1p >= 0 && sociales_2p >= 0){
            
            var suma = parseFloat(sociales_1p)+parseFloat(sociales_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Sociales').text(parcial_1);
                $('#eess_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota ESTUDIOS SOCIALES');
        }
//************EDUCACION  ARTISITICA ********************   
        var artes_1p = $('#pos_5n').html();
        var artes_2p = $('#pos_5n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (artes_1p >= 0 && artes_2p >= 0){
            
            var suma = parseFloat(artes_1p)+parseFloat(artes_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Artes').text(parcial_1);
                $('#arti_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota EDUCACION CULTURAL Y ARTISTICA ');
        }
//************CULTURA FISICA ********************   
        var culfi_1p = $('#pos_6n').html();
        var culfi_2p = $('#pos_6n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (culfi_1p >= 0 && culfi_2p >= 0){
            
            var suma = parseFloat(culfi_1p)+parseFloat(culfi_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_CulFi').text(parcial_1);
                $('#culfi_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota CULTURA FISICA');
        }
//************ INGLES  ********************   
        var ingles_1p = $('#pos_7n').html();
        var ingles_2p = $('#pos_7n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (ingles_1p >= 0 && ingles_2p >= 0){
            
            var suma = parseFloat(ingles_1p)+parseFloat(ingles_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Ingles').text(parcial_1);
                $('#ingles_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota  INGLES ');
        }
//************ VALORES ********************   
        var valores_1p = $('#pos_8n').html();
        var valores_2p = $('#pos_8n_2p').html();
        var portafolio = $('#pos_1n_porta1q').html();
        
        if (valores_1p >= 0 && valores_2p >= 0){
            
            var suma = parseFloat(valores_1p)+parseFloat(valores_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Valores').text(parcial_1);
                $('#valores_boleta_1Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota  VALORES ');
        }
//**************CALCULO DE NOTAS EXAMEN/PROYECTO/PADRE DE FAMILIA******************
//**************LENGUAJE **********************
        var lenguaEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(lenguaEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_lengua').text(examen_1q);
        $('#lengua_boleta_1Q_pn2').text(examen_1q);
        
//**************MATEMATICAS **********************
        var mateEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(mateEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_mate').text(examen_1q);
        $('#mate_boleta_1Q_pn2').text(examen_1q);

//**************CIENCIAS NATURALES **********************
        var cnnEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(cnnEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_cnn').text(examen_1q);
        $('#cnn_boleta_1Q_pn2').text(examen_1q);
        
//**************ESTUDIOS SOCIALES **********************
        var socialesEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(socialesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_sociales').text(examen_1q);
        $('#eess_boleta_1Q_pn2').text(examen_1q);
        
//**************EXPRESION ARTISTICA **********************
        var arteEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(arteEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_arte').text(examen_1q);
        $('#arti_boleta_1Q_pn2').text(examen_1q);
        
//**************CULTURA FISICA **********************
        var culfiEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(culfiEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_culfi').text(examen_1q);
        $('#culfi_boleta_1Q_pn2').text(examen_1q);
        
//**************INGLES **********************
        var inglesEX_1q = $('#proyecto_7n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(inglesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_ingles').text(examen_1q);
        $('#ingles_boleta_1Q_pn2').text(examen_1q);
        
//**************VALORES **********************
        var valoresEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(valoresEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_valores').text(examen_1q);
       $('#valores_boleta_1Q_pn2').text(examen_1q);
        
//***********PROMEDIO PRIMER QUIMESTRE *********************
        //lengua
        var lengua_80 = $('#parcial_1_Lengua').html();
        var lengua_20 =  $('#examen_1q_lengua').html();
        
        var suma = parseFloat(lengua_80)+parseFloat(lengua_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_lengua').text(nota_final);
        $('#lengua_boleta_1Q_N1').text(nota_final);
        
        //mate
        var mate_80 = $('#parcial_1_Mate').html();
        var mate_20 =  $('#examen_1q_mate').html();
        
        var suma = parseFloat(mate_80)+parseFloat(mate_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_mate').text(nota_final);
        $('#mate_boleta_1Q_N1').text(nota_final);
        
        //naturales
        var cnn_80 = $('#parcial_1_Ccnn').html();
        var cnn_20 =  $('#examen_1q_cnn').html();
        
        var suma = parseFloat(cnn_80)+parseFloat(cnn_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_cnn').text(nota_final);
        $('#cnn_boleta_1Q_N1').text(nota_final);
        
        //sociales
        var sociales_80 = $('#parcial_1_Sociales').html();
        var sociales_20 =  $('#examen_1q_sociales').html();
        
        var suma = parseFloat(sociales_80)+parseFloat(sociales_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_sociales').text(nota_final);
        $('#eess_boleta_1Q_N1').text(nota_final);
        
        //cultura Artistica
        var arte_80 = $('#parcial_1_Artes').html();
        var arte_20 =  $('#examen_1q_arte').html();
        
        var suma = parseFloat(arte_80)+parseFloat(arte_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_arte').text(nota_final);
        $('#arti_boleta_1Q_N1').text(nota_final);    
        
        //cultura fisica
        var culfi_80 = $('#parcial_1_CulFi').html();
        var culfi_20 =  $('#examen_1q_culfi').html();
        
        var suma = parseFloat(culfi_80)+parseFloat(culfi_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_culfi').text(nota_final);
        $('#culfi_boleta_1Q_N1').text(nota_final);
        
        //Ingles
        var ingles_80 = $('#parcial_1_Ingles').html();
        var ingles_20 =  $('#examen_1q_ingles').html();
        
        var suma = parseFloat(ingles_80)+parseFloat(ingles_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_ingles').text(nota_final);
        $('#ingles_boleta_1Q_N1').text(nota_final);
        
        //valores
        var valores_80 = $('#parcial_1_Valores').html();
        var valores_20 =  $('#examen_1q_valores').html();
        
        var suma = parseFloat(valores_80)+parseFloat(valores_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_valores').text(nota_final);
        $('#valores_boleta_1Q_N1').text(nota_final);
        
//****** PROEMDIO GENETAL PRIMER QUIMESTRE **************
        var lengua1q = $('#notafinal_1q_lengua').html();
        var mate1q = $('#notafinal_1q_mate').html();
        var naturales1q = $('#notafinal_1q_cnn').html();
        var sociales1q = $('#notafinal_1q_sociales').html();
        var arte1q = $('#notafinal_1q_arte').html();
        var culfi1q = $('#notafinal_1q_culfi').html();
        var ingles1q = $('#notafinal_1q_ingles').html();
        
        var suma = parseFloat(lengua1q)+parseFloat(mate1q)+parseFloat(naturales1q)+parseFloat(sociales1q)+parseFloat(arte1q)+parseFloat(culfi1q)+parseFloat(ingles1q);
        var nota = suma/7;
        var promedio_1q= nota.toFixed(2);
        $('#prom_1q').text(promedio_1q); 
        $('#prom_general_1Q_boleta').text(promedio_1q); 
        
    });    
});
    //************* ESTRACCION DE NOTAS 1QUIMESTRE 1patrcial *****
function estrac_notas_1q1p_inicial(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
   
    $.ajax({
            url: '../../backend/estrac_notas_1q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(id_envio);
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
                        //$("#extract_ini").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota_2+ "<br>");
                        
                        
                       if (elemento.asignatura == "Identidad y Autonomia" )
                       {
                        $("#pos_1ini").text(elemento.asignatura);
                        $("#pos_1n_ini").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Convivencia" ){
                        $("#pos_2ini").text(elemento.asignatura);
                        $("#pos_2n_ini").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Medio Natural y Cultural" ){
                        $("#pos_3ini").text(elemento.asignatura);
                        $("#pos_3n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Relación Lógico Matemática" ){
                        $("#pos_4ini").text(elemento.asignatura);
                        $("#pos_4n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Comprensión y Expresión del lenguaje" ){
                        $("#pos_5ini").text(elemento.asignatura);
                        $("#pos_5n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Artística" ){
                        $("#pos_6ini").text(elemento.asignatura);
                        $("#pos_6n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_7ini").text(elemento.asignatura);
                        $("#pos_7n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_8ini").text(elemento.asignatura);
                        $("#pos_8n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Corporal y Motricidad" ){
                        $("#pos_9ini").text(elemento.asignatura);
                        $("#pos_9n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_10ini").text(elemento.asignatura);
                        $("#pos_10n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_11ini").text(elemento.asignatura);
                        $("#pos_11n_ini").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Desarrollo Comportamental I Quimestre" ){
                        $("#conducta_1q").text(elemento.nota_2);
                        }
                    }
                }
    })
}
//*****************AÑADIR NOTAS PRIMERA PARCIAL SEGUNDO QUIMESTRE***********************
$(document).on('click','#btn-notas2q',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga Enviada');
                    let datos = new FormData($("#form_notas1p2q")[0]);
                    console.log(datos)
                    $.ajax({
                     url: '../../backend/inserta_notas_1p_2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $("#cursos_notas").empty();
                        $('.menu_sub_3').hide();
                        $('.menu_sub_4').hide();
                        $('#form_notas1p2q').hide(); 
                       /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                    }

                  });   
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas1p2q').hide();
                    $('.menu_sub_4_Patricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_NellyEdilma').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
                              
    });
//*****************AÑADIR NOTAS SEGUNDA PARCIAL SEGUNDO QUIMESTRE***********************
$(document).on('click','#btn-notas2p2q',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga Enviada');
                    let datos = new FormData($("#form_notas2p2q")[0]);
                    console.log(datos)
                    $.ajax({
                     url: '../../backend/inserta_notas_1p_2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $("#cursos_notas2p2q").empty();
                        $('.menu_sub_3').hide();
                        $('.menu_sub_4').hide();
                        $('#form_notas1p2q').hide(); 
                        $('#form_notas2p2q').hide();
                        $('#menu_sub_4_2pPatricio').hide(); 
                       /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                    }

                  });   
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas2p2q').hide();
                    $('.menu_sub_4_2pPatricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_2pNellyEdilma').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
                              
    });
//*****************AÑADIR NOTAS PRIMERA PARCIAL SEGUNDO QUIMESTRE RECUPERACION***********
$(document).on('click','#btn-notas2qR',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga completada');
                    let datos = new FormData($("#form_notas1p2qR")[0]);
                    console.log(datos)
                    $.ajax({
                         url: '../../backend/inserta_notas_1p_2qRECUP.php',
                         type: 'POST',
                         data: datos,
                         contentType: false,
                         processData: false,
                         success: function(datos){
                            console.log(datos);
                            $("#cursos_notasR").empty();
                            $('.menu_sub_3').hide();
                            $('.menu_sub_4').hide();
                            $('.menu_sub_5').hide(); 
                            $('#form_notas1p2qR').hide(); 
                           /*$('#alertas').slideDown('slow');
                            setTimeout(function(){
                                $('#alertas').slideUp ('slow');
                            },6000);
                         $('#formulario_new_reg').trigger('reset');
                         $('#formulario_verficador').trigger('reset');     
                         $('#formulario_new_reg').hide();     
                         $('#formulario_verficador').show();*/

                        }

                      });
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas1p2qR').hide();
                    $('.menu_sub_4_Patricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_NellyEdilma').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
    
    
    
                                 
});
//*****************AÑADIR NOTAS segunda PARCIAL SEGUNDO QUIMESTRE RECUPERACION***********
$(document).on('click','#btn-notas2qR',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga completada');
                    let datos = new FormData($("#form_notas2p2qR")[0]);
                    console.log(datos)
                    $.ajax({
                         url: '../../backend/inserta_notas_1p_2qRECUP.php',
                         type: 'POST',
                         data: datos,
                         contentType: false,
                         processData: false,
                         success: function(datos){
                            console.log(datos);
                            $("#cursos_notasR2p2q").empty();
                            $('.menu_sub_3').hide();
                            $('.menu_sub_4').hide();
                            $('.menu_sub_5').hide(); 
                            $('#form_notas2p2qR').hide(); 
                           /*$('#alertas').slideDown('slow');
                            setTimeout(function(){
                                $('#alertas').slideUp ('slow');
                            },6000);
                         $('#formulario_new_reg').trigger('reset');
                         $('#formulario_verficador').trigger('reset');     
                         $('#formulario_new_reg').hide();     
                         $('#formulario_verficador').show();*/

                        }

                      });
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas2p2qR').hide();
                    $('.menu_sub_4_2pPatricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_NellyEdilma').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
    
    
    
                                 
});
//**********AÑADIR NOTAS PRIMERA PARCIAL SEGUNDO QUIMESTRE INICIAL ***********************
$(document).on('click','#btn-notas2qInicial',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga Enviada');
                    let datos = new FormData($("#form_notas1p2qInicial")[0]);
                    console.log(datos)
                    $.ajax({
                     url: '../../backend/inserta_notas_1p_2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $("#cursos_notasInicial").empty();
                        $('.menu_sub_3').hide();
                        $('.menu_sub_4_NellyEdilmaInicial').hide();
                        $('.menu_sub_4_NellyEdilmaBasica').hide();
                        $('.menu_sub_4_YennyBasica').hide(); 
                        $('.menu_sub_4_Yenny').hide(); 
                        $('#form_notas1p2qInicial').hide();
                        $('.menu_sub_4_Jessica').hide(); 
                       /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                    }

                  });   
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas1p2qInicial').hide();
                    $('.menu_sub_4_Patricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_NellyEdilmaInicial').hide();
                    $('.menu_sub_4_NellyEdilmaBasica').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_4_YennyBasica').hide(); 
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
                              
    });
//**********AÑADIR NOTAS SEGUNDA PARCIAL SEGUNDO QUIMESTRE INICIAL ***********************
$(document).on('click','#btn-notas2qInicial_2p2q',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Carga Enviada');
                    let datos = new FormData($("#form_notas2p2qInicial")[0]);
                    console.log(datos)
                    $.ajax({
                     url: '../../backend/inserta_notas_1p_2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $("#cursos_notasInicial2p2q").empty();
                        $('.menu_sub_3').hide();
                        $('.menu_sub_4_2pNellyEdilmaInicial').hide();
                        $('.menu_sub_4_2pNellyEdilmaBasica').hide();
                        $('.menu_sub_4_2pYennyBasica').hide(); 
                        $('.menu_sub_4_2pYenny').hide(); 
                        $('#form_notas2p2qInicial').hide();
                        $('.menu_sub_4_2pJessica').hide(); 
                       /*$('#alertas').slideDown('slow');
                        setTimeout(function(){
                            $('#alertas').slideUp ('slow');
                        },6000);
                     $('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                    }

                  });   
                    
                    
                  },
                  function() {
                    alertify.error('Carga Cancelada');
                    $('#form_notas2p2qInicial').hide();
                    $('.menu_sub_4_2pPatricio').hide();
                    $('.menu_sub_4_2pSilvia').hide();
                    $('.menu_sub_4_2pNellyEdilmaInicial').hide();
                    $('.menu_sub_4_2pNellyEdilmaBasica').hide();
                    $('.menu_sub_4_2pJonathan').hide();
                    $('.menu_sub_4_2pSilviaG').hide();
                    $('.menu_sub_4_2pJessica').hide();
                    $('.menu_sub_4_2pYennyBasica').hide(); 
                    $('.menu_sub_4_2pYenny').hide();
                    $('.menu_sub_5').hide();
                    
                  }
                );
                              
    });
    

// MOSTRAR SUB MENU_3 ***********
function Mostrar_sub_menu3(){
    
    var docente = $('#este_docente').val();
            
            if ( docente == 256){
               $('.menu_sub_3').show();
            }
            if ( docente == 310){
               //alert (docente);               
               $('.menu_sub_3').show();
            }
            
            if ( docente == 313){
               //alert (docente);
               $('.menu_sub_3').show();
               $('#carga_recup').hide();   
            }
            if ( docente == 345){
               //alert (docente);               
               $('.menu_sub_3').show();
               $('#carga_recup').hide();   
            }
            if (  docente == 312 || docente == 311){
               //alert (docente);               
               $('.menu_sub_3').show();
               $('#carga_recup').hide();   
            }
            /*if ( docente == 312 || docente == 311 ){
               if ( curso > 1 || curso > 2 ){
                    $('.menu_sub_3').show();
                    $('#carga_recup').hide(); 
               }else{
                    $('.menu_sub_3').show();
                    $('#carga_recup').hide();   
               }
               
            }*/
            if ( docente == 346){
               //alert (docente);
               $('.menu_sub_3').show();
               $('#carga_recup').hide();  
            }
    
            if ( docente == 315){
               //alert (docente);
               $('.menu_sub_3').show();
               $('#carga_recup').hide();  
            }
           
            
};

//*****************ENVIA RECTIFICAION DE NOTAS *****************
$(document).on('click','#btn-rectificaN',function(e){
                e.preventDefault();
                //alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                alertify.confirm("ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO.",
                  function() {
                    alertify.success('Operación completada');                  
                    let datos = new FormData($("#novedadesN")[0]);
                    console.log(datos)
                    $.ajax({
                         url: '../../backend/novedades_notas.php',
                         type: 'POST',
                         data: datos,
                         contentType: false,
                         processData: false,
                         success: function(datos){
                            console.log(datos); 
                            
                            $('#rectifica_nota').hide(); 
                            location.reload();  
                           
                            //$('#rectifica_nota').trigger();  

                        }

                  });   
                    
                  },
                  function() {
                    alertify.error('Operación Cancelada');
                    
                    $('#rectifica_nota').hide();
                    $('.menu_sub_1').hide();
                    $('.menu_sub_4_Patricio').hide();
                    $('.menu_sub_4_Silvia').hide();
                    $('.menu_sub_4_NellyEdilmaInicial').hide();
                    $('.menu_sub_4_NellyEdilmaBasica').hide();
                    $('.menu_sub_4_Jonathan').hide();
                    $('.menu_sub_4_Yenny').hide();
                    $('.menu_sub_4_SilviaG').hide();
                    $('.menu_sub_4_Jessica').hide();
                    $('.menu_sub_4_YennyBasica').hide(); 
                    $('.menu_sub_5').hide();
                    $('#form_notas1p2q').hide();
                    $('#form_notas1p2qR').hide();
                    $('#form_notas1p2qInicial').hide();
                    
                    $('#form_notas2p2q').hide();
                    $('#form_notas2p2qR').hide();
                    $('#form_notas2p2qInicial').hide();
                    
                  }
                );
    
    
    
                                 
});
// ****** CALCULOS MATEMATICOS LIBRETRAS SEGUNDO QUIMESTRE INCIAL ********
function calcula_notas_2Q_incial() {
        // Identidad y Autonomia
        var Ip = $('#pos_1n_ini2Q1P').html();
        var IIp = $('#pos_1n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicial = (Ip)+(IIp);
        var Identidad = suma_2qInicial/2;
        var Identidad_2q = Math.round(Identidad);
        
        
        if (Identidad_2q == 3){
            Identidad_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(Identidad_2q == 2){
                Identidad_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    Identidad_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_1n_ini2Q2Prom').text(Identidad_2q);
    
    // Convivencia
        var Ip = $('#pos_2n_ini2Q1P').html();
        var IIp = $('#pos_2n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialConv = (Ip)+(IIp);
        var convivencia = suma_2qInicialConv/2;
        var convivencia_2q = Math.round(convivencia);
        
        if (convivencia_2q == 3){
            convivencia_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(convivencia_2q == 2){
               convivencia_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    convivencia_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_2n_ini2Q2Prom').text(convivencia_2q);
    
    // Medio Naturaly cultural 
        var Ip = $('#pos_3n_ini2Q1P').html();
        var IIp = $('#pos_3n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialMnatural = (Ip)+(IIp);
        var mnatural = suma_2qInicialMnatural/2;
        var mnatural_2q = Math.round(mnatural);
        
        if (mnatural_2q == 3){
            mnatural_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(mnatural_2q == 2){
               mnatural_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    mnatural_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_3n_ini2Q2Prom').text(mnatural_2q);
    
    // Relación logico matemática
        var Ip = $('#pos_4n_ini2Q1P').html();
        var IIp = $('#pos_4n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qIniciallogico = (Ip)+(IIp);
        var logico_ini = suma_2qIniciallogico/2;
        var logico_2q = Math.round(logico_ini);
        
        if (logico_2q == 3){
            logico_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(logico_2q == 2){
               logico_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   logico_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_4n_ini2Q2Prom').text(logico_2q);
    
    // Compresión y expresión del lenguaje
        var Ip = $('#pos_5n_ini2Q1P').html();
        var IIp = $('#pos_5n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qIniciallengua = (Ip)+(IIp);
        var explengua = suma_2qIniciallengua/2;
        var explengua_2q = Math.round(explengua);
        
        if (explengua_2q == 3){
            explengua_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(explengua_2q == 2){
               explengua_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   explengua_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_5n_ini2Q2Prom').text(explengua_2q);
    
    // Expresión Artistica
        var Ip = $('#pos_6n_ini2Q1P').html();
        var IIp = $('#pos_6n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialarte = (Ip)+(IIp);
        var exparte = suma_2qInicialarte/2;
        var exparte_2q = Math.round(exparte);
        
        if (exparte_2q == 3){
            exparte_2q = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(exparte_2q == 2){
               exparte_2q = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   explengua_2q ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_6n_ini2Q2Prom').text(explengua_2q);
    
     // valores
        var Ip = $('#pos_7n_ini2Q1P').html();
        var IIp = $('#pos_7n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialvalores = (Ip)+(IIp);
        var valores_Ini = suma_2qInicialvalores/2;
        var valores_2qIni = Math.round(valores_Ini);
        
        if (valores_2qIni == 3){
            valores_2qIni = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(valores_2qIni == 2){
               valores_2qIni = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   valores_2qIni ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_7n_ini2Q2Prom').text(valores_2qIni);
    
     // Inglés
        var Ip = $('#pos_8n_ini2Q1P').html();
        var IIp = $('#pos_8n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialingles = (Ip)+(IIp);
        var ingles_Ini = suma_2qInicialingles/2;
        var ingles_2qIni = Math.round(ingles_Ini);
        
        if (ingles_2qIni == 3){
            ingles_2qIni = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(ingles_2qIni == 2){
               ingles_2qIni = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   ingles_2qIni ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_8n_ini2Q2Prom').text(ingles_2qIni);
    
     // Expresión corporal y Motricidad
        var Ip = $('#pos_9n_ini2Q1P').html();
        var IIp = $('#pos_9n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialcorporal = (Ip)+(IIp);
        var corporal_Ini = suma_2qInicialcorporal/2;
        var corporal_2qIni = Math.round(corporal_Ini);
        
        if (corporal_2qIni == 3){
            corporal_2qIni = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(corporal_2qIni == 2){
               corporal_2qIni = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   corporal_2qIni ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_9n_ini2Q2Prom').text(corporal_2qIni);

     // Educación Cultural y Artística
        var Ip = $('#pos_10n_ini2Q1P').html();
        var IIp = $('#pos_10n_ini2Q2P').html();
         
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }
                 
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        
        
        
        // promedio 2quimestre
        var suma_2qInicialartistica = (Ip)+(IIp);
        var artistica_Ini = suma_2qInicialartistica/2;
        var artistica_2qIni = Math.round(artistica_Ini);
        
        if (artistica_2qIni == 3){
            artistica_2qIni = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(artistica_2qIni == 2){
               artistica_2qIni = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   artistica_2qIni ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_10n_ini2Q2Prom').text(artistica_2qIni);
    
     // Cultura Fisica
        var Ip = $('#pos_11n_ini2Q1P').html();
        var IIp = $('#pos_11n_ini2Q2P').html();
        if (Ip == "Adquirido")
            {
                Ip = 3;
            
            }else
                {   
                        Ip = 2;
                        //alert (Ip);     
                }
        if (Ip != 3 && Ip !=2){
            Ip = 1;
        }  
        //alert (Ip);
    
        if (IIp == "Adquirido")
            {
                IIp = 3;
            
            }else
                {   
                        IIp = 2;
                        //alert (Ip);     
                }
        if (IIp != 3 && IIp !=2){
            IIp = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_2qInicialculfi = (Ip)+(IIp);
        var culfi_Ini = suma_2qInicialculfi/2;
        var culfi_2qIni = Math.round(culfi_Ini);
        
        if (culfi_2qIni == 3){
            culfi_2qIni = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(culfi_2qIni == 2){
               culfi_2qIni = "Proceso";
                //alert (Identidad_2q)    
                }else{
                   culfi_2qIni ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_11n_ini2Q2Prom').text(culfi_2qIni);
    
    
///// PROMEDIO FINAL 2021 INCIAL Y PREPARATORIA
    
    // Identidad y Autonomia
        var IQ = $('#pos_1n_ini').html();
        var IIQ = $('#pos_1n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicial = (IQ)+(IIQ);
        var Identidad_QF = suma_QFInicial/2;
        var Identidad_2QF = Math.round(Identidad_QF);
        
        
        if (Identidad_2QF == 3){
            Identidad_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(Identidad_2QF == 2){
                Identidad_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    Identidad_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_1n_prom2021').text(Identidad_2q);
    
     // CONVIVENCIA
        var IQ = $('#pos_2n_ini').html();
        var IIQ = $('#pos_2n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialconvi = (IQ)+(IIQ);
        var convivencia_QF = suma_QFInicialconvi/2;
        var convivencia_2QF = Math.round(convivencia_QF);
        
        
        if (convivencia_2QF == 3){
            convivencia_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(convivencia_2QF == 2){
                convivencia_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    convivencia_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_2n_prom2021').text(convivencia_2QF);
    
    // MEDIO NATURAL Y CULTURAL
        var IQ = $('#pos_3n_ini').html();
        var IIQ = $('#pos_3n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialnatural = (IQ)+(IIQ);
        var natural_QF = suma_QFInicialnatural/2;
        var natural_2QF = Math.round(natural_QF);
        
        
        if ( natural_2QF == 3){
             natural_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if( natural_2QF == 2){
                 natural_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                     natural_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_3n_prom2021').text( natural_2QF);
    
     // RELACION LOGICO MATEMATICO
        var IQ = $('#pos_4n_ini').html();
        var IIQ = $('#pos_4n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFIniciallogico = (IQ)+(IIQ);
        var logico_QF = suma_QFIniciallogico/2;
        var logico_2QF = Math.round(logico_QF);
        
        
        if (logico_2QF == 3){
            logico_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(logico_2QF == 2){
                 logico_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    logico_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_4n_prom2021').text(logico_2QF);
    
    //COMPRESION Y EXPRESION DEL LENGUAJE
        var IQ = $('#pos_5n_ini').html();
        var IIQ = $('#pos_5n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFIniciallenguaje = (IQ)+(IIQ);
        var lenguaje_QF = suma_QFIniciallenguaje/2;
        var lenguaje_2QF = Math.round(lenguaje_QF);
        
        
        if (lenguaje_2QF == 3){
            lenguaje_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(lenguaje_2QF == 2){
                 lenguaje_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    lenguaje_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_5n_prom2021').text(lenguaje_2QF);
    
    //EXPRESION ARTISTICA
        var IQ = $('#pos_6n_ini').html();
        var IIQ = $('#pos_6n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialartis = (IQ)+(IIQ);
        var artis_QF = suma_QFInicialartis/2;
        var artis_2QF = Math.round(artis_QF);
        
        
        if (artis_2QF == 3){
            artis_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(artis_2QF == 2){
                 artis_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    artis_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_6n_prom2021').text(artis_2QF);
    
     //VALORES
        var IQ = $('#pos_7n_ini').html();
        var IIQ = $('#pos_7n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialvalor = (IQ)+(IIQ);
        var valor_QF = suma_QFInicialvalor/2;
        var valor_2QF = Math.round(valor_QF);
        
        
        if (valor_2QF == 3){
            valor_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(valor_2QF == 2){
                 valor_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    valor_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_7n_prom2021').text(valor_2QF);
    
    //INGLES
        var IQ = $('#pos_8n_ini').html();
        var IIQ = $('#pos_8n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialingl = (IQ)+(IIQ);
        var ingl_QF = suma_QFInicialingl/2;
        var ingl_2QF = Math.round(ingl_QF);
        
        
        if (ingl_2QF == 3){
            ingl_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(ingl_2QF == 2){
                 ingl_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    ingl_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_8n_prom2021').text(ingl_2QF);
    
    //EXPRESION CORPORAL Y MOTRICIDAD
        var IQ = $('#pos_9n_ini').html();
        var IIQ = $('#pos_9n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialmotri = (IQ)+(IIQ);
        var motri_QF = suma_QFInicialmotri/2;
        var motri_2QF = Math.round(motri_QF);
        
        
        if (motri_2QF == 3){
            motri_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(motri_2QF == 2){
                 motri_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    motri_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_9n_prom2021').text(motri_2QF);
    
    //EDUCACION CULTURAL Y ARTISTICA
        var IQ = $('#pos_10n_ini').html();
        var IIQ = $('#pos_10n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialeduartis = (IQ)+(IIQ);
        var eduartis_QF = suma_QFInicialeduartis/2;
        var eduartis_2QF = Math.round( eduartis_QF);
        
        
        if (eduartis_2QF == 3){
            eduartis_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(eduartis_2QF == 2){
                 eduartis_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    eduartis_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_10n_prom2021').text(eduartis_2QF);
    
    //CULTURA FISICA
        var IQ = $('#pos_11n_ini').html();
        var IIQ = $('#pos_11n_ini2Q2Prom').html();
        if (IQ == "Adquirido")
            {
                IQ = 3;
            
            }else
                {   
                        IQ = 2;
                        //alert (Ip);     
                }
        if (IQ != 3 && IQ !=2){
            IQ = 1;
        }  
        //alert (Ip);
    
        if (IIQ == "Adquirido")
            {
                IIQ = 3;
            
            }else
                {   
                        IIQ = 2;
                        //alert (Ip);     
                }
        if (IIQ != 3 && IIQ !=2){
            IIQ = 1;
        }
        //alert (IIp);
        // promedio 2quimestre
        var suma_QFInicialculfiF = (IQ)+(IIQ);
        var culfiF_QF = suma_QFInicialculfiF/2;
        var culfiF_2QF = Math.round( culfiF_QF);
        
        
        if (culfiF_2QF == 3){
            culfiF_2QF = "Adquirido";
            //alert (Identidad_2q)
            }else {
                if(culfiF_2QF == 2){
                 culfiF_2QF = "Proceso";
                //alert (Identidad_2q)    
                }else{
                    culfiF_2QF ="Inicio";
                    //alert (Identidad_2q)
                }
            }
         $('#pos_11n_prom2021').text(culfiF_2QF);
    
    // CELDAS VACIAS
        var vacio = $('#pos_11n_ini2Q1P').html();
        
        if (vacio == "&nbsp;"){
            //alert (vacio);
            var celda_vacio = " ";
            $('#pos_10n_ini2Q2Prom').text(celda_vacio);
            $('#pos_11n_ini2Q2Prom').text(celda_vacio);
            $('#pos_10n_prom2021').text(celda_vacio);
            $('#pos_11n_prom2021').text(celda_vacio);
           
        }
    
}
     



//********fin de todo********   
    

});




























