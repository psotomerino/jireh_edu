<?php 
    include '../../templates/header.php';
    
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>

<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    #para_notas{
        position:absolute;
        float: left;
        margin-left: 50px;
        margin-top: 80px;
    }
    .mi_fila{
        display: none;
    }
    input:invalid+span:after {
      content: '✖';
      padding-left: 5px;
    }

    input:valid+span:after {
      content: '✓';
      padding-left: 5px;
    }
    

</style>

<main id="para_notas">
    <h5 id="txt_gen"></h5>
    <div class="alert alert-warning" role="alert"><p>SUBIR CALFICACIONES AÑO LECTIVO 2021 - 2022</p>
<!--    <div class="btn btn-success" id="btn_EXA1Q">Click para agregar Notas Examen 1Quimestre</div>-->
    <div class="btn btn-success" id="btn_EXA2Q">Click para agregar Notas Examen 1Quimestre</div>
    </div>
    
    <div class="col-md-8" id="">
               <p><b>Nivel de educación</b>
                    <select id="nivel_edu" name="nivel_edu" class="form-control"></select>
               </p>
               <p id="bloq_materia"><b>Asignatura</b>
                    <select id="materia_id" name="materia_id" class="form-control">
                        <option value="0">Elija una opción</option>
                        <!--<option value="8">Lenguaje id:8</option>
                        <option value="7">Matemáticas id:7</option>
                        <option value="10">Ciencias Naturales  id:10</option>
                        <option value="9">Estudios Sociales id:9</option>
                        <option value="11">Inglés id:11</option>-->
<!--
                        <option value="12">Cultura Física id:12</option>
                        <option value="14">Proyectos Esoclares id:14</option>
-->
                        <option value="40">Comportamiento id:40</option>
<!--                        <option value="13">Edu. Cultural y Artística id:13</option>-->
                    </select>
                </p>
                <!--<p id="bloq_parcial"><b>Parcial</b>
                    <select id="parcial_id" name="nom_parcial" class="form-control">
                        <option value="0">Elija una opción</option>
                        <option value="1">1P_1Q</option>
                        <option value="2">2P_1Q</option>
                        <option value="3">EXA_1Q</option>
                        <option value="4">1P_2Q</option>
                        <option value="5">2P_2Q</option>
                        <option value="6">EXA_2Q</option>
                        
                    </select> 
               </p>-->
   
                            
    </div>
    
    
    <table class="table-striped mt-3" BORDER WIDTH="80%" border=1>
        <tr align = center style ="background: #0D6CA6; color: white;"  >
            <td>Nombres</td>
            <td>Apellidos</td>
            <td class="mi_fila">id_usuario</td>
            <td class="mi_fila">id_año_lectivo</td>
            <td class="mi_fila">id_oferta_aca</td>
            <td class="">Parcial</td>
            <td>id_asignatura</td>            
            <td id="cuanti">Notas</td>
            
        </tr>
    </table>
    <form id="form_notas_2022" >
            
                <div id="notas_cal" class="form-inline" ></div> 
                
                      
                <div class="mt-2">
                <input type="submit" id="envio1P1Q" class="btn btn-primary" value="SUBIR CALIFICACIONES 1P1Q">
                <input type="submit" id="envio2P1Q" class="btn btn-primary" value="SUBIR CALIFICACIONES 2P1Q">
                <input type="submit" id="envioExa1Q" class="btn btn-primary" value="SUBIR CALIFICACIONES EXA">
                <input type="submit" id="envio1P2Q" class="btn btn-primary" value="SUBIR CALIFICACIONES 1P2Q"> 
                <input type="submit" id="envio2P2Q" class="btn btn-primary" value="SUBIR CALIFICACIONES 2P2Q">
                <input type="submit" id="envioExa2Q" class="btn btn-warning" value="SUBIR CALIFICACIONES EXA 2Q">    
                <input type="text" id="cancelar_" class="btn btn-danger" value="CANCELAR">
                </div>
    </form> 
    <br>
    <br>
    <br>
    <br>
    <br>
   
</main>
