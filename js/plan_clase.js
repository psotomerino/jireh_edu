$(document).ready(function(){
    
    //alert ('funciona bien para plan de clase');
    
    $('#este_profe').hide();
    $('.miplan_1').hide();
    $('#info_1').hide();
    $('#OG_menu').hide();
    $('#OE').hide();
    $('#Destreza').hide();
    $('#CE').hide();
    $('#IE').hide();
    $("#mis_planes").hide();
    
   
    $(document).on('click','#btn-nuevo-P', function(){
            //alert ("nuevo plan");
            $('#plan_new').show();
            $('.miplan_1').hide();
            $("#mis_planes").show();
    });
    $(document).on('click','#btn-misPlanes', function(){
            //alert ("nuevo plan");
            $("#lista_planes").show();
            $('.miplan_1').hide();
    });
    
    $(document).on('click','#btn_miplan', function(){
        
        $('#pag_inicio').hide();
        //$('#info_1').show();
        $('.miplan_1').show();
        $('.admin').hide();
        var profe = $('#este_profe').text();
        if(profe == 256){
            $('.admin').show();
            
        }      
        
    });
    $(document).on('click','#btn_OG', function(){
        $('#OG_menu').show();
        $('#Destreza').hide();
        $('#CE').hide();
        
    });
    $(document).on('click','#btn_OE', function(){
        $('#OE').show();
        $('#Destreza').hide();
        $('#CE').hide();
        $('#IE').hide();
        
    });
    $(document).on('click','#btn_destreza', function(){
        $('#OE').hide();
        $('#Destreza').show();
        $('#CE').hide();
        $('#IE').hide();
        
    });
    
    $(document).on('click','#btn_CE', function(){
        $('#OE').hide();
        $('#Destreza').hide();
        $('#CE').show();
        $('#IE').hide();
        
    });
    $(document).on('click','#btn_IE', function(){
        $('#OE').hide();
        $('#Destreza').hide();
        $('#CE').hide();
        $('#IE').show();
        
    });
    $(document).on('click','#OE_cerrar', function(){
        $('#OE').hide();
        $('#Destreza').hide();
        $('#CE').hide();
        $('#IE').hide();
        
        
    });
    
//*****INSERTA OBJETIVOS GEENRALES*************
$(document).on('click','#btn_OG_envia',function(e){
                e.preventDefault();
                //alert ("botn envia objetivo general"); 
                let datos = new FormData($("#OG_ingreso")[0]);
                $.ajax({
                    url: '../../backend/inserta_OB.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(datos)
                    {
                    //console.log(datos);
                    alert (datos);                    
                    $('#OG_ingreso').trigger('reset');    
                        
                     

                     }

                  });
                    
    
}); 
//*****INSERTA OBJETIVOS ESPECIFICOS*************
$(document).on('click','#btn_OE_enviar',function(e){
                e.preventDefault();
                //alert ("botn envia objetivo especifico"); 
                let datos = new FormData($("#form_OE")[0]);
                $.ajax({
                    url: '../../backend/inserta_OE.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(datos)
                    {
                    //console.log(datos);
                    alert (datos);                    
                    $('#editor').val('');   
                        
                     

                     }

                  });
                    
    
});
//*****INSERTA DESTREZAS *************
$(document).on('click','#btn_Destreza_enviar',function(e){
                e.preventDefault();
                //alert ("botn envia objetivo especifico"); 
                let datos = new FormData($("#form_Destreza")[0]);
                $.ajax({
                    url: '../../backend/inserta_Destreza.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(datos)
                    {
                    //console.log(datos);
                    alert (datos);                    
                    $('#editor_D').val('');   
                        
                     

                     }

                  });
                    
    
});
//*****INSERTA CRITERIOS EVALUACION *************
$(document).on('click','#btn_CE_enviar',function(e){
                e.preventDefault();
                //alert ("botn envia objetivo especifico"); 
                let datos = new FormData($("#form_CE")[0]);
                $.ajax({
                    url: '../../backend/inserta_CE.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(datos)
                    {
                    //console.log(datos);
                    alert (datos);                    
                    $('#editor_CE').val('');   
                        
                     

                     }

                  });
                    
    
}); 
//*****INSERTA INDICADOR DE EVALUACION *************
$(document).on('click','#btn_IE_enviar',function(e){
                e.preventDefault();
                //alert ("botn envia objetivo especifico"); 
                let datos = new FormData($("#form_IE")[0]);
                $.ajax({
                    url: '../../backend/inserta_IE.php',
                    type: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(datos)
                    {
                    //console.log(datos);
                    alert (datos);                    
                    $('#editor_IE').val('');   
                        
                     

                     }

                  });
                    
    
});    
//****** FIN DE TODO ********    
});