<?php 
    include '../../templates/header.php';
    
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<!--
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>-->

<style>
    #confirmado_crud{
        margin-left: 200px;
        margin-top: 80px;
    }
    #crud{
        width: 95%;
        
    }
</style>
<main id="confirmado_crud">
    <div id="crud">
	<table class="table table-striped" WIDTH="90%">
					<thead class="bg-warning text-black">
						<tr>
							<th  scope="col">Ord.</th>
							<th  scope="col">Cédula</th>
							<th  scope="col">Nombre</th>
							<th  scope="col">Apellido</th>
							<th  scope="col">Fecha/nacimiento</th>
							<th  scope="col">Nivel Anterior</th>
							<th  scope="col">Contacto</th>
							<th  scope="col">Correo</th>
							<th  scope="col" colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody id="listados_confirmados"></tbody>
				</table>
	
	
    </div>
</main>


      
      <div class="container para_mat">
          <div class="row">
              <div class="col-5">
      
               <form role="form" id="formulario_matricula">
                              <div class="form-group d-none">
                              <input type="text" class="form-control" id="id_usuario" name="id_usuario">
                              </div>
                              <div class="form-group">
                              <select  class="form-control" id="ano_lectivo" required name="ano_lectivo">

                                                <option value="4">2022-2023</option>

                              </select> 
                              </div>
                              <div class="form-group">
                              <select  class="form-control" id="aula" required name="aula">
                                                <option value="1">Inicial 3 años</option>
                                                <option value="2">Inicial 4 años</option>
                                                <option value="3">Primero EGB</option>
                                                <option value="4">Segundo EGB</option>
                                                <option value="5">Tercero EGB</option>
                                                <option value="6">Cuarto EGB</option>
                                                <option value="7">Quinto EGB</option>
                                                <option value="8">Sexto EGB</option>
                                                <option value="10">Séptimo EGB</option>


                               </select> 
                               </div>
                               <div class="form-group">
                                <input type="date" class="form-control" id="fecha_matri" name="fecha_matri" required>
                               </div>
                                <div class="form-group">
                                <input type="text" class="form-control" id="num_matri" name="num_matri" placeholder="Número de matricula" required><button type="button" class="btn-success" id="matri_numero">Generar número</button>
                               </div>
                               <div class="form-group">
                               <select  class="form-control" id="jornada" required name="jornada">
                                                <option value="Matutina">Matutina</option>

                               </select> 
                               </div>
                               <div class="form-group">
                               <select  class="form-control" id="tipo_matri" required name="tipo_matri">
                                                <option value="Ordinaria">Ordinaria</option>
                                                <option value="Extraordinaria">Extraordinaria</option>

                               </select> 
                               </div>

                              <button type="submit" class="btn btn-warning btn-lg btn-block " >MATRICULAR</button>

                        </form>
                 </div>   
              </div>
        </div>
<script src="../../js/generar_numMat.js"></script>
















































