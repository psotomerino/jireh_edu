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
    alert ('generar clave');
    // var _formP = $("#new_product");      
    // var datos = new FormData($("#new_product")[0]); 
    // $.ajax({
    //   url: '../../backend/inserta_producto.php',
    //   type: 'POST',
    //   data: datos,
    //   contentType: false,
    //   processData: false,
    //   success: function(datos)
    //   {
    //     alert(datos);
    //     _formP[0].reset();
    //     crud_productos();
    //     esta_fecha();
    //   }
    //   });
  })
      
  


//** FIN DE TODO */    
})