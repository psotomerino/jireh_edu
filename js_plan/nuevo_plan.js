$(document).ready(function(){
    
    //alert ("funciona para ckeditor");
    
    $('#plan_new').hide();
    $('#materiaS').hide();
    $("#OE_final").hide();   
    $("#Destrezas_final").hide();
    $("#Destrezas_final_2").hide();
    $("#Destrezas_final_3").hide();
    $("#enviar").hide();
    $("#ocultar").hide();
    $("#fila_2").hide();
    $("#ln1").hide();
    $("#lista_planes").hide();
    $(".conte").hide();
    $("#IE_inicial").hide();
    $('#IE_Edit_ini').hide();
    /*$('#texto_9').summernote({
          height: 300,                 
          minHeight: null,             
          maxHeight: null,            
          focus: true                  
        });*/
    $('#texto_Edit1').ckeditor();
    $('#texto_Edit2').ckeditor();
     //$('#texto_9A').richText();
    //$('#texto_9A').richText();
    //$('#texto_9').richText();
    //$('#texto_10').richText();
    $("#resultado_final").hide();
    
    var id_profe = $("#este_profe").text();
    var nom_docente = $("#nombre_D").text();
    var ape_docente = $("#apellido_D").text();
   
    //alert  (nom_docente);
   
    $('#nombre_docente').text(nom_docente);
    $('#apellido_docente').text(ape_docente);
    $('#este_profe_id').val(id_profe);
    $('#nombre_docente_arch').val(nom_docente);
    
/*    $('#silabo_nomD').val(nom_docente);
    $('#silabo_apeD').val(ape_docente);
    $('#silabo_idD').val(id_profe);*/
    
    
    //mis_planes();
    
    $(document).on('click','#btn_nuevo', function(){
         location.reload();        
        
    })
    
    $(document).on('click','#edit_atras', function(){
            $(".conte").hide();
            $('#plan_new').show();
            $('#mis_planes').show();
            
        
    })
    $(document).on('click','#btn_planClaseCerrar',function(){
        document.getElementById("fondo_full").style.display="none";
   
    })
    $(document).on('click','#btn_planClaseCerrar1',function(){
        document.getElementById("fondo_full2").style.display="none"; 
    })
    
    $(document).on('click','#1destreza', function(){
        $("#ln1").show();
        $("#Destrezas_final_2").show(); 
         
        
    })    
    $(document).on('click','#1destreza_Quitar', function(){
       $("#Destrezas_final_2").hide(); 
           

        
    })    
    $(document).on('click','#2destreza', function(){
        $("#Destrezas_final_3").show();
        $("#1destreza_Quitar").hide();
        
    })
    
    $(document).on('click','#a_edit', function(){
       
        document.getElementById("fondo_full").style.display="block";  
    })
    $(document).on('click','#a_editMaterial', function(){
       
        document.getElementById("fondo_full2").style.display="block";  
    })
    
    $.ajax({
    type: 'POST',
    url: '../../backend_plan/cargar_grado.php',
    })
    .done(function(listas_grados){
        var id_profe = $("#este_profe").text();
        if(id_profe == 312 || id_profe == 311){
      
            $('#IE_inicial').show();
            $('#IE_basica').hide();
            $('#IE_Edit').hide();
            $('#IE_Edit_ini').show();
                        

            
        }    
        $('#grado').html(listas_grados); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar la oferta academica ');
    })
    
    
    $('#nivelE').on('change', function(){
        
        $('#materiaS').show();
    })
    
   
    $.ajax({        
    type: 'POST',
    url: '../../backend_plan/cargar_nivel_edu.php',
    })
    .done(function(listas_nivel_edu){
        $('#nivelE').html(listas_nivel_edu); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar los niveles de educación ');
    })
    
    
    $('#nivelE').on('change', function(){
        
        $('#materiaS').show();
    })
    
    //alert (id_profe);
    $.ajax({
    type: 'POST',
    url: '../../backend_plan/cargar_materiaDocente.php',
    data: {'id_profe_M': id_profe}  
    })
    .done(function(listas_asig){
        //alert (listas_asig);
        $('#lista_asignatura').html(listas_asig);
        $('#lista_asignaturaG').html(listas_asig);
        $('#lista_asignatura_sib').html(listas_asig);
        
        
        
    })
    .fail(function(){
        alert ('hubo un error al cargar las asignaturas');
    })
    
       
    
    
    
    
    $('#lista_asignatura').on('change', function(){    
    var id_nivel = $('#nivelE').val();
    var id = $('#lista_asignatura').val();    
    //alert (id);
    $.ajax({
      type: 'POST',
      url:  '../../backend_plan/cargar_OE.php',
      data: {'id': id, 'id_nivel':id_nivel}
    })
    .done(function(listas_OE){
      $("#OE_final").show();      
      $("#enviar").show(); 
      $('#videos').html(listas_OE);
    })
    .fail(function(){
      alert('Hubo un errror al cargar los Objetivos especificos');
      })
    })
    
    
    
    
    $('#lista_asignatura').on('change', function(){
    var id_nivel = $('#nivelE').val();
    var id = $('#lista_asignatura').val(); 
    $.ajax({
      type: 'POST',
      url:  '../../backend_plan/cargar_Destrezas.php',
      data: {'id': id, 'id_nivel':id_nivel}
    })
    .done(function(listas_Destrezas){
              
      $("#Destrezas_final").show();
      $("#Destrezas_final_2").show();
      $("#Destrezas_final_3").show();    
      $('#destrezas').html(listas_Destrezas);
      $('#destrezas_2').html(listas_Destrezas); 
      $('#destrezas_3').html(listas_Destrezas);    
      $("#fila_2").show();    
    })
    .fail(function(){
      alert('Hubo un errror al cargar las destrezas');
      })
    })
    
    
    
   //Criterios de evaluacion
   $('#lista_asignatura').on('change', function(){
     var id_nivel = $('#nivelE').val();
     var id = $('#lista_asignatura').val();      
    $.ajax({
      type: 'POST',
      url:  '../../backend_plan/cargar_CE.php',
      data: {'id': id, 'id_nivel':id_nivel}
    })
    .done(function(listas_CE){
        $('#lista_CE').html(listas_CE);
    })
    .fail(function(){
      alert('Hubo un errror al cargar los criterios de evaluación');
      })
    }) 
    
    //Indicador de Evaluacion
    $('#lista_asignatura').on('change', function(){
     var id_nivel = $('#nivelE').val();
     var id = $('#lista_asignatura').val();      
    $.ajax({
      type: 'POST',
      url:  '../../backend_plan/cargar_IE.php',
      data: {'id': id, 'id_nivel':id_nivel}
    })
    .done(function(listas_IE){
        $('#lista_IE').html(listas_IE);
    })
    .fail(function(){
      alert('Hubo un errror al cargar los criterios de evaluación');
      })
    }) 
    
    $('#enviar').on('click', function(){
    $("#ocultar").show();    
    var resultado = '<b>Asignatura:</b> ' + $('#lista_asignatura option:selected').text() +'<br>' +
    ' <b>Objetivo elegido: </b>' + $('#videos option:selected').text()+'<br>'+
    ' <b>Destreza 1 elegida: </b>' + $('#destrezas option:selected').text()+'<br>'+
    ' <b>Destreza 2 elegida: </b>' + $('#destrezas_2 option:selected').text()+'<br>'+
    ' <b>Destreza 3 elegida: </b>' + $('#destrezas_3 option:selected').text()+'<br>'+
    ' <b>Criterio de Evaluación </b>' + $('#lista_CE option:selected').text()+'<br>'+ 
    ' <b>Indicador de Evaluación </b>' + $('#lista_IE option:selected').text()+'<br>'
    
    $('#resultado1').html(resultado)
    })
    $("#ocultar").on('click', function(){
        $('#resultado1').html(' ')
        $("#ocultar").hide(); 
    });

    
    
//guardar PLANA MICROCURRICULAR
$(document).on('click','#btn_ck',function(e){
                e.preventDefault();
                //alert ("funciona le boron enviar"); 
    
                for ( instance in CKEDITOR.instances )
                CKEDITOR.instances[instance].updateElement();
    
                var datos = new FormData($("#form_editor")[0]);
                
                  $.ajax({
                     url: '../../backend/inserta_contenidoCK.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },  
                     success: function(datos)
                    {
                    //console.log(datos);
                    document.getElementById("loading_full").style.display="none";      
                    alert (datos);
                    mis_planes(); 
                    $('#resultado1').html('');
                    }

                  });
                    
    
                }); 
//********* CRUD PLANFICACIONES**********
$('#lista_asignaturaG').on('change', function(){
    var id_asigD = $('#lista_asignaturaG').val();
    //alert (id_asigD);
    mis_planes(id_asigD);    
})    
function mis_planes(id_asigD){
    var id_profe2 = $("#este_profe").text();
    var id_asigM = id_asigD;
    //alert (id_asigD);
       $.ajax({
          url: '../../backend_plan/listas_planes.php',
          type: 'POST',
          data: {'id': id_profe2, 'id_asigna':id_asigM},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },    
           
        })
        .done(function(listas_misplanes){
        document.getElementById("loading_full").style.display="none";    
        let i = 1;  
        let listas = JSON.parse(listas_misplanes);
        let template='';
        listas.forEach(lista =>{
                template+=`
                <tr elmentoid="${lista.id_plan}">
                   <td>${i++}</td>   
                   <td>${lista.Nivel}</td>
                   <td>${lista.Numero_sem}</td>
                   <td id="Tema">${lista.titulo}</td> 
                   <td>${lista.Observacion}</td>     
                   <td>${lista.status}</td>
                   <td><button class="btn-warning" id="edit_plan">Editar</button></td> 
                   <td>${lista.Aula_V}</td>    
                    
                </tr>`;
                $('#listados_plan').html(template);
              });
           
        console.log (listas);
        })
        .fail(function(){
          alert('Hubo un errror al cargar liast mis planes');
        })

            

}
//******BOTON EDITAR PLAN ********//
   $(document).on('click','#edit_plan', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id_plan = $(elemento).attr('elmentoid');
        var id_profe2 = $("#este_profe").text();
       
        $.ajax({
          url: '../../backend_plan/edit_planes.php',
          type: 'POST',
          data: {'id_plan': id_plan , 'id_profe' : id_profe2 },
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },
          success: function (editplanes){
              
            console.log (editplanes);      
            const planDoc = JSON.parse(editplanes);
            let nombres = planDoc.Nombre +' '+ planDoc.Apellido; 
            let textoClase= planDoc.plan_clase;
            let textoMaterial = planDoc.plna_plata; 
            //alert (textoMaterial);  
            //console.log (planDoc.plan_clase);
            document.getElementById("loading_full").style.display="none";  
            $('#id_plan').val(planDoc.id_plan); 
            $('#id_plan_1').val(planDoc.id_plan);
            $('#id_plan_2').val(planDoc.id_plan);   
            $('#nombre_Edit').val(nombres);
            $('#asignatura_Edit').val(planDoc.Asignatura);
            $('#grado_Edit').val(planDoc.Nivel);
            $('#numestu_Edit').val(planDoc.Estudiantes);
            $('#destreza1_Edit').val(planDoc.Destrezas);
            $('#destreza2_Edit').val(planDoc.Destrezas_2);
            $('#destreza3_Edit').val(planDoc.Destrezas_3);      
            $('#IE_Edit').val(planDoc.IE);
            $('#IE_Edit_ini').val(planDoc.IE_inicial);  
            $('#eje_Edit').text(planDoc.Eje);  
            $('#fechaini_Edit').val(planDoc.fecha_ini);
            $('#periodo_Edit').val(planDoc.periodo);
            $('#semana_Edit').val(planDoc.semana);
            $('#fechafin_Edit').val(planDoc.fecha_fin);
            $('#titunidad_Edit').val(planDoc.titulo);  
            $('#titsem_Edit').val(planDoc.titsem);
            $('#texto_').html(textoClase);
            $('#texto_Edit1').val(textoClase);  
            $('#texto_10').html(textoMaterial); 
            $('#texto_Edit2').val(textoMaterial);   
            $("#mis_planes").hide();
            $("#plan_new").hide();  
            $(".conte").show();
          
              
          }    
        })

  
   })    
//SUBE ARCHIVO DOCENTE
$(document).on('click','#btn_subir',function(e){
                e.preventDefault();
                //alert ("funciona le boron enviar"); 

                let datos = new FormData($("#arc_up")[0]);
                
                  $.ajax({
                     url: '../../backend_plan/sube_archivo.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>";
                    },
                    success: function(datos)
                    {
                    document.getElementById("loading_full").style.display="none";    
                    //console.log(datos);
                    alert (datos); 
                    $('#arc_up').trigger('reset');    

                    }

                  });
                    
    
                }); 
//*****ACTUALIZA PLAN SIN DESTREZAS NI IE
$(document).on('click','#btn_act_plan', function(e){
    e.preventDefault();
    //alert ("funciona le boron actualizar plan");
    for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    
            let datos = new FormData($("#edit_planForm")[0]);
            
                $.ajax({
                url: '../../backend_plan/actualiza_plan.php',
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>";
                    },    
                success: function(datos)
                {
                //console.log(datos);
                document.getElementById("loading_full").style.display="none";     
                alert (datos);
                  

                }
                }); 
});
//*****ACTUALIZA PLAN DE CLASE*******
$(document).on('click','#btn_planClase', function(e){
    e.preventDefault();
   for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    let datos = new FormData($("#form_actClase")[0]);
     $.ajax({
                url: '../../backend_plan/actualiza_planClase.php',
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                 success: function(datos) 
                {
                 alert (datos);    
                 document.getElementById("fondo_full").style.display="none"; 
                $(".conte").hide();
                $('#plan_new').show();
                $('#mis_planes').show();      
                }
            });  
})  
//*****ACTUALIZA MATERIAL DE ESTUDIO*******
$(document).on('click','#btn_planMaterial', function(e){
    e.preventDefault();
   for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    let datos = new FormData($("#form_actMaterial")[0]);
     $.ajax({
                url: '../../backend_plan/actualiza_materialES.php',
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                 success: function(datos) 
                {
                 alert (datos);    
                 document.getElementById("fondo_full2").style.display="none"; 
                $(".conte").hide();
                $('#plan_new').show();
                $('#mis_planes').show();      
                }
            });  
})    
    
    

    
//****FIN DE TODO    
})

               