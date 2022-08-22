<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #informes_A{ 
        /*position:absolute;
        float: left;*/
        margin-left: 100px;
        margin-top: 80px;
         
        }
    .container_N{
        margin-left: 100px;
        margin-top: 30px;
    }
    #estas_notas{        
        background-color: skyblue;
        display: block;
        
    }
    .prom1Qcolor{
        background-color: aquamarine;
    }
    .prom_Gencolor{
        background-color: cornflowerblue;
    }
    #tot_Al{
        text-align: center;
        background-color: chartreuse;
    }
    #tot_AlN{
        font-family: inherit;
        text-align: center;
        background-color: blanchedalmond;
    }
    #PRfin{
        margin-top: 10px;
        width: 60%;
    
    }
    #tr1{
        background-color: blanchedalmond;
        text-align: center;
    }
    #tr2{
        background-color: darkseagreen;
        text-align: center;
    }
    #tr3{
        text-align: center;
    }
    #tab_Apre{
        width: 60%;
    }
    .tab_Ap{
        background-color: azure;
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
    .PN8{
        background-color: cornsilk;
    }


</style>
<main id="informes_A">
    <p>
          <button class="btn btn-primary coman" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Informes promedios anuales</button>
          <button class="btn btn-warning" id="nueva_c">Nueva consuta</button>
    </p>    
    <div class="collapse" id="collapseExample">
     <div class="row">
        <div class="ml-3" id="nivel_edu">
          <p><b>Nivel de educación</b>
            <select id="nivelE" name="nivelE" class="form-control">
            </select>
          </p>
        </div>  
    
       <div class="ml-3" id="materiaS">
          <p><b>Asignaturas</b>
          <select id="lista_asignatura" name="asignatura" class="form-control">
          </select>
        </p>
      </div>
         
    </div> 
    </div> 
    <br>  
</main>
<div class="container_N">
    <table>
       <tr>
           <td><button id="cal_informes">Calcular promedios</button></td>
       </tr>
        <tr>
           <td><table class="table" id="notas_cal"></table></td>
           <td><table class="table" id="notas_cal1"></table></td>
           <td><table class="table" id="notas_cal2"></table></td>
           <td><table class="table" id="notas_cal3"></table></td>
           <td><table class="table" id="notas_cal4"></table></td>
           <td><table class="table" id="notas_cal5"></table></td>
        </tr>
        <tr>
            
            <td colspan="5" id="tot_Al">Total estudiantes</td>
            <td id="tot_AlN">0</td>
            
        </tr>
        
    </table>
 
    <table class="table table-hover" id="PRfin">
        
        <tr id="tr1">
            <td colspan="3"><b>Media Aritmética por paciales</b></td>
        </tr>
        <tr>
            <td><b>Item</b></td>   
            <td ><b>PRIMER QUIMESTRE</b></td>
            <td ><b>SEGUNDO QUIMETRE</b></td>

        </tr>
        <tr>
            <td><b>Parcial I</b></td>
            <td id="PN1"></td>
            <td id="PN4"></td>
        
        </tr>
        <tr>
            <td><b>Parcial II</b></td>
            <td id="PN2"></td>
            <td id="PN5"></td>
            
        </tr>
    </table> <br>
    <table class="table table-hover" id="tab_Apre" >
        <tr>
            <td colspan="4" class="tab_Ap"><b>Tabla de aprendizajes</b></td>            
        </tr>
        <tr>
            <td></td>
            <td>1er Quimestre</td>
            <td>2do Quimestre</td>
            <td>Anual </td>
        </tr>
        <tr>
            <td>Media Aritmética</td>
            <td ><ul><li id="PN6"></li></ul></td>
            <td ><ul><li id="PN7"></li></ul></td>
            <td ><ul><b><li class="PN8"></li></b></ul></td>
        </tr>
        <tr>
            <td>Domina los aprendizajes requeridos 9.00 - 10.00</td>
            <td ><ul><li id="DAQ1"></li><li id="PRdaq1"></li></ul></td>
            <td ><ul><li id="DAQ2"></li><li id="PRdaq2"></li></ul></td>
            <td ><ul><li id="DA"></li><li id="PRda"></li></ul></td>
        </tr>
        <tr>
            <td>Alcanza los aprendizajes requeridos 7.00 - 8.99</td>
            <td><ul><li id="AAQ1"></li><li id="PRaaq1"></li></ul></td>
            <td><ul><li id="AAQ2"></li><li id="PRaaq2"></li></ul></td>
            <td><ul><li id="AA"></li><li id="PRaa"></li></ul></td>
        </tr>
        <tr>
            <td>Está próximo a alcanzar los aprendizajes requeridos 4.01 - 6.99</td>
            <td ><ul><li id="PAQ1"></li><li id="PRpaq1"></li></ul></td>
            <td ><ul><li id="PAQ2"></li><li id="PRpaq2"></li></ul></td>
            <td ><ul><li id="PA"></li><li id="PRpa"></li></ul></td>
        </tr>
        <tr class="tab_Ap">
            <td><b>Total</b></td>
            <td><ul><b><li id="totq1"></li></b></ul></td>
            <td><ul><b><li id="totq2"></li></b></ul></td>
            <td><ul><b><li id="totfinal"></li></b></ul></td>
        </tr>
      
    </table>
   
        
</div>

   


