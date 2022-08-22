<?php 
    session_start();
    $id_usuario_estu =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #estudiante_2021{
        margin-top: 50px;
        margin-left: 200px;
    }
     .print_2{
        float: left;
        margin-top: 80px;
        margin-left: 200px;
        width: 50%; 
       
    }
    .cuerpo_A4_2{
        height: 890px;
        width: 595px;
        /* to centre page on screen*/
        /*margin-left: auto;
        margin-right: auto;*/
        text-align: center;    
    }
    .cuerpo_A4_3{
        height: 595px;
        width: 890px;
        /* to centre page on screen*/
        /*margin-left: auto;
        margin-right: auto;*/
        text-align: center; 
        margin-left: 8px;
    }
    .parrafo{
        text-align: justify;
        font-size: 12px; 
        
    }
    .nota_input{
        border: 0;
        text-align: center;
    }
    .parrafo_2{
        font-size: 12px;
        color: black;
        text-align: justify;
    }
    .parrafo_3{
        font-size: 11px;
        color: black;
        text-align: left;
    }
    .parrafo_4{
        font-size: 12px;
        color: darkred;
        text-align: center;
    }
    #logo_1{
        width: 90%;  

    }
    .titulo_enca{
        font-size: 16px;
        color: darkblue;
    }
    .parrafo_5{
        font-size: 11px;
        text-align: center;
        font-weight: bold; 
    }
    .parrafo_6{
        font-size: 11px;
        text-align: center;
        color: blue;
    }
    #tab_enca{
        float: left;
        margin-top: -20px;
    }
</style>

<!--**************************BOLETA DE CALIFICACIONES_ 2021 ************************-->
<main class="print_2">
<!--<button id="imprime_boleta2021">Imprimir</button>-->
    <button id="cal_prom">Calcular promedios</button>  
    <div class="cuerpo_A4_3">
            <table  border="0" id="tab_enca">
            <tr>
                <td align="left" width="10%" ><img src="../../imagenes/logo1-03.png" id="logo_1" alt=""></td>
                <td><div class="titulo_enca"><b>ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA "JIREH"</b><p class="parrafo_4">Instruye al niño en su camino y aún cuando fuera viejo no se apartará de Él. prov. 22-6</p></div></td>
                <hr>
            </tr>
           
        </table> 
        
        <p><h7><b>Distrito Educativo: </b> 15D01</h7>&nbsp;&nbsp;&nbsp;<h7><b>Año Lectivo 2021 - 2022</b></h7>&nbsp;&nbsp;<h7> <b id="nivel_promo_boleta"></b></h7></p>
        <p>Estudiante: <h7>&nbsp;&nbsp;<b id="nombre_estu_bas_2021"></b>&nbsp;<b id="apellido_estu_bas_2021"></b></h7></p>  
        <table class="parrafo" WIDTH="100%" border="1">
            <tr align="center">
                <td><b><h7>ASIGNATURAS</h7></b></td>
                <td colspan="4"><b><h7>PRIMER QUIMESTRE</h7></b></td>
                <td colspan="4"><b><h7>SEGUNDO QUIMESTRE</h7></b></td>
                <td><b><h7>PROMEDIO ANUAL</h7></b></td>
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7>1P</h7></td>
                <td class="parrafo_5"> <h7>2P</h7></td>
                <td class="parrafo_5"> <h7>Exa</h7></td>
                <td class="parrafo_5"> <h7>P.Q.</h7></td>
                
                <td class="parrafo_5"> <h7>1P</h7></td>
                <td class="parrafo_5"> <h7>2p</h7></td>
                <td class="parrafo_5"> <h7>Exa</h7></td>
                <td class="parrafo_5"> <h7>P.Q.</h7></td>
                
                
            </tr>
            <tr>
                <td class="parrafo_3"> <h7>LENGUA Y LITERATURA</h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_1p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_2p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_1Q_N1"> <h7></h7></td>
                
                <td class="parrafo_6"  id="lengua_boleta_2Q_1p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_2p"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6"  id="lengua_boleta_2Q_N2"> <h7></h7></td>
                
                <td class="parrafo_6"  id="lengua_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>   
                <td class="parrafo_3"> <h7>MATEMÁTICA</h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_1p"    > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_2p"    > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_exaI" > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="mate_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6" id="mate_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="mate_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>CIENCIAS NATURALES</h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="cnn_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6" id="cnn_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="cnn_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>    
                <td class="parrafo_3"><h7>ESTUDIOS SOCIALES</h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="eess_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6" id="eess_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="eess_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUC. CULT. Y ARTS.</h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="arti_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6" id="arti_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="arti_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>EDUCACIÓN FÍSICA</h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="culfi_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_exaII"> <h7></h7></td>
                <td class="parrafo_6" id="culfi_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="culfi_boleta_final"> <h7></h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>INGLÉS</h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_exaI"> <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="ingles_boleta_2Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="ingles_boleta_2Q_exaII"> <h7></h7></td>
                 <td class="parrafo_6" id="ingles_boleta_2Q_N2"   > <h7></h7></td>
                
                <td class="parrafo_6" id="ingles_boleta_final"> <h7></h7></td>
               
            </tr>
            <!--<tr>
                <td class="parrafo_3"><h7>VALORES</h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_1p"   > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_2p"   > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_1Q_N1"   > <h7></h7></td>
                
                <td class="parrafo_6" id="valores_boleta_2Q_1p"   > <h7>n1</h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_1prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_2p"   > <h7>n2</h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_2prec"> <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_pn8" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_pn2" > <h7></h7></td>
                <td class="parrafo_6" id="valores_boleta_2Q_N2"   > <h7>P.Q.</h7></td>
                
                <td class="parrafo_6" id="valores_boleta_final"> <h7>P.Q.Anual</h7></td>
                
            </tr>
            <tr>
                <td class="parrafo_3"><h7>PROYECTOS ESCOLARES</h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7></h7></td>
                <td class="parrafo_6"> <h7>EX</h7></td>
                
                <td class="parrafo_6"> <h7>EX</h7></td>
                
            </tr>-->

            <tr>
                <td> <h7>COMPORTAMIENTO</h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                
                
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
               
                
                <td class="parrafo_5"> <h7></h7></td>
                
            </tr>
        </table>
        <div class="row ml-1">
        <table class="parrafo mt-3" WIDTH="28%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>ASISTENCIA</h7></b></td>
                <td class="parrafo_5"><b><h7>1Q</h7></b></td>
                <td class="parrafo_5"><b><h7>2Q</h7></b></td>
                <td class="parrafo_5"><b><h7>Total</h7></b></td>
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>F.J</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>F.I</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>
                <td class="parrafo_5"> <h7>-</h7></td>                      
                
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Total dias laborados</h7></td>
                <td class="parrafo_5"> <h7>.</h7></td>
                <td class="parrafo_5"> <h7>.</h7></td>
                <td class="parrafo_5"> <h7>.</h7></td>
            </tr> 
            
        </table> &nbsp;
        <table class="parrafo mt-3" WIDTH="29%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>PROMEDIOS GENERALES</h7></b></td>
                <td class="parrafo_5"><b><h7>Ren</h7></b></td>
                <td class="parrafo_5"><b><h7>D.C.</h7></b></td>
                
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Primer Quimestre</h7></td>
                <td class="parrafo_6" id="prom_general_1Q_boleta"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>
                
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>Segundo Quimestre</h7></td>
                <td class="parrafo_6" id="prom_general_2Q_boleta"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td>                     
                
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Promedio Anual</h7></td>
                <td class="parrafo_6" id="prom_general_anual"> <h7></h7></td>
                <td class="parrafo_5"> <h7></h7></td> 
            </tr> 
            
        </table> &nbsp;
        <table class="parrafo mt-3" WIDTH="39%" border="1">
            <tr align="center">
                <td class="parrafo_5"><b><h7>Desarrollo Comportamental Art. 222</h7></b></td>
                <td class="parrafo_5"><h7>A = Muy satisfactorio</h7></td>
                
                
               
                
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>B = Satisfactorio</h7></td>
                <td class="parrafo_5"> <h7>C = Poco Satisfactorio</h7></td>
                
                
            
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>D = Mejorable</h7></td>
                <td class="parrafo_5"> <h7>E = Insatisfactorio</h7></td>
                                    
                
                
            </tr>
            
        </table>
        </div>
        <div class="row ml-1">
        <table class="parrafo mt-3" WIDTH="40%" border="1">
            <tr align="center">
                <td colspan="2" class="parrafo_5"><b><h7>Escala de califaciones de acuerdo  al Art.194</h7></b></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Domina los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>9.00 - 10.00</h7></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Alcanza los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>7.00 - 8.99</h7></td>
            </tr>
            <tr>
                <td class="parrafo_5"> <h7>Está proximo a alcanzar los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7>4.01 - 6.99</h7></td>
            </tr> 
            <tr>
                <td class="parrafo_5"> <h7>No alcanza los aprendizajes requeridos</h7></td>
                <td class="parrafo_5"> <h7> menos de  4.00 </h7></td>
            </tr>           
            
        </table> &nbsp; &nbsp; 
        <table class="parrafo mt-3" WIDTH="40%" border="0">
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr align="center">
               <td><h7>Prof. Jonathan Anchundia</h7></td>
               <td><h7>Srta. Katheryn Wampiu</h7></td>
            </tr>
            <tr align="center">               
                <td><h7><b>DIRECTOR</b></h7></td>
                <td><h7><b>SECRETARIA</b></h7></td>
            </tr>
        </table>  
                 
        </div>            
           
    </div>
    
</main>  