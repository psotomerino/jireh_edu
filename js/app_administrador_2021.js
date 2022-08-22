$(document).ready(function(){
    
    //alert ('jquery funciona perfecto para admintrador 2021');
    $('#confirmado_crud').hide();
    $('#btn_control_doc').hide();
    $('#docentes').hide();
    $('#asigna_doc').hide();
    $('#btn_control_doc').hide();
    $('#form_asig_niv').hide();
    $('#btn-cierra-form_asig_niv').hide();
    $('#btn_control_3anos').hide();
    $('#btn_control_4anos').hide();
    $('#btn_control_primero').hide();
    $('#btn_control_segundo').hide();
    $('#btn_control_tercero').hide();
    $('#btn_control_cuarto').hide();
    $('#btn_control_quinto').hide();
    $('#btn_control_sexto').hide();
    $('#lista_estu').hide();
    $('.para_mat').hide();
    $('.print').hide();
   
    
    $(document).on('click','#btn_control', function(){
        $('#escritorio').show();
        $('#aspirante_crud').hide();
        $('#confirmado_crud').hide();
        $('#docentes').hide();
        $('#asigna_doc').hide();
        $('#btn_control_3anos').hide();
        $('#btn_control_4anos').hide();
        $('#btn_control_primero').hide();
        $('#btn_control_segundo').hide();
        $('#btn_control_tercero').hide();
        $('#btn_control_cuarto').hide();
        $('#btn_control_quinto').hide();
        $('#btn_control_sexto').hide();
        $('#lista_estu').hide();
        $('#cupo_2021').hide();
        $('.para_mat').hide();
       
        
    });
    
    $(document).on('click','#btn_confirmado', function(){
        
        $('#escritorio').hide();
        $('#asigna_doc').hide();
        $('#confirmado_crud').show();
        lista_confirmados_2021();
    });
    
        $(document).on('click','#btn_listas', function(){
        $('#listados_estu').empty();
        $('#escritorio').hide();
        $('#btn_control_3anos').show();
        $('#btn_control_4anos').show();
        $('#btn_control_primero').show();
        $('#btn_control_segundo').show();
        $('#btn_control_tercero').show();
        $('#btn_control_cuarto').show();
        $('#btn_control_quinto').show();
        $('#btn_control_sexto').show();
        $('#lista_estu').show();
        $('#txt_gen').hide();
        
    });
    
    $(document).on('click','#btn_control_doc', function(){
        $('#escritorio').hide();
        $('#aspirante_crud').hide();
        $('#confirmado_crud').hide();
        $('#asigna_doc').hide();
        $('#btn_control_doc').hide();
        $('#docentes').show();
        $('#btn_control').show();
        $('#listados_doc_aula').empty();
        $('#btn-cierra-form_asig_niv').trigger("click");
        
    });
    
    $(document).on('click','#btn_docentes', function(){
        $('#escritorio').hide();
        $('#aspirante_crud').hide();
        $('#confirmado_crud').hide();
        $('#asigna_doc').hide();
        $('#docentes').show();
        lista_docentes();
    });
    $(document).on('click','#btn_control_3anos',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Inicial 2- Tres años');
        $('#listados_estu').empty();
        var id_oferta_aca = 1;
        lista_estudiantes_2021(id_oferta_aca);
    });
 $(document).on('click','#btn_control_4anos',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Inicial 2- Cuatro años');
        $('#listados_estu').empty();
        var id_oferta_aca = 2;
         lista_estudiantes_2021(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_primero',function(){
        $('#txt_nivel').text('Preparatoria 1° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 3;
         lista_estudiantes_2021(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_segundo',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('2° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 4;
         lista_estudiantes_2021(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_tercero',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('3° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 5;
        lista_estudiantes_2021(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_cuarto',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('4° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 6;
         lista_estudiantes_2021(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_quinto',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('5° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 7;
         lista_estudiantes_2021(id_oferta_aca);
    });
    $(document).on('click','#btn_control_sexto',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('6° Grado de Educación General Básica');
        $('#listados_estu').empty();
        var id_oferta_aca = 8;
         lista_estudiantes_2021(id_oferta_aca);
    });
    $(document).on('click','#asig_niv', function(){
        $('#form_asig_niv').show();
        $('#btn-cierra-form_asig_niv').hide();
    });
    
    $(document).on('click','#op_estu',function(){
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        let id_de_usuario = $(elemento).attr('elmentoid');
        //alert (id_de_usuario);
        $('#id_de_usuario').val(id_de_usuario);
        busca_estudiante(id_de_usuario);
        $('#lista_estu').hide();
        $('#aside_left').hide();
        $('#cuerpo').show();      
       
        
        
    });
    
//********* busca estudiante **********
function busca_estudiante(id_de_usuario){
    let id = id_de_usuario;
    var id_envio ={"id_envio":id}; 
    
    //alert ('entró a la función... ok');
    //alert (id);
    $.ajax({
        url: '../../backend/busca_un_usuario.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
            {
                console.log (respuesta);
                const item = JSON.parse(respuesta);
                $('#nombre_estu_2021').val(item.Nombres);
                $('#apellido_estu_2021').val(item.Apellidos);
                
            }
    });


}    
//**************************CRUD LISTA CONFIRMADOS******************
function lista_confirmados_2021(){
   
   $.ajax({
      url: '../../backend/crud_confirmados.php',
      type: 'GET',
      success: function (respuesta)
      {
         //console.log(respuesta);
         let i = 1; 
         let listas = JSON.parse(respuesta);
         let template='';
         listas.forEach(lista =>{
            template+=`
            <tr elmentoid="${lista.id_usuario}">
               <td>${i++}</td>            
               <td>${lista.Cedula}</td>
               <td>${lista.Nombres}</td>
               <td>${lista.Apellidos}</td>
               <td>${lista.Fecha_nacimiento}</td>
               <td>${lista.Nivel_edu_temporal}</td>
               <td>${lista.celular_contacto}</td>
               <td>${lista.mail}</td>
               <td colspan="2">
				<a href="#" data-toggle="modal" data-target="#modal_matricular">
                <button class="btn-success" id="matricular">Matricular</button></a> 
               </td>
               
               
            </tr>`;
            $('#listados_confirmados').html(template);
         });
        
      }
      
   });
}
//**************MATRICULAR******************
$(document).on('click','#matricular',function(){
        $('#confirmado_crud').hide();
         $('.para_mat').show();
        $('#formulario_matricula').trigger('reset'); 
        $('#formulario_matricula').show(); 
         let elemento = $(this)[0].parentElement.parentElement.parentElement;
         let id = $(elemento).attr('elmentoid');
         //console.log (id);
         $('#id_usuario').val(id);
         $("#formulario_matricula").submit(new_matricula);
         function new_matricula(evento){
         evento.preventDefault();
         //console.log ('se ha detenido el evento');
         let datos = new FormData($("#formulario_matricula")[0]);
          $.ajax({
             url: '../../backend/matricula.php',
             type: 'POST',
             data: datos,
             contentType: false,
             processData: false,
             success: function(datos){
                console.log(datos);
                 $('#formulario_matricula').trigger('reset');
                 $('#formulario_matricula').hide(); 
                 $('#listados_confirmados').empty();
                 alert ("Se ha realizado la matricula con éxito !!!!!")      
                 location.reload();
                 lista_confirmados();
                
                 
             }

          });
   }
});
//**************ULTIMO NUMERO DE MATRICULA ******************
$(document).on('click','#matri_numero',function(){
    
        //alert ('Funciona el boton correctameten');
        $.ajax({
          url: '../../backend/ultima_matricula2021.php',
          type: 'GET',
          success: function (respuesta)
          {
              const numero_matri = JSON.parse(respuesta);
              console.log (numero_matri.numero_de_matricula);
          }
        
    });
   
});
//********* LISTAS ESTUDIANTES 2021**********
function lista_estudiantes_2021(id_oferta_aca){
    let id = id_oferta_aca;
    var id_envio = {"id_envio":id}; 
   $.ajax({
      url: '../../backend/listas_estudiantes_2021.php',
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
               <td id="nom__">${lista.Apellidos}</td>
               <td>${lista.Nombres}</td>
               <td>${lista.Contacto_cel}</td>
               <td>${lista.Email}</td>
               <td colspan="2">
				    <a href="#"><i class="fas fa-user" id="op_estu"></i></a>  
               </td>
              
               
               
            </tr>`;
            $('#listados_estu').html(template);
         });
        
      }
      
   });
    
}
//**************************CRUD LISTA DOCENTES******************
function lista_docentes(){
   
   $.ajax({
      url: '../../backend/crud_docentes.php',
      type: 'GET',
      success: function (respuesta)
      {
         //console.log(respuesta); 
         let i = 1;  
         let listas = JSON.parse(respuesta);
         let template='';
         listas.forEach(lista =>{
            template+=`
            <tr elmentoid="${lista.id_usuario}">
               <td>${i++}</td>   
               <td>${lista.Nombres}</td>
               <td>${lista.Apellidos}</td>
               <td>${lista.Fono_celular_1}</td>
               <td>${lista.mail}</td>
               <td colspan="2">
				<a href="#" data-toggle="modal" data-target="#modalLoginForm_doc">
                <i class="fas fa-edit" id="edita_doc"></i></a> | 
                <a href="#"><i class="fas fa-user-times" id="elimina_doc"></i></a> | <a href="#"><i class="fas fa-user a" id="edita_docs"></i></a>
               </td>
              
               
               
            </tr>`;
            $('#listados_doc').html(template);
         });
             
        
      }
      
   });
}
//**************EDITAR DOCENTE PARA CLAVE******************
$(document).on('click','#edita_docs',function(){
         let elemento = $(this)[0].parentElement.parentElement.parentElement;
         let id = $(elemento).attr('elmentoid');
         var id_envio = {"id_envio":id};
         lista_aula(id_envio);
         
         
         $.ajax({
            url: '../../backend/solo_docente.php',
            type: 'POST',
            data: id_envio,
            success: function (respuesta_envio){
               console.log(respuesta_envio);
               const item = JSON.parse(respuesta_envio);
               $('#id_usuario_e').val(item.id_usuario);
               $('#cedula_e').val(item.cedula);
               $('#nombre_e').val(item.Nombres);
               $('#apellido_e').val(item.Apellidos);
               $('#fecha_nac_e').val(item.Fecha_nacimiento);
               $('#sexo_e').val(item.Sexo);
               $('#fono_contacto_1_e').val(item.Fono_celular_1);
               $('#mail_e').val(item.mail);
               $('#id_usuario_W').val(item.id_usuario);
               
               $('#btn_control').hide();    
               $('#btn_control_doc').show();    
               $('#docentes').hide();
               $('#asigna_doc').show();
               
                             
            }
            
         });
         //lista_aula();
        
});
//**************************CRUD LISTA AULA******************
function lista_aula(id_envio){
     
   $.ajax({
      url: '../../backend/crud_aula2.php',
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
            <tr elmentoid="${lista.id_usuario}">
               <td>${i++}</td>   
               <td>${lista.ano_lectivo}</td>
               <td>${lista.nombre_nivel}</td>
                <td colspan="2">
				<a href="#" data-toggle="modal" data-target="#modalLoginForm_doc">
                <a href="#"><i class="fas fa-user-times" id="elimina_doc_nivel"></i></a>  
               </td>
              
               
               
            </tr>`;
            $('#listados_doc_aula2').html(template);
         });
        
      }
      
   });
}
//********Asignacion de aula a docente********
$("#formulario_asig_niv").submit(insertaAsigAula);

   function insertaAsigAula(evento){
      evento.preventDefault();
      let datos = new FormData($("#formulario_asig_niv")[0]);
      $.ajax({
         url: '../../backend/asignacion_aula.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
             $('#formulario_asig_niv').trigger('reset');
             $('#btn-cierra-form_asig_niv').trigger("click");
             alert ('docente ingresado correctamente');
             $('#btn_control_doc').trigger("click");
           
             
        
         }
         
      });
   }


    
//*****FIN DE TODO ******    
});


