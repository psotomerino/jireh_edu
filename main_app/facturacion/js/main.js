$(document).ready(function(){
    $('.factura').hide();

    $(document).on('click','#cerrar_fact', function(){
        $('.factura').hide();  
         
    })
    $(document).on('click','#btn_factura',function(){
        $('.factura').show(); 
    })

//** ENVIO DATOS DIGITO VERIFICADOR   */
$(document).on('click','#btn_digi',function(e){
    e.preventDefault();
    //alert ('generar clave');
    var _formP = $("#post_factura");      
    var datos = new FormData($("#post_factura")[0]); 
    $.ajax({
      url: 'digito_verficador.php',
      type: 'POST',
      data: datos,
      contentType: false,
      processData: false,
      success: function(datos)
      {
        //alert(datos);
       _formP[0].reset();
       $('#clave_01').text(datos);

      }
      });
  })
      
  


//** FIN DE TODO */    
})