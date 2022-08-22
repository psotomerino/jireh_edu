$(document).ready(function(){
var id_usu_notas =$('#este_alumno').text();
//alert (este_alumno); 
busca_estudiante_2021(id_usu_notas);
cargaN1P1Q(id_usu_notas);
cargaN2P1Q(id_usu_notas);
cargaExa1Q(id_usu_notas);
cargaN1P2Q(id_usu_notas); 

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
                        
                        
                        
                    }

        }
        
    });
}
/////******************CARGA NOTAS TAS ESTUDIANTE 2P1Q**************************
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
                var N1 = promedio.toFixed(2);
    
    $('#lengua_boleta_1Q_N1').text(N1);
    
    //************MATEMATICAS ********************   
    var mate_1p = $('#mate_boleta_1Q_1p').html();
    var mate_2P = $('#mate_boleta_1Q_2p').html();
    var mate_Exa_1Q = $('#mate_boleta_1Q_exaI').html();
                var suma = parseFloat(mate_1p)+parseFloat(mate_2P)+parseFloat(mate_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1 = promedio.toFixed(2);
    
    $('#mate_boleta_1Q_N1').text(N1);
    
    //************CIENCAS NATURALES********************   
    var cnn_1p = $('#cnn_boleta_1Q_1p').html();
    var cnn_2P = $('#cnn_boleta_1Q_2p').html();
    var cnn_Exa_1Q = $('#cnn_boleta_1Q_exaI').html();
                var suma = parseFloat(cnn_1p)+parseFloat(cnn_2P)+parseFloat(cnn_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1 = promedio.toFixed(2);
    
    $('#cnn_boleta_1Q_N1').text(N1);
    
    //************ESTUDIOS SOCIALES********************   
    var eess_1p = $('#eess_boleta_1Q_1p').html();
    var eess_2P = $('#eess_boleta_1Q_2p').html();
    var eess_Exa_1Q = $('#eess_boleta_1Q_exaI').html();
                var suma = parseFloat(eess_1p)+parseFloat(eess_2P)+parseFloat(eess_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1 = promedio.toFixed(2);
    
    $('#eess_boleta_1Q_N1').text(N1);
    
    //************INGLES********************   
    var ingles_1p = $('#ingles_boleta_1Q_1p').html();
    var ingles_2P = $('#ingles_boleta_1Q_2p').html();
    var ingles_Exa_1Q = $('#ingles_boleta_1Q_exaI').html();
                var suma = parseFloat(ingles_1p)+parseFloat(ingles_2P)+parseFloat(ingles_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1 = promedio.toFixed(2);
    
    $('#ingles_boleta_1Q_N1').text(N1);
   
    //************CULTURA ARTISTICA********************   
    var arti_1p = $('#arti_boleta_1Q_1p').html();
    var arti_2P = $('#arti_boleta_1Q_2p').html();
    var arti_Exa_1Q = $('#arti_boleta_1Q_exaI').html();
                var suma = parseFloat(arti_1p)+parseFloat(arti_2P)+parseFloat(arti_Exa_1Q);
                var promedio = suma/3;
                /*var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);*/
                var N1 = promedio.toFixed(2);
    
    $('#arti_boleta_1Q_N1').text(N1);
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
                        $("#culfi_boleta_1Q_1p").text(elemento.nota1P2Q);    
                        //$("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        
                        
                        
                    }

        }
        
    });
   
}
    
//******** FIN DE TODO **********    
});