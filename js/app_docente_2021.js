$(document).ready(function(){
    
    console.log ('funciona perfecto para docente_año lectivo_ 2021');
    $('#lista_estu').hide();
    $('#aula').hide();
    $('#informes_A').hide();
    $('.print_2021').hide();
    
    $(document).on('click','#btn_lista_doc', function(){
        var id_usu = $('#id_usua').val();
        busq_aula(id_usu); //busca las aulas de cada docente
        
        $('#escritorio').hide();
        $('#aula').show(); 
        $('#lista_estu').show();  
        
        
    });
    $(document).on('click','#btn_control', function(){
        $('#informes_A').hide();
        $('#escritorio').show();
        $('#lista_estu').hide();
        $('#aula').hide();        
        $('#listados_estu').empty();
        location.reload();
    });
    
    $(document).on('click','#ls_nivel', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id_cur = $(elemento).attr('elmentoid');
        $('#este_curso').val(id_cur);
        //alert (id_cur);
        $('#listado_estu').show();
        lista_4EGB(id_cur);
        
    });
    
    $(document).on('click','#certi_promo_2021', function(){
        $('.print_2021').show();
    });
//******** aulas asiganadas *******
function busq_aula(id_usu){
    $('#bolet').show();
    $('#este_docente').val(id_usu);
    var id_envio = {"id_envio":id_usu};
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
            <tr elmentoid="${lista.id_oferta_aca}">
               <td><a href="#" id="ls_nivel">${lista.nombre_nivel}</a></td>
            </tr>`;
            $('#listado_aulas2').html(template);
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
               <td>${lista.Nombres}</td>
               <td>${lista.Apellidos}</td>
               <td>${lista.Contacto_cel}</td>
                <td colspan="2">
               
                <a href="#"><i class="fas fa-user" id="notas_2021"></i></a>  
               </td>
            </tr>`;
            $('#listados_estu').html(template);
          });
        
      }
      
   });
    
}    
    
//******FIN DE TODO ********    
});