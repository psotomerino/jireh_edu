<?php 
    include '../../templates/header.php';

    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>

<style>
    #txt_nivel{
        padding: 2px;
        background: #5C73F2;
        color: whitesmoke;
    }
</style>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    .form1q{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 60px;
    }
    .extraer_notas{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 250px;
    }
    #formu_notas{
        margin-top: 20px;
        
    }
    #btn-display{
        margin-left: 200px;
        margin-top: 70px; 
    }
    #btn-display_1{
        margin-left: 200px;
        margin-top: 70px; 
    }
    .plant{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 60px;
    }
    .plant_inicial{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 60px;
    }
    .contenedor{
        border: 1px solid crimson;
        display: flex;
        /*justify-content: space-between;*/
        margin: 0 auto;
        /*width: 300px;*/
        font-size: 14px;
        
    }
    .al_nota{
        text-align: right;
    }
    .color1p {
        background:  #E6F3FF;
    }
    .colorfin{
        font-weight: bold;
    }
    .contenido {
        /*display: none;*/
        background: #E6F3FF;

        
    }
    #prom_1Q {
        display: block;
        width: 80px;
    }
    #mostrar_asig {
        display: block;
    }
    #1p_2q {
        display: block;
    }
    #1p_2qR {
        display: block;
    }
    #2p_2q {
        display: block;
    }
    #2p_2qR {
        display: block;
    }
    #prom80_2q{
        display: block;
    }
    #proy_2q{
        display: block;
    }
    #ppff_2q{
        display: block;
    }
    #prom20_2q{
        display: block;
    }
    #prom_2q{
        display: block;
    }
    #porta_2q{
        display: block;
    }
    .color_ppff{
        background: #3EB595;
    }
    .color_prom{
        background: #FFF447;
    }
    .contenido_par{
        width: 80px;
        background: #F2EDA2;
        display: block;
    }
    .contenido_parII{
         width: 80px;
    }
    .print_1{
        float: left;
        margin-top: 60px;
        margin-left: 10px;
        width: 50%; 
       
    }
    
    .print_2{
        float: left;
        margin-top: 60px;
        margin-left: 10px;
        width: 50%; 
       
    }
    .cuerpo_A4_2{
        height: 890px;
        width: 595px;
        /* to centre page on screen*/
        /*margin-left: auto;
        margin-right: auto;*/
        text-align: center;    
    }
    .cuerpo_A4_3{
        height: 595px;
        width: 890px;
        /* to centre page on screen*/
        /*margin-left: auto;
        margin-right: auto;*/
        text-align: center; 
        margin-left: 8px;
    }
    .parrafo{
        text-align: justify;
        font-size: 12px; 
        
    }
    .nota_input{
        border: 0;
        text-align: center;
    }
    .parrafo_2{
        font-size: 12px;
        color: black;
        text-align: justify;
    }
    .parrafo_3{
        font-size: 11px;
        color: black;
        text-align: left;
    }
    .parrafo_4{
        font-size: 12px;
        color: darkred;
        text-align: center;
    }
    #logo_1{
        width: 90%;  

    }
    .titulo_enca{
        font-size: 16px;
        color: darkblue;
    }
    .parrafo_5{
        font-size: 11px;
        text-align: center;
        font-weight: bold; 
    }
    .parrafo_6{
        font-size: 11px;
        text-align: center;
        color: blue;
    }
    #tab_enca{
        float: left;
        margin-top: -20px;
    }


 
</style>
<div id="ver_boleta">
   
    <?php  include 'boleta.php' ?>
    <div class="btn-group" id="btn-display">
<!--      <button type="button" class="btn btn-info" id="1q_bas">PRIMER QUIMESTRE</button>
      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>-->
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" id="1p_bas">Primera Parcial</a>
        <a class="dropdown-item" href="#" id="1p_bas_recup" >Recuperación Primera Parcial</a>
        <a class="dropdown-item" href="#" id="2p_bas">Segunda Parcial</a>
        <a class="dropdown-item" href="#" id="2p_bas_recup">Recuperación Segunda Parcial</a>
        <a class="dropdown-item" href="#" id="1q_exa">Examen Quimestral</a>
        <a class="dropdown-item" href="#" id="1q_exa_ingles">Examen Quimestral Ingles</a>
        <!--<a class="dropdown-item" href="#" id="1p_ini_conducta">Desarrollo Comportamental Primer Quimestre</a>-->
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" id="actualiza_notas">Ver Curso</a>
        
      </div>
    </div>
      
</div>
<div id="ver_boleta_ini">
   
      <?php include 'boleta_inicial.php' ?>
    <div class="btn-group" id="btn-display_1">
<!--      <button type="button" class="btn btn-info" id="1q_ini">PRIMER QUIMESTRE</button>
      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>-->
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" id="1p_ini_btn">Primer Quimestre</a>
        <a class="dropdown-item" href="#" id="1p_ini_conducta">Desarrollo Comportamental Primer Quimestre</a>
        <!--<a class="dropdown-item" href="#" id="2p_ini_btn">Segunda Parcial</a>-->       
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" id="actualiza_notas">Ver Curso</a>
      </div>
    </div>
      
</div>

<main id="">
   <input type="text" id="este_alumno" class="d-none">
   <input type="text" id="este_curso" class="d-none">

    <div class="row form1q" id="1q1p">
    <div class="col-12" >
    
        <form role="form" id="notas_basica" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="1">Primer Parcial  primer quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="23">Valores</option> 
                                        <!--<option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-danger btn-block mt-2" id="btn_bas" >GUARDAR NOTA PRIMER QUIMESTRE PRIMERA PARCIAL</button> 
            <div class="">
               <input class="d-none" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div> 
<!--*******PRIMER QUIMESTRE SEGUNDA PARCIA *************************************-->
    <div class="row form1q" id="1q2p">
    <div class="col-12" >
    
        <form role="form" id="notas_basica_2p" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="2">Segunda Parcial  primer quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="23">Valores</option> 
                                        <!--<option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-warning btn-block mt-2" id="btn_bas_2p" >GUARDAR NOTA PRIMER QUIMESTRE SEGUNDA PARCIAL</button> 
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas2p" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas2p" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas2p" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div>
<!--*******PRIMER QUIMESTRE PRIMERA PARCIAL RECUPERACION *************************************-->
    <div class="row form1q" id="1q1pRecup">
    <div class="col-12" >
    
        <form role="form" id="notas_basica_1pRecup" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="9">Recuperacion primera parcial primer quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-danger btn-block mt-2" id="btn_bas_1pRecup" >GUARDAR NOTA RECUPERACION PRIMERA PARCIAL</button> 
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas1pRecup" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas1pRecup" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas1pRecup" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div> 
<!--*******PRIMER QUIMESTRE SEGUNDA PARCIAL RECUPERACION *************************************-->
    <div class="row form1q" id="1q2pRecup">
    <div class="col-12" >
    
        <form role="form" id="notas_basica_2pRecup" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="10">Recuperacion segunda  parcial primer quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-warning btn-block mt-2" id="btn_bas_2pRecup" >GUARDAR NOTA PRIMER QUIMESTRE SEGUNDA PARCIAL</button> 
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas2pRecup" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas2pRecup" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas2pRecup" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div>
<!--*******PRIMER QUIMESTRE PROYECTO INTEGRAL *************************************-->
    <div class="row form1q" id="1q_proy_integral">
    <div class="col-12" >
    
        <form role="form" id="notas_basica_proy_integral" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="4">Examen Primer Quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="14">Proyecto Integral I Quimestre</option>
                                        <!--<option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-success btn-block mt-2" id="btn_bas_1q_proy_integral" >GUARDAR NOTA PRIMER QUIMESTRE SEGUNDA PARCIAL</button> 
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas1q_proy_integral" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas1q_proy_integral" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas1q_proy_integral" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div> 
<!--*******PRIMER QUIMESTRE PROYECTO INGLES *************************************-->
    <div class="row form1q" id="1q_proy_ingles">
    <div class="col-12" >
    
        <form role="form" id="notas_basica_proy_ingles" class="form-row">
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="4">Examen Primer Quimestre</option>
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="19">Proyecto Ingles I quimestre</option>
                                        <!--<option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="14">Proyecto I Quimestre</option>
                                        <option value="16">Refuerzo Académico</option>
                                        <option value="17">Padre_de_familia_portafolio</option>
                                        <option value="18">Padre_de_familia_proyecto</option>-->
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cuantitativa">Calificación</label>
                        <input type="nota" class="form-control validar" id="nota_cuantitativa" name="nota_cuantitativa">
            </div><br>
            <button type="submit" class="btn btn-success btn-block mt-2" id="btn_bas_1q_proy_ingles" >GUARDAR NOTA PRIMER QUIMESTRE SEGUNDA PARCIAL</button> 
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_bas1q_proy_ingles" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_bas1q_proy_ingles" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_bas1q_proy_ingles" name="id_ano_lectivo">
            </div> 
                        
           
       </form>
   </div>
   </div> 
   
<!--*******PRIMER QUIMESTRE iNICIAL, ELEMENTAL E INGLES PRIMERA PARCIA*************************************-->    
               
 <div class="row form1q" id="1q_1pinicial">
    <div class="col-8" >    
         <form role="form" id="notas_inicial_1q1p" class="form-row">            
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="1">Primer Parcial  primer quimestre</option>					
										
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="4">Identidad y Autonomia</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="6">Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artísitca</option>
                                        <option value="23">Valores</option>
                                                                   
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cualitativa">CALIFICACIÓN</label>
                        <select  class="form-control" id="nota_cualitativa" required name="nota_cualitativa">
										<option value="Inicio">Inicio</option>
										<option value="Proceso ">Proceso</option>
										<option value="Adquirido">Adquirido</option>
                        </select> 
            </div>
            <button type="submit" class="btn btn-info btn-block mt-2" id="btn_ele_1p" >GUARDAR NOTA PRIMER QUIMESTRE PRIMERA PARCIAL</button>
            <div class="d-none">
               <input class="" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_ele" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_ele" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_ele" name="id_ano_lectivo">
            </div> 
                         
           
       </form>
   </div>
   </div> 
<!--*******PRIMER QUIMESTRE iNICIAL, ELEMENTAL E INGLES SEGUNDA PARCIAL *************************************-->    
               
 <div class="row form1q" id="1q_2pinicial">
    <div class="col-8" >    
         <form role="form" id="notas_inicial_1q2p" class="form-row">            
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="2">Segunda Parcial  primer quimestre</option>					
										
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="4">Identidad y Autonomia</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="6">Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Expresión Corporal y Motricidad</option>
                                        <option value="13">Educación Cultural y Artísitca</option>
                                        <option value="23">Valores</option> 
                                                                   
                                        
										
										
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cualitativa">CALIFICACIÓN</label>
                        <select  class="form-control" id="nota_cualitativa" required name="nota_cualitativa">
										<option value="Inicio">Inicio</option>
										<option value="Proceso ">Proceso</option>
										<option value="Adquirido">Adquirido</option>
                        </select> 
            </div>
            <button type="submit" class="btn btn-warning btn-block mt-2" id="btn_ele_2p" >GUARDAR NOTA PRIMER QUIMESTRE SEGUNDA PARCIAL</button>
            <div class="">
               <input class="d-none" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_ele2p" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_ele2p" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_ele2p" name="id_ano_lectivo">
            </div> 
                         
           
       </form>
   </div>
   </div> 
<!--*******DESARROLLO COMPORTAMENTAL PRIMER QUIMESTRE*********************************-->    
               
 <div class="row form1q" id="1q_conducta">
    <div class="col-8" >    
         <form role="form" id="notas_conducta" class="form-row">            
            <div class="col d-none">
            <label for="quimestre">Quimestre</label>
                        <select  class="form-control" id="quimestre" required name="quimestre">
										<option value="1">Primer Quimestre</option>
										
				        </select>    

            </div> 
            <div class="col d-none">
            <label for="parcial">Parciales</label>
                        <select  class="form-control" id="parcial" required name="parcial">
										<option value="1">Primera Parcial  primer quimestre</option>					
										
				        </select>   

            </div>
            <div class="col">
            <label for="asignatura">Asignatura</label>
                        <select  class="form-control" id="asignatura" required name="asignatura">
										<option value="21">Desarrollo Comportamental I Quimestre</option>
				        </select>   

            </div>
            <div class="col">
                        <label for="nota_cualitativa">CALIFICACIÓN</label>
                        <select  class="form-control" id="nota_cualitativa" required name="nota_cualitativa">
										<option value="A">A= Muy Satisfactorio</option>
										<option value="B">B= Satisfactorio</option>
										<option value="C">C= Poco Satisfactorio</option>
										<option value="D">D= Mejorable</option>
										<option value="E">E= Insatisfactorio</option>
										
                        </select> 
            </div>
            <button type="submit" class="btn btn-warning btn-block mt-2" id="btn_conducta" >GUARDAR DESARROLLO COMPORTAMENTAL I QUIMESTRE </button>
            <div class="">
               <input class="d-none" type="text" id="" value="<?php echo $id_usuario_profe?>">   
            </div>
            <div class="d-none">
               <input type="text" id="id_usuario_estu_cond" name="id_usuario_estu"> 
            </div>
            <div class="d-none">
               <input type="text" id="id_oferta_aca_cond" name="id_oferta_aca">
            </div>
            <div class="d-none">
              <input type="text" id="id_ano_lectivo_cond" name="id_ano_lectivo">
            </div> 
                         
           
       </form>
   </div>
   </div> 
</main>
<!--******************************** CUADRO DE CALIFICACIONES BASICA *****************-->
<main class="plant">
    <div class="identidad">
        <input class="iden" type="text" id="nombre_estu_bas_1">
        <input class="iden" type="text" id="apellido_estu_bas_1"> 
<!--        <button type="button" class="btn btn-success" id="actualiza_notas">Ver curso</button> -->
        <button type="button" class="btn btn-success" id="certi_promo">Certificado de promoción </button>
        <button type="button" class="btn btn-success" id="imprime_boleta">Impresión boleta</button>    
      </div><br>
   <div class="contenedor" >
        <div class="contenido" id="mostrar_asig" >
        <table class="table-bordered" >
                           <thead >
                                <tr>
                                   <td  class="cab">ASIGANTURAS.......................................</td>
                                </tr>
                           </thead>
                           <tbody>
                               <tr >
                                   <td  class= "">Lenguaje y Comunicación</td>
                                   
                               </tr>
                               <tr>
                                   <td>Matemáticas</td>
                                   
                               </tr>
                               <tr>
                                   <td>Ciencias Naturales</td>
                                   
                               </tr>
                               <tr>
                                   <td>Estudios Sociales</td>
                                   
                               </tr>
                               <tr>
                                   <td>Educación Cultural y Artísitca</td>
                                   
                               </tr>
                               <tr>
                                   <td>Cultura Física</td>
                                   
                               </tr>
                               <tr>
                                   <td>Inglés</td>
                                   
                               </tr>
                               <tr>
                                   <td>Valores</td>
                                   
                               </tr>
                           </tbody>
            
        </table>   
       </div>  
       <div class="contenido_par">
        <table  class="table-bordered w-100" >
                           <thead >
                                <tr class="">
                                   
                                   <td class="cab ">I Par.</td>
                                </tr>
                           </thead>
                           <tbody class= "reg_notas" >
                               <tr>
                                   <td class="al_nota" id="pos_1n" >&nbsp;</td>
                               </tr>
                               <tr>
                            
                                   <td class="al_nota" id="pos_2n" >&nbsp;</td> 
                               </tr>
                               <tr>
                               
                                   <td class="al_nota" id="pos_3n" >&nbsp;</td> 
                               </tr>
                               <tr>
                            
                                   <td class="al_nota" id="pos_4n" >&nbsp;</td> 
                               </tr>
                               <tr>
                                 
                                   <td class="al_nota" id="pos_5n" >&nbsp;</td>
                               </tr>
                               <tr>
                                  
                                   <td class="al_nota" id="pos_6n" >&nbsp;</td>
                               </tr>
                               <tr>
                                   
                                   <td class="al_nota" id="pos_7n" >&nbsp;</td>
                               </tr>
                               <tr>                                  
                                   <td class="al_nota" id="pos_8n" >&nbsp;</td>
                               </tr>
                           </tbody>
            
        </table>   
       </div>
       <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Recu</td>
                                </tr>
                           </thead>
                           <tbody class= "reg_notas">
                           <tr>
                               
                               <td class="al_nota" id="pos_1n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_1Rec" > &nbsp;</td>
                           </tr>
                            <tr>
                               <td class="al_nota" id="pos_8n_1Rec" >&nbsp;</td>
                            </tr>
                           </tbody>

        </table>   
       </div>
       <div class="contenido_par" >
         <table class=" table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">II Par</td>
                                </tr>
                           </thead>
                           <tbody class="reg_notas">
                          <tr>
                               
                               <td class="al_nota" id="pos_1n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_2p" >&nbsp;</td>
                            </tr>
                           </tbody>

        </table>   
       </div>
       <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="pos_1n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_2Rec" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Portafolio</td>
                                </tr>
                           </thead>
                           <tbody class="notas_pr">

                           <tr>
                               
                               <td class="al_nota" id="pos_1n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_porta1q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
     <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_3">Prom 80%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Lengua" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Mate" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Ccnn" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Sociales" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Artes" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_CulFi" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Ingles" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="parcial_1_Valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
     <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_2">Proyecto</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="proyecto_1n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_2n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_3n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_4n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_5n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_6n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_7n" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="proyecto_8n" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_2">Nota PPFF</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="proyecto_1npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_2npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_3npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_4npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_5npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_6npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_7npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="proyecto_8npf" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Prom 20%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="examen_1q_lengua" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_mate" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_cnn" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_sociales" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_arte" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_culfi" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_ingles" > &nbsp;;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="examen_1q_valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
    <div class="contenido_par" id="prom_1Q">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_1">1Q Prom</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_lengua" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_mate" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_cnn" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_sociales" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_arte" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_culfi" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_ingles" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota color1p" id="notafinal_1q_valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
       
<!--***************************** SEGUNDO QUIMESTRE  *********************-->
       <div  id="1p_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2"> I par.</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua1p2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores1p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div  id="1p_2qR" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua1p2qR" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores1p2qR" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>   
     <div  id="2p_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2"> II par.</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua2p2q_1" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores2p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div  id="2p_2qR" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua2p2qRec" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores2p2qRec" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
       <div  id="porta_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_ppff" >Portafolio</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="portafolio_2QA" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
       <div  id="prom80_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_prom">Prom80%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_prom2p2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores_prom2p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>   
       <div  id="proy_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Proyecto</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_proy2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores_proy2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
       <div  id="ppff_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_ppff">Notappff</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
    <div  id="prom20_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_prom">Prom20%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_prom20_2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
     <div  id="prom_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_1">2Q Prom</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota color1p" id="lengua_prom_2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="mate_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="cnn_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="sociales_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="arte_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="culfi_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="ingles_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota color1p" id="valores_prom_2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
        <div  id="prom_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_3">Anual </td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota colorfin" id="lengua_fin" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="mate_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="cnn_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="sociales_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="arte_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="culfi_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="ingles_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota colorfin" id="valores_fin" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 


          <div id="extract_2q"></div>  
           
</div>

<div class="row mt-5">
        <div class="col-12">
            <div class="d-inline p-2 bg-primary text-white">Promedio del primero quimestre</div>
            <div class="d-inline p-2 bg-dark text-white" id="prom_1q">nota</div>
            
            
            <div class="d-inline p-2 bg-primary text-white">Promedio del segundo quimestre</div>
            <div class="d-inline p-2 bg-dark text-white" id="prom_2QQ">nota</div>
        </div>
</div><br>
<div class="row">
    <div class="col-8">
        <div class="d-inline p-2 bg-warning ">Promedio Final </div>
        <div class="d-inline p-2 bg-dark text-white" id="prom_final2021">nota</div>
    </div>
</div>
<!-- *******************CERTIFICADO DE PROMOCIONES ****** -->
<main class="print_1">
<button id="cert_promo_2020">Imprimir</button>
   <div class="cuerpo_A4_2">
        <table  border="0">
            <tr>
                <td align="left" width="10%" ><img src="../../imagenes/logo1-03.png" id="logo_1" alt=""></td>
                <td><div class="titulo_enca"><b>ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA "JIREH"</b><p class="parrafo_4">Instruye al niño en su camino y aún cuando fuera viejo no se apartará de Él. prov. 22-6</p></div></td>
            </tr>
        </table> 
       <hr>
       <h4>CERTIFICADO DE PROMOCIÓN </h4>
       <h6>AÑO LECTIVO 2020 2021</h6><br>
       <p class= "parrafo"><h7>De conformidad con lo prescrito en el Art.197 del Reglamento General de la Ley Orgánica de Educación Intercultural y demás normativas vigentes, certifica que el/la estudiante:</h7></p>
       <h6><b id="nombre_estu_bas_cer"></b>&nbsp;<b id="apellido_estu_bas_cer"></b></h6> 
        <p class="parrafo"> <h7>de grado</h7><h7><b id="nivel_promo_cer"></b></h7><h7>, obtuvo las siguientes calificaciones durante el presente año lectico 2020 - 2021</h7></p>
        <table class="parrafo" WIDTH="100%" border="1">
            <tr align="center">
                <td><b><h7>ASIGANTURAS</h7></b></td>
                <td><b><h7>PROMEDIO</h7></b></td>
                <td><b><h7>LETRAS</h7></b></td>
            </tr>
            <tr>
                <td class="parrafo_3"> <h7>LENGUA Y LITERATURA</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="lengua_text" ></h7></td>
                <td><span><h7 id="texto"></h7></span></td>
            </tr>
            <tr>   
                <td class="parrafo_3"> <h7>MATEMÁTICA</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="mate_text" ></h7></td>
                <td><span><h7 id="texto_mate"></h7></span></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>CIENCIAS NATURALES</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="cnn_text" ></h7></td>
                <td><span ><h7 id="texto_cnn"></h7></span></td>
            </tr>
            <tr>    
                <td class="parrafo_3"><h7>ESTUDIOS SOCIALES</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="sociales_text" ></h7></td>
                <td><h7><span><h7 id="texto_sociales"></h7></span></h7></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUC. CULT. Y ARTS.</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="arte_text" ></h7></td>
                <td><span><h7 id="texto_arte"></h7></span></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUCACIÓN FÍSICA</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="culfi_text" ></h7></td>
                <td><span><h7 id="texto_culfi"></h7></span></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>INGLÉS</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="ingles_text" ></h7></td>
                <td><span><h7 id="texto_ingles"></h7></span></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>VALORES</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="valores_text" ></h7></td>
                <td><span><h7 id="texto_valores"></h7></span></td>
            </tr>
            <tr>
                <td class="parrafo_3"><h7>PROMEDIO ANUAL</h7></td>
                <td align="center"><h7><input class="nota_input" type="text" id="prom_final2021_text" ></h7></td>
                <td><span id="prom_fin_texto"></span></td>
            </tr>
            <tr>
                <td><h7> PROYECTOS ESCOLARES</h7></td>
                <td align="center"><h7><b>EX</b></h7></td>
                <td><p class="parrafo_2"><h7>Demuestra destacado desempeño en cada fase del desarrollo del proyecto escolar lo que constituye un excelente aporte a su formación integral.</h7></p></td>
            </tr>
            <tr>
                <td> <h7>COMPORTAMIENTO</h7></td>
                <td align="center"><h7><b>A</b></h7></td>
                <td><p class="parrafo_2"><h7>Lidera el cumplimiento de los compromisos establecidos para la sana Convivencia social</h7></p></td>
            </tr>
        </table><br>
        <p class="parrafo"> <h7>Por lo tanto, es <b>promovido/a al grado inmediatamente superior</b>, para constancia firman en unidad de acto el director y secretaria de la Escuela de Educación Básica Particular Cristiana "Jireh"</h7> </p>
        <br><br>
        <table class="parrafo" WIDTH="100%">
            <tr align="center">
                <td><h7>Prof. Jonathan Anchundia</h7></td>
                <td><h7>Srta. Katheryn Wampiu</h7></td>
            </tr>
            <tr align="center">
                <td><h7><b>DIRECTOR</b></h7></td>
                <td><h7><b>SECRETARIA</b></h7></td>
            </tr>
        </table>
        
        <hr>
        <table  border="0">
            <tr>
                <td align="left"><div class="parrafo_2"><h7><b>DIRECCIÓN: </b></h7><h7>Lotización Olga Borbúa calle Chontayacu y calle primera</h7><p class="parrafo_2"><h7><b>TELEFONO: </b></h7><h7>06 231 0271 / 0989095822</h7> <h7><b>E-MAIL:</b></h7> <h7>escuelacristianajireh@gamil.com</h7></p></div></td>
            </tr>
        </table> 
    
        
      
   </div>
    
</main>
<main class="print_2">
<button id="imprime_boleta2020">Imprimir</button>
    <div class="cuerpo_A4_3">
            <table  border="0" id="tab_enca">
            <tr>
                <td align="left" width="10%" ><img src="../../imagenes/logo1-03.png" id="logo_1" alt=""></td>
                <td><div class="titulo_enca"><b>ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA "JIREH"</b><p class="parrafo_4">Instruye al niño en su camino y aún cuando fuera viejo no se apartará de Él. prov. 22-6</p></div></td>
                <hr>
            </tr>
           
        </table> 
        
        <p><h7><b>Distrito Educativo: </b> 15D01</h7>&nbsp;&nbsp;&nbsp;<h7><b>Año Lectivo 2020 - 2021</b></h7>&nbsp;&nbsp;<h7>Nivel: <b id="nivel_promo_boleta"></b></h7></p>
        <p>Estudiante: <h7>&nbsp;&nbsp;<b id="nombre_estu_bas_boleta"></b>&nbsp;<b id="apellido_estu_bas_boleta"></b></h7></p>  
        <table class="parrafo" WIDTH="100%" border="1">
            <tr align="center">
                <td><b><h7>ASIGANTURAS</h7></b></td>
                <td colspan="7"><b><h7>PRIMER QUIMESTRE</h7></b></td>
                <td colspan="7"><b><h7>SEGUNDO QUIMESTRE</h7></b></td>
                <td><b><h7>PROMEDIO ANUAL</h7></b></td>
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>1P</h7></td>
                <td class="parrafo_5"> <h7>Rec</h7></td>
                <td class="parrafo_5"> <h7>2P</h7></td>
                <td class="parrafo_5"> <h7>Rec</h7></td>
                <td class="parrafo_5"> <h7>P.80%</h7></td>
                <td class="parrafo_5"> <h7>P.20%</h7></td>
                <td class="parrafo_5"> <h7>P.Q.</h7></td>
                
                <td class="parrafo_5"> <h7>1P</h7></td>
                <td class="parrafo_5"> <h7>Rec</h7></td>
                <td class="parrafo_5"> <h7>2P</h7></td>
                <td class="parrafo_5"> <h7>Rec</h7></td>
                <td class="parrafo_5"> <h7>P.80%</h7></td>
                <td class="parrafo_5"> <h7>P.20%</h7></td>
                <td class="parrafo_5"> <h7>P.Q.</h7></td>
                
                
            </tr>
            <tr>
                <td class="parrafo_3"> <h7>LENGUA Y LITERATURA</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_1p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_2p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_pn8"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_pn2"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_N1"> <h7></h7></td>
                
                <td class="parrafo_6"  id="lengua_boleta_2Q_1p"> <h7>n1</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_2p"> <h7>n2</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_pn8"> <h7>P.n2</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_pn2"> <h7>P.n2</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_N2"> <h7>P.Q.</h7></td>
                
                <td class="parrafo_6"  id="lengua_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>   
                <td class="parrafo_3"> <h7>MATEMÁTICA</h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_1p"    > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_1prec" > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_2p"    > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_2prec" > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_pn8"   > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_pn2"   > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="mate_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_pn8" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="mate_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>CIENCIAS NATURALES</h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="cnn_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_pn8" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="cnn_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>    
                <td class="parrafo_3"><h7>ESTUDIOS SOCIALES</h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="eess_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_pn8" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="eess_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUC. CULT. Y ARTS.</h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="arti_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_pn8" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="arti_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUCACIÓN FÍSICA</h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="culfi_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_pn8" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="culfi_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>INGLÉS</h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="ingles_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_pn2" > <h7>P.n2</h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="ingles_boleta_final"> <h7>P.Q.Anual</h7></td>
               
            </tr>
            <tr>
                <td class="parrafo_3"><h7>VALORES</h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="valores_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="valores_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>PROYECTOS ESCOLARES</h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                
                <td class="parrafo_6"> <h7>EX</h7></td>
                
            </tr>

            <tr>
                <td> <h7>COMPORTAMIENTO</h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                
                <td class="parrafo_5"> <h7>A</h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                
                <td class="parrafo_5"> <h7>A</h7></td>
                
            </tr>
        </table>
        <div class="row ml-1">
        <table class="parrafo mt-3" WIDTH="28%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>ASISTENCIA</h7></b></td>
                <td class="parrafo_5"><b><h7>1Q</h7></b></td>
                <td class="parrafo_5"><b><h7>2Q</h7></b></td>
                <td class="parrafo_5"><b><h7>Total</h7></b></td>
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>F.J</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>F.I</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>                      
                
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Total dias laborados</h7></td>
                <td class="parrafo_5"> <h7>100</h7></td>
                <td class="parrafo_5"> <h7>100</h7></td>
                <td class="parrafo_5"> <h7>200</h7></td>
            </tr> 
            
        </table> &nbsp;
        <table class="parrafo mt-3" WIDTH="29%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>PROMEDIOS GENERALES</h7></b></td>
                <td class="parrafo_5"><b><h7>Ren</h7></b></td>
                <td class="parrafo_5"><b><h7>D.C.</h7></b></td>
                
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Primer Quimestre</h7></td>
                <td class="parrafo_6" id="prom_general_1Q_boleta"> <h7></h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>
                
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>Segundo Quimestre</h7></td>
                <td class="parrafo_6" id="prom_general_2Q_boleta"> <h7>n2q</h7></td>
                <td class="parrafo_5"> <h7>A</h7></td>                     
                
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Promedio Anual</h7></td>
                <td class="parrafo_6" id="prom_general_anual"> <h7>P.A</h7></td>
                <td class="parrafo_5"> <h7>A</h7></td> 
            </tr> 
            
        </table> &nbsp;
        <table class="parrafo mt-3" WIDTH="39%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>Desarrollo Comportamental Art. 222</h7></b></td>
                <td class="parrafo_5"><h7>A = Muy satisfactorio</h7></td>
                
                
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>B = Satisfactorio</h7></td>
                <td class="parrafo_5"> <h7>C = Poco Satisfactorio</h7></td>
                
                
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>D = Mejorable</h7></td>
                <td class="parrafo_5"> <h7>E = Insatisfactorio</h7></td>
                                    
                
                
            </tr>
            
        </table>
        </div>
        <div class="row ml-1">
        <table class="parrafo mt-3" WIDTH="40%" border="1">
            <tr align="center">
                <td colspan="2" class="parrafo_5"><b><h7>Escala de califaciones de acuerdo  al Art.194</h7></b></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Domina los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>9.00 - 10.00</h7></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Alcanza los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>7.00 - 8.99</h7></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Está proximo a alcanzar los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>4.01 - 6.99</h7></td>
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>No alcanza los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7> menos de  4.00 </h7></td>
            </tr>           
            
        </table> &nbsp; &nbsp; 
        <table class="parrafo mt-3" WIDTH="40%" border="0">
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr align="center">
               <td><h7>Prof. Jonathan Anchundia</h7></td>
               <td><h7>Srta. Katheryn Wampiu</h7></td>
            </tr>
            <tr align="center">               
                <td><h7><b>DIRECTOR</b></h7></td>
                <td><h7><b>SECRETARIA</b></h7></td>
            </tr>
        </table>             
        </div>
              
           
    </div>
</main>  
   
    
</div>
</main>

<!--**************************** CUADRO DE CALIFICACIONES INICIAL *****************-->
<main class="plant_inicial">
    <div class="identidad">
        <input class="iden" type="text" id="nombre_estu_ini_1">
        <input class="iden" type="text" id="apellido_estu_ini_1"> 
        <button type="button" class="btn btn-success" id="actualiza_notas">VER CURSO </button>    
    </div><br>
    <div class="contenedor" >
       <div class="contenido_inicial">
           <table class="table-bordered" >
            <thead>
                <tr>                              
                    <td  class="cab">ÁMBITOS</td>
                    <td  class="cab_1">Primer Quimestre</td>
                    <td  style="color: white;">...</td>
                    <td  class="cab_3">Primera Parcial</td>
                    <td  class="color_ppff">Segunda Parcial</td>
                    <td  class="cab_1">Segundo Quimestre</td>
                    <td  style="color: white;">...</td>
                    <td  class="colorfin">Promedio Final</td>
                </tr>
            </thead>  
                <tbody class= "notas">
                               <tr>
                                   <td id="pos_1ini" ></td>
                                   <td class="al_nota color1p color1p" id="pos_1n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_1n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_1n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_1n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_1n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_2ini" ></td>
                                   <td class="al_nota color1p" id="pos_2n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_2n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_2n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_2n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_2n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_3ini" ></td>
                                   <td class="al_nota color1p" id="pos_3n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_3n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_3n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_3n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_3n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_4ini" ></td>
                                   <td class="al_nota color1p" id="pos_4n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_4n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_4n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_4n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_4n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_5ini" ></td>
                                   <td class="al_nota color1p" id="pos_5n_ini" ></td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_5n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_5n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_5n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_5n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_6ini" ></td>
                                   <td class="al_nota color1p" id="pos_6n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_6n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_6n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_6n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_6n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_7ini" ></td>
                                   <td class="al_nota color1p" id="pos_7n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_7n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_7n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_7n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_7n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_8ini" ></td>
                                   <td class="al_nota color1p" id="pos_8n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_8n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_8n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_8n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_8n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_9ini" ></td>
                                   <td class="al_nota color1p" id="pos_9n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_9n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_9n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_9n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_9n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_10ini" ></td>
                                   <td class="al_nota color1p" id="pos_10n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_10n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_10n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_10n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_10n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_11ini" ></td>
                                   <td class="al_nota color1p" id="pos_11n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_11n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_11n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_11n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_11n_prom2021" >&nbsp;</td>
                               </tr>
                           </tbody>              
           </table>
            
         <!--  <div id="extract_ini"></div>-->
       </div>
       
    
    </div> <br>
    <div class="row mt-5">
                <div class="col-12">
                    <div class="d-inline p-2 bg-primary text-white">Desarrollo comportamental Primer Quimestre</div>
                    <div class="d-inline p-2 bg-dark text-white" id="conducta_1q">nota</div>
                </div>
    </div> 
    <div class="row mt-5">
                <div class="col-12">
                    <div class="d-inline p-2 bg-primary text-white">Desarrollo comportamental Segundo Quimestre</div>
                    <div class="d-inline p-2 bg-dark text-white" id="conducta_2q">?</div>
                </div>
    </div>

</main>
<script src="../../js/app_extrac_notas_2q.js"></script>
<script src="../../js/conver_num.js"></script>
<script src="../../js/conver_num_mate.js"></script>
<script src="../../js/conver_num_cnn.js"></script>
<script src="../../js/conver_num_sociales.js"></script>
<script src="../../js/conver_num_eca.js"></script>
<script src="../../js/conver_num_culfi.js"></script>
<script src="../../js/conver_num_ingles.js"></script>
<script src="../../js/conver_num_valores.js"></script>
<script src="../../js/conver_num_final2021.js"></script>
<script src="../../js/certificado_promo_2020.js"></script>
<script src="../../js/imprime_boleta.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js">
    

</script>


<script type="text/javascript">
$(function(){
    $(".validar").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});
</script>





