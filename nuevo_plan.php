<?php 
    require_once 'templates/header.php';
    include 'main_app/docente/conexion_1.php';
?>
<style>
    #mi_tabla{
        margin-top: 120px;
    }
    #CE {
        margin-top: 120px;
    }
</style>
<main id="CE">
   
    <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
   
   
    <center>
    <form id="form_CE">
    <table class ="table-responsive" BORDER WIDTH="70%" border=1 >
        <tr align = center>
           <td style ="background: #9F6DED; " colspan="2"> CREAR MI PLAN DE CLASE</td>           
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="15%"><b>Asignatura</b></td>
            <td>
                <select name="asignatura" class = "form-control">
                    <?php 
                        
                        $getasignatura1 = "SELECT * FROM asignatura";
                        $getasigantura2 = mysqli_query($conexion, $getasignatura1);
                        if(!$getasigantura2){
                        die ('Error en la consulta '. mysql_error($conexion));
                        }
                        while($row = mysqli_fetch_array($getasigantura2))
                        {
                            $id_asignatura = $row['id_asignatura'];
                            $nombre_asignatura =$row['nom_asignatura'];
                            ?>
                            <option value ="<?php echo $id_asignatura ?>"> <?php echo $nombre_asignatura ?></option>
                            <?php
                        }     
                       
                    ?> 
                </select>
            
            </td>
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="15%"><b>Objetivos Especificos </b></td>
            <td>
                <select name="asignatura" class = "form-control">
                    <?php 
                        
                        $getO1 = "SELECT * FROM Objetivo_especifico";
                        $getO2 = mysqli_query($conexion, $getO1);
                        if(!$getO2){
                        die ('Error en la consulta '. mysql_error($conexion));
                        }
                        while($row = mysqli_fetch_array($getO2))
                        {
                            $id_asignatura = $row['id_O'];
                            $nombre_asignatura =$row['Objetivo_especifico'];
                            ?>
                            <option value ="<?php echo $id_asignatura ?>"> <?php echo $nombre_asignatura ?></option>
                            <?php
                        }    

                    ?> 
                </select>
            </td>
        </tr>
        <tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="15%"><b>Destrezas</b></td>
            <td>
                <select name="asignatura" class = "form-control">
                    <?php 
                        
                        $getD1 = "SELECT * FROM Destrezas";
                        $getD2 = mysqli_query($conexion, $getD1);
                        if(!$getD2){
                        die ('Error en la consulta '. mysql_error($conexion));
                        }
                        while($row = mysqli_fetch_array($getD2))
                        {
                            $id_Destreza = $row['id_Destreza'];
                            $Destrezas =$row['Destrezas'];
                            ?>
                            <option value ="<?php echo $id_Destreza ?>"> <?php echo $Destrezas ?></option>
                            <?php
                        }    

                    ?> 
                </select>
            </td>
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="15%"><b>Criterio de Evaluacion</b></td>
            <td>
                <select name="asignatura" class = "form-control">
                    <?php 
                        
                        $getCE1 = "SELECT * FROM CE";
                        $getCE2 = mysqli_query($conexion, $getCE1);
                        if(!$getCE2){
                        die ('Error en la consulta '. mysql_error($conexion));
                        }
                        while($row = mysqli_fetch_array($getCE2))
                        {
                            $id_CE = $row['id_CE'];
                            $criterio_evaluacion =$row['criterio_evaluacion'];
                            ?>
                            <option value ="<?php echo $id_CE ?>"> <?php echo $criterio_evaluacion ?></option>
                            <?php
                        }    

                    ?> 
                </select>
            </td>
        </tr>

        <tr> 
            <td style ="background: #85E0E0; " border width ="15%"><b>INGRESE SU PLAN DE CLASE</b></td>  
            <td colspan="2"> <textarea name="CE" id="editor1" class ="largo w-100" rows="10"></textarea></td>
        </tr>
        <tr> 
            <td style ="background: #85E0E0; " border width ="15%"><b>INGRESE SU PLAN DE PLATAFORMA</b></td>  
            <td colspan="2"> <textarea name="CE" id="editor1" class ="largo w-100" rows="10"></textarea></td>
        </tr>
        <tr align = center >
            <td ><button type="submit" class="btn btn-success" id="btn_CE_enviar">ENVIAR INFORMACIÓN </button></td>
           <td id="OE_cerrar"> <a href="#"><div class="bg-danger" id="btn">CERRAR</div></a></td>
        </tr>
        
    </table> 
    </form>
    </center>  
    
</main>
<script>
    CKEDITOR.replace("editor1");
</script>
<!--<script type="text/javascript" src="js_plan/nuevo_plan.js"></script>-->



