$(document).ready(function(){
    
    $('.material_estudio').hide();   
    $('.nuevo_material').hide(); 
    $('.mis_materiales').hide();
    $('#este_material').ckeditor();
    var this_prof = $('#este_profe').text();
    //alert (this_prof);
    $('#id_docente').val(this_prof);
    mis_temas(this_prof)

    
    $(document).on('click','#btn_material_estudio',function(){
        $('.material_estudio').show();     
    })

    $(document).on('click','#cerrar_ma', function(){
        $('.material_estudio').hide();  
        $('#sub_menu').hide();   
    })

    $(document).on('click','#new_material', function(){
        $('#sub_menu').hide(); 
        $('.mis_materiales').hide(); 
        $('.nuevo_material').show(); 
    })

    $(document).on('click','#mi_material', function(){
        $('#sub_menu').hide(); 
        $('.nuevo_material').hide(); 
        $('.mis_materiales').show(); 
        mis_temas(this_prof) 
    })
//** CARGAR AULAS ASIGNADAS POR DOCENTE */
$.ajax({  
    url: 'lectivo2022_2023/backend_2022/cargar_aula_asig.php',
    type: 'POST',
    data: {'id_profe': this_prof}
    })
    .done(function(aulas_){
        //console.log (this_prof);
        console.log (aulas_);
        $('#mi_grado_').html(aulas_); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar las aulas asignadas');
    })
//**CARGA ASIGNATURAS POR DOCENTE */
$.ajax({  
    url: 'lectivo2022_2023/backend_2022/cargar_materias.php',
    type: 'POST',
    data: {'id_profe': this_prof}
    })
    .done(function(materias_){
        //console.log (this_prof);
        console.log (materias_);
        $('#lista_materias_').html(materias_); 
        
    })
    .fail(function(){
        alert ('hubo un error al cargar sus materias asignadas');
    })
//GUARDAR MATERIAL DE ESTUDIO //
$(document).on('click','#btn_material_es',function(e){
    e.preventDefault();
    var grado_ = $('#mi_grado_').val();
    var materia_ = $('#lista_materias_').val();
    if ( grado_ == 0){
        alert ("Debe escoger un grado EGB");
    }else{
        if  (materia_ == 0){
            alert ("Debe escoger una materia");
        }else{
            //alert ("procedemos a guardar el material de estudio");
            for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
            var form_R = $("#form_material");
            var datos = new FormData($("#form_material")[0]);
                $.ajax({
                url: 'lectivo2022_2023/backend_2022/inserta_material_estudio.php',
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
                 
                document.getElementById("loading_full").style.display="none";      
                alert (datos);
                form_R[0].reset();
                $('#material_1').html("<p> inserte aqui su material de estudio </p>");
            //     mis_planes(); 
            //     $('#resultado1').html('');
                 }
                });
        }
    }   

    }); 
/** LISTADO DE TEMAS  */
function mis_temas(this_prof){
    let id_pro = this_prof;
       $.ajax({
          url: 'lectivo2022_2023/backend_2022/crud_temas.php',
          type: 'POST',
          data: {'id': id_pro}
         })
        .done(function(listas_temas){
           
        let i = 1;  
        let listas = JSON.parse(listas_temas);
        let template='';
        listas.forEach(lista =>{                
                template+=`
                
                <tr align="center" elmentoid="${lista.id_material}">
                   <td>${i++}</td>   
                   <td>${lista.grado}</td>
                   <td>${lista.materia}</td> 
                   <td>${lista.tema}</td>  
                   <td id="id_mimateria">${lista.id_asignatura}</td>  
                   <td id="material_esS">${lista.material_es}</td> 
                   <td><button type="button" id="corregir_material" class="btn btn-warning" data-bs-toggle="" data-bs-target="#exampleModal">VER/EDITAR</button></td>
                   
                </tr>`;
                $('#mis_temas').html(template);                
              });
           
        console.log (listas_missilabos);
        })
        .fail(function(){
          alert('Hubo un errror al cargar la lista de temas');
        })           

}
/** BOTON EDITAR MATERIAL */
$(document).on('click','#corregir_material',function(){
    let elemento = $(this)[0].parentElement.parentElement;
    let id_de_inci = $(elemento).attr('elmentoid');
    //alert (id_de_inci);
    $('#exampleModal').modal('show');
    busca_material(id_de_inci)

});

//********* BUSCA MATERIAL ESTUDIO **********
function busca_material(id_de_inci){
    let id = id_de_inci;
    var id_asignatura = $('#id_mimateria').text();
    //alert (id_asignatura);
    var id_envio ={"id_envio":id , "id_mimateria": id_asignatura}; 
    $.ajax({
        url: 'lectivo2022_2023/backend_2022/solo_material.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
            {
                //alert (respuesta);
                const item = JSON.parse(respuesta);
                $('#mi_material_es').val(item.id_material);
                $('#este_material').val(item.material);  
                //alert (item.nom_asignatura);            
                $('#mi_materia').val(item.nom_asignatura);
                $('#mi_titulo').val(item.tema);
                
            }
    });
} 
//*****ACTUALIZA MATERIAL DE ESTUDIO*******
$(document).on('click','#act_material', function(e){
    e.preventDefault();
    //alert ("funciona el boton actualizar el material de estudio");
    for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    let datos = new FormData($("#update_material")[0]);
    $.ajax({
        url: 'lectivo2022_2023/backend_2022/actualiza_material.php',
        type: 'POST',
        data: datos,
        contentType: false,
        processData: false,
        success: function(datos) 
        {
            alert (datos);
            location.reload();   
                   
        }
    });  
}) 


//****FIN DE TODO */    
});