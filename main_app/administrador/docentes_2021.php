<?php 
    include '../../templates/header.php';
    include 'asigancion_docente_2021.php';
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    #docentes{
        margin-left: 200px;
        margin-top: 80px;
    }
    #crud{
        width: 95%;
        
    }
</style>
<main id="docentes">
   <div><a href="#" data-toggle="modal" data-target="#modalLoginForm"><button type="button" class="btn btn-primary">NUEVO DOCENTE</button></a></div>
   <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ingreso Datos de Docentes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form role="form" id="formulario_new_reg_doc">
                      <div class="form-group">
                        <input required type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula de identidad">
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres">
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos">
                      </div>
                      <div class="form-group">
                        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
                      </div>
                      <div class="form-group">
                        <select  class="form-control" id="sexo" required name="sexo">
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
				        </select> 
                      </div>
                      <div class="form-group">
                         <input  required type="text" class="form-control" id="fono_contacto_1" name="fono_contacto_1" placeholder="Numero de contacto">
                      </div>
                      <div class="form-group d-none">
                        <label for="nivel_edu_temporalo">Nivel al que aspira</label>
                        <select  class="form-control" id="nivel_edu_temporal" required name="nivel_edu_temporal">
										<option value="EGB">EGB</option>
										
				        </select> 
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="mail" name="mail" placeholder="correo electrónico">
                      </div>
                      <div class="form-group d-none" id="form_status" >
                        <label for="status">Estatus</label>
                        <select class="form-control" id="status" required name="status"><option value="docente">Docente</option>
                        </select> 
                      </div>
                      
                      <button type="submit" class="btn btn-success btn-lg btn-block " >INGRESAR</button>
                                    
                </form>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="table-responsive">
    <table id="" class="table table-bordered table-hover table-striped">
       <thead class="thead-light">
           <tr>
               <th width="5%">#</th>
               <th width="20%">Apellidos</th>
               <th width="20%">Nombres</th>
               <th width="10%">Contacto</th>
               <th width="20%">e-mail</th>
               <th width="30%">acciones</th>
           </tr>
         
       </thead>
       <tbody id="listados_doc"></tbody>
       
    </table>
</div>

  <div class="modal fade" id="modalLoginForm_doc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Editar Datos de Docentes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form role="form" id="formulario_new_reg_doc_ed">
                      <div class="form-group d-none">
                      <input type="text" class="form-control" id="id_usuario" name="id_usuario">
                      </div>
                      <div class="form-group">
                      <input required type="text" class="form-control" id="cedula_ed" name="cedula" placeholder="Cédula de identidad">
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="nombre_ed" name="Nombres" placeholder="Nombres">
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="apellido_ed" name="Apellidos" placeholder="Apellidos">
                      </div>
                      <div class="form-group">
                        <input type="date" class="form-control" id="fecha_nac_ed" name="Fecha_nac">
                      </div>
                      <div class="form-group">
                        <select  class="form-control" id="sexo_ed" required name="sexo">
                                        
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
				        </select> 
                      </div>
                      <div class="form-group">
                         <input  required type="text" class="form-control" id="fono_contacto_1_ed" name="fono_celular_1" placeholder="Numero de contacto">
                      </div>
                      <div class="form-group d-none">
                        <label for="nivel_edu_temporalo">Nivel al que aspira</label>
                        <select  class="form-control" id="nivel_edu_temporal" required name="nivel_edu_temporal">
										<option value="EGB">EGB</option>
										
				        </select> 
                      </div>
                      <div class="form-group">
                        <input required type="text" class="form-control" id="mail_ed" name="mail" placeholder="correo electrónico">
                      </div>
                      <div class="form-group d-none" id="form_status" >
                        <label for="status">Estatus</label>
                        <select class="form-control" id="status" required name="status"><option value="docente">Docente</option>
                        </select> 
                      </div>
                      
                      <button type="submit" class="btn btn-warning btn-lg btn-block " >ACTUALIZAR</button>
                                    
                </form>
      </div>
    </div>
  </div>
</div>
</main>