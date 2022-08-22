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

    .navbar .dropdown-toggle, .navbar .dropdown-menu a {
    cursor: pointer;
    }

    .navbar .dropdown-item.active, .navbar .dropdown-item:active {
    color: inherit;
    text-decoration: none;
    background-color: inherit;
    }

    .navbar .dropdown-item:focus, .navbar .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
    }

    @media (min-width: 767px) {
    .navbar .dropdown-toggle:not(.nav-link)::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .5em;
        vertical-align: 0;
        border-bottom: .3em solid transparent;
        border-top: .3em solid transparent;
        border-left: .3em solid;
        }
    }
    .reg_notas_menu{
        position:absolute;
        float: left;
        margin-top: 60px;
    }
 
    #menu_de_2q{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 10px;
        margin-top: 130px;
    }
    .menu_sub_2{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 297px;
        margin-top: 5px;
        width: 35%;
    }
    .menu_sub_3_1p2q{
        width: auto;
        float: left;
        margin-left: 3px;
        margin-top: 130px;
        
    }
    .menu_sub_3_2p2q{
        width: auto;
        float: left;
        margin-left: 3px;
        margin-top: 130px;
        
    }
    .menu_sub_4_Patricio{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
        
    }
    .menu_sub_4_2pPatricio{
        width: auto;
        text-align: center;
        float: left;
        margin-top: 100px;
        
    }
    .menu_sub_4_Silvia{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
        
    }
    .menu_sub_4_NellyEdilmaInicial{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    .menu_sub_4_2pNellyEdilmaInicial{
        width: auto;
        text-align: center;
        float: left;
        margin-top: 120px;
    }
    .menu_sub_4_Jonathan{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    .menu_sub_4_SilviaG {
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }

    .menu_sub_4_NellyEdilma ´{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    .menu_sub_4_NellyEdilmaBasica {
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    .menu_sub_4_Jessica{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    .menu_sub_5{
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
        
    }
    .menu_sub_5_2p{
        width: auto;
        text-align: center;
        float: left;
        margin-top: 100px;
        
    }
    .menu_sub_4_Yenny {
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    
    .menu_sub_4_YennyBasica {
        width: auto;
        text-align: center;
        float: left;
        margin-left: 500px;
        margin-top: 60px;
    }
    #nom_ape{
        width: 50%;
    }
    #form_notas1p2q{
        margin-left: 30px;
    }
    #form_notas2p2q{
        position: absolute;
        float: left;
        margin-top: 180px;
        margin-left: 30px;
    }
    #form_notas1p2qR{
        margin-left: 30px;
    }
    #form_notas2p2qR{
        position: absolute;
        float: left;
        margin-top: 180px;
        margin-left: 30px;
    }
    #form_notas1p2qInicial{
        margin-left: 30px;
    }
     #form_notas2p2qInicial{
        position: absolute;
        float: left;
        margin-top: 180px;
        margin-left: 30px;
    }
    #rectifica_nota {
        float: left;
        width:  50%;
        margin-top: 130px;
       
    }
    


</style>
<main class="reg_notas_menu">
<!--Menu horizontal -->
<div class="navbar navbar-expand-md navbar-light bg-primary mb-4" role="navigation">
   <div class="collapse navbar-collapse" id="navbarCollapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" style="color: white;" id="a_lectivo" href="#">Año Lectivo 2020-2021<span class="sr-only">(current)  </span></a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" style="color: white;" href="#" id="rectificaN">Recalificaciones</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" style="color: white;" href="index_2020.php">Escritorio</a>
            </li>
        </ul>          
   </div>   
</div>
</main>

<input type="hidden" id="oferta_aca">
<input type="hidden" id="id_asignatura">
<input type="hidden" style=" margin-left: 500px;" id="este_docente">

<div id="menu_de_2q">
        <div class="bg-light p-1" >
            <a class= "nav-link  d-inline bg-danger" style="color: white;" id="" href="#">Segundo quimestre</a>
            <a class= "nav-link  d-inline" style="color: black;" id="2Q_primera_parcial" href="#">Primer Parcial </a>
            <a class= "nav-link  d-inline" style="color: black;" id="2Q_segunda_parcial" href="#">Segunda Parcial </a>
        </div>
        <div class="menu_sub_2 bg-light">
            <table  class="table "> 
                <thead>
                    <tr>
                       <td >CURSOS</td>
                    </tr>   
                </thead>
                <tbody id="mis_cursos"></tbody>

            </table>
        </div>
</div>

<div class="menu_sub_3_1p2q bg-danger p-1 " >
    <a class= "nav-link" style="color: black;" id="carga_notas_menu1p2q" href="#"> Cargar Notas</a>
    <a class= "nav-link" style="color: black;" id="carga_recup_menu1p2q" href="#">Notas Recuperación</a>
</div>
<div class="menu_sub_3_2p2q bg-light p-1 " >
    <a class= "nav-link" style="color: black;" id="carga_notas_menu2p2q" href="#"> Cargar Notas</a>
    <!--<a class= "nav-link" style="color: black;" id="carga_recup_menu2p2q" href="#">Notas Recuperación</a>-->
</div>

<div class="container" id="rectifica_nota">
    <div class="row">
        <div class="col-12">
            <div class="">
                <form class="form-horizontal" id="novedadesN">
                    <fieldset>
                        <legend class="text-left header">REGISTRO DE RECALIFICACIÓN
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="fname" name="name_nom" type="text" placeholder="nombres" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="lname" name="name_ape" type="text" placeholder="Apellidos Completos" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <select  class="form-control" id="nivel" required name="name_nivel">
										<option value="Inicial 1">Inicial 1</option>
                                        <option value="Inicial 2">Inicial 2</option>
                                        <option value="Primero EGB">Primero EGB</option>
                                        <option value="Segundo EGB">Segundo EGB</option>
                                        <option value="Tercer EGB">Tercero EGB</option>
                                        <option value="Cuarto EGB">Cuarto EGB</option>
                                        <option value="Quinto EGB">Quinto EGB</option>
                                        
				            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Asname" name="name_materia" type="text" placeholder="Asignatura / Ambito" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-12">
                                <input type="text" id="" class="form-control" required name="name_notaAnterior" placeholder="Nota anterior"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-12">
                            <input type="text" id="" class="form-control" required name="name_notaRectificada" placeholder="Nota Rectificada"  oninput="limitDecimalPlaces(event, 2)" onkeypress="return isNumberKey(event)">   
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="message" required placeholder="!IMPORTANTE¡Indique el motivo de la recalificación ." rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" id="btn-rectificaN">Enviar </button>
                            </div>
                        </div>
                        
                        </legend>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div> 


<!--FIN Menu horizontal -->

<!--CARGAR NOTAS DEL  PRIMERA PARCIAl SEGUNDO QUIMESTRE L -->
<form id="form_notas1p2q" >
        <div class = "bg-warning p-2" >INGRESO DE NOTAS </div>   
        <div id="cursos_notas"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2q" >Enviar notas</button>
</form>

<form id="form_notas1p2qR" >
            <div class = "bg-danger p-2" style="color: white;">INGRESO DE NOTAS RECUPERACIÓN </div> 
            <div id="cursos_notasR"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2qR">Enviar notas</button>
</form>

<form id="form_notas1p2qInicial" >
            <div class = "bg-warning p-2" >INGRESO DE NOTAS </div>
            <div id="cursos_notasInicial"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2qInicial">Enviar notas</button>
</form>  



<div class="menu_sub_4_Patricio">    
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <!--<option value="14">Proyecto I Quimestre</option>-->
                                        <option value="23">Valores</option> 
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_Silvia">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>-->
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>-->
                                        <option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option> -->
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_NellyEdilmaInicial">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>   
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="materiaI" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="4">Identidad y Autonomia</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="6">Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="24">Expresión Corporal y Motricidad</option>
                                        <option value="23">Valores</option> 
                                        <option value="12">Cultura Física</option>
                                        <option value="25">Identidad y Convivencia</option>
                                        <option class="bg-light" value="13">Educación Cultural y Artística</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial">Cargar Notas</button>     
            </div> 
    </div>
    </form>                   
</div>
<div class="menu_sub_4_NellyEdilmaBasica">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>   
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<option value="13">Educación Cultural y Artística</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_Jonathan">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>-->
                                        <option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>-->
                                        <option value="23">Valores</option>
                                        <option value="12">Cultura Física</option> 
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>

<div class="menu_sub_4_Yenny">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="materiaI" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="25">Identidad y Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artísitca</option>
                                        <option value="23">Valores</option>
                                        <option value="24">Expresión Corporal y Motricidad</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial">Cargar Notas</button>     
            </div> 
    </div>
    </form>                   
</div>


<div class="menu_sub_4_YennyBasica">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>    
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
								<option value="7">Matemáticas</option>                             
				        </select> 
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_Jessica">
   
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="materiaI" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>-->
                                        <option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option> -->
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial">Cargar Notas</button>     
            </div> 
    </div>
</div>
<div class="menu_sub_4_SilviaG">
   
    <form id="carga_notas_1p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>-->
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <!--<option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option>--> 
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_5">
   
    <form id="carga_notas_1p2qR" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2qR" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envioR">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>

<!--FIN CARGA NOTAS PRIMER PARICIAL SEGUNDO QUIMESTRE -->

<!--CARGAR NOTAS DEL SEGUNDO QUIMESTRE SEGUNDA PARCIAL -->
<form id="form_notas2p2q" >
        <div class = "bg-warning p-2" >INGRESO DE NOTAS </div> 
       <!-- <h5 style ="margin-top: 200px; margin-left: 500px;">aqui el curso notas</h5>-->  
        <div id="cursos_notas2p2q"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2p2q" >Enviar notas</button>
</form>

<form id="form_notas2p2qR" >
            <div class = "bg-danger p-2" style="color: white;">INGRESO DE NOTAS RECUPERACIÓN </div> 
            <div id="cursos_notasR2p2q"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2qR">Enviar notas</button>
</form>

<form id="form_notas2p2qInicial" >
            <div class = "bg-warning p-2" >INGRESO DE NOTAS </div>
            <div id="cursos_notasInicial2p2q"></div>
            
<button type="submit" class="btn btn-primary mb-2" id="btn-notas2qInicial_2p2q">Enviar notas</button>
</form>

<div class="menu_sub_4_2pPatricio">    
    <h5> CARGAR NOTAS SEGUNDA PARCIAL DEL SEGUNDO QUIMESTRE</h5>
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <div><b>Ingreso de notas Asignatura</b></div>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_2p2q" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>
                                        <option value="23">Valores</option> 
                                        <hr>
                                        <option value="26">Proyecto Matemáticas II Quimestre</option> 
                                        <option value="27">Proyecto Lenguaje II Quimestre</option>
                                        <option value="28">Proyecto Estudios Sociales II Quimestre</option>
                                        <option value="29">Proyecto Ciencias Naturales II Quimestre</option>
                                        <option value="20">Proyecto Inglés II Quimestre</option>
                                        <option value="30">Proyecto Cultura Física II Quimestre</option>
                                        <option value="31">Proyecto Edc. Cultural y Artística II Quimestre</option>
                                        <option value="38">Proyecto Valores II Quimestre</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_2p2q">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_2pSilvia">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>-->
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <option value="11">Inglés</option>-->
                                        <option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option> -->
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_2pNellyEdilmaInicial">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
               <div><b>Ingreso de notas Asignatura</b></div>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="materiaI_2p2q" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="4">Identidad y Autonomia</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="6">Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="24">Expresión Corporal y Motricidad</option>
                                        <option value="23">Valores</option> 
                                        <option value="12">Cultura Física</option>
                                        <option value="25">Identidad y Convivencia</option>
                                        <option class="bg-light" value="13">Educación Cultural y Artística</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial_2p2q">Cargar Notas</button>     
            </div> 
    </div>
    </form>                   
</div>
<div class="menu_sub_4_2pNellyEdilmaBasica">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>   
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<option value="13">Educación Cultural y Artística</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_2pJonathan">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <!--<option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>-->
                                        <option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>-->
                                        <option value="23">Valores</option>
                                        <option value="12">Cultura Física</option> 
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>

<div class="menu_sub_4_2pYenny">
   
    <form id="carga_notas_2pp2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="materiaI" required name="asignatura">
										<option value="1">Comprensión y Expresión del lenguaje</option>
										<option value="2">Relación Lógico Matemática</option>
										<option value="3">Expresión Artística</option>
                                        <option value="5">Medio Natural y Cultural</option>
                                        <option value="25">Identidad y Convivencia</option>
                                        <option value="11">Inglés</option>
                                        <option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artísitca</option>
                                        <option value="23">Valores</option>
                                        <option value="24">Expresión Corporal y Motricidad</option>
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial">Cargar Notas</button>     
            </div> 
    </div>
    </form>                   
</div>


<div class="menu_sub_4_2pYennyBasica">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>    
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                       <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
								<option value="7">Matemáticas</option>                             
				        </select> 
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_4_2pJessica">
   
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="materiaI" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>-->
                                        <option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option> -->
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio_inicial">Cargar Notas</button>     
            </div> 
    </div>
</div>
<div class="menu_sub_4_2pSilviaG">
   
    <form id="carga_notas_2p2q" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <button  class="btn btn-success mb-1" id="">Ingreso de notas Asignatura</button>     
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_1p2q" required name="asignatura">
										<!--<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>-->
                                        <option value="9">Estudios Sociales</option>
                                        <option value="10">Ciencias Naturales</option>
                                        <!--<option value="11">Inglés</option>
                                        <!--<option value="12">Cultura Física</option>
                                        <!--<option value="13">Educación Cultural y Artística</option>-->
                                        <!--<option value="14">Proyecto I Quimestre</option>
                                        <option value="23">Valores</option>--> 
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envio">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<div class="menu_sub_5_2p">
     <h5>RECUPERACIÓN SEGUNDA PARCIAL DEL SEGUNDO QUIMESTRE</h5>
    <form id="carga_notas_2p2qR" >
    <div class="form-inline">
            <div class="form-group mx-sm-3 mb-1 ">
                <div><b>Ingreso de notas Asignatura</b></div>       
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
                        <select  class="form-control" id="asignatura_2p2qR" required name="asignatura">
										<option value="7">Matemáticas</option>
                                        <option value="8">Lenguaje y Comunicación</option>
                                        
				        </select>
            </div>
            <div class="form-group mx-sm-3 mb-1 ">
            <button type="submit" class="btn btn-primary mb-1" id="carga_notas_envioR_2p2q">Cargar Notas</button>     
            </div> 
    </div>
    </form>
</div>
<!--FIN CARGA NOTAS SEGUNDO PARICIAL SEGUNDO QUIMESTRE -->
<!--<button type="submit" class="btn btn-success mb-2" id="btn-notasQ">Enviar notas</button>-->
<script>
    $('.menu_sub_1').hide();
    $('.menu_sub_2').hide();
    $('.menu_sub_3_1p2q').hide();
    $('.menu_sub_3_2p2q').hide();
    $('.menu_sub_4_Patricio').hide();
    $('.menu_sub_4_Silvia').hide();
    $('.menu_sub_4_NellyEdilmaInicial').hide();
    $('.menu_sub_4_NellyEdilmaBasica').hide();
    $('.menu_sub_4_Jonathan').hide();
    $('.menu_sub_4_Yenny').hide();
    $('.menu_sub_4_SilviaG').hide();
    $('.menu_sub_4_Jessica').hide();
    $('.menu_sub_4_YennyBasica').hide(); 
    $('.menu_sub_4_2pPatricio').hide();
    $('.menu_sub_4_2pSilvia').hide();
    $('.menu_sub_4_2pNellyEdilmaInicial').hide();
    $('.menu_sub_4_2pNellyEdilmaBasica').hide();
    $('.menu_sub_4_2pJonathan').hide();
    $('.menu_sub_4_2pYenny').hide();
    $('.menu_sub_4_2pSilviaG').hide();
    $('.menu_sub_4_2pJessica').hide();
    $('.menu_sub_4_2pYennyBasica').hide(); 
    $('.menu_sub_5').hide();
    $('.menu_sub_5_2p').hide();
    $('#listado_estu').hide();
    $('#2quim').hide();
    $('#form_notas1p2q').hide(); 
    $('#form_notas1p2qR').hide(); 
    $('#form_notas1p2qInicial').hide(); 
    $('#rectifica_nota').hide();
  

    $(document).on('click','#a_lectivo', function(){
        $('.menu_sub_1').show();
        $('.menu_sub_3_1p2q').hide();
        $('.menu_sub_3_2p2q').hide();
        $('.menu_sub_4_Patricio').hide();
        $('.menu_sub_4_Silvia').hide();
        $('.menu_sub_4_NellyEdilmaInicial').hide();
        $('.menu_sub_4_NellyEdilmaBasica').hide();
        $('.menu_sub_4_Jonathan').hide();
        $('.menu_sub_4_Yenny').hide();
        $('.menu_sub_4_SilviaG').hide();
        $('.menu_sub_4_Jessica').hide();
        $('.menu_sub_4_YennyBasica').hide(); 
        $('.menu_sub_4_2pPatricio').hide();
        $('.menu_sub_4_2pSilvia').hide();
        $('.menu_sub_4_2pNellyEdilmaInicial').hide();
        $('.menu_sub_4_2pNellyEdilmaBasica').hide();
        $('.menu_sub_4_2pJonathan').hide();
        $('.menu_sub_4_2pYenny').hide();
        $('.menu_sub_4_2pSilviaG').hide();
        $('.menu_sub_4_2pJessica').hide();
        $('.menu_sub_4_2pYennyBasica').hide(); 
        $('.menu_sub_5').hide();
        $('.menu_sub_5_2p').hide();
        $('#form_notas1p2q').hide();
        $('#form_notas1p2qR').hide();
        $('#form_notas1p2qInicial').hide();
        $('#rectifica_nota').hide();
        
    });
//********************** CARGA NOTAS  1PARCIAL  2Q*****    
    $(document).on('click','#carga_notas_menu1p2q', function(){
            var docente = $('#este_docente').val();
            var curso = $('#oferta_aca').val();
            //alert (curso)
            if ( docente == 256){
                $('.menu_sub_4_Patricio').show();
                $('.menu_sub_3').hide();
            }
            if ( docente == 310){
               //alert (docente);
               $('.menu_sub_4_Patricio').show();
               $('.menu_sub_3').hide();
            }
            if ( docente == 312 || docente == 311 )
                {
                    if ( curso == 1 || curso == 2  || curso == 3 )
                        {
                            //alert (curso);    
                            $('.menu_sub_4_NellyEdilmaInicial').show();
                            $('.menu_sub_3').hide();    
                        }else {
                            //alert (curso);
                            $('.menu_sub_4_Patricio').show();
                            $('.menu_sub_3').hide();     
                        }
                
                }
        
                if ( docente == 315 )
                {
                    if ( curso == 3 )
                        {
                            //alert ("menu para Yenny ");    
                            $('.menu_sub_4_2pNellyEdilmaInicial').show();
                            $('.menu_sub_3').hide();    
                        }else {
                            //alert (curso);
                            $('.menu_sub_4_2pPatricio').show();
                            $('.menu_sub_3').hide();     
                        }
                
                }
            
                    
            if ( docente == 313){
               //alert (docente);
               $('.menu_sub_4_Patricio').show();
               $('.menu_sub_3').hide();
               $('#carga_recup').hide();   
            }
            if ( docente == 345){
               //alert (docente);
               $('.menu_sub_4_Patricio').show();
               $('.menu_sub_3').hide();
               $('#carga_recup').hide();   
            }
    
            if ( docente == 346){
               //alert (docente);
               $('.menu_sub_4_NellyEdilmaInicial').show();
               $('.menu_sub_3').hide();
               $('#carga_recup').hide();   
            }
        
    });
    $(document).on('click','#carga_recup_menu1p2q', function(){
            $('.menu_sub_5').show();
            $('.menu_sub_3').hide();
            //$('#btn_envio_notas2q').show();
        
    });
//***************** FIN  CARGA NOTAS  1PARCIAL  2Q***** 
    
//**************** CARGA NOTAS  2PARCIAL  2Q***** 
    $(document).on('click','#carga_notas_menu2p2q', function(){
            var docente = $('#este_docente').val();
            var curso = $('#oferta_aca').val();
            //alert (curso)
            if ( docente == 256){
                $('.menu_sub_4_2pPatricio').show();
                $('.menu_sub_3_2p2q').hide();
            }
            if ( docente == 310){
               //alert (docente);
               $('.menu_sub_4_2pPatricio').show();
               $('.menu_sub_3_2p2q').hide();
            }
            if ( docente == 312 || docente == 311 )
                {
                    if ( curso == 1 || curso == 2  || curso == 3 )
                        {
                            //alert (curso);    
                            $('.menu_sub_4_2pNellyEdilmaInicial').show();
                            $('.menu_sub_3_2p2q').hide();    
                        }else {
                            //alert (curso);
                            $('.menu_sub_4_2pPatricio').show();
                            $('.menu_sub_3_2p2q').hide();     
                        }
                
                }
        
                if ( docente == 315 )
                {
                    if ( curso == 3 )
                        {
                            //alert ("menu para Yenny ");    
                            $('.menu_sub_4_2pNellyEdilmaInicial').show();
                            $('.menu_sub_3_2p2q').hide();    
                        }else {
                            //alert (curso);
                            $('.menu_sub_4_2pPatricio').show();
                            $('.menu_sub_3_2p2q').hide();     
                        }
                
                }
            
                    
            if ( docente == 313){
               //alert (docente);
               $('.menu_sub_4_2pPatricio').show();
               $('.menu_sub_3_2p2q').hide();
               $('#carga_recup_menu2p2q').hide();   
            }
            if ( docente == 345){
               //alert (docente);
               $('.menu_sub_4_2pPatricio').show();
               $('.menu_sub_3_2p2q').hide();
               $('#carga_recup_menu2p2q').hide();   
            }
    
            if ( docente == 346){
               //alert (docente);
               $('.menu_sub_4_2pNellyEdilmaInicial').show();
               $('.menu_sub_3_2p2q').hide();
               $('#carga_recup_menu2p2q').hide();   
            }
        
    });
    $(document).on('click','#carga_recup_menu2p2q', function(){
            $('.menu_sub_5_2p').show();
            $('.menu_sub_3_2p2q').hide();
            //$('#btn_envio_notas2q').show();
        
    });
//***************** FIN  CARGA NOTAS  2PARCIAL  2Q***** 
    function limitDecimalPlaces(e, count) {
          if (e.target.value.indexOf('.') == -1) { return; }
          if ((e.target.value.length - e.target.value.indexOf('.')) > count) {
            e.target.value = parseFloat(e.target.value).toFixed(count);
          }
        }

        function isNumberKey(evt)
        {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

          return true;
        }

   

</script>