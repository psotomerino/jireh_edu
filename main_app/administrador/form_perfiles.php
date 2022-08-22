<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: http://jireh.edu.ec/');
        exit();
    }

?>
<style>
    #capa_1{
        background-color: rgba(0,0,0,0.7);
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 100px;
    } 
    .form{
        color: black;
        position: relative;
        width: 30%;
        height: 55%;
        background-color: #EEE;
        top: 20%;
        margin: -25px 0 0 -25px; 
        padding: 20px;
        
    }
    .form1{
        font-size: 22px;
        font-family:fantasy;
    }
</style>
<div id="capa_1">
    <div class="form">
        <center> 
       <div class="row">
           <div class="col-12"><h3>ASIGNACION DE PERFIL </h3></div>
       </div>
        <div class="row">
            <div class=" col-12 form1"></div>
        </div>
        <div class="row">           
            <div class="col-12">
              <center><h6><b id="nombres_com"></b></h6></center>
               <form id="form_perfiles">
                <input type="hidden" class="form-control" id="Id_usuario" name="Id_usuario">   
                    <select  class="form-control" id="perfil" required name="perfil">
                            <option value="estudiante">Estudiante</option>
<!--                            <option value="Admin">Admin</option>                         -->

                    </select> 
                    <b>Usuario</b><input  required type="text" class="form-control" id="usuarioP_" name="usuarioP">
                    <b>Contraseña</b><input required type="text" class="form-control" id="passwordP_" name="passwordP">
                    <!--<p class="btn btn-lg btn-primary btn-block mt-2" id="btn_asignarperfil">Asignar</p>
                    <p class="btn btn-lg btn-danger btn-block mt-2" id="btn_cancelar">Cancelar</p>-->
                    
                    <div class="btn btn-primary w-100 mt-2" id="btn_asignarperfil">Asignar</div>  
                    <div class="btn btn-info w-100 mt-2" id="btn_cancelar">Cancelar</div>       
                    
                </form>    
            </div>
        </div>        
        </center> 
    </div>
</div>
