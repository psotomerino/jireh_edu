$(document).ready(function(){
    
    
    $('#mision').hide();
    $('#vision').hide();
    $('#contacto').hide();
    
    $(document).on('click','#ver_portada', function(){
        $('#portada').show();
        $('#mision').hide();
        $('#vision').hide();
        $('#contacto').hide();
        
    });
    
    $(document).on('click','#ver_mision', function(){
        $('#portada').hide();
        $('#mision').show();
        $('#vision').hide();
        $('#contacto').hide();
        
    });
    
    $(document).on('click','#ver_vision', function(){
        $('#portada').hide();
        $('#mision').hide();
        $('#vision').show();
        $('#contacto').hide();
    });
    $(document).on('click','#ver_contacto', function(){
        $('#portada').hide();
        $('#mision').hide();
        $('#vision').hide();
        $('#contacto').show();
        
    });
    
    
    
//********fin de todo********    
});