$(document).ready(function(){
//**************ULTIMO NUMERO DE MATRICULA ******************
$(document).on('click','#matri_numero',function(){
    
        //alert ('Funciona el boton correctameten 2023');
        $.ajax({
          url: '../../backend/ultima_matricula2022.php',
          type: 'POST',
          success: function (respuesta)
          {
            alert (respuesta);
            const respuesta_incre =  parseInt(respuesta, 10);
            let matri_numero = respuesta_incre + 1;  
            console.log (matri_numero);
            $('#num_matri').val(matri_numero);  
          }
        
    });
   
});    
    
    
//*****FIN DE TODO ******    
});