$(document).ready(function(){

    $('.contiene_aulas').hide();
    $('.contiene_fichas').hide();
    $('#ficha_situacional').hide();

    $(document).on('click','#fichas_', function(){
        $('#escritorio_g').hide();    
        $('.contiene_fichas').show();     
       
        
    });

    $(document).on('click','#btn_situacional', function(){
        $('#ficha_situacional').show();       
        
    });
    $(document).on('click','#aula_', function(){
        $('#escritorio_g').hide();
        $('.contiene_aulas').show();       
        
    });
    $(document).on('click','.cerrar_fi', function(){
        $('#ficha_situacional').hide();  
        $('.contiene_aulas').hide();     
        
    });

  



//****FIN DE TODO */    
});