$(document).ready(function(){
    
    $('#div_sib').hide();
    //$('#edit_silabo').richText();
    $('#div_silabo').hide();
    $('#edit_silabo').ckeditor();
   
    var textu="en blanco";
   
    
    
    var id_profe_sib = $("#este_profe").text();
    var nom_docente_sib = $("#nombre_D").text();
    var ape_docente_sib = $("#apellido_D").text();
    var nombres_a= nom_docente_sib +' '+ape_docente_sib;
    mis_silabos(id_profe_sib);
    //alert (id_profe_sib);
    $(document).on('click','#btn_pruebaSib', function(){
        
       $('#div_sib').show();
       $('#id_docsub').val(id_profe_sib);
       $('#nombres_ape').val(nombres_a); 
     
    });
    
    $(document).on('click','#silabo_atras', function(){
            $('#silabo').hide(); 
            $('#pag_inicio').show();
            //$('#plan_new').show();
            //$('#mis_planes').show();
            
        
    }); 
    
    $(document).on('click','#btn_regresa_silabo', function(){
            $('#silabo').show(); 
            $('#div_silabo').hide();
            mis_silabos(id_profe_sib);
            
            
        
    });
//guardar SILABO
$(document).on('click','#envia_sib',function(e){
                e.preventDefault();
                //alert ("funciona le boron enviar SILABO"); 
    
                for ( instance in CKEDITOR.instances )
                CKEDITOR.instances[instance].updateElement();
    
                var datos = new FormData($("#form_sib")[0]);
                
                    $.ajax({
                    url: '../../backend/inserta_silabo.php',
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
                    //location.reload();
                    mis_silabos(id_profe_sib);    
                    }

                  });
                    
    
                }); 
//********* CRUD SILABOS **********
function mis_silabos(id_profe_sib){
    let id_pro = id_profe_sib;
    //alert (id_profe_sib);
       $.ajax({
          url: '../../backend_plan/listas_silabos.php',
          type: 'POST',
          data: {'id': id_pro}
        })
        .done(function(listas_missilabos){
        //alert (listas_missilabos);   
        let i = 1;  
        let listas = JSON.parse(listas_missilabos);
        let template='';
        listas.forEach(lista =>{
                template+=`
                <tr align="center" elmentoid="${lista.id_silabo}">
                   <td>${i++}</td>   
                   <td>${lista.grado}</td>
                   <td>${lista.materia}</td>  
                   <td><button  id="corregir_sil" class="btn-warning">CONTINUAR SILABO</button></td>
                </tr>
                <tr  align="center">
                    <td colspan="4">${lista.silabo}</td>
                </tr>

                <tr><td colspan="4" >&nbsp;</td></tr>`;
                $('#this_sib').html(template);
              });
           
        console.log (listas_missilabos);
        })
        .fail(function(){
          alert('Hubo un errror al cargar lista de silabos ');
        })

            

}
//CORREGGIR SILABO
   $(document).on('click','#corregir_sil', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id_silabo = $(elemento).attr('elmentoid');
        $('#silabo').hide(); 
        $('#div_silabo').show();
        var id_profe5 = $("#este_profe").text();
        $.ajax({
          url: '../../backend_plan/edit_MI_silabo.php',
          type: 'POST',
          data: {'id_sil': id_silabo , 'id_profe' : id_profe5 },
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },    
          success: function (editsilabo){
            const plansilabo = JSON.parse(editsilabo);
            document.getElementById("loading_full").style.display="none";    
            $('#edit_silabo').val(plansilabo.silabo); 
            $('#este_sila').val(plansilabo.id_silabo);   
         
          }    
        })

   
   })
//*****ACTUALIZA SILABO*******
$(document).on('click','#btn_envia_sila', function(e){
    e.preventDefault();
    for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    
    let datos = new FormData($("#form_act_silabo")[0]);
     $.ajax({
                url: '../../backend_plan/actualiza_silabo.php',
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                 success: function(datos) 
                {
                 alert (datos);   
                   
                }
            });  
}) 
    
   
    
    
    
//****FIN DE TODO    
});