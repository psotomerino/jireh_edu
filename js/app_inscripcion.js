$(document).ready(function(){
    console.log('jquery funciona perfecto para las inscripciones');
    $('#alertas').hide();
    $('#formulario_new_reg').hide();
    $('#cupo_confirmado').hide();
    $('#cupo').show();
    
    $(document).on('click','#btn_cupo_new', function(){
       $('#cupo').hide(); 
       $('#cupo_confirmado').hide();    
        
    });
    
    
    
    
//****************BUSCAR SI EXISTE EN LA BASE *************
$('#formulario_verficador').submit(buscarUsuario);
    function buscarUsuario(e){
        e.preventDefault();
        //console.log('funciona el boton');
        let cedula = $('#cedula_ini').val();
        console.log (cedula);
        let datos = new FormData($('#formulario_verficador')[0]);
        $.ajax({
            url:'../backend/buscar_usuario.php',
            type: 'POST',
            data: datos,
            contentType: false,
         processData: false,
         success: function(respuesta){
            //console.log(respuesta);
            var jsonData = JSON.parse(respuesta);
            if (jsonData.success == "1")
                {
                    alert('Usted se encuentra ya con un cupo asignado porfavor Actualize sus datos');
                    location.href = 'index.php';
                }
                else
                {   
                    $('#formulario_verficador').hide();
                    alert('El número ingresado no se encuentra registrado; desea solicitar un cupo');
                    $('#formulario_new_reg').show();
                    $('#cedula').val(cedula);
                } 
                
            }
        });
    }
    
    
//****************INSERTAR NUEVO REGISTRO ****************
$("#formulario_new_reg").submit(insertaNewReg);

   function insertaNewReg(evento){
      evento.preventDefault();
      let datos = new FormData($("#formulario_new_reg")[0]);
      $.ajax({
         url: '../backend/nueva_inscripcion.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            console.log(datos);
            $('#alertas').slideDown('slow');
            setTimeout(function(){
                $('#alertas').slideUp ('slow');
            },6000);
         $('#formulario_new_reg').trigger('reset');
         $('#formulario_verficador').trigger('reset');     
         $('#formulario_new_reg').hide();     
         $('#formulario_verficador').show();
         
        
         }
         
      });
   }    
    
//********fin de todo********  
});
