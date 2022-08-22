$(document).ready(function(){
    
    console.log ('funciona perfecto para reportes varios de admin');
    $('#cuerpo').hide();  
    
    
    
    
$(document).on('click','#Cer_ma_', function(){
        var id_de_usuario = $('#id_de_usuario').val();
        //console.log(id_de_usuario);
        certifiacdo_2020(id_de_usuario);
    
});
$(document).on('click','#regresar_', function(){
    $('#cuerpo').hide();
    $('#lista_estu').show();
    $('#aside_left').show();
    $('.print').hide();

    
});    
//********* PARA CERTIFICADO 25020 **********
function certifiacdo_2020(id_de_usuario){
    let id = id_de_usuario;
    var id_envio ={"id_envio":id}; 
    
    //alert ('entró a la función... ok certifiacdo 2020');
    //alert (id);
    $.ajax({
        url: '../../backend/para_certificado_2021.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
            {
                console.log (respuesta);
                const item = JSON.parse(respuesta);
                $('#nombres_certificado').text(item.Nombres);
                $('#apellidos_certificado').text(item.Apellidos);
                $('#jornada_cer').text(item.jornada);
                $('#curso_cer').text(item.nombre_nivel);
                $('#matricula_cer').text(item.num_matri);
                $('#folio_cer').text(item.num_matri);
                $('#fechamat_cer').text(item.fecha_matri);
                $('#tipomat_cer').text(item.tipo_matri);
                $('#fecha_mat').text('Tena a: '+item.fecha_matri);
                $('.print').show();
                
            }
    });


}
//****************ACTUALIZAR REGISTRO USUARIO  NOMBRES****************
$("#form_cambia_nombres").submit(updateReg);
   function updateReg(evento){
      evento.preventDefault();
      alert ('SE HA ACTUALIZÓ CORRECTAMENT');
      let datos = new FormData($("#form_cambia_nombres")[0]);
      $.ajax({
         url: '../../backend/actualiza_solo_nombres.php',
         type: 'POST',
         data: datos,
         contentType: false,
         processData: false,
         success: function(datos){
            console.log(datos);
            //$('#aviso').slideDown('slow');
            //setTimeout(function(){
                //$('#aviso').slideUp ('slow');
            //},4000);
            //$('#form_actualiza_usuario').hide(); 
            //$('#btn_nota_proy').show();
         }
         
      });
   } 
   


//****** fin de todo ////
});