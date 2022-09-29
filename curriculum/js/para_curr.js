$(document).ready(function(){

    $('.Contenedor_OB').hide();
    $('.Contenedor_OE').hide();

    $(document).on('click','#_OB', function(){
        $('.Contenedor_OB').show();
        $('.Contenedor_OE').hide();
    });
    
    $(document).on('click','#_OE', function(){
        $('.Contenedor_OB').hide();
        $('.Contenedor_OE').show();
    });

//***** Cargar Asignatura********
$.ajax({
    type: 'POST',
    url: 'backend_curr/cargar_asignatura.php',
    })
    .done(function(listas_materias){
        //alert (listas_materias);  
        $('#lista_asignatura').html(listas_materias); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar la lista de asignaturas ');
    })    
//********* Cargar Objetivos generales**********
$('#lista_asignatura').on('change', function(){
    var id_asigD = $('#lista_asignatura').val();
    //alert (id_asigD);
    Objetivo_general(id_asigD);    
})
function Objetivo_general(id_asigD){
    var id_asignatura = id_asigD; 
    $.ajax({
       url: 'backend_curr/crud_OG.php',
       type: 'POST',
       data: {'id_asignatura': id_asignatura},
       beforeSend: function(){
                     document.getElementById("loading_full").style.display="block";
                     document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                 },   
       
     })
     .done(function(listas_OB){
     document.getElementById("loading_full").style.display="none";   
     //alert (listas_OB);   
     let i = 0;  
     let listas = JSON.parse(listas_OB); 
     if(listas == ""){
        alert ("No existe Objtivos Generales para esta materia");  
        $('#OB_template').html("<td></td> "); 
     }     
     let template='';
     listas.forEach(lista =>{             
             template+=`
             <tr elmentoid="${lista.id_OG}">
                ${i++ }                               
                <td>${lista.Objetivo_General}</td> 
                <td> <a href="#"><i class="fa-solid fa-pen-to-square" data-bs-toggle=""  data-bs-target="#editOB" id="edit_OB"></i></a></td>        
            
             </tr>`;
             $('#tot_OB').html(i);
             $('#OB_template').html(template);
            
           });        
      
     })
     .fail(function(){
       alert('No se pudo cargar la lista de Objetios Generales, intente nuevamente');
     })   

} 
/** BOTON EDITAR OBEJTIVO GENERAL */
$(document).on('click','#edit_OB',function(){
    let elemento = $(this)[0].parentElement.parentElement.parentElement;
    let id_OG = $(elemento).attr('elmentoid');
    //alert (id_OG);
    $('#editOB').modal('show');
    busca_OGeneral(id_OG)

});
/** BUSCA OBJ GENERAL  */
function busca_OGeneral(id_og){
    let id = id_og;  
    var id_envio ={"id_envio":id }; 
    $.ajax({
        url: 'backend_curr/solo_OG.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
            {
                //alert (respuesta);
                const item = JSON.parse(respuesta);
                //alert (item.Objetivo_general);
                $('#id_OG_').val (item.id_OG);
                $('._text_edit').text(item.Objetivo_general);            
               
                
            }
    });
} 
/*** EDITA OBJ GENERAL */
$(document).on('click','#btn_OGEdit',function(e){
    e.preventDefault();
    alert ("funciona el boton actualizar el Objetivo General");
})

  

/***FIN DE TODO  */    
})