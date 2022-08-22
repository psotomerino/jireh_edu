<?php 
   
  

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
    .miplan_1{
        position:absolute;
        float: left;
        margin-top: 50px;
    }
    #info_1{
        position:absolute;
        float: left;
        margin-top: 300px;
    }
    #OG_menu{
        position:absolute;
        float: left;
        width: 30%;
        margin-top: 120px;
        background: #658cf2;
    }
    a:hover {
        background-color: yellow;
        color: black;
    }
 

    


</style>
<main class="miplan_1">
<!--Menu horizontal -->
<div class="navbar navbar-expand-md navbar-light bg-primary mb-4" role="navigation">
   <div class="collapse navbar-collapse" id="navbarCollapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
               <!--<div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Planificacion microcurricular
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" id="btn-nuevo-P">Nuevo Plan</a>
                    <a class="dropdown-item" href="#">Mis planificaciones</a>                   
                  </div>
                </div>-->
                <div class="dropdown">
                      <button class="dropbtn">Planificacion Microcurricular</button>
                      <div class="dropdown-content">
                        <a href="#" id="btn-nuevo-P">Nuevo Plan</a>
<!--                        <a href="#" id="btn-misPlanes">Mis Planes</a>-->
                        
                      </div>
                    </div>
            </li>
           <!-- <li class="nav-item admin">
                 <a class="nav-link" style="color: white;" href="#" id="btn_OG">Objetivos Generales</a>
            </li>-->
            <li class="nav-item admin">
                 <a class="nav-link" style="color: white;" href="#" id="btn_OE">Objetivos especificos</a>
            </li>
            <li class="nav-item admin">
                 <a class="nav-link" style="color: white;" href="#" id="btn_destreza">Destrezas</a>
            </li>
            <li class="nav-item admin">
                 <a class="nav-link" style="color: white;" href="#" id="btn_CE">Criterio Evaluacion (CE)</a>
            </li>
            <li class="nav-item admin">
                 <a class="nav-link" style="color: white;" href="#" id="btn_IE">Indicador Evaluacion (IE)</a>
            </li>

        </ul>          
   </div>   
</div>
</main>

<div id="info_1">
    <input type="text" id="oferta_aca">
    <input type="text" id="id_asignatura">   
</div>
<div class="container" id="OG_menu">
   <div class="row">
       <div class="">
            <h5>INGRESO DE OBJETIVOS GENERALES POR ASIGANTURA Y AMBITO</h5>  
           <form class="form-horizontal" id="OG_ingreso">
            <div class="form-group">
                        <select  class="form-control" id="" required name="asignatura">
                                        <option value="#"> </option>
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
            <div class="form-group">
                <textarea class="form-control" id="OG_texto" name="OG_texto" required placeholder="Ingreso del Objetivo General del Curriculum" rows="7"></textarea>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg" id="btn_OG_envia">Enviar </button>
            </div>   
           </form>
       </div>
   </div>

</div>








