$(document).ready(function(){
    
    $('#materiaS').hide();
    //$('.container_S').hide();
    
    var id_profe = $("#id_usua").val();
    $(document).on('click','#nueva_s', function(){
       location.reload();
        
    });  

    
    $(document).on('click','#btn_sabana', function(){
        
        //alert ('funciona bien para sabanas');
        $('#escritorio').hide();
        $('#aside_left').hide();
        $('#area_sabana').show();        
    });
    
$.ajax({        
    type: 'POST',
    url: '../../backend_plan/cargar_grado.php',
    })
    .done(function(listas_nivel_edu){
        $('#nivelS').html(listas_nivel_edu); 
                
    })
    .fail(function(){
        alert ('hubo un error al cargar los niveles de educación ');
    });
    
    $('#nivelS').on('change', function(){
    var id_nivelEdu = $('#nivelS').val();
    list_estu(id_nivelEdu);
    /*list_estuN2(id_nivelEdu);  
    list_estuEXA1(id_nivelEdu); 
    list_estuN3(id_nivelEdu); 
    list_estuN4(id_nivelEdu);
    list_estuEXA2(id_nivelEdu); */   
    });

    
    
//****LISTA DE ESTUDIANTES POR GRADO ****    
function list_estu(id_nivelEdu){   
   
       var id_nivel = id_nivelEdu;           
       
       $.ajax({
          url: '../../backend_notas_2021/crud_sabana_1P1Q.php',
          type: 'POST',
          data: {'id_nivel':id_nivel},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },   
          
        })
        .done(function(listas_estudiantes){
        document.getElementById("loading_full").style.display="none";   
        //alert (listas_estudiantes);   
        let i = 1;  
        let listas = JSON.parse(listas_estudiantes);
        console.log (listas_estudiantes);   
        let template='';
        listas.forEach(lista =>{
             template+=`
                <tr>
                    <td>${i}</td>
                    <td>${lista.nombre}</td>
                    <td>${lista.apellido}</td>                    
                </tr>
              
               ` ; 
                i++;                
               
                $('#notas_cal_sab').html(template);
        
              });       
        })
           
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
    }
//**** N1****    
function list_estuN2(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estuN2.php',
          type: 'POST',
          data: {'id_materia': materia, 'id_nivel':id_nivel},
          beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    },   
          
        })
        .done(function(listas_estudiantes){
        document.getElementById("loading_full").style.display="none";   
        //alert (listas_estudiantes);   
        let i = 1;  
        let listas = JSON.parse(listas_estudiantes);
        let template='';
        listas.forEach(lista =>{
             template+=`
                <tr>
                    <td id="NB${i}">${lista.nota2p1q}</td>
                    <td id="NA${i}">${lista.nota1p1q} </td> 
                    <td id="Materias${i}">${lista.materia} </td> 
                </tr> 
               `;    
                i++
                $('#notas_cal1').html(template);
                
              });       
        })
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
} 
 
//***** fin de todo *********    
});