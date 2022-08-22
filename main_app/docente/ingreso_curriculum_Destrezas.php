<?php 
   include 'conexion_1.php';
    
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #Destreza{
        float: left;
        margin-top: 120px;
        margin-left: 250px;
    }
    a{
        text-decoration: none;
        color : antiquewhite;
    }
    #btn{
        width: 50%;
        padding: 5px;
        border-radius: 3px;
    }
</style>
<main id="Destreza">
    <center>
    <form id="form_Destreza">
    <table class ="table-responsive" BORDER WIDTH="100%" border=1 >
        <tr align = center>
           <td style ="background: #EC7C13; " colspan="2"> Ingreso de Destrezas</td>           
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="50%"><b>Nivel de educacion</b></td>
            <td>
                <select name="nivel" class = "form-control">
                    <?php 
                        
                        $getnivel1 = "SELECT * FROM niveles";
                        $getnivel2 = mysqli_query($conexion, $getnivel1);
                        if(!$getnivel2){
                        die ('Error en la consulta '. mysql_error($conexion));
                        }
                        while($row = mysqli_fetch_array($getnivel2))
                        {
                            $id_nivel = $row['id_nivel'];
                            $nombre_nivel =$row['Nombre'];
                            ?>
                            <option value ="<?php echo $id_nivel ?>"> <?php echo $nombre_nivel  ?></option>
                            <?php
                        }    

                    ?> 
                </select>
            
            </td>
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="50%"><b>Asignatura</b></td>
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
            <td colspan="2"> <textarea name="Destreza" id="editor_D" class ="largo w-100" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style ="background: #A2D316; " border width ="50%"><b>¿Es Destreza Básica Impresindible?</b></td>
            <td align = center>
                <input required type="radio" name="Des_basica" value="Si"> Si
                <input requiered type="radio" name="Des_basica" value="No"> No
            </td >
        </tr>
        <tr align = center >
            <td ><button type="submit" class="btn btn-success" id="btn_Destreza_enviar">ENVIAR INFORMACIÓN </button></td>
           <td id="OE_cerrar"> <a href="#"><div class="bg-danger" id="btn">CERRAR</div></a></td>
        </tr>
        
    </table> 
    </form>
    </center>  
    
</main>
<script>
    CKEDITOR.replace("editor1");
</script>