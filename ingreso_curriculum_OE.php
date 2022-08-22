<?php 
    require_once 'templates/header.php';

?>
<style>
    #OE{
        margin-top: 80px;
    }
</style>
<main id="OE">
    <center>
    <table class ="table-responsive" BORDER WIDTH="50%" border=1 >
        <tr align = center>
           <td style ="background: #211B9A;  color: white; " colspan="2"> Ingreso de Objetivos especificos</td>           
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="50%"><b>Nivel de educacion</b></td>
            <td>nivel</td>
        </tr>
        <tr>
            <td style ="background: #85E0E0; " border width ="50%"><b>Asignatura</b></td>
            <td>nombre asignatura</td>
        </tr>
        <tr>
            <td colspan="2"> <textarea name="OE" id="editor1" class ="largo w-100" rows="4"></textarea></td>
        </tr>
        
    </table>    
    </center>
    
</main>
<script>
    CKEDITOR.replace("editor1");
</script>


