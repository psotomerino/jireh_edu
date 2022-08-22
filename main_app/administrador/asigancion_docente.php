<?php 
    include '../../templates/header.php';
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #asigna_doc{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 80px;
    }
    #bor1{
        padding: 10px;
        border: 1px solid #A7C6D9;
        border-radius: 15px;
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
    }
    .bor{
        border: 0;
        text-align: center;
    }
    #form_asig_niv{
        width: 30%;
    }
</style>

<main id="asigna_doc">
<div id="bor1">
    <input type="text" id="nombre_e" class="bor"><input type="text" id="apellido_e" class="bor"><input type="text" style="text-align:center" id="cedula_e">
    
    
</div>
<hr>
<div class="table-responsive">
    <table id="" class="table table-bordered table-hover table-striped">
       <thead class="thead-light">
           <tr>
               <th width="10%">Ord.</th>
               <th width="10%">AÑO LECTIVO</th>
               <th width="20%">GRADO ASIGNADO </th>
               <th width="10%">Acciones</th>
           </tr>
         
       </thead>
       <tbody id="listados_doc_aula"></tbody>
       
    </table>
</div>
<!--<h5>ASIGANCIÓN DE USUARIO Y CONTRASEÑA:</h5><button type="button" class="btn btn-danger" id="generar_usu">GENERAR-USUARIO</button>

<div class="mt-1" id="form_login">
        <form role="form" id="formulario_login">
                      <div class="form-group d-none">
                        <input required type="text" class="form-control" id="id_usuario_W" name="id_usuario_W">
                       </div>
                       <div class="form-group d-none">
                        <select  class="form-control" id="tipo_usu" required name="tipo_usu">
										<option value="Masculino">docente</option>
										
				        </select> 
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="nom_usu" name="nom_usu" placeholder="Nombre usuario">
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="pass_usu" name="pass_usu" placeholder="Contraseña ">
                      </div>
                     
                      <button type="submit" class="btn btn-success" >ASIGNAR</button><button type="submit" class="btn btn-primary ml-2" id="btn-cierra-form" >CERRAR</button>
                                    
                </form>
</div>-->
<hr>
<h5>ASIGANCIÓN DE NIVEL EDUCATIVO</h5><button type="button" class="btn btn-danger" id="asig_niv">ASIGNAR NIVEL EDUCATIVO</button><button type="button" class="btn btn-primary ml-2" id="btn-cierra-form_asig_niv" >CERRAR</button>
<div class="mt-1" id="form_asig_niv">
        <form role="form" id="formulario_asig_niv">
                       <div class="form-group d-none">
                         <input required type="text" class="form-control" id="id_usuario_e" name="id_usuario_e">
                       </div>
                       <div class="form-group">
                       <label for="ano_lec">AÑO LECTIVO</label>
                       <select  class="form-control" id="ano_lec" required name="ano_lec">
										<option value="1">2020-2021</option>
										
				       </select>
                       </div>
                       <div class="form-group">
                       <label for="aula">AULA</label>
                       <select  class="form-control" id="aula" required name="aula">
										<option value="1">Inicial 3 años</option>
										<option value="2">Inicial 4 años</option>
										<option value="3">Primero EGB</option>
										<option value="4">Segundo EGB</option>
										<option value="5">Tercero EGB</option>
										<option value="6">Cuarto EGB</option>
										<option value="7">Quinto EGB</option>
										
										
				       </select> 
                       </div>
                                         
                      <button type="submit" class="btn btn-success btn-lg btn-block" >ASIGNAR</button>
                                    
                </form>
</div>  
</main>

