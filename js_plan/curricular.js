$(document).ready(function(){
    
    $('#planes_general').hide();
    $('#este_profe').hide();
    $('.conte_Cur').hide();
    //$('#texto_9').richText();
    $('#texto_9A').richText();
    
    
    //planesG();
    
    $(document).on('click','#btn_planGene', function(){
        //alert ("funciona para curricular"); 
        
        $('#pag_inicio').hide();
        $('#planes_general').show();
       
        
    })
    
    $(document).on('click','#edit_atras', function(){
            $(".conte_Cur").hide();
            $('#planes_general').show();
            
            
        
    })
//***** Cargar Docente ********
$.ajax({
    type: 'POST',
    url: '../../backend_plan/cargar_docente.php',
    })
    .done(function(listas_docente){
        //alert (listas_docente)  
        $('#docente_').html(listas_docente); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar la lista de docentes ');
    })
//******** abre vetana de observación ***********
$(document).on('click','#abre_obs', function(){  
        $(".richText-editor").html(" ");
        document.getElementById("fondo_full2").style.display="block";  
    })
//*** cierraventana de observacion *****
$(document).on('click','#btn_planClaseCerrar1',function(){
        document.getElementById("fondo_full2").style.display="none"; 
    })
    
   
//********* CRUD PLANFICACIONES**********
$('#docente_').on('change', function(){
    var id_asigD = $('#docente_').val();
    //alert (id_asigD);
    planesG(id_asigD);    
})    
function planesG(id_asigD){
       var id_profe = id_asigD;
    
       $.ajax({
          url: '../../backend_plan/CRUD_planesGene.php',
          type: 'POST',
          data: {'id_docente': id_profe},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },   
          
        })
        .done(function(listas_planes){
        document.getElementById("loading_full").style.display="none";   
        //alert (listas_planes);   
        let i = 0;  
        let listas = JSON.parse(listas_planes);
        let template='';
        listas.forEach(lista =>{
                template+=`
                <tr elmentoid="${lista.id_plan}">
                   ${i++ }   
                   
                   <td>${lista.Asignatura}</td>
                   <td>${lista.Nivel}</td>
                   <td align = center >${lista.Numero_sem}</td>
                   <td>${lista.titulo}</td>
                   <td >${lista.Observacion}</td>
                   <td align = center >${lista.status}</td>
                   <td align = center><button class="btn-success" id="ver_planC">Ver</button></td> 
                   <td align = center>${lista.Aula_V}</td>    
                    
                </tr>`;
               
                $('#tot_plan').html(i);
                $('#planesG').html(template);
               
              });
           
        console.log (listas);
        console.log (i);   
        })
        .fail(function(){
          alert('Hubo un errror al cargar liast mis planes');
        })   

}
//******BOTON EDITAR PLAN ********//
   $(document).on('click','#ver_planC', function(){
        document.getElementById("fondo_full2").style.display="none"; 
        let elemento = $(this)[0].parentElement.parentElement;
        let id_plan = $(elemento).attr('elmentoid');
        //var id_profe2 = $(elemento).attr('#este_usu');;
        //alert (id_plan);
        //window.open('plan_editCurri.php', '_blank');
        
        $.ajax({
          url: '../../backend_plan/Edit_planes_general.php',
          type: 'POST',
          data: {'id_plan': id_plan},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },    
          success: function (editplanes){
              
            console.log (editplanes);
            document.getElementById("loading_full").style.display="none";  
            const planDoc = JSON.parse(editplanes);
            let nombres = planDoc.Nombre +' '+ planDoc.Apellido;    
            console.log (planDoc.plan_clase);
            $('#id_plan').val(planDoc.id_plan);
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
            $('#eje_Edit').val(planDoc.Eje);  
            $('#fechaini_Edit').val(planDoc.fecha_ini);
            $('#periodo_Edit').val(planDoc.periodo);
            $('#semana_Edit').val(planDoc.semana);
            $('#fechafin_Edit').val(planDoc.fecha_fin);
            $('#titunidad_Edit').val(planDoc.titulo);  
            $('#titsem_Edit').val(planDoc.titsem);
            $('#texto_').html(planDoc.plan_clase);
            $('#texto_10').html(planDoc.plna_plata); 
            $('#status_EE').val(planDoc.status); 
            $('#Aula_V').val(planDoc.Aula_V);  
            $('#planes_general').hide();
            //$("#plan_new").hide();  
            $('.conte_Cur').show();
            
              
          }    
        })

  
   })
//*****ACTUALIZA OBSERVACIONES******
$(document).on('click','#btn_planobser', function(e){
    e.preventDefault();
    //alert ("funciona le boron actualizar plan");
    for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    
            let datos = new FormData($("#form_actobser")[0]);
            
                $.ajax({
                url: '../../backend_plan/actualiza_observacion.php',
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
                var id_asigD = $('#docente_').val();
                //alert (id_asigD); 
                planesG(id_asigD);      
                $(".conte_Cur").hide();
                $('#planes_general').show();    
                  

                }
                }); 
});
    
//*****FIN DE TODO    
})

