$(document).ready(function(){
    console.log('jquery funciona perfecto para estudiante');
        
    $('#actualizar_datos').hide();
    $('#aviso').hide();
    $('#form_actualiza_usuario').hide();
    $('#form_datos_adi').hide();
    $('#form_datos_familia').hide();
    $('#form_datos_adi_act').hide();
    $('#form_datos_familia_act').hide();
    $('#asig_autoeva').hide();
    $('#asig_autoeva2Q').hide();
    $('#rub_porta').hide();
    $('#rub_porta2Q').hide();
    $('#btn_nota_proy').hide();
    $('#ver_notas').hide();
    $('#ver_notas_2Q').hide();
    $('#btn_control').show();
    $('.plant').hide();
    $('.plant_inicial').hide();
    $('#menu_cab').hide();
    
    var id_usu_notas = $('#id_usuario_estu').val();
        //console.log (id_usu_notas);
        estrac_notas_1q1p(id_usu_notas);
        estrac_notas_1q2p(id_usu_notas);
        estrac_notas_1q1pRec(id_usu_notas);
        estrac_notas_1q2pRec(id_usu_notas);
        estrac_notas_1qporta(id_usu_notas);
        estrac_notas_proyecto1q(id_usu_notas);
        estrac_notas_proyingles1q(id_usu_notas);
        estrac_notas_2q1p_inicial(id_usu_notas);
        estrac_notas_2q1p(id_usu_notas);
        estrac_notas_2q2pA_inicial(id_usu_notas); 
        //estrac_notas_2p2qB(id_usu_notas);
    
   
    
       
    
   
    
    $(document).on('click','#btn_actualiza', function(){
        $('#escritorio').hide();
        $('#actualizar_datos').show();
        $('.plant').hide();
        $('.plant_inicial').hide();
        
    });
    $(document).on('click','#btn_control', function(){
        $('#escritorio').show();
        $('#actualizar_datos').hide();
        $('#asig_autoeva').hide();
        $('#ver_notas').hide();
        $('.plant').hide();
        $('.plant_inicial').hide();
        $('#menu_cab').hide();
    });
    
    $(document).on('click','#btn-1',function(){
        $('#form_actualiza_usuario').show();
        $('#form_datos_adi').hide();
        $('#form_datos_familia').hide();
        $('#form_datos_adi_act').hide();
        $('#form_datos_familia_act').hide();
        $('.plant').hide();
        $('.plant_inicial').hide();
       
       
        
    });
    $(document).on('click','#btn-2',function(){
        $('#form_actualiza_usuario').hide();
        $('#form_datos_familia').hide();
        $('#form_datos_familia_act').hide();
        $('.plant').hide();
        $('.plant_inicial').hide();
        busca_datos_adi();
        
        
    });
    $(document).on('click','#btn-3',function(){
        $('#form_actualiza_usuario').hide();
        $('#form_datos_adi').hide();
        $('#form_datos_adi_act').hide();
        $('.plant').hide();
        $('.plant_inicial').hide();
         busca_datos_fam();
        
    });
    $(document).on('click','#btn_eval',function(){
        
        $('#form_actualiza_usuario').hide();
        $('#form_datos_adi').hide();
        $('#form_datos_adi_act').hide();
        $('#escritorio').hide();
        $('#btn_control').show();
        $('.plant').hide();
        $('.plant_inicial').hide();
        $('#asig_autoeva').hide();
        $('#asig_autoeva2Q').hide();
        $('#menu_cab').show();
        
    });
    $(document).on('click','#btn_eval1q', function(){
        var id_usu = $('#id_usuario_estu').val();
        //console.log (id_usu);
        busq_nivel(id_usu);
        
    });
    $(document).on('click','#btn_eval2q', function(){
        var id_usu = $('#id_usuario_estu').val();
        //console.log (id_usu);
        busq_nivel2Q(id_usu); 
        $('#ver_notas').hide();
       
    });
    $(document).on ('click','#extrac_N',function(){
        $('#escritorio').hide();
        var id_usu_notas = $('#id_usuario_estu').val();
        verficar_nivel(id_usu_notas)
       
        
    });
//********* calculo del promedio de la nota del proyecto 1Q*****
$(function(){
    
    $('#cal_proy').click (function(e){
        e.preventDefault();
        var rub_1 = $('#rub_1').val();
        var rub_2 = $('#rub_2').val();
        var rub_3 = $('#rub_3').val();
        
        var suma = parseFloat(rub_1)+parseFloat(rub_2)+parseFloat(rub_3);
        var promedio = suma/3;
        var dec2 = promedio.toFixed(2);
        //alert ('la suma es'+suma+'promedio'+promedio);
        $('#nota_cuantitativa').val(dec2);
        $('#btn_nota_proy').show();
    });    
})
//********* calculo del promedio de la nota del proyecto 2Q*****
$(function(){
    
    $('#cal_proy2q').click (function(e){
        e.preventDefault();
        var rub_12q = $('#rub_12q').val();
        var rub_22q = $('#rub_22q').val();
        var rub_32q = $('#rub_32q').val();
        
        var suma = parseFloat(rub_12q)+parseFloat(rub_22q)+parseFloat(rub_32q);
        var promedio = suma/3;
        var dec22q = promedio.toFixed(2);
        //alert ('la suma es'+suma+'promedio'+promedio);
        $('#nota_cuantitativa2q').val(dec22q);
        $('#btn_nota_proy2q').show();
    });    
})
    
    
    
 //****************ACTUALIZAR REGISTRO USUARIO ****************
$("#formulario_act_usuario").submit(updateReg);
   function updateReg(evento){
      evento.preventDefault();
      //console.log ('eveto correcto');
      let datos = new FormData($("#formulario_act_usuario")[0]);
      $.ajax({
         url: '../../backend/actualiza_usuarios.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            //console.log(datos);
            $('#aviso').slideDown('slow');
            setTimeout(function(){
                $('#aviso').slideUp ('slow');
            },4000);
            $('#form_actualiza_usuario').hide(); 
            $('#btn_nota_proy').show();
         }
         
      });
   } 
//****************INSERTAR NUEVO REGISTRO EN LA TALBA estudiantes datos adicionales ****************
$("#form_datos_adi").submit(insertaNewReg);

   function insertaNewReg(evento){
      evento.preventDefault();
      //console.log ('se detubo el formulario datos adiciononales');
      let datos = new FormData($("#formulario_datos_adi")[0]);
      $.ajax({
         url: '../../backend/inserta_datos_estudiantes_1.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            //console.log(datos);
            $('#form_datos_adi').hide();
            $('#aviso').slideDown('slow');
            setTimeout(function(){
                $('#aviso').slideUp ('slow');
            },4000);
            location.reload(); 
//         $('#formulario_new_reg').trigger('reset');
//         $('#formulario_verficador').trigger('reset');     
//         $('#formulario_new_reg').hide();     
//         $('#formulario_verficador').show();
//        
         }
         
      });
   }    
//****************BUSCAR DATOS ADICIONALES EN TABLA ESTUDIANTES ***************
function busca_datos_adi(){
    let datos = new FormData($('#formulario_datos_adi')[0]);
    $.ajax({
            url:'../../backend/buscar_datos_adi.php',
            type: 'POST',
            data: datos,
            contentType: false,
            processData: false,
            success: function(respuesta){
            console.log(respuesta);
            var jsonData = JSON.parse(respuesta);
            if (jsonData.success == "1")
                {
                    $('#form_datos_adi').hide();
                    $('#form_datos_adi_act').show();
                   
                }
                else
                {   
                    $('#form_datos_adi').show();
                    
                   
                } 
                
            }
        });
}
//****************ACTUALIZAR DATOS ADICIONALES ESTUDIANTE ****************
$("#formulario_datos_adi_act").submit(updateRegAct);
    
   function updateRegAct(evento){
      evento.preventDefault();
      //console.log ('eveto correcto');
      let datos = new FormData($("#formulario_datos_adi_act")[0]);
      $.ajax({
         url: '../../backend/actualiza_datos_adi_estudiante.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            //console.log(datos);
           
            $('#form_datos_adi_act').hide(); 
            $('#aviso').slideDown('slow');
            setTimeout(function(){
                $('#aviso').slideUp ('slow');
            },4000);
         }
         
      });
   }
//****************INSERTAR NUEVO REGISTRO EN LA TALBA estudiantes datos familiares ****************
$("#formulario_datos_familia").submit(insertaNewRegFam);

   function insertaNewRegFam(evento){
      evento.preventDefault();
      //console.log ('se detubo el formulario datos familiares');
      let datos = new FormData($("#formulario_datos_familia")[0]);
      $.ajax({
         url: '../../backend/inserta_datos_estudiantes_2.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            //console.log(datos);
            $('#form_datos_familia').hide();
            $('#aviso').slideDown('slow');
            setTimeout(function(){
               $('#aviso').slideUp ('slow');
            },4000);
            location.reload(); 

//        
         }
         
      });
   }
//****************BUSCAR DATOS ADICIONALES EN TABLA ESTUDIANTES ***************
function busca_datos_fam(){
    let datos = new FormData($('#formulario_datos_familia')[0]);
    $.ajax({
            url:'../../backend/buscar_datos_fami.php',
            type: 'POST',
            data: datos,
            contentType: false,
         processData: false,
         success: function(respuesta){
            //console.log(respuesta);
            var jsonData = JSON.parse(respuesta);
            if (jsonData.success == "1")
                {
                    //console.log ('dato exisstente');
                    $('#form_datos_familia').hide();
                    $('#form_datos_familia_act').show();
                }
                else
                {   
                    
                    //console.log ('dato NO exisstente');  
                    $('#form_datos_familia').show(); 
                }
                
            }
        });
}
//****************ACTUALIZAR DATOS FAMILIARES ESTUDIANTE ****************
$("#formulario_datos_familia_act").submit(updateRegActFam);
    
   function updateRegActFam(evento){
      evento.preventDefault();
      //console.log ('eveto correcto');
      let datos = new FormData($("#formulario_datos_familia_act")[0]);
      $.ajax({
         url: '../../backend/actualiza_datos_fami_estudiante.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            //console.log(datos);
            $('#aviso').slideDown('slow');
            setTimeout(function(){
                $('#aviso').slideUp ('slow');
            },4000);
         }
         
      });
   }
//******** aulas asiganadas *******
function busq_nivel(id_usu){
    let id = id_usu;
    var id_envio = {"id_envio":id_usu};
    $('#btn_control').hide();
    $.ajax({
      url: '../../backend/busca_nivel.php',
      type: 'POST',
      data: id_envio,    
      success: function (resp)
      {
        console.log(resp);
        var jsonData = JSON.parse(resp);
            if (jsonData.success == "1")
                {
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
                               <td id="">${item.nota_cuantitativa}</td>
                            </tr>`;
                            $('#notas_eval').html(template);

                         });
                        
                        $('#ver_notas').show();
                        $('#btn_control').show();
                        
                        
                    }
                    //alert('Usted se encuentra ya con envio su calificacion');
                    //$('#escritorio').show();
                    })
                    
                }
                else
                {   
                    $.ajax({
                    url: '../../backend/busca_nivel_vacio.php',
                    type: 'POST',
                    data: id_envio,    
                    success: function (respu){
                        const item = JSON.parse(respu);
                        let oferta_aca = item.id_oferta_aca;
                        console.log (oferta_aca);
                        if (oferta_aca == 1 || oferta_aca == 2 || oferta_aca ==3 ){
                            alert ('El estudiante de este nivel no requiere realizar el proceso de autoealucion');
                             $('#escritorio').show();
                        }else{
                           $('#id_oferta_aca').val(item.id_oferta_aca);
                           $('#id_oferta_aca_2').val(item.id_oferta_aca);
                           $('#menu_cab').hide();
                           $('#asig_autoeva').show();
                               
                        }
                        
                        }                
                    });   
                } 
        }
           
        
    });
}

//******** busca nivel 2Q *******
function busq_nivel2Q(id_usu){
    let id = id_usu;
    var id_envio = {"id_envio":id_usu};
    $('#btn_control').hide();
    $.ajax({
      url: '../../backend/busca_nivel2q.php',
      type: 'POST',
      data: id_envio,    
      success: function (resp)
      {
        console.log(resp);
        var jsonData = JSON.parse(resp);
            if (jsonData.success == "1")
                {
                    $.ajax({
                    url: '../../backend/ver_notas2q.php',
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
                            $('#notas_eval').html(template);

                         });
                        
                        $('#ver_notas2Q').show();
                        $('#btn_control').show();
                        alert('Usted ya envió la calificación para este estudiante, verifique en el botón del primer quimestre');
                        
                        
                    }
                    //alert('Usted ya envió la calificación para este estudiante, verifique en el botón del primer quimestre');
                    //$('#escritorio').show();
                    })
                    
                }
                else
                {   
                    $.ajax({
                    url: '../../backend/busca_nivel_vacio.php',
                    type: 'POST',
                    data: id_envio,    
                    success: function (respu){
                        const item = JSON.parse(respu);
                        let oferta_aca = item.id_oferta_aca;
                        console.log (oferta_aca);
                        if (oferta_aca == 1 || oferta_aca == 2 || oferta_aca ==3 ){
                            alert ('El estudiante de este nivel no requiere realizar el proceso de autoealucion');
                             $('#escritorio').show();
                            $('#menu_cab').hide();
                        }else{
                           $('#id_oferta_aca').val(item.id_oferta_aca);
                           $('#id_oferta_aca_2').val(item.id_oferta_aca);
                           $('#id_oferta_aca_3').val(item.id_oferta_aca);    
                           $('#menu_cab').hide();
                           $('#asig_autoeva2Q').show();
                               
                        }
                        
                        }                
                    });   
                } 
        }
           
        
    });
}

//*************************grabar nota proyecto  *************************
$(document).on('click','#envia_nota_proy',function(e){
                 e.preventDefault();
                 //alert ('formulario detenido para nota de proyecto');
                 let datos = new FormData($("#notas_autoeval_proy")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $('#asig_autoeva').hide();
                        $('#rub_porta').show(); 
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
//*************************grabar nota portafolio   *************************
$(document).on('click','#envia_nota_porta',function(e){
                 e.preventDefault();
                 //alert ('formulario detenido para nota de proyecto');
                 let datos = new FormData($("#notas_autoeval_porta")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        
                        $('#asig_autoeva').hide();
                        $('#rub_porta').hide(); 
                        $('#escritorio').show(); 
                        
                        
                         
                     /*$('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                     }

                  });
                    
    
                });
//*************************grabar nota proyecto 2Q *************************
$(document).on('click','#envia_nota_proy2q',function(e){
                 e.preventDefault();
                 //alert ('formulario detenido para nota de proyecto');
                 let datos = new FormData($("#notas_autoeval_proy2q")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        $('#asig_autoeva2Q').hide();
                        $('#rub_porta2Q').show(); 
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
//*************************grabar nota portafolio 2Q  *************************
$(document).on('click','#envia_nota_porta2Q',function(e){
                 e.preventDefault();
                 //alert ('formulario detenido para nota de proyecto');
                 let datos = new FormData($("#notas_autoeval_porta2q")[0]);
                  $.ajax({
                     url: '../../backend/inserta_notas2q.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     success: function(datos){
                        console.log(datos);
                        
                        $('#asig_autoeva2Q').hide();
                        $('#rub_porta2Q').hide(); 
                        $('#escritorio').show(); 
                        
                        
                         
                     /*$('#formulario_new_reg').trigger('reset');
                     $('#formulario_verficador').trigger('reset');     
                     $('#formulario_new_reg').hide();     
                     $('#formulario_verficador').show();*/

                     }

                  });
                    
    
                });
    
//*************EXTRACCION DE NOTAS ********************
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
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        $("#pos_2").text(elemento.asignatura);
                        $("#pos_2n").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        $("#pos_3").text(elemento.asignatura);
                        $("#pos_3n").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        $("#pos_4").text(elemento.asignatura);
                        $("#pos_4n").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_5").text(elemento.asignatura);
                        $("#pos_5n").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_6").text(elemento.asignatura);
                        $("#pos_6n").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_7").text(elemento.asignatura);
                        $("#pos_7n").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_8").text(elemento.asignatura);
                        $("#pos_8n").text(elemento.nota);
                        }
                        //************ imprime inicial
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
                        }
                        if (elemento.asignatura == "Matemáticas" ){                        
                            $("#pos_2n_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){                        
                            $("#pos_3n_2p").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){                        
                            $("#pos_4n_2p").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){                        
                            $("#pos_5n_2p").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){                        
                            $("#pos_6n_2p").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){                        
                            $("#pos_7n_2p").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){                        
                            $("#pos_8n_2p").text(elemento.nota);
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
                        }
                    if (elemento.asignatura == "Matemáticas")     {                        
                        $("#pos_2n_1Rec").text(elemento.nota);
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
                        }
                    if (elemento.asignatura == "Matemáticas")     {                        
                        $("#pos_2n_2Rec").text(elemento.nota);
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
                }else{
                    var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p)+parseFloat(lengua_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Lengua').text(parcial_1);
                }
            }else{
                var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Lengua').text(parcial_1);
            }
            
        }else {
            //alert ('falta una nota de LENGUAJE Y COMUNICACIÓN ');
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
                }else{
                    var suma = parseFloat(mate_1p)+parseFloat(mate_2p)+parseFloat(mate_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#parcial_1_Mate').text(parcial_1);
                }
            }else{
                var suma = parseFloat(mate_1p)+parseFloat(mate_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#parcial_1_Mate').text(parcial_1);
            }
            
        }else {
            //alert ('falta una nota de MATEMÁTICAS ');
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
            
        }else {
            //alert ('falta una nota CIENCIAS NATURALES ');
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
            
        }else {
            //alert ('falta una nota ESTUDIOS SOCIALES');
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
            
        }else {
            //alert ('falta una nota EDUCACION CULTURAL Y ARTISTICA ');
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
            
        }else {
            //alert ('falta una nota CULTURA FISICA');
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
            
        }else {
            //alert ('falta una nota  INGLES ');
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
            
        }else {
            //alert ('falta una nota  VALORES ');
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
        
//**************MATEMATICAS **********************
        var mateEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(mateEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_mate').text(examen_1q);   

//**************CIENCIAS NATURALES **********************
        var cnnEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(cnnEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_cnn').text(examen_1q);
        
//**************ESTUDIOS SOCIALES **********************
        var socialesEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(socialesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_sociales').text(examen_1q); 
        
//**************EXPRESION ARTISTICA **********************
        var arteEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(arteEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_arte').text(examen_1q);
        
//**************CULTURA FISICA **********************
        var culfiEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(culfiEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_culfi').text(examen_1q);
        
//**************INGLES **********************
        var inglesEX_1q = $('#proyecto_7n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(inglesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_ingles').text(examen_1q);
        
//**************VALORES **********************
        var valoresEX_1q = $('#proyecto_1n').html();
        var notappff_1q = $('#proyecto_1npf').html();
        
        var suma = parseFloat(valoresEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#examen_1q_valores').text(examen_1q);
        
//***********PROMEDIO PRIMER QUIMESTRE *********************
        //lengua
        var lengua_80 = $('#parcial_1_Lengua').html();
        var lengua_20 =  $('#examen_1q_lengua').html();
        
        var suma = parseFloat(lengua_80)+parseFloat(lengua_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_lengua').text(nota_final);
        
        //mate
        var mate_80 = $('#parcial_1_Mate').html();
        var mate_20 =  $('#examen_1q_mate').html();
        
        var suma = parseFloat(mate_80)+parseFloat(mate_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_mate').text(nota_final);
        
        //naturales
        var cnn_80 = $('#parcial_1_Ccnn').html();
        var cnn_20 =  $('#examen_1q_cnn').html();
        
        var suma = parseFloat(cnn_80)+parseFloat(cnn_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_cnn').text(nota_final);
        
        //sociales
        var sociales_80 = $('#parcial_1_Sociales').html();
        var sociales_20 =  $('#examen_1q_sociales').html();
        
        var suma = parseFloat(sociales_80)+parseFloat(sociales_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_sociales').text(nota_final);
        
        //cultura Artistica
        var arte_80 = $('#parcial_1_Artes').html();
        var arte_20 =  $('#examen_1q_arte').html();
        
        var suma = parseFloat(arte_80)+parseFloat(arte_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_arte').text(nota_final);
        
        //cultura fisica
        var culfi_80 = $('#parcial_1_CulFi').html();
        var culfi_20 =  $('#examen_1q_culfi').html();
        
        var suma = parseFloat(culfi_80)+parseFloat(culfi_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_culfi').text(nota_final);
        
        //Ingles
        var ingles_80 = $('#parcial_1_Ingles').html();
        var ingles_20 =  $('#examen_1q_ingles').html();
        
        var suma = parseFloat(ingles_80)+parseFloat(ingles_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_ingles').text(nota_final);
        
        //valores
        var valores_80 = $('#parcial_1_Valores').html();
        var valores_20 =  $('#examen_1q_valores').html();
        
        var suma = parseFloat(valores_80)+parseFloat(valores_20);
        var nota_final= suma.toFixed(2);
        $('#notafinal_1q_valores').text(nota_final);

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
        
    });    
}); 
    
///******* busqueda por niveles para el reporte de notas************
function verficar_nivel(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};    
    $.ajax({
                    url: '../../backend/busca_nivel_vacio.php',
                    type: 'POST',
                    data: id_envio,    
                    success: function (respu){
                        const item = JSON.parse(respu);
                        let oferta_aca = item.id_oferta_aca;
                        console.log (oferta_aca);
                        if (oferta_aca == 1 || oferta_aca == 2 || oferta_aca ==3 ){
                            $('.plant_inicial').show();
                        }else{
                            $('.plant').show();
                               
                        }
                        
                        }                
                    }); 
}
//************* ESTRACCION DE NOTAS 1QUIMESTRE 1patrcial 2QUIMESTRE inicial*****
function estrac_notas_2q1p_inicial(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
   
    $.ajax({
            url: '../../backend/estrac_notas_2q1p.php',
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
                        $("#pos_1n_ini2Q1P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Convivencia" ){
                        $("#pos_2ini").text(elemento.asignatura);
                        $("#pos_2n_ini2Q1P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Medio Natural y Cultural" ){
                        $("#pos_3ini").text(elemento.asignatura);
                        $("#pos_3n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Relación Lógico Matemática" ){
                        $("#pos_4ini").text(elemento.asignatura);
                        $("#pos_4n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Comprensión y Expresión del lenguaje" ){
                        $("#pos_5ini").text(elemento.asignatura);
                        $("#pos_5n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Artística" ){
                        $("#pos_6ini").text(elemento.asignatura);
                        $("#pos_6n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_7ini").text(elemento.asignatura);
                        $("#pos_7n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_8ini").text(elemento.asignatura);
                        $("#pos_8n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Corporal y Motricidad" ){
                        $("#pos_9ini").text(elemento.asignatura);
                        $("#pos_9n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_10ini").text(elemento.asignatura);
                        $("#pos_10n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_11ini").text(elemento.asignatura);
                        $("#pos_11n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Desarrollo Comportamental I Quimestre" ){
                        $("#conducta_1q").text(elemento.nota_2);
                        }
                    }
                }
    })
}
//************* ESTRACCION DE NOTAS 2QUIMESTRE 1parcial *****
function estrac_notas_2q1p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2q1p.php',
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
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua1p2q").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate1p2q").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores1p2q").text(elemento.nota);
                        }
                        
                        
                        
                    }

                }

            })
    
    
}
//************* ESTRACCION DE NOTAS 2QUIMESTRE 1parcial *****
function estrac_notas_2q1p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2q1p.php',
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
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua1p2q").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate1p2q").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles1p2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores1p2q").text(elemento.nota);
                        }
                        
                        
                        
                    }

                }

            });
    
    
} 
//************* ESTRACCION DE NOTAS 2QUIMESTRE 1parcial RECUPERACIÓN *****
function estrac_notas_2q1pRec(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2q1pRec.php',
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
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua1p2qR").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate1p2qR").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores1p2qR").text(elemento.nota);
                        }
                        
                        
                        
                    }

                }

            });
    
    
}


// ****** CALCULOS MATEMATICOS LIBRETRAS SEGUNDO QUIMESTRE INCIAL ********
$(function(){
    
     $('#extrac_N').click (function(e){
        e.preventDefault(); 
         
        // Identidad y Autonomia
        var Ip = $('#pos_1n_ini2Q1P').html();
        var IIp = $('#pos_1n_ini2Q2P').html();
        //alert (IIp);
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
    
    });
 });
//********fin de todo********       
});

























