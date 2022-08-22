<?php 
    session_start();
    $id_usuario_estu =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    .elecciones{
        margin-top: 80px;
        width: 90%;
        margin-left: 30px;
        
    }
    #titu{
        width: 40%;
        color: aliceblue;
        background: #2785EA;
        padding: 5px;
        text-align: center;
    }
</style>
<div class="elecciones">
    <h3 id="titu"><b>ELECCIONES ESTUDIANTILES JIREH 2021</b></h3>
    <p><img src="../../imagenes/elecciones.png" alt=""></p>
    <br>
    <form id="form_mivoto">
    <table class="table-responsive" BORDER WIDTH="90%">
        <tr>
            <td colspan="3">Hoy sábado 20 de noviembre del 2021, nuestra noble institución, celebra una fiesta cívica, democrática ejerciendo el derecho a elegir y ser elegidos. Desde las <b>9:00 am</b> hasta las <b>16:00 horas</b> podrás ejercer tu derecho al voto</td>
        </tr>
        <tr>
            <td >ID</td>
            <td colspan="2"><input type="text" id="id_estu" name="id_estu"></td>
        </tr>
        <tr>
            <td >VOTANTE</td>
            <td id="votante" colspan="2"></td>
        </tr>
        <tr align = center>
            <td><b>LISTA A</b><br><img src="../../imagenes/listaA_foto.png" alt=""><br><br><b>Kristhele Peñafiel</b></td>
            <td><b>LISTA B</b><br><img src="../../imagenes/listaB_foto.png"  alt=""><br><br><b>Jared Cañar</b></td>
            <td><b>LISTA C</b><br><img src="../../imagenes/listaC_foto.png"   alt=""><br><br><b>Tamara Escobar</b></td>
        </tr>
        <tr align = center>
            <td><input type="radio" name="mi_voto" value="A"><b>LISTA A</b></td>
            <td><input type="radio" name="mi_voto" value="B"><b>LISTA B</b></td>
            <td><input type="radio" name="mi_voto" value="C"><b>LISTA C</b></td>
        </tr>
        <tr align = center>
            <td colspan="3"><button type="submit" class="btn btn-success" id="btn_enviaMivoto"> REGISTRAR MI VOTO</button></td>
        </tr>
    </table>
    
    </form>
    <br>
    <br>
    
</div>