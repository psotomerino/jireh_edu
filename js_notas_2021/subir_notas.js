$(document).ready(function(){
    
    $('#para_notas').hide();
    $('#bloq_materia').hide();
    $('#bloq_parcial').hide();
    $('#envio1P1Q').hide();
    $('#envio2P1Q').hide();
    $('#envioExa1Q').hide();
    $('#envio1P2Q').hide();
    $('#envio2P2Q').hide();
    $('#envioExa2Q').hide();
    $('#btn_EXA2Q').hide();
    $('#area_sabana').hide();
    
    
   
    
    
    $(document).on('click','#btn_calif', function(){
        
        //alert ('funciona bien para subir notas 2021');
        $('#escritorio').hide();
        $('#aside_left').hide();
        $('#para_notas').show();
       
        
        
    });
    
    $(document).on('click','#btn_sabana', function(){
        
        //alert ('funciona bien para sabanas');
        $('#escritorio').hide();
        $('#aside_left').hide();
        $('#area_sabana').show();
       
        
        
    });
    
    $(document).on('click','#cancelar_',function(){
        location.reload();
        
    });
    
/*    $(document).on('click','#btn_EXA2Q',function(){
        $('.esta_parcial').val('6');
        $('#envio2P2Q').hide();
        $('#envioExa1Q').hide();
        $('#envioExa2Q').show();
        
    });*/
//***** Cargar Nivel educativo********
$.ajax({
    type: 'POST',
    url: '../../backend_notas_2021/cargar_niveles.php',
    })
    .done(function(listas_niveles){         
        $('#nivel_edu').html(listas_niveles);             
        //alert (listas_niveles); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar la lista de niveles educativos ');
    })
//****** TOMA EL VALOR DEL ID DEL NIVEL EDU*************
    $('#nivel_edu').on('change', function(){
    var id_nivelEdu = $('#nivel_edu').val();
    //alert (id_nivelEdu);
    $('#bloq_materia').show();
    $('#envio2P1Q').hide(); 
    $('#envioExa1Q').hide();
       
    
    list_estu(id_nivelEdu);      
    })  
    function list_estu(id_nivelEdu){
       
        var id_nivel = id_nivelEdu;
    
       $('#bloq_materia').on('change', function(){
       var materia_I = $('#materia_id').val();
       //alert (materia_I); 
        $('#bloq_parcial').show(); 
        // inicio botones   
        $('#btn_EXA2Q').hide();           
        $('#envio1P2Q').show();   
        $('#envio2P2Q').hide(); 
        $('#envioExa2Q').hide(); 
        $('#envio1P1Q').hide();
        $('#envio2P1Q').hide();
        $('#envioExa1Q').hide(); 
        //fin de botones   
        $('.nota_cuanti').show();
        $('.nota_cualif').hide(); 
        $('.validity').show();   
        $('.esta_mat').val(materia_I);
        $('.esta_parcial').val('1'); 
           
        if(materia_I == 14 ){
            $('.esta_mat').val(materia_I);
            $('.esta_parcial').val('4');
            $('.nota_cuanti').hide();
            $('.nota_cualif').show(); 
            $('.validity').hide();
        }
        if(materia_I == 40 ){
            $('.esta_mat').val(materia_I);
            $('.esta_parcial').val('4');
            $('.nota_cuanti').hide();
            $('.nota_cualif').show();
            $('.validity').hide();
        }
        
        
       });
       /*$('#bloq_parcial').on('change', function(){
       var parcial_I = $('#parcial_id').val();
       //alert (materia_I); 
       $('.esta_parcial').val(parcial_I);
              
       
       });*/ 
    
       $.ajax({
          url: '../../backend_notas_2021/CRUD_listado_estu.php',
          type: 'POST',
          data: {'id_nivel': id_nivel},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },   
          
        })
        .done(function(listas_estudiantes){
        document.getElementById("loading_full").style.display="none";   
        //alert (listas_estudiantes);   
        let i = 0;  
        let listas = JSON.parse(listas_estudiantes);
        let template='';
        listas.forEach(lista =>{
                template+=`
                <table class="table-striped" BORDER WIDTH="80%" border=1>
                <tr>                   
                    <td style="width:200px">                 
                       ${lista.Nombre}                       
                    </td>
                    <td style="width:250px"> 
                        ${lista.Apellido}           
                    </td>
                    <td class="mi_fila"> 
                        <input type="text" name="id_usu[]" value="${lista.id_usuario}">
                    </td>
                    <td class="mi_fila"> 
                        <input type="text" name="este_anoLec[]" value="${lista.id_ano_lectivo}">
                    </td>
                    <td class="mi_fila">
                        <input type="text" name="este_grado[]" value="${lista.id_oferta_aca}">
                    </td>
                    <td class="">
                        <input type="text" name="esta_parcial[]" class="esta_parcial" value="">
                    </td>
                    <td> 
                        <input type="text" name="esta_materia[]" class="esta_mat" value="" readonly>
                    </td>
                    <td> 
                        <input type="number" class="esta_nota nota_cuanti" name="nota1P_1Q[]" required step="0.01"  min="0" max="10"><span class="validity"></span>
                    </td>
                    <td>                         
                        <select class="esta_nota nota_cualif" name="nota1P_1QCuali[]">
                        <!--<option value="0">Elija una opción</option>
                        <option value="EX">Excelente</option>
                        <option value="MB">Muy buena</option>
                        <option value="B">Buena</option>
                        <option value="R">Regular</option> -->
                        <option value="A">Muy satisfactorio (A)</option>
                        <option value="B">Satisfactorio (B)</option>
                        <option value="C">Poco satisfactorio (C)</option>
                        <option value="D">Mejorable (D)</option>
                        <option value="E">Insatisfactorio (E)</option>
                    </select>
                    </td>
                </tr>
                </table>
                    
               `;    
               
                $('#notas_cal').html(template);
                
               
              });
            
        })
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   

}
//*****************AÑADIR NOTAS PRIMERA PARCIAL 1Q***********************
$(document).on('click','#envio1P1Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notas1P1Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('1'); 
                        

                    }

                  }) 
});
//*****************AÑADIR NOTAS SEGUNDA PARCIAL 1Q***********************
$(document).on('click','#envio2P1Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notas2P1Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('2'); 
                        

                    }

                  }) 
});
//*****************AÑADIR NOTAS EXAMEN 1Q***********************
$(document).on('click','#envioExa1Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notasExa1Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('3'); 
                        

                    }

                  }) 
});
//*****************AÑADIR NOTAS PRIMERA PARCIAL 1Q_2Q***********************
$(document).on('click','#envio1P2Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notas1P2Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('4'); 
                        

                    }

                  }) 
});  
//*****************AÑADIR NOTAS PRIMERA PARCIAL 2P_2Q***********************
$(document).on('click','#envio2P2Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notas2P2Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('5'); 
                        

                    }

                  }) 
});  
//*****************AÑADIR NOTAS EXAMEN 2Q***********************
$(document).on('click','#envioExa2Q',function(e){
                e.preventDefault();
                alert ('ESTA SEGURO QUE DESEA CARGAR LAS NOTAS DE ESTE CURSO');
                    let datos = new FormData($("#form_notas_2022")[0]);
                    /*const data = {};
                          datos.forEach((value, key) => (data[key] = value));
                          // Log the data.
                          console.log(data);*/
                    //console.log(datos); 
                    $.ajax({
                    url: '../../backend_notas_2021/inserta_notasExA2Q.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },     
                     success: function(datos){
                        alert (datos); 
                        //alert('Notas asignadas correctamente; FELICIDADES');
                        document.getElementById("loading_full").style.display="none";  
                        $('.esta_nota').val('');
                        $('.esta_mat').val('');
                        $('.esta_parcial').val('5'); 
                        

                    }

                  }) 
});  
    
    
    
   

 //*****FIN DE TODO*****  
    
});