<?php 
    include '../../templates/header.php';
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #aspirante_crud{
        margin-left: 200px;
        margin-top: 80px;
    }
    #crud{
        width: 95%;
        
    }
</style>
<main id="aspirante_crud">
    <div id="crud">
	<table class="table table-striped">
					<thead class="bg-warning text-black">
						<tr>
							<th  scope="col">Ord.</th>
							<th  scope="col">Cédula</th>
							<th  scope="col">Nombre</th>
							<th  scope="col">Apellido</th>
							<th  scope="col">Fecha/nacimiento</th>
							<!--<th  scope="col">Edad</th>-->
							<th  scope="col">Nivel/Aspira</th>
							<th  scope="col">Contacto</th>
							<th  scope="col">Correo</th>
							<th  scope="col" colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody id="listados"></tbody>
				</table>
	
	
    </div>
</main>



