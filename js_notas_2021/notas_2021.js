$(document).ready(function(){
    
    $('#estudiante_2021').hide();
    $('.print_2').hide();
   
    
    $(document).on('click','#estudiante_atras', function(){
        $('#estudiante_2021').hide();
         $('.print_2').hide();
        $('#aula').show();
        $('#lista_estu').show();
        $('.print_2021').hide();
        
    }); 
    
    $(document).on('click','#notas_2021', function(){
        
        $('#aula').hide();
        $('#lista_estu').hide();
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        let id_usu_notas = $(elemento).attr('elmentoid');
        $('#estudiante_2021').show();
        $('#este_alumno_2021').val(id_usu_notas);
        $('.print_2').show();
        busca_estudiante_2021(id_usu_notas);
        cargaN1P1Q(id_usu_notas);
        cargaN2P1Q(id_usu_notas);
        cargaExa1Q(id_usu_notas);
        cargaN1P2Q(id_usu_notas);
        cargaN2P2Q(id_usu_notas);
        cargaExa2Q(id_usu_notas);
        
    });
    
    $(document).on('click','#cal_prom',function(){
        calcula_promedios();  
    });
    
//********* busca estudiante **********
function busca_estudiante_2021(id_usu_notas){
    let id = id_usu_notas;
    var id_envio ={"id_envio":id};
    
    $.ajax({        
        url: '../../backend_plan/busca_usuario.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
        {
            console.log (respuesta);
            const item = JSON.parse(respuesta);
            var Este_usuario= item.Nombres +' '+item.Apellidos;
            $('#Nom_Ape').text(Este_usuario);
            $('#nombre_estu_bas_2021').text(item.Nombres);
            $('#apellido_estu_bas_2021').text(item.Apellidos);
            $('#nombre_estu_bas_cer').text(item.Nombres);
            $('#apellido_estu_bas_cer').text(item.Apellidos);
            $('#nivel_promo_cer').text(item.Nivel);
            $('#nivel_promo_lib').text(item.Nivel);
            
        }      
            
               
    });        
   
}
/////******************CARGA NOTAS TAS ESTUDIANTE 1P1Q**************************
function cargaN1P1Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaN1P1Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.nota1P1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                        if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_1Q_1p").text(elemento.nota1P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        $("#culfi_boleta_1Q_1p").text(elemento.nota1P1Q);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);   
                        } 
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_1Q_1p").text(elemento.nota1P1QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_1Q_1p").text(elemento.nota1P1QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                    }
        }
        
    });
}
/////******************CARGA NOTAS TAS ESTUDIANTE 2P1Q**************************
function cargaN2P1Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaN2P1Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.nota2P1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                        if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_1Q_2p").text(elemento.nota2P1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        $("#culfi_boleta_1Q_2p").text(elemento.nota2P1Q);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_1Q_2p").text(elemento.nota2P1QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_1Q_2p").text(elemento.nota2P1QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                        
                        
                        
                    }

        }
        
    });
}
/////******************CARGA NOTAS TAS ESTUDIANTE EXAMEN 1Q*************************
function cargaExa1Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaExa1Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.notaExa1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                       if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_1Q_exaI").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        $("#culfi_boleta_1Q_exaI").text(elemento.notaExa1Q);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_1Q_exaI").text(elemento.notaExa1QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_1Q_exa1").text(elemento.notaExa1QCuali);   
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                    }

        }
        
    });
   
}
// ****** CALCULOS MATEMATICOS PROMEDIOS LIBRETAS **************
function calcula_promedios(){
    //************LENGUAJE ********************   
    var lengua_1p = $('#lengua_boleta_1Q_1p').html();
    var lengua_2P = $('#lengua_boleta_1Q_2p').html();
    var lengua_Exa_1Q = $('#lengua_boleta_1Q_exaI').html();
                var suma = parseFloat(lengua_1p)+parseFloat(lengua_2P)+parseFloat(lengua_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1l = promedio.toFixed(2);
    
    $('#lengua_boleta_1Q_N1').text(N1l);
    //***************************************
    var lengua_1p2q = $('#lengua_boleta_2Q_1p').html();
    var lengua_2P2q = $('#lengua_boleta_2Q_2p').html();
    var lengua_Exa_2Q = $('#lengua_boleta_2Q_exaII').html();
                var suma = parseFloat(lengua_1p2q)+parseFloat(lengua_2P2q)+parseFloat(lengua_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2l = promedio.toFixed(2);
    
    $('#lengua_boleta_2Q_N2').text(N2l);
    //*************************************
    var prmediol = (parseFloat(N1l) + parseFloat(N2l))/2;
    var N3l = prmediol.toFixed(2);
    $('#lengua_boleta_final').text(N3l);
    $('#lengua_text').val(N3l);
    
    
    //************MATEMATICAS ********************   
    var mate_1p = $('#mate_boleta_1Q_1p').html();
    var mate_2P = $('#mate_boleta_1Q_2p').html();
    var mate_Exa_1Q = $('#mate_boleta_1Q_exaI').html();
                var suma = parseFloat(mate_1p)+parseFloat(mate_2P)+parseFloat(mate_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1m = promedio.toFixed(2);
    
    $('#mate_boleta_1Q_N1').text(N1m);
    //***************************************
    var mate_1p2q = $('#mate_boleta_2Q_1p').html();
    var mate_2P2q = $('#mate_boleta_2Q_2p').html();
    var mate_Exa_2Q = $('#mate_boleta_2Q_exaII').html();
                var suma = parseFloat(mate_1p2q)+parseFloat(mate_2P2q)+parseFloat(mate_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2m = promedio.toFixed(2);
    
    $('#mate_boleta_2Q_N2').text(N2m);
    //****************************************
    var prmediom = (parseFloat(N1m) + parseFloat(N2m))/2;
    var N3m = prmediom.toFixed(2);
    $('#mate_boleta_final').text(N3m);
     $('#mate_text').val(N3m);
    
    
    //************CIENCAS NATURALES********************   
    var cnn_1p = $('#cnn_boleta_1Q_1p').html();
    var cnn_2P = $('#cnn_boleta_1Q_2p').html();
    var cnn_Exa_1Q = $('#cnn_boleta_1Q_exaI').html();
                var suma = parseFloat(cnn_1p)+parseFloat(cnn_2P)+parseFloat(cnn_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1cn = promedio.toFixed(2);
    
    $('#cnn_boleta_1Q_N1').text(N1cn);
    //*************************************************
    var cnn_1p2q = $('#cnn_boleta_2Q_1p').html();
    var cnn_2P2q = $('#cnn_boleta_2Q_2p').html();
    var cnn_Exa_2Q = $('#cnn_boleta_2Q_exaII').html();
                var suma = parseFloat(cnn_1p2q)+parseFloat(cnn_2P2q)+parseFloat(cnn_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2cn = promedio.toFixed(2);
    
    $('#cnn_boleta_2Q_N2').text(N2cn);
    //*************************************************
    var prmediocn = (parseFloat(N1cn) + parseFloat(N2cn))/2;
    var N3cn = prmediocn.toFixed(2);
    $('#cnn_boleta_final').text(N3cn);
    $('#cnn_text').val(N3cn);
    
    
    //************ESTUDIOS SOCIALES********************   
    var eess_1p = $('#eess_boleta_1Q_1p').html();
    var eess_2P = $('#eess_boleta_1Q_2p').html();
    var eess_Exa_1Q = $('#eess_boleta_1Q_exaI').html();
                var suma = parseFloat(eess_1p)+parseFloat(eess_2P)+parseFloat(eess_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1es = promedio.toFixed(2);
    
    $('#eess_boleta_1Q_N1').text(N1es);
    //**************************************************
    var eess_1p2q = $('#eess_boleta_2Q_1p').html();
    var eess_2P2q = $('#eess_boleta_2Q_2p').html();
    var eess_Exa_2Q = $('#eess_boleta_2Q_exaII').html();
                var suma = parseFloat(eess_1p2q)+parseFloat(eess_2P2q)+parseFloat(eess_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2es = promedio.toFixed(2);
    
    $('#eess_boleta_2Q_N2').text(N2es);
    //*************************************************
    var prmedioes = (parseFloat(N1es) + parseFloat(N2es))/2;
    var N3es = prmedioes.toFixed(2);
    $('#eess_boleta_final').text(N3es);
    $('#sociales_text').val(N3es);
    
    
    //************INGLES********************   
    var ingles_1p = $('#ingles_boleta_1Q_1p').html();
    var ingles_2P = $('#ingles_boleta_1Q_2p').html();
    var ingles_Exa_1Q = $('#ingles_boleta_1Q_exaI').html();
                var suma = parseFloat(ingles_1p)+parseFloat(ingles_2P)+parseFloat(ingles_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1in = promedio.toFixed(2);
    
    $('#ingles_boleta_1Q_N1').text(N1in);
    //***************************************
    var ingles_1p2q = $('#ingles_boleta_2Q_1p').html();
    var ingles_2P2q = $('#ingles_boleta_2Q_2p').html();
    var ingles_Exa_2Q = $('#ingles_boleta_2Q_exaII').html();
                var suma = parseFloat(ingles_1p2q)+parseFloat(ingles_2P2q)+parseFloat(ingles_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2in = promedio.toFixed(2);
    
    $('#ingles_boleta_2Q_N2').text(N2in);
    //************************************************
    var prmedioin = (parseFloat(N1in) + parseFloat(N2in))/2;
    var N3in = prmedioin.toFixed(2);
    $('#ingles_boleta_final').text(N3in);
    $('#ingles_text').val(N3in);
    
    
    //************CULTURA ARTISTICA********************   
    var arti_1p = $('#arti_boleta_1Q_1p').html();
    var arti_2P = $('#arti_boleta_1Q_2p').html();
    var arti_Exa_1Q = $('#arti_boleta_1Q_exaI').html();
                var suma = parseFloat(arti_1p)+parseFloat(arti_2P)+parseFloat(arti_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1cu = promedio.toFixed(2);
    
    $('#arti_boleta_1Q_N1').text(N1cu);
    //*******************************************
    var arti_1p2q = $('#arti_boleta_2Q_1p').html();
    var arti_2P2q = $('#arti_boleta_2Q_2p').html();
    var arti_Exa_2Q = $('#arti_boleta_2Q_exaII').html();
                var suma = parseFloat(arti_1p2q)+parseFloat(arti_2P2q)+parseFloat(arti_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2cu = promedio.toFixed(2);
    
    $('#arti_boleta_2Q_N2').text(N2cu);
    //*********************************************
    var prmediocu = (parseFloat(N1cu) + parseFloat(N2cu))/2;
    var N3cu = prmediocu.toFixed(2);
    $('#arti_boleta_final').text(N3cu);
    $('#arte_text').val(N3cu);
    
    //*************CULTURA FISICA ***************
    var culfi_1p = $('#culfi_boleta_1Q_1p').html();
    var culfi_2P = $('#culfi_boleta_1Q_2p').html();
    var culfi_Exa_1Q = $('#culfi_boleta_1Q_exaI').html();
                var suma = parseFloat(culfi_1p)+parseFloat(culfi_2P)+parseFloat(culfi_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1fi = promedio.toFixed(2);
    
    $('#culfi_boleta_1Q_N1').text(N1fi);
    //*********************************************
    var culfi_1p2q = $('#culfi_boleta_2Q_1p').html();
    var culfi_2P2q = $('#culfi_boleta_2Q_2p').html();
    var culfi_Exa_2Q = $('#culfi_boleta_2Q_exaII').html();
                var suma = parseFloat(culfi_1p2q)+parseFloat(culfi_2P2q)+parseFloat(culfi_Exa_2Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N2fi = promedio.toFixed(2);
    
    $('#culfi_boleta_2Q_N2').text(N2fi);
    //********************************************
    var prmediofi = (parseFloat(N1fi) + parseFloat(N2fi))/2;
    var N3fi = prmediofi.toFixed(2);
    $('#culfi_boleta_final').text(N3fi);
    $('#culfi_text').val(N3fi);
    
//******************PROMEIO QUIMESTRAL GENERALY POR PARCIALES ***************
//***** PARICAL I *******
    var sumaPtem1 = parseFloat(N1l)+parseFloat(N1m)+parseFloat(N1cn)+parseFloat(N1es)+parseFloat(N1in)+parseFloat(N1cu)+parseFloat(N1fi);
    var promedioPtem1 = sumaPtem1/7;
    var PROMP1 = promedioPtem1.toFixed(2);
    $('#prom_general_1Q_boleta').text(PROMP1);
    
//***** PARICAL II *******
    var sumaPtem2 = parseFloat(N2l)+parseFloat(N2m)+parseFloat(N2cn)+parseFloat(N2es)+parseFloat(N2in)+parseFloat(N2cu)+parseFloat(N2fi);
    var promedioPtem2 = sumaPtem2/7;
    var PROMP2 = promedioPtem2.toFixed(2);
    $('#prom_general_2Q_boleta').text(PROMP2);    
    
//***** PROME GENERAL *******
    var sumaPtem3 = parseFloat(N3l)+parseFloat(N3m)+parseFloat(N3cn)+parseFloat(N3es)+parseFloat(N3in)+parseFloat(N3cu)+parseFloat(N3fi);
    var promedioPtem3 = sumaPtem3/7;
    var PROMP3 = promedioPtem3.toFixed(2);
    $('#prom_general_anual').text(PROMP3); 
    $('#prom_final2021_text').val(PROMP3);
    
//********PROYECTOS ESCOLARES *************
    var proy_es =$('#proy_boleta_2Q_exaII').text();
    $('#proy_text').text(proy_es);
    
    if (proy_es == "EX"){
        $('#descrip_proy').text('Demuestra destacado desempeño en cada fase del desarrollo del proyecto escolar lo que constituye un excelente aporte a su formación integral.');
        
    }
    if (proy_es == "MB"){
        $('#descrip_proy').text('Demuestra fiabilidad en el desempeño para cada fase del desarrollo del proyecto escolar lo que constituye un aporte en su formación integral');
        
    }
    if (proy_es == "B"){
        $('#descrip_proy').text('Demuestra un desempeño aceptable, en cada fase del desarrollo del proyecto escolar lo que contribuye parcialmente a su formación integral');
        
    }
    if (proy_es == "R"){
        $('#descrip_proy').text('Demuestra dificultad en atender cada fase del desarrollo del proyecto escolar lo que contribuye escasamente a su formación integral.');
        
    }
    
    
//******* COMPORTAMIENTO ************** 
    var comp_es =$('#compor_boleta_2Q_2p').text();
    $('#comp_text').text(comp_es);
    if (comp_es == "A"){
        $('#compor_text_').text('Lidera el cumplimiento de los compromisos establecidos para la sana Convivencia social');
        
    }
    if (comp_es == "B"){
        $('#compor_text_').text('Cumple con los compromisos establecidos para la sana convivencia social');
        
    }
    if (comp_es == "C"){
        $('#compor_text_').text('Falla ocacionalmente en el cumplimiento de los compromisos establecidos para la sana convivencia social');
        
    }
    if (comp_es == "D"){
        $('#compor_text_').text('Falla reiteradamente en el cumplimiento de los compromisos establecidos para la sana convivencia social');
        
    }
    if (comp_es == "E"){
        $('#compor_text_').text('No cumple con los compromisos establecidos para la sana convivencia social');
        
    }
    
}
    
    
    
/////******************CARGA NOTAS TAS ESTUDIANTE 1P2Q**************************
function cargaN1P2Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaN1P2Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.notaExa1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                       if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_2Q_1p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#culfi_boleta_2Q_1p").text(elemento.nota1P2Q);  
                        }
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_2Q_1p").text(elemento.nota1P2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_2Q_1p").text(elemento.nota1P2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                        
                        
                        
                    }

        }
        
    });
   
}
/////******************CARGA NOTAS TAS ESTUDIANTE 2P2Q**************************
function cargaN2P2Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaN2P2Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.notaExa1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                       if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#culfi_boleta_2Q_2p").text(elemento.nota1P2Q);
                        //$("#culfi_boleta_1Q_2p").text(elemento.nota1P2Q);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);   
                        }
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_2Q_2p").text(elemento.nota2P2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_2Q_2p").text(elemento.nota2P2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                        
                        
                        
                    }

        }
        
    });
   
}
/////******************CARGA NOTAS TAS ESTUDIANTE 2P1Q**************************
function cargaExa2Q(id_usu_notas){
    let id_nino = id_usu_notas;
    var id_envio ={"id_envio":id_nino};
    
    
    $.ajax({
        
        url: '../../backend_plan/cargaExa2Q.php',
        type: 'POST',
        data: id_envio,
        success : function (respuesta)
        {
            console.log(respuesta);
           
            var item = JSON.parse(respuesta);
            item.forEach(miFuncion);

            function miFuncion(elemento, indice) {
            //$('#pr').append( "Indice: " + indice + " Asignatura : " + elemento.asigantura + " Nota: " +elemento.notaExa1Q+ "<br>");
            //$('#pr').html("<h3>cuadro desde aca</h3>");         
                        
                       if (elemento.asigantura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Matemáticas" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#mate_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Ciencias Naturales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#cnn_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Estudios Sociales" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#eess_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Inglés" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#ingles_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Educación Cultural y Artística" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#arti_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asigantura == "Cultura Física" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#culfi_boleta_2Q_exaII").text(elemento.notaExa1Q);
                        //$("#culfi_boleta_1Q_exaI").text(elemento.notaExa1Q);    
                        }
                        if (elemento.asigantura == "Proyecto Escolar" ){
                        $("#proy_boleta_2Q_exaII").text(elemento.notaExa2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        } 
                        if (elemento.asigantura == "Comportamiento" ){
                        $("#compor_boleta_2Q_exaII").text(elemento.notaExa2QCuali);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);  
                        }
                        
                        
                        
                    }

        }
        
    });
   
}    
    
 //*****FIN DE TODO***** 

    
});