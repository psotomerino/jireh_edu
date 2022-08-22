$(document).ready(function(){
    
    console.log ('jquery funciona perfecto para extraccion de notas 2Q');
   
    
    $(document).on('click','#notas',function(){
        $('#escritorio').hide();
        $('#lista_estu').hide();
        $('#aula').hide();
        $('.extraer_notas').show();
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        let id_usu_notas = $(elemento).attr('elmentoid');
        $('#este_alumno').val(id_usu_notas);       
        //console.log (id_usu_notas);
        estrac_notas_2q1p(id_usu_notas);
        estrac_notas_2q1pRec(id_usu_notas);
        estrac_notas_2q1p_inicial(id_usu_notas);
        
        estrac_notas_2p2qA(id_usu_notas);
        estrac_notas_ppff_2Q(id_usu_notas);
        estrac_notas_2q2pA_inicial(id_usu_notas);
        estrac_notas_2p2q(id_usu_notas);
        
        //
        
       
        
    });

//************* ESTRACCION DE NOTAS 2QUIMESTRE 1parcial *****
function estrac_notas_2q1p(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2q1p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua1p2q").text(elemento.nota);
                        $("#lengua_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate1p2q").text(elemento.nota); 
                        $("#mate_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn1p2q").text(elemento.nota);
                        $("#cnn_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales1p2q").text(elemento.nota);
                        $("#eess_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte1p2q").text(elemento.nota);
                        $("#arti_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi1p2q").text(elemento.nota);
                        $("#culfi_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles1p2q").text(elemento.nota);
                        $("#ingles_boleta_2Q_1p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores1p2q").text(elemento.nota);
                        $("#valores_boleta_2Q_1p").text(elemento.nota);    
                        }
                        
                        
                        
                    }

                }

            });
    
    
} 
//************* ESTRACCION DE NOTAS 2QUIMESTRE 1parcial RECUPERACIÓN *****
function estrac_notas_2q1pRec(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2q1pRec.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua1p2qR").text(elemento.nota);
                        $("#lengua_boleta_2Q_1prec").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate1p2qR").text(elemento.nota);
                        $("#mate_boleta_2Q_1prec").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles1p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores1p2qR").text(elemento.nota);
                        }
                        
                        
                        
                    }

                }

            });
    
    
}
    //************* ESTRACCION DE NOTAS 1QUIMESTRE 1patrcial 2QUIMESTRE inicial*****
function estrac_notas_2q1p_inicial(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
   
    $.ajax({
            url: '../../backend/estrac_notas_2q1p.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(id_envio);
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
                        //$("#extract_ini").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota_2+ "<br>");
                        
                        
                       if (elemento.asignatura == "Identidad y Autonomia" )
                       {
                        $("#pos_1ini").text(elemento.asignatura);
                        $("#pos_1n_ini2Q1P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Convivencia" ){
                        $("#pos_2ini").text(elemento.asignatura);
                        $("#pos_2n_ini2Q1P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Medio Natural y Cultural" ){
                        $("#pos_3ini").text(elemento.asignatura);
                        $("#pos_3n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Relación Lógico Matemática" ){
                        $("#pos_4ini").text(elemento.asignatura);
                        $("#pos_4n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Comprensión y Expresión del lenguaje" ){
                        $("#pos_5ini").text(elemento.asignatura);
                        $("#pos_5n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Artística" ){
                        $("#pos_6ini").text(elemento.asignatura);
                        $("#pos_6n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_7ini").text(elemento.asignatura);
                        $("#pos_7n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_8ini").text(elemento.asignatura);
                        $("#pos_8n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Corporal y Motricidad" ){
                        $("#pos_9ini").text(elemento.asignatura);
                        $("#pos_9n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_10ini").text(elemento.asignatura);
                        $("#pos_10n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_11ini").text(elemento.asignatura);
                        $("#pos_11n_ini2Q1P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Desarrollo Comportamental I Quimestre" ){
                        $("#conducta_1q").text(elemento.nota_2);
                        }
                    }
                }
    });
    
}
//************* ESTRACCION DE NOTAS 2QUIMESTRE  segunda parcial *****
function estrac_notas_2p2qA(id_usu_notas){
    //alert ('este es del otro archivo');
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_2p2q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(id_envio);
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua2p2q_1").text(elemento.nota);
                        $("#lengua_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate2p2q").text(elemento.nota);
                        $("#mate_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn2p2q").text(elemento.nota);
                        $("#cnn_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales2p2q").text(elemento.nota);
                        $("#eess_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte2p2q").text(elemento.nota);
                        $("#arti_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi2p2q").text(elemento.nota);
                        $("#culfi_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles2p2q").text(elemento.nota);
                        $("#ingles_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores2p2q").text(elemento.nota);
                        $("#valores_boleta_2Q_2p").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Proyecto Lenguaje II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#lengua_proy2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Proyecto Matemáticas II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#mate_proy2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Proyecto Ciencias Naturales II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#cnn_proy2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Proyecto Estudios Sociales II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#sociales_proy2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Proyecto Ed. Culturas y Artística II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#arte_proy2q").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Proyecto Cultura Física II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#culfi_proy2q").text(elemento.nota);
                        } 
                        if (elemento.asignatura == "Proyecto Ingles II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#ingles_proy2q").text(elemento.nota);
                        } 
                        
                        if (elemento.asignatura == "Proyecto Valores II quimestre" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores_proy2q").text(elemento.nota);
                        }
                        
                        
                    }

                }

            });
    
   
       }     
//*********** ESTRACCION DE NOTAS 2QUIMESTRE  segunda parcial recuperacion *****
function estrac_notas_2p2q(id_usu_notas){
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
    console.log(id_envio);
    $.ajax({
            url: '../../backend/estrac_notas_2p2qRec.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    //alert (respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Lenguaje y Comunicación" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $("#lengua2p2qRec").text(elemento.nota);
                        $("#lengua_boleta_2Q_2prec").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Matemáticas" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $("#mate2p2qRec").text(elemento.nota);
                        $("#mate_boleta_2Q_2prec").text(elemento.nota);    
                        //alert ("tiene nota");    
                        }
                        if (elemento.asignatura == "Ciencias Naturales" ){
                        //$("#pos_3").text(elemento.asignatura);
                        $("#cnn2p2qR").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Estudios Sociales" ){
                        //$("#pos_4").text(elemento.asignatura);
                        $("#sociales2p2qRec").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        //$("#pos_5").text(elemento.asignatura);
                        $("#arte2p2qRec").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        //$("#pos_6").text(elemento.asignatura);
                        $("#culfi2p2qRec").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        //$("#pos_7").text(elemento.asignatura);
                        $("#ingles2p2qRec").text(elemento.nota);
                        }
                        if (elemento.asignatura == "Valores" ){
                        //$("#pos_8").text(elemento.asignatura);
                        $("#valores2p2qRec").text(elemento.nota);
                        }
                        
                        
                        
                    }

                }

            });
    
    
       }  
//*********** ESTRACCION DE NOTAS 2QUIMESTRE  PADRES DE FAMILIA PORTAF Y PROY *****
function estrac_notas_ppff_2Q(id_usu_notas){
    let id = id_usu_notas;
    //console.log (id);
    var id_envio = {"id_envio":id_usu_notas};
    $.ajax({
            url: '../../backend/estrac_notas_ppff_2Q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
//                        $("#extract_1q").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota+ "<br>");
                        
                        
                        if (elemento.asignatura == "Proyecto" ){
                        //$("#pos_1").text(elemento.asignatura);
                        $(".nota_ppff-2q").text(elemento.nota);    
                        }
                        if (elemento.asignatura == "Portafolio" ){
                        //$("#pos_2").text(elemento.asignatura);
                        $(".portafolio_2q").text(elemento.nota);    
                        }
                        
                        
                        
                    }

                }

            });
    
    
       }
//************* ESTRACCION DE NOTAS 1QUIMESTRE segunda parciacial 2QUIMESTRE inicial*****
function estrac_notas_2q2pA_inicial(id_usu_notas){
    //alert ('este es el boton para mostrar notas');
    let id = id_usu_notas;
    var id_envio = {"id_envio":id_usu_notas};
   
    $.ajax({
            url: '../../backend/estrac_notas_2p2q.php',
            type: 'POST',
            data: id_envio,    
            success: function (respues)
                {
                    console.log(id_envio);
                    console.log(respues);
                    //let list = JSON.parse(respues);
                    
                    var item = JSON.parse(respues);
                    item.forEach(miFuncion);

                    function miFuncion(elemento, indice) {
                        //$("#extract_ini").append( "Indice: " + indice + " Asignatura : " + elemento.asignatura + " Nota: " +elemento.nota_2+ "<br>");
                        
                        
                       if (elemento.asignatura == "Identidad y Autonomia" )
                        {
                        $("#pos_1n_ini2Q2P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Convivencia" ){
                        $("#pos_2n_ini2Q2P").text(elemento.nota_2);    
                        }
                        if (elemento.asignatura == "Medio Natural y Cultural" ){
                        $("#pos_3n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Relación Lógico Matemática" ){
                        $("#pos_4n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Comprensión y Expresión del lenguaje" ){
                        $("#pos_5n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Artística" ){
                        $("#pos_6n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Valores" ){
                        $("#pos_7n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Inglés" ){
                        $("#pos_8n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Expresión Corporal y Motricidad" ){
                        $("#pos_9n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Educación Cultural y Artística" ){
                        $("#pos_10n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Cultura Física" ){
                        $("#pos_11n_ini2Q2P").text(elemento.nota_2);
                        }
                        if (elemento.asignatura == "Desarrollo Comportamental I Quimestre" ){
                        $("#conducta_2q").text(elemento.nota_2);
                        }
                    }
                }
    });
}
$(document).on('click','#extrac_N', function(){
             calcula_notas_2Q();          
            
    });

       
  
// ****** CALCULOS MATEMATICOS LIBRETRAS SEGUNDO QUIMESTRE **************
function calcula_notas_2Q(){
   
    //$('#extrac_N').click (function(e){
        //e.preventDefault();
      
    //************LENGUAJE ********************   
        var lengua_1p = $('#lengua1p2q').html();
        var lengua_1rec = $('#lengua1p2qR').html();
        var lengua_2p = $('#lengua2p2q_1').html();
        var lengua_2rec= $('#lengua2p2qRec').html();
        var portafolio = $('#portafolio_2QA').html();
        //alert (lengua_1p); 
        if (lengua_1p >= 0 && lengua_2p >= 0){
            
            if (lengua_1rec >= 0){
                
                if(lengua_2rec >= 0){
                    var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p)+parseFloat(lengua_1rec)+parseFloat(lengua_2rec);
                    var promedio = suma/4;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#lengua_prom2p2q').text(parcial_1);
                    $('#lengua_boleta_2Q_pn8').text(parcial_1);
                }else{
                    var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p)+parseFloat(lengua_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#lengua_prom2p2q').text(parcial_1);
                    $('#lengua_boleta_2Q_pn8').text(parcial_1);
                }
            }else{
                var suma = parseFloat(lengua_1p)+parseFloat(lengua_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#lengua_prom2p2q').text(parcial_1);
                $('#lengua_boleta_2Q_pn8').text(parcial_1);
            }
            
        }else {
            alert ('falta una nota de LENGUAJE Y COMUNICACIÓN 2da parcial II Quimestre');
        }
        //************MATEMATICAS ********************   
        var mate_1p = $('#mate1p2q').html();
        var mate_1rec = $('#mate1p2qR').html();
        var mate_2p = $('#mate2p2q').html();
        var mate_2rec= $('#mate2p2qRec').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (mate_1p >= 0 && mate_2p >= 0){
            
            if (mate_1rec >= 0){
                
                if(mate_2rec >= 0){
                    var suma = parseFloat(mate_1p)+parseFloat(mate_2p)+parseFloat(mate_1rec)+parseFloat(mate_2rec);
                    var promedio = suma/4;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#mate_prom2p2q').text(parcial_1);
                    $('#mate_boleta_2Q_pn8').text(parcial_1);
                }else{
                    var suma = parseFloat(mate_1p)+parseFloat(mate_2p)+parseFloat(mate_1rec);
                    var promedio = suma/3;
                    var nota = (promedio * 7)/10;
                    var nota_parcial_1 = nota + parseFloat(portafolio);
                    var parcial_1 = nota_parcial_1.toFixed(2);
                    //alert ('nota parcial primera es   '+ parcial_1);
                    $('#mate_prom2p2q').text(parcial_1);
                    $('#mate_boleta_2Q_pn8').text(parcial_1);
                }
            }else{
                var suma = parseFloat(mate_1p)+parseFloat(mate_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#mate_prom2p2q').text(parcial_1);
                $('#mate_boleta_2Q_pn8').text(parcial_1);
            }
            
        }else {
            alert ('falta una nota de MATEMÁTICAS 2da parcial II Quimestre ');
        }
//************CIENCIAS NATURALES ********************   
        var ccnn_1p = $('#cnn1p2q').html();
        var ccnn_2p = $('#cnn2p2q').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (ccnn_1p >= 0 && ccnn_2p >= 0){
            
            var suma = parseFloat(ccnn_1p)+parseFloat(ccnn_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#cnn_prom2p2q').text(parcial_1);
                $('#cnn_boleta_2Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota CIENCIAS NATURALES 2da parcial II Quimestre ');
        }
//************SOCIALES ********************   
        var sociales_1p = $('#sociales1p2q').html();
        var sociales_2p = $('#sociales2p2q').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (sociales_1p >= 0 && sociales_2p >= 0){
            
            var suma = parseFloat(sociales_1p)+parseFloat(sociales_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#sociales_prom2p2q').text(parcial_1);
                $('#eess_boleta_2Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota ESTUDIOS SOCIALES 2da parcial II Quimestre');
        }
//************EDUCACION  ARTISITICA ********************   
        var artes_1p = $('#arte1p2q').html();
        var artes_2p = $('#arte2p2q').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (artes_1p >= 0 && artes_2p >= 0){
            
            var suma = parseFloat(artes_1p)+parseFloat(artes_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#arte_prom2p2q').text(parcial_1);
                $('#arti_boleta_2Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota EDUCACION CULTURAL Y ARTISTICA 2da parcial II Quimestre ');
        }
//************CULTURA FISICA ********************   
        var culfi_1p = $('#culfi1p2q').html();
        var culfi_2p = $('#culfi2p2q').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (culfi_1p >= 0 && culfi_2p >= 0){
            
            var suma = parseFloat(culfi_1p)+parseFloat(culfi_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#culfi_prom2p2q').text(parcial_1);
                $('#culfi_boleta_2Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota CULTURA FISICA 2da parcial II Quimestre');
        }
//************ INGLES  ********************   
        var ingles_1p = $('#ingles1p2q').html();
        var ingles_2p = $('#ingles2p2q').html();
        var portafolio = $('#portafolio_2QA').html();
        
        if (ingles_1p >= 0 && ingles_2p >= 0){
            
            var suma = parseFloat(ingles_1p)+parseFloat(ingles_2p);
                var promedio = suma/2;
                var nota = (promedio * 7)/10;
                var nota_parcial_1 = nota + parseFloat(portafolio);
                var parcial_1 = nota_parcial_1.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#ingles_prom2p2q').text(parcial_1);
                $('#ingles_boleta_2Q_pn8').text(parcial_1);
            
        }else {
            alert ('falta una nota  INGLES 2da parcial II Quimestre ');
        }
//************ VALORES ********************   
        var valores_1p = $('#valores1p2q').html();
        var valores_2p = $('#valores2p2q').html();
        //var portafolio = $('#portafolio_2QA').html();
        
        if (valores_1p >= 0 && valores_2p >= 0){
            
            var suma = parseFloat(valores_1p)+parseFloat(valores_2p);
                var nota_val_2q = suma/2;
                //var nota_val_2q = promedio /10;
                //var nota_parcial_1 = nota + parseFloat(portafolio);
                var promedio_2q_valores = nota_val_2q.toFixed(2);
                //alert ('nota parcial primera es   '+ parcial_1);
                $('#valores_prom_2q').text(promedio_2q_valores);
                $('#valores_boleta_2Q_N2').text(promedio_2q_valores);
            
        }else {
            alert ('falta una nota  VALORES 2da parcial II Quimestre ');
        }
//*****CALCULO DE NOTAS EXAMEN/PROYECTO/PADRE DE FAMILIA******************
//**************LENGUAJE **********************
        var lenguaEX_1q = $('#lengua_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(lenguaEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#lengua_prom20_2q').text(examen_1q);
        $('#lengua_boleta_2Q_pn2').text(examen_1q);
        
//**************MATEMATICAS **********************
        var mateEX_1q = $('#mate_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(mateEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#mate_prom20_2q').text(examen_1q);
        $('#mate_boleta_2Q_pn2').text(examen_1q);

//**************CIENCIAS NATURALES **********************
        var cnnEX_1q = $('#cnn_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(cnnEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#cnn_prom20_2q').text(examen_1q);
        $('#cnn_boleta_2Q_pn2').text(examen_1q);
        
//**************ESTUDIOS SOCIALES **********************
        var socialesEX_1q = $('#sociales_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(socialesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#sociales_prom20_2q').text(examen_1q);
        $('#eess_boleta_2Q_pn2').text(examen_1q);
        
//**************EXPRESION ARTISTICA **********************
        var arteEX_1q = $('#arte_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(arteEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#arte_prom20_2q').text(examen_1q);
        $('#arti_boleta_2Q_pn2').text(examen_1q);
        
//**************CULTURA FISICA **********************
        var culfiEX_1q = $('#culfi_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(culfiEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#culfi_prom20_2q').text(examen_1q);
        $('#culfi_boleta_2Q_pn2').text(examen_1q);
        
//**************INGLES **********************
        var inglesEX_1q = $('#ingles_proy2q').html();
        var notappff_1q = $('.nota_ppff-2q').html();
        
        var suma = parseFloat(inglesEX_1q)+parseFloat(notappff_1q);
        var promedio = suma/2;
        var nota = (promedio * 2)/10;
        var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        $('#ingles_prom20_2q').text(examen_1q);
        $('#ingles_boleta_2Q_pn2').text(examen_1q);
        
//**************VALORES **********************
        //var valoresEX_1q = $('#valores_proy2q').html();
        //var notappff_1q = $('.nota_ppff-2q').html();
        
        //var suma = parseFloat(valoresEX_1q)+parseFloat(notappff_1q);
        //var promedio = suma/2;
        //var nota = (promedio * 2)/10;
        //var examen_1q = nota.toFixed(2);
        //alert ('nota parcial primera es   '+ parcial_1);
        //$('#valores_prom20_2q').text(examen_1q);
        
//***********PROMEDIO SEGUNDO QUIMESTRE *********************
        //lengua
        var lengua_80 = $('#lengua_prom2p2q').html();
        var lengua_20 =  $('#lengua_prom20_2q').html();
        
        var suma = parseFloat(lengua_80)+parseFloat(lengua_20);
        var nota_final= suma.toFixed(2);
        $('#lengua_prom_2q').text(nota_final);
        $('#lengua_boleta_2Q_N2').text(nota_final);
        
        //mate
        var mate_80 = $('#mate_prom2p2q').html();
        var mate_20 =  $('#mate_prom20_2q').html();
        
        
        var suma = parseFloat(mate_80)+parseFloat(mate_20);
        var nota_final= suma.toFixed(2);
        $('#mate_prom_2q').text(nota_final);
        $('#mate_boleta_2Q_N2').text(nota_final);
        
        //naturales
        var cnn_80 = $('#cnn_prom2p2q').html();
        var cnn_20 =  $('#cnn_prom20_2q').html();
        
        var suma = parseFloat(cnn_80)+parseFloat(cnn_20);
        var nota_final= suma.toFixed(2);
        $('#cnn_prom_2q').text(nota_final);
        $('#cnn_boleta_2Q_N2').text(nota_final);
        
        //sociales
        var sociales_80 = $('#sociales_prom2p2q').html();
        var sociales_20 =  $('#sociales_prom20_2q').html();
        
        var suma = parseFloat(sociales_80)+parseFloat(sociales_20);
        var nota_final= suma.toFixed(2);
        $('#sociales_prom_2q').text(nota_final);
        $('#eess_boleta_2Q_N2').text(nota_final);
        
        //cultura Artistica
        var arte_80 = $('#arte_prom2p2q').html();
        var arte_20 =  $('#arte_prom20_2q').html();
        
        
        var suma = parseFloat(arte_80)+parseFloat(arte_20);
        var nota_final= suma.toFixed(2);
        $('#arte_prom_2q').text(nota_final);
        $('#arti_boleta_2Q_N2').text(nota_final);
        
        //cultura fisica
        var culfi_80 = $('#culfi_prom2p2q').html();
        var culfi_20 =  $('#culfi_prom20_2q').html();
        
        
        var suma = parseFloat(culfi_80)+parseFloat(culfi_20);
        var nota_final= suma.toFixed(2);
        $('#culfi_prom_2q').text(nota_final);
        $('#culfi_boleta_2Q_N2').text(nota_final);
        
        //Ingles
        var ingles_80 = $('#ingles_prom2p2q').html();
        var ingles_20 =  $('#ingles_prom20_2q').html();
        
        var suma = parseFloat(ingles_80)+parseFloat(ingles_20);
        var nota_final= suma.toFixed(2);
        $('#ingles_prom_2q').text(nota_final);
        $('#ingles_boleta_2Q_N2').text(nota_final);
        
        //valores
        //var valores_80 = $('#valores_prom2p2q').html();
        //var valores_20 =  $('#valores_prom20_2q').html();
        
        //var suma = parseFloat(valores_80)+parseFloat(valores_20);
        //var nota_final= suma.toFixed(2);
        //$('#valores_prom_2q').text(nota_final);
        
//****** PROEMDIO GENETAL SEGUNDO QUIMESTRE **************
        var lengua2q = $('#lengua_prom_2q').html();
        var mate2q = $('#mate_prom_2q').html();
        var naturales2q = $('#cnn_prom_2q').html();
        var sociales2q = $('#sociales_prom_2q').html();
        var arte2q = $('#arte_prom_2q').html();
        var culfi2q = $('#culfi_prom_2q').html();
        var ingles2q = $('#ingles_prom_2q').html();
        
        var suma = parseFloat(lengua2q)+parseFloat(mate2q)+parseFloat(naturales2q)+parseFloat(sociales2q)+parseFloat(arte2q)+parseFloat(culfi2q)+parseFloat(ingles2q);
        var nota = suma/7;
        var promedio_1q= nota.toFixed(2);
        $('#prom_2QQ').text(promedio_1q);
        $('#prom_general_2Q_boleta').text(promedio_1q);
    
//******* PROMEDIO FINAL A_LECTIVO 2020-2021 POR ASIGNATURA ***********
        var lengua1q = $('#notafinal_1q_lengua').html();
        var mate1q = $('#notafinal_1q_mate').html();
        var naturales1q = $('#notafinal_1q_cnn').html();
        var sociales1q = $('#notafinal_1q_sociales').html();
        var arte1q = $('#notafinal_1q_arte').html();
        var culfi1q = $('#notafinal_1q_culfi').html();
        var ingles1q = $('#notafinal_1q_ingles').html();
        var valores1q = $('#notafinal_1q_valores').html();
        var valores2q = $('#valores_prom_2q').html();
        // Lenguaje
        var prom_lengua = parseFloat(lengua2q)+parseFloat(lengua1q);
        var lengua =  prom_lengua/2;
        var final_lengua = lengua.toFixed(2);
        $('#lengua_fin').text(final_lengua);
        $('#lengua_text').val(final_lengua);
        $('#lengua_boleta_final').text(final_lengua);
        // Matematicas
        var prom_mateF = parseFloat(mate1q)+parseFloat(mate2q);
        var mateF =  prom_mateF/2;
        var final_mateF = mateF.toFixed(2);
        $('#mate_fin').text(final_mateF);
        $('#mate_text').val(final_mateF);
        $('#mate_boleta_final').text(final_mateF);
        // Ciencias Naturales
        var prom_cnnF = parseFloat(naturales1q)+parseFloat(naturales2q);
        var ciencasF= prom_cnnF /2;
        var final_ciencasF = ciencasF.toFixed(2);
        $('#cnn_fin').text(final_ciencasF);
        $('#cnn_text').val(final_ciencasF);
        $('#cnn_boleta_final').text(final_ciencasF);
    
        // Estudios Sociales
        var prom_socialesF = parseFloat(sociales1q)+parseFloat(sociales2q);
        var socialesF = prom_socialesF /2;
        var final_soc = socialesF.toFixed(2);
        $('#sociales_fin').text(final_soc);
        $('#sociales_text').val(final_soc);
        $('#eess_boleta_final').text(final_soc);
    
        // Artisitica
        var prom_arteF = parseFloat(arte1q)+parseFloat(arte2q);
        var arteF = prom_arteF /2;
        var final_arteF = arteF.toFixed(2);
        $('#arte_fin').text(final_arteF);
        $('#arte_text').val(final_arteF);
        $('#arti_boleta_final').text(final_arteF)
    
        // Cultura fisica
        var prom_culfiF = parseFloat(culfi1q)+parseFloat(culfi2q);
        var culfiF = prom_culfiF /2;
        var final_culfiF = culfiF .toFixed(2);
        $('#culfi_fin').text(final_culfiF);
        $('#culfi_text').val(final_culfiF);
        $('#culfi_boleta_final').text(final_culfiF);
    
    
        // Ingles
        var prom_inglesF = parseFloat(ingles2q)+parseFloat(ingles1q);
        var inglesF = prom_inglesF /2;
        var final_inglesF = inglesF.toFixed(2);
        $('#ingles_fin').text(final_inglesF);
        $('#ingles_text').val(final_inglesF);
        $('#ingles_boleta_final').text(final_inglesF);
    
        // Valores
        var prom_valoresF = parseFloat(valores1q)+parseFloat(valores2q);
        var valoresF = prom_valoresF /2;
        var final_valoresF = valoresF.toFixed(2);
        $('#valores_fin').text(final_valoresF);
        $('#valores_text').val(final_valoresF);
        $('#valores_boleta_final').text(final_valoresF);
    
    
//****** PROMEDIO FINAL A_LECTIVO 2020-2021 **************
        var lengua_2021 = $('#lengua_fin').html();
        var mate_2021 = $('#mate_fin').html();
        var naturales_2021 = $('#cnn_fin').html();
        var sociales_2021 = $('#sociales_fin').html();
        var arte_2021 = $('#arte_fin').html();
        var culfi_2021 = $('#culfi_fin').html();
        var ingles_2021 = $('#ingles_fin').html();
        
        var suma_2021 = parseFloat(lengua_2021)+parseFloat(mate_2021)+parseFloat(naturales_2021)+parseFloat(sociales_2021)+parseFloat(arte_2021)+parseFloat(culfi_2021)+parseFloat(ingles_2021);
        var nota_2021 = suma_2021/7;
        var promedio_2021= nota_2021.toFixed(2);
        $('#prom_final2021').text(promedio_2021);
        $('#prom_final2021_text').val(promedio_2021);
        $('#prom_general_anual').text(promedio_2021);


}
   

    
    
//*************FIN DE TODO ****************    
});



















