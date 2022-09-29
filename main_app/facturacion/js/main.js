$(document).ready(function(){
    $('.factura').hide();

    $(document).on('click','#cerrar_fact', function(){
        $('.factura').hide();  
         
    })
    $(document).on('click','#btn_factura',function(){
        $('.factura').show(); 
    })




//** FIN DE TODO */    
})