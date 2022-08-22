$(document).ready(function(){
    console.log('jquery funciona perfecto para las confirar cupo');
   $('#para_confirmar').hide();
//****************BUSCAR SI EXISTE EN LA BASE *************
$('#formulario_verficador').submit(buscarUsuario);
    function buscarUsuario(e){
        e.preventDefault();
        //console.log('funciona el boton');
        let datos = new FormData($('#formulario_verficador')[0]);
        $.ajax({
            url:'../backend/busca_cedula.php',
            type: 'POST',
            data: datos,
            contentType: false,
         processData: false,
         success: function(respuesta){
            console.log(respuesta);
            var jsonData = JSON.parse(respuesta);
            if (jsonData == null){
                alert ("Este estudiante no existe en la base de datos SI DESEA PUEDE SOLICITAR UN CUPO");
                $(location).attr('href','https://jireh.edu.ec/index.php');    
            }else{
                console.log (jsonData);
                if(jsonData.Status == "con_cupo_2021"){
                    alert ("Este estudiante YA TIENE UN CUPO ASIGNADO PARA EL AÑO LECTIVO 2022-2023, por favor espere las fechas de matriculas");
                    $(location).attr('href','https://jireh.edu.ec/index.php'); 
                }
                if(jsonData.Status == "matriculado"){
                    alert ("Desea SOLICITAR UN CUPO para el año lectivo 2022 - 2023");
                    $('#cedula_estu').val(jsonData.Cedula);
                    $('#nombre_estu').val(jsonData.Nombres);
                    $('#apellido_estu').val(jsonData.Apellidos);
                    $('#status_estu').val(jsonData.Status);
                    $('#para_confirmar').show();
                }
            }

            }
        });
    }
//*********BOTON CONFIRMAR CUPO **************
$(document).on ('click','#confirmar_cupo',function(e){
   e.preventDefault();
    alert('esta a punto de separar un cupo para el año lectivo 2022 - 2023');
    let datos = new FormData($("#confirma_2021")[0]);
    $.ajax({
        url: '../../backend/cupo_2021.php',
        type: 'POST',
        data: datos,
        contentType: false,
        processData: false,
        success: function (respuesta){
            console.log(respuesta);
            var jsonData = JSON.parse(respuesta);
            if (jsonData.success == "1")
                {
                    alert('Usted se encuentra ya con un cupo asignado ESPERE EL TIEMPO DE MATRICULAS para los siguietnes pasos'); 
                    window.location.href = "https://jireh.edu.ec/index.php";
                    
                }else{
                    $('#form_confirma').hide();
                    alert ('ha separado el cupo para este año lectivo 2022 - 2023'); 
                    $('#formulario_verificador').trigger();
                    $('#formulario_verificador').hide();
                    $('#confirma_2021').trigger();
                    $('#confirma_2021').hide();            
                    window.location.href = "https://jireh.edu.ec/index.php"; 
                }
              

        }
    });
    
});
    
    
//*************FIN DE TODO    
});