
jQuery(document).on('submit','#formlg',function (event){
    event.preventDefault();
    //console.log('deteiene el evento del login.php') ;
  jQuery.ajax({
        url: '../main_app/sesion_ini.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.botonlg').val('Validando');
            
        }
    })
    .done (function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'dece'){
                location.href = 'main_app/dece/';
                
            }else if(respuesta.tipo == 'docente' ){
                location.href = 'main_app/docente/'; 
                
            }else if(respuesta.tipo == 'administrativo' ){
                console.log (respuesta);
                location.href = 'main_app/administrador/'; 
                
            }else if(respuesta.tipo == 'estudiante' ){
                location.href = 'main_app/estudiante/';
                
            }else if(respuesta.tipo == 'curricular' ){
                location.href = 'main_app/curriculares/'; 

            }else if(respuesta.tipo == 'facturador' ){
                location.href = 'main_app/facturacion/';                
            }
            
        }else{
           $('.error').slideDown('slow');
           setTimeout(function(){
                 $('.error').slideUp('slow');
           },3000);
           $('.botonlg').val('Iniciar Sesión');
        }
    })
    .fail (function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });
    
    
});