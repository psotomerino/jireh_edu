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
    #cupo_2021{
        margin-left: 200px;
        margin-top: 80px;
    }
</style>

<main id="cupo_2021">
     <div id="crud">
	<table class="table table-striped">
					<thead class="bg-success text-black">
						<tr>
							<th  scope="col">Ord.</th>
							<th  scope="col">Cédula</th>
							<th  scope="col">Nombre</th>
							<th  scope="col">Apellido</th>
							<th  scope="col">Nivel 2020</th>
							<th  scope="col">Contacto</th>
							<th  scope="col">Correo</th>
							<th  scope="col" colspan="3">Acciones</th>
						</tr>
					</thead>
					<tbody id="listados_cupo"></tbody>
				</table>
	
	
    </div>
</main>