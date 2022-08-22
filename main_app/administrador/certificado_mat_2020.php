<?php
    include '../../templates/header.php';
    //include 'templates/footer.php';
?>
<style>
    .cuerpo_A4{
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .parrafo{
        text-align: justify;
        font-size: 18px;
    }
</style>

<header>
<button id="cert_2020">Imprimir</button>
    <div class = "cuerpo_A4">
        <h2>CERTIFICADO DE MATRICULA </h2>
        <h4>AÑO LECTIVO 2020 2021</h4><br>
        <p class= "parrafo"><b>CERTIFICAMOS QUE:</b> El(a) Sr.(ta) <b><div id="nombres_certificado"></div></b> Previo el cumplimiento de los correspondientes requisitos legales y reglamentos en vigencia se matriuclò en el curso, nivel y ao lectivo que a continuaciòn se detalla:</p>
    </div>
</header>



<?php
     include '../../templates/footer.php';
   
?>
<script src="../../js/certificado_mat_2020.js"></script>
<script src="../../js/reportes_varios_admin.js"></script>