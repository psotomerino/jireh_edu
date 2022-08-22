$(document).ready(function(){
    
    $('#h1Q_inicial3').hide(); // 1
    $('#h1Q_inicial4').hide(); // 2
    $('#h1Q_prepa').hide(); // 3
    $('#h1Q_segundo').hide(); // 4
    $('#h1Q_tercero').hide(); // 5
    $('#h1Q_cuarto').hide();  // 6
    $('#h1Q_quinto').hide(); // 7 
    $('#h1Q_sexto').hide(); // 8
    
    var este_alumno =$('#este_alumno').text();
    //$('#este_alumno_horario').val(este_alumno);
    busca_grado (este_alumno);
    
//****************BUSCA GRADO EGB Y ASIGNA HORARIO***************
function busca_grado(este_alumno){
    var id = este_alumno;
    //alert (id);
    $.ajax({
            url:'../../backend_estudiantes_2021/busca_grado.php',
            type: 'POST',
            data: {'id_estudiante': este_alumno},
            //contentType: false,
            //processData: false,
            success: function(respuesta){
            //alert (respuesta);    
            var item = JSON.parse(respuesta);
            //alert (item.id_oferta_aca); 
            if (item.id_oferta_aca == "1")
                {  
                    $('#h1Q_inicial3').show();
                   
                }
            if (item.id_oferta_aca == "2")
                {  
                    $('#h1Q_inicial4').show();
                   
                }
            if (item.id_oferta_aca == "3")
                {  
                    $('#h1Q_prepa').show();
                   
                }    
            if (item.id_oferta_aca == "4")
                {  
                    $('#h1Q_segundo').show();
                   
                }
            if (item.id_oferta_aca == "5")
                {  
                    $('#h1Q_tercero').show();
                   
                }    
            if (item.id_oferta_aca == "6")
                {  
                    $('#h1Q_cuarto').show();
                   
                }
            if (item.id_oferta_aca == "7")
                {  
                    $('#h1Q_quinto').show();
                   
                }
            if (item.id_oferta_aca == "8")
                {  
                    $('#h1Q_sexto').show();
                   
                }    
            }
        });
}
    
    
//FIN DE TODO    
});