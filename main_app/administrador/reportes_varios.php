<?php 
    include '../../templates/header.php';
    session_start();
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
    require('reportes/fpdf.php');
    
?>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<style>
    #cuerpo{
        position:absolute;
        float: left;
        margin-left: 5px;
        margin-top: 60px;
    }
    .menuCSS3 ul {
		display: flex;
		padding: 0;
		margin: 0;
		list-style: none;
	}
	.menuCSS3 a {
		display: block;
		padding: 15px;
		background-color: #353D40;
		text-decoration: none;
		color:  #F2B138;
	}
	.menuCSS3 a:hover {
		background-color: #191C26;
	}
	.menuCSS3 ul li ul {
		display: none;
	}
	.menuCSS3 ul li a:hover + ul, .menuCSS3 ul li ul:hover {
		display: block;
	}
    .print{
        float: left;
        margin-top: 290px;
        margin-left: 100px;
        width: 80%;
        
    }
    .cuerpo_A4{
        height: 890px;
        width: 595px;
        /* to centre page on screen*/
        /*margin-left: auto;
        margin-right: auto;*/
        text-align: center;
    }
    .parrafo{
        text-align: justify;
        font-size: 16px;
        /*color: #000000;*/
    }


    #identidad{
        width: 80%;
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
    .parrafo_2{
        font-size: 12px;
        color: black;
        text-align: justify;
    }
</style>
  
<header id="cuerpo">
    <div class="identidad">
    <form id="form_cambia_nombres" action="">
       <div>
        <input class="iden" type="hidden" id="id_de_usuario" name ="id_usuario">
        <b class="bg-light">Nombres  </b><input class="iden" type="text" id="nombre_estu_2021" name="Nombres">
        <b class="bg-light">Apellidos  </b><input class="iden" type="text" id="apellido_estu_2021" name="Apellidos"> 
        <button type="submit" class="btn btn-success" id="actualiza_nom" >ACTUALIZAR</button>
       </div>
      
    </form>    
    </div><br>
    <nav class="menuCSS3">
		<ul>
			<li><a href="#" id="regresar_">Ver Lista</a></li>
			<li></li>
			<li><a href="#">Certificados </a>
				<ul>
					<li><a href="#" id="Cer_ma_">Matr??cula 2022 - 2023</a></li>
					
					
				</ul>
			</li>
			
<!--			<li><a href="#">Fichas</a>
				<ul>
					<li><a href="#">Ficha personal</a></li>
					
				</ul>

			</li>-->
		</ul>
	</nav>

</header>

<main class="print">
<button id="cert_">Imprimir</button>
<div class = "cuerpo_A4">
          <table  border="0">
            <tr>
                <td align="left" width="10%" ><img src="../../imagenes/logo1-03.png" id="logo_1" alt=""></td>
                <td><div class="titulo_enca"><b>ESCUELA DE EDUCACI??N B??SICA PARTICULAR CRISTIANA "JIREH"</b><p class="parrafo_4">Instruye al ni??o en su camino y a??n cuando fuera viejo no se apartar?? de ??l. prov. 22-6</p></div></td>
            </tr>
        </table> 
        <hr>  
        <br>
        <h5>CERTIFICADO DE MATR??CULA </h5>
        <h6>A??O LECTIVO 2022-2023</h6><br>
        <p class= "parrafo"><b>CERTIFICAMOS QUE:</b> El/la  ni??o(a) <b id="nombres_certificado"></b>&nbsp;<b id="apellidos_certificado"></b>. <h7>Previo el cumplimiento de los correspondientes requisitos legales y reglamentos en vigencia se matricul?? en el curso, nivel y a??o lectivo que a continuaci??n se detalla:</h7></p><br>
        <table class="parrafo" WIDTH="100%">
            <tr align="left">
                <td><h7><b>JORNADA</b></h7></td>
                <td><h7 id="jornada_cer"></h7></td>
            </tr>

            <tr>
                <td><h7><b>CURSO</b></h7></td>
                <td><h7 id="curso_cer"></h7></td>
            </tr>
            <tr>
                <td><h7><b>MATRICULA</b></h7></td>
                <td><h7 id="matricula_cer"></h7></td>
            </tr>
            <tr>
                <td><h7><b>FOLIO</b></h7></td>
                <td><h7 id="folio_cer"></h7></td>
            </tr>
            <tr>
                <td><h7><b>FECHA DE MATR??CULA</b></h7></td>
                <td><h7 id="fechamat_cer"></h7></td>
            </tr>
            <tr>
                <td><h7><b>TIPO DE MATR??CULA</b></h7></td>
                <td><h7 id="tipomat_cer"></h7></td>
            </tr>
            
        </table><br>
        <p class="parrafo"> <h7>Es todo cuanto podemos certificar en honor a la verdad y de acuerdo a los registros existentes en los archivos de la instituci??n  </h7>          
        </p><br>
        <table WIDTH="100%">
            <tr align="right">
                <td class="parrafo" id="fecha_mat"></td>
            </tr>
        </table>
        <br><br><br><br>
        <table class="parrafo" WIDTH="100%">
            <tr align="center">
                <td><h7>Prof. Jonathan Anchundia</h7></td>
                <td><h7>Srta. Katheryn Wampiu</h7></td>
            </tr>
            <tr align="center">
                <td><h7><b>DIRECTOR</b></h7></td>
                <td><h7><b>SECRETARIA</b></h7></td>
            </tr>
        </table>
        <br>
        <hr>
        <table  border="0">
            <tr>
                <td align="left"><div class="parrafo_2"><h7><b>DIRECCI??N: </b></h7><h7>Lotizaci??n Olga Borb??a calle Chontayacu y calle primera</h7><p class="parrafo_2"><h7><b>TELEFONO: </b></h7><h7>06 231 0271 / 0989095822</h7> <h7><b>E-MAIL:</b></h7> <h7>escuelacristianajireh@gamil.com</h7></p></div></td>
            </tr>
        </table> 
</div>

</main>

<script>
    /*date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current_date".innerHTML="Tena a los: "+ day + " d??as del mes " + month + " del " + year);*/
</script>
 
<script src="../../js/certificado_mat.js"></script>
<script src="../../js/reportes_varios_admin.js"></script>
