$(document).ready(function(){
    console.log('jquery funciona perfecto para el administrador');
    $('#aspirante_crud').hide();
    $('#confirmado_crud').hide();
    $('#docentes').hide();
    $('#asigna_doc').hide();
    $('#btn_control_doc').hide();
    $('#form_login').hide();
    $('#form_asig_niv').hide();
    $('#btn-cierra-form_asig_niv').hide();
    $('#lista_estu').hide();
    $('#cupo_2021').hide();
    $('#txt_gen').hide();
    $('.para_mat').hide();
    
    $('#btn_control_3anos').hide();
    $('#btn_control_4anos').hide();
    $('#btn_control_primero').hide();
    $('#btn_control_segundo').hide();
    $('#btn_control_tercero').hide();
    $('#btn_control_cuarto').hide();
    $('#btn_control_quinto').hide();
   
    $('.print').hide();
    
        
    lista_aspirantes();
    lista_confirmados();
    lista_docentes();
    lista_cupo2021();
    
    $(document).on('click','#btn_aspirante', function(){
        
        $('#escritorio').hide();
        $('#asigna_doc').hide();
        $('#aspirante_crud').show();
        lista_aspirantes();
    });
    
    $(document).on('click','#btn_confirmado', function(){
        
        $('#escritorio').hide();
        $('#asigna_doc').hide();
        $('#confirmado_crud').show();
        lista_confirmados();
    });
    
    $(document).on('click','#btn_con_cupo_2021', function(){
        
        $('#escritorio').hide();
        $('#asigna_doc').hide();
        $('#cupo_2021').show();
        lista_cupo2021();
    });
    
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
        $('#lista_estu').hide();
        $('#cupo_2021').hide();
       
        
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
    
    $(document).on('click','.a', function(){
        $('#docentes').hide();
        $('#btn_control').hide();
        $('#btn_control_doc').show();
        $('#asigna_doc').show();
        
        
    });
    
   $(document).on('click','#generar_usu', function(){
        $('#form_login').show();
       
    });
    
    $(document).on('click','#btn-cierra-form', function(){
        $('#form_login').hide();
    });
    
    $(document).on('click','#asig_niv', function(){
        verifica_existe();
        $('#btn-cierra-form_asig_niv').show();
        $('#form_asig_niv').show();
        
    });
    $(document).on('click','#btn-cierra-form_asig_niv', function(){
        $('#form_asig_niv').hide();
        $('#btn-cierra-form_asig_niv').hide();
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
    $(document).on('click','#btn_control_3anos',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Inicial 3 años');
        $('#listados_estu').empty();
        var id_oferta_aca = 1;
        lista_4EGB(id_oferta_aca);
    });
    
   $(document).on('click','#btn_control_4anos',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Inicial 4 años');
        $('#listados_estu').empty();
        var id_oferta_aca = 2;
        lista_4EGB(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_primero',function(){
        $('#txt_nivel').text('Primer año EGB');
        $('#listados_estu').empty();
        var id_oferta_aca = 3;
        lista_4EGB(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_segundo',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Segundo año EGB');
        $('#listados_estu').empty();
        var id_oferta_aca = 4;
        lista_4EGB(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_tercero',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Tercer año EGB');
        $('#listados_estu').empty();
        var id_oferta_aca = 5;
        lista_4EGB(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_cuarto',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Cuarto año EGB');
        $('#listados_estu').empty();
        var id_oferta_aca = 6;
        lista_4EGB(id_oferta_aca);
    });
    
    $(document).on('click','#btn_control_quinto',function(){
        $('#txt_gen').show();
        $('#txt_nivel').text('Quinto año EGB');
        $('#listados_estu').empty();
        var id_oferta_aca = 7;
        lista_4EGB(id_oferta_aca);
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
                $('#nombre_estu_bas').val(item.Nombres);
                $('#apellido_estu_bas').val(item.Apellidos);
                
            }
    });


}
    
//**************************CRUD LISTA ASPIRANTES******************
function lista_aspirantes(){
   
   $.ajax({
      url: '../../backend/crud_aspirantes.php',
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
               <td id="fecha_nacimiento">${lista.Fecha_nacimiento}</td>
               <td>${lista.Nivel_edu_temporal}</td>
               <td>${lista.Fono_celular_1}</td>
               <td>${lista.mail}</td>
               <td colspan="2">
				<button type="button" id="aprobado" class="btn btn-success">APROBADO</button>
               </td>
               
               
            </tr>`;
            $('#listados').html(template);
         });
        
      }
      
   });
}
//**************************CRUD LISTA CON CUPO 2021******************
function lista_cupo2021(){
   
   $.ajax({
      url: '../../backend/crud_cupo2021.php',
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
               <td>${lista.Nivel_2020}</td>
               <td>${lista.celular_contacto}</td>
               <td>${lista.mail}</td>
               <td colspan="2">
				<button type="button" id="aprobado" class="btn btn-success">APROBADO</button>
               </td>
               
               
            </tr>`;
            $('#listados_cupo').html(template);
         });
        
      }
      
   });
}    
//**************************CRUD LISTA CONFIRMADOS******************
function lista_confirmados(){
   
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
                <i class="fas fa-edit" id="matricular"></i></a> 
               </td>
               
               
            </tr>`;
            $('#listados_confirmados').html(template);
         });
        
      }
      
   });
}    
//********Ingreso nuevo docente********
$("#formulario_new_reg_doc").submit(insertaNewReg);

   function insertaNewReg(evento){
      evento.preventDefault();
      let datos = new FormData($("#formulario_new_reg_doc")[0]);
      $.ajax({
         url: '../../backend/nueva_inscripcion.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            console.log(datos);
           
             $('#formulario_new_reg_doc').trigger('reset');
             $('#formulario_new_reg_doc').hide();
             $('#docentes').show();
             lista_docentes();
            
            
             
        
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
//****************ELIMNAR DOCENTE*********************************
   $(document).on('click','#elimina_doc',function(){
      if(confirm('Estas seguro de eliminar el registro')){
         let elemento = $(this)[0].parentElement.parentElement.parentElement;
         let id = $(elemento).attr('elmentoid');
         var id_envio = {"id_envio":id};
         $.ajax({
            url: '../../backend/elimina_docente.php',
            type: 'POST',
            data: id_envio,
            success: function (respuesta_envio){
               console.log(respuesta_envio);
               $('#listados_doc').empty();
               lista_docentes();
                             
            }
            
         });
      }
           
   });

//**************EDITAR DOCENTE******************
$(document).on('click','#edita_doc',function(){
         let elemento = $(this)[0].parentElement.parentElement.parentElement;
         let id = $(elemento).attr('elmentoid');
         var id_envio = {"id_envio":id};
         $.ajax({
            url: '../../backend/solo_docente.php',
            type: 'POST',
            data: id_envio,
            success: function (respuesta_envio){
               console.log(respuesta_envio);
               const item = JSON.parse(respuesta_envio);
               $('#id_usuario').val(item.id_usuario);
               $('#cedula_ed').val(item.cedula);
               $('#nombre_ed').val(item.Nombres);
               $('#apellido_ed').val(item.Apellidos);
               $('#fecha_nac_ed').val(item.Fecha_nacimiento);
               $('#sexo_ed').val(item.Sexo);
               $('#fono_contacto_1_ed').val(item.Fono_celular_1);
               $('#mail_ed').val(item.mail);
               
               
                             
            }
            
         });
});
$('#formulario_new_reg_doc_ed').submit(editarDocente);
function editarDocente(evento){
   evento.preventDefault();
   let datos = new FormData ($('#formulario_new_reg_doc_ed')[0]);
   $.ajax({
      url: '../../backend/actualiza_usuarios.php',
      type: 'POST',
      data: datos,
      contentType: false,
      processData: false,
      success: function (respuesta_editar){
         console.log(respuesta_editar);
         $('#formulario_new_reg_doc_ed').trigger('reset');
         $('#formulario_new_reg_doc_ed').hide();
         $('#docentes').show();
         lista_docentes();
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
               
               
                             
            }
            
         });
         lista_aula();
});
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
    
//**************************CRUD LISTA AULA******************
function lista_aula(id_envio){
     
   $.ajax({
      url: '../../backend/crud_aula1.php',
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
            $('#listados_doc_aula').html(template);
         });
        
      }
      
   });
}
//************* verifica existecia docente con aula************
function verifica_existe(){
      
    let id= $('#id_usuario_e').val();
    var id_envio = {"id_envio":id};
    $.ajax({
      url: '../../backend/buscar_docente_aula.php',
      type: 'POST',
      data: id_envio,   
      success: function (respuesta)
      {
          console.log(respuesta);
          var jsonData = JSON.parse(respuesta);
            if (jsonData.success == "1")
                {
                   alert ('El docente seleccionado ya tiene asiganado un grado de educación básica; desea asignar mas grados?');
                   $('#form_asig_niv').show();    
                   
                }
                else
                {   
                    $('#btn-cierra-form_asig_niv').show();
                    $('#form_asig_niv').show();
                    
                   
                }
      }
   
    });
}
//**************MATRICULAR******************
$(document).on('click','#matricular',function(){
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
                 lista_confirmados();
                 
                 
             }

          });
   }
});
//********* lista 4EGB**********
function lista_4EGB(id_oferta_aca){
    let id = id_oferta_aca;
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
               <td>${lista.Apellidos}</td>
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
//****************ASPIRANTE APROBADO*********************************
   $(document).on('click','#aprobado',function(){
      if(confirm('Estas seguro de "Aprobar" este aspirante')){
         let elemento = $(this)[0].parentElement.parentElement;
         let id = $(elemento).attr('elmentoid');
         var id_envio = {"id_envio":id};
         $.ajax({
            url: '../../backend/cambio_aspirante_confirmado.php',
            type: 'POST',
            data: id_envio,
            success: function (respuesta_envio){
               //alert(respuesta_envio);
               $('#listados').empty();
               lista_aspirantes();    
               
                             
            }
            
         });
      }
           
   });
    
//********fin de todo********    
});












