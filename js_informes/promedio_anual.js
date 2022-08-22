$(document).ready(function(){
    
    $('#materiaS').hide();
    $('.container_N').hide();
    
    var id_profe = $("#id_usua").val();
    $(document).on('click','#nueva_c', function(){
       location.reload();
        
    });
   
    $(document).on('click','#btn_informes', function(){
        $('#escritorio').hide();
        $('#aside_left').hide();
        $('#informes_A').show();
        $('.container_N').show();
     
    });
    
    $.ajax({        
    type: 'POST',
    url: '../../backend_plan/cargar_grado.php',
    })
    .done(function(listas_nivel_edu){
        $('#nivelE').html(listas_nivel_edu); 
                
    })
    .fail(function(){
        alert ('hubo un error al cargar los niveles de educación ');
    });
    
    $.ajax({
    type: 'POST',
    url: '../../backend_plan/cargar_materiaDocente.php',
    data: {'id_profe_M': id_profe}  
    })
    
    .done(function(listas_asig){
        //alert (listas_asig);
        $('#lista_asignatura').html(listas_asig); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar las asignaturas');
    });
    
    $('#nivelE').on('change', function(){
    var id_nivelEdu = $('#nivelE').val();
    list_estu(id_nivelEdu);
    list_estuN2(id_nivelEdu);  
    list_estuEXA1(id_nivelEdu); 
    list_estuN3(id_nivelEdu); 
    list_estuN4(id_nivelEdu);
    list_estuEXA2(id_nivelEdu);    
    });
    
    $('#lista_asignatura').on('change', function(){
    var id_materia = $('#lista_asignatura').val();
    //alert (id_materia);
    });
    
    
//****LISTA DE ESTUDIANTES POR GRADO Y N1****    
function list_estu(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estu.php',
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
                    <td>${i}</td>
                    <td>${lista.nombre}</td>
                    <td>${lista.apellido}</td>
                    <td id="NA${i}">${lista.nota1p1q} </td> 
                </tr>
              
               ` ; 
                i++;
                
                $('#notas_cal').html(template);
                $('#notas_cal_sab').html(template);
        
              });       
        })
           
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
}
//**** N2****    
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
//**** EXAMEN_1****    
function list_estuEXA1(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estuEXA1.php',
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
                    <td id="exa1Q${i}">${lista.exa_1q}</td> 
                    <td id="prom1Q${i}" class="prom1Qcolor"></td> 
                </tr> 
               `;    
                i++
                $('#notas_cal2').html(template);
                
              });       
        })
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
} 
//****N3****    
function list_estuN3(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estuN3.php',
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
                    <td id="NC${i}">${lista.notas1P_2Q} </td> 
                </tr>
              
               ` ; 
                i++;
                
                $('#notas_cal3').html(template);
        
              });       
        })
           
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
}
//****N4****    
function list_estuN4(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estuN4.php',
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
                    <td id="ND${i}">${lista.notas2P_2Q} </td> 
                </tr>
              
               ` ; 
                i++;
                
                $('#notas_cal4').html(template);
        
              });       
        })
           
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
}
//**** EXAMEN_2****    
function list_estuEXA2(id_nivelEdu){
    
       $('#materiaS').show();
       
       var id_nivel = id_nivelEdu;
       $('#lista_asignatura').on('change', function(){
       var materia_I = $('#lista_asignatura').val();
       var materia = materia_I;  
       //alert (id_nivelEdu);
       //alert (materia);            
        
       $.ajax({
          url: '../../backend_notas_2021/CRUD_notas_estuEXA2.php',
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
                    <td id="exa2Q${i}">${lista.exa_2q}</td> 
                    <td id="prom2Q${i}" class="prom1Qcolor"></td> 
                    <td id="prom_Gen${i}" class="prom_Gencolor"></td> 
                </tr> 
               `;    
                i++
                $('#notas_cal5').html(template);
                
              });
            var cont= parseFloat(i)-1;
            $('#tot_AlN').text(cont);
        })
          
        .fail(function(){
          alert('Hubo un errror al cargar listas de estudiantes');
        })   
        }); 
} 
//*****CALCULOS******* 
$(document).on('click','#cal_informes', function(){
    let  a =parseFloat($('#tot_AlN').text());
    var i = 1;
    var acumNa = 0;
    var acumNb = 0;
    var acum1Q = 0;
    var acumNc = 0;
    var acumNd = 0;
    var acum2Q = 0;
    var acumMa1 = 0;
    var acumMa2 = 0;
    var acumDAQ1 = 0;
    var acumAAQ1 = 0;
    var acumPAQ1= 0;
    var acumDAQ2 = 0;
    var acumAAQ2= 0;
    var acumPAQ2 = 0;
    var acumDA = 0;
    var acumAA = 0;
    var acumPA = 0;
    while (i <= a) {
        //***1P1Q
        let Na =parseFloat($('#NA'+i).text());         
        console.log('la nota es' + Na);       
        acumNa = Na + acumNa;        
        //***2P1Q
        let Nb =parseFloat($('#NB'+i).text()); 
        console.log('la nota es' + Nb);
        acumNb = Nb + acumNb;
        //***valor examen 1Q  
        let Nc =parseFloat($('#exa1Q'+i).text());       
        let PROM1Q = ((Na + Nb +Nc)/3).toFixed(2);
        console.log(PROM1Q);
        $('#prom1Q'+i).text(PROM1Q);
        //***1P2Q
        let Nd =parseFloat($('#NC'+i).text());         
        acumNc = Nd + acumNc;
        //***2P2Q
        let Ne =parseFloat($('#ND'+i).text()); 
        acumNd = Ne + acumNd;
        //***valor examen 2Q   
        let Nf =parseFloat($('#exa2Q'+i).text());       
        let PROM2Q = ((Nd + Ne +Nf)/3).toFixed(2);
        console.log(PROM2Q);
        $('#prom2Q'+i).text(PROM2Q);
        //**Promedio final
        let Q1 = parseFloat($('#prom1Q'+i).text());
        let Q2 = parseFloat($('#prom2Q'+i).text());
        let promFIn =((Q1+Q2)/2).toFixed(2);
        $('#prom_Gen'+i).text(promFIn);
        //******** calculo de aprendizajes
        //***PRIMERQUIMESTRE
        if (PROM1Q >= 9 && PROM1Q <= 10){
            acumDAQ1 = acumDAQ1 + 1;
        }
        if(PROM1Q >= 7 && PROM1Q <= 8.99){
            acumAAQ1 = acumAAQ1 + 1;
        }
        if(PROM1Q <= 6.99){
            acumPAQ1 = acumPAQ1 + 1;
        }
        //**** SEGUNDO QUIMESTRE
        if (PROM2Q >= 9 && PROM2Q <= 10){
            acumDAQ2 = acumDAQ2 + 1;
        }
        if(PROM2Q >= 7 && PROM2Q <= 8.99){
            acumAAQ2 = acumAAQ2 + 1;
        }
        if(PROM2Q <= 6.99){
            acumPAQ2 = acumPAQ2 + 1;
        }
        //****PROMEDIO FINAL
        if (promFIn >= 9 && promFIn <= 10){
            acumDA = acumDA + 1;
        }
        if(promFIn >= 7 && promFIn <= 8.99){
            acumAA = acumAA + 1;
        }
        if(promFIn <= 6.99){
            acumPA = acumPA + 1;
        }
            
        //** Media_artimetica 
        let Ma1 = parseFloat($('#prom1Q'+i).text());
        acumMa1 = Ma1 + acumMa1;
        let Ma2 = parseFloat($('#prom2Q'+i).text());
        acumMa2 = Ma2 + acumMa2;
        i++;         
    } 
        
    var PN1 = (parseFloat(acumNa)/a).toFixed(2);
    var PN2 = (parseFloat(acumNb)/a).toFixed(2);
    var PN3 = (parseFloat(acum1Q)/a).toFixed(2); 
    var PN4 = (parseFloat(acumNc)/a).toFixed(2); 
    var PN5 = (parseFloat(acumNd)/a).toFixed(2); 
    var PN6 = (parseFloat(acumMa1)/a).toFixed(2); 
    var PN7 = (parseFloat(acumMa2)/a).toFixed(2); 
    
    var Prdaq1 = ((100 *  acumDAQ1 )/a).toFixed(2);
    var Prdaq2 = ((100 *  acumDAQ2 )/a).toFixed(2);
    var Prda = ((100 *  acumDA )/a).toFixed(2);
    
    var Praaq1 = ((100 *  acumAAQ1 )/a).toFixed(2);
    var Praaq2 = ((100 *  acumAAQ2 )/a).toFixed(2);
    var Praa = ((100 *  acumAA )/a).toFixed(2);
    
    var Prpaq1 = ((100 *  acumPAQ1 )/a).toFixed(2);
    var Prpaq2 = ((100 *  acumPAQ2 )/a).toFixed(2);
    var Prpa = ((100 *  acumPA )/a).toFixed(2);
    
    var totQ1 = (parseFloat(Prdaq1)+parseFloat(Praaq1)+parseFloat(Prpaq1));
    var totQ2 = (parseFloat(Prdaq2)+parseFloat(Praaq2)+parseFloat(Prpaq2));
    var totfinal = (parseFloat(Prda)+parseFloat(Praa)+parseFloat(Prpa));
   
    //***promedio anual      
    var Anual = ((parseFloat(PN6) + parseFloat(PN7))/2).toFixed(2); 
   
    $('#PN1').text(PN1);
    $('#PN2').text(PN2);
    $('#PN3').text(PN3);
    $('#PN4').text(PN4);
    $('#PN5').text(PN5);
    $('#PN6').text(PN6);
    $('#PN7').text(PN7);
    $('.PN8').text(Anual);
    $('#DAQ1').text(acumDAQ1);
    $('#DAQ2').text(acumDAQ2);
    $('#DA').text(acumDA);
    $('#AAQ1').text(acumAAQ1);
    $('#AAQ2').text(acumAAQ2);
    $('#AA').text(acumAA);
    $('#PAQ1').text(acumPAQ1);
    $('#PAQ2').text(acumPAQ2)
    $('#PA').text(acumPA);
    $('#PRdaq1').text(Prdaq1+'%');
    $('#PRdaq2').text(Prdaq2+'%');
    $('#PRda').text(Prda+'%');
    $('#PRaaq1').text(Praaq1+'%');
    $('#PRaaq2').text(Praaq2+'%');
    $('#PRaa').text(Praa+'%');
    $('#PRpaq1').text(Prpaq1+'%');
    $('#PRpaq2').text(Prpaq2+'%');
    $('#PRpa').text(Prpa+'%');
    $('#totq1').text(totQ1+'%');
    $('#totq2').text(totQ2+'%');
    $('#totfinal').text(totfinal+'%');



    
    }); 
 
//***** fin de todo *********    
})