$(document).ready(function(){
    
    //alert ("Funciona perfecto para estudiante 2021");
    $('#ficha_situacional').hide();
    $('#aviso_ficha').hide();
    
    setTimeout(function() {
        $('#aviso_ficha').show();    
        $('#aviso_ficha').fadeOut(10000);
        },3000);
    
    $(document).on('click','#btn_ficha_situacional', function(){
        $('#aviso_ficha').show();
        $('#aside_left').hide();
        $('#pag_inicio').hide();
        $('#ficha_situacional').show();
        var este_alumno =$('#este_alumno').text();
        var nom_estu =$('#nombre_estu').text();
        var ape_estu =$('#apellido_estu').text();
        //alert (este_alumno);
        $('#Apellidos_ficha').val(ape_estu);
        $('#Nombre_ficha').val(nom_estu);
        $('#este_alumno_ficha').val(este_alumno);
        
        
        
        
    });

    
 
    

//****ENVIA FICHA SITUACIONAL ******
$('#form_ficha_situacional').submit(e);
    function e(evento){
        evento.preventDefault();
        //alert ("se ha detenido el evento del boton enviar");
        let datos = new FormData($('#form_ficha_situacional')[0]);
        $.ajax({
            url: '../../backend/envia_ficha_situacional.php',
            type: 'POST',
            data: datos,
            contentType: false,
            processData: false,
            success: function(datos){
                alert(datos);
                $('#form_ficha_situacional').trigger('reset');
                 $('#ficha_situacional').hide();
            }              
        });
        
    }
    
    
//*****FIN DE TODO*****    
});