$(document).ready(function(){
    
    $('.elecciones').hide();
    $('#aviso_ficha').hide();
    
$(document).on('click','#btn_vota', function(){
    $('#aviso_ficha').hide();
    $('#aside_left').hide();
    $('#pag_inicio').hide();
    $('.elecciones').show();
    var este_alumno =$('#este_alumno').text();
    var nom_estu =$('#nombre_estu').text();
    var ape_estu =$('#apellido_estu').text();
    var votante = nom_estu +' '+ ape_estu;
    //alert (votante);
    $('#votante').text(votante);
    $('#id_estu').val(este_alumno);

});
//guardar  MI VOTO
$(document).on('click','#btn_enviaMivoto',function(e){
                e.preventDefault();
                //alert ("funciona le boron enviar SILABO"); 
                var datos = new FormData($("#form_mivoto")[0]);
                
                    $.ajax({
                    url: '../../backend/elecciones_2021.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },  
                     success: function(datos)
                    {
                    //console.log(datos);
                    document.getElementById("loading_full").style.display="none";      
                    alert (datos);
                    location.reload();
                    }

                  });
                    
    
                });
    
    
    
//*****FIN DE TODO*****    
});