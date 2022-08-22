<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../templates/footer.php';
    include 'ficha_situacional.php';
    //include 'boletas_cal2022.php';
    //include 'elecciones_2021.php';
    //include 'horarios.php';
    //include 'actualiza_datos_estudiante.php';
    //include 'form_asig_autoeval.php';
    //include 'reporte_notas.php';

    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
        header('location: ../../login.php');
    exit();
    }
    
    $id_usuario =$_SESSION['usuario']['id_usuario'];

   session_start();
    $id_usuario =$_SESSION['usuario']['id_usuario'];

   $sql = "SELECT * FROM `Login` INNER JOIN Usuarios on Login.id_usuario = Usuarios.id_usuario WHERE Login.id_usuario = $id_usuario";
   $resultado = $pdo->prepare($sql);
   $resultado->execute();
   while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
       
       $nick= $registro['nick'];
       $id_soy_yo = $registro['id_usuario'];
       $Apellidos = $registro['Apellidos'];
       $Nombres = $registro['Nombres'];
       $Cedula = $registro['Cedula'];
       $Fecha_nacimiento =$registro['Fecha_nacimiento'];
       $Fono_celular_1=$registro['Fono_celular_1'];
       $mail=$registro['mail'];
   }
   
   $resultado->closeCursor();

   
?>
<style>
   #barra_arriba{
        -webkit-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
    }
    
   #aside_left{
       position: absolute;
       width: 180px;
       height: auto;
       background: white;     
       padding: 5px;
       top: 0;
       bottom: 0;
       -webkit-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
       -moz-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
    }
    #aside_left ul{
        margin: 0px;
        padding: 0px;
    }
    #div_aside_1 {
        margin-top: 60px; 
        align-content: center;
       
    }    
    #tarjeta{
        margin: 0px;    
        background:  #F2E883;
        text-align: center;
        padding: 5px;
    }
    /*#div_aside_1 ul li{
        list-style: none;
        float: left;
        width: 95%;
        text-align: center;
    }
    #div_aside_1 ul li span{
        color: red;
        font-family: sans-serif;
    }*/
    #div_aside_2{
        -webkit-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
    }
    .container{
        width: 85%;
        overflow: hidden;
        margin-top: 65px;
        margin-left: 250px;
/*        background-color: #F2F2F0;*/
        padding: 20px;
    }

    .container ul li{
        list-style: none;
        float: left;
        width: 15%;
        height: 160px;
        background: #F2F2F0;
        margin: 40px 10px 0px 30px;
        border: 1px solid black;
        border-radius: 25px;
        box-sizing: border-box;
        border: 2px solid white;
        text-align: center;
    }
    .container ul li: hover{
        opacity: 0.9;
    }

    .container ul li .title{
        width: 100%;
        height: 25%;
        line-height: 50px;
        text-align: center;
       /* -webkit-box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);*/
    }
    @media screen and (max-width: 1250px){
        .container ul li{
            width: 40%;
            margin-left: 50px;
        }
    }
    
    @media screen and (max-width: 750px){
        .container{
            width: 100%;
            padding: 0px;
            margin-left: 10px;
        }
        .container ul li{
            float: none;
            width: 90%;
            margin: 40px auto;
        }
        #aside_left{
            display: none;
        }
    }
    
    .btn_control{
        background: #F2F2F0;
        height: 10%;
        display: flex;
        align-items: center;
    }
    a{
        text-decoration: none;
    }
    #este_alumno{
        display: none;
    }
    #aviso_ficha{
        float: right;
        width: 20%;
        margin-right: 20px;
        margin-top: -250px;
        
            
    }
 
</style>
<header>
 <div class="container-fluid fixed-top">
    <div class="row bg-dark" id="barra_arriba">
         <div class="col-2 p-1 ">
			 <div class="text-white"> Sistema Integrado Acádemico </div>
			 
		 </div>
         <div class="col-7 p-1 ">
            <a href="index.php" class="bg-warning p-1 mt-1">Escritorio</a> 
		 </div>

		 <div class="col-3 p-1">
             <a  href="../salir_admin.php"><button class="btn btn-primary float-right">Salir</button></a>
        </div>
    </div>
</div>
</header>
<nav></nav>
<main id="pag_inicio">
   <aside id="aside_left"> 
        <div id="div_aside_1">
           <ul id="tarjeta">
                    <li id="este_alumno"><?php echo $id_soy_yo?></li>
                    <li id="nombre_estu"><div class="" ></div><b><?php echo $Nombres?></b></li>
                    <li id="apellido_estu"><div class="" ></div><b><?php echo $Apellidos?></b></li>
                    <!--<li><div class="title"></div><span >Cédula:</span><?php echo $Cedula?></li>
                    <li><div class="title"></div><?php echo $Fecha_nacimiento?></li>
                    <li><div class="title"></div><span >Contancto:</span><?php echo $Fono_celular_1?></li>
                    <li><div class="title"></div><?php echo $mail?></li>-->
                
            </ul>
        </div>        
        <hr>
        <a href="#"><div id="btn_control"><h6>Escritorio </h6></div></a>
        <hr>
        
    </aside>
    <div class="container" id="escritorio">
           <ul>
               <li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_ficha_situacional" role="
               ">Ficha/Est<br><img src="../../imagenes/icono_actualizar.jpg" class="w-75" alt=""></a></div></li>
               <!--<li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_vota" role="
               ">Sufragio <br><img src="../../imagenes/sufragio.png" class="w-75" alt=""></a></div></li>
               <li><div class=""><a href="cer_gran_aventura.php" target="_blank" class="btn btn-default btn-lg active" id="" role="button">Gran Aventura<br><img src="../../imagenes/certificado_aventura.jpg" class="w-75" alt=""> </a></div></li>
               <li><div class=""><a href="cer_gran_aventura.php" target="_blank" class="btn btn-default btn-lg active" id="extrac_N" role="button">Calificaciones<br><img src="../../imagenes/mis_calificaciones.jpg" class="w-75" alt=""> </a></div></li>
               <li><div class="title">PORTAFOLIO</div></li>
               <li><div class="title">NOTAS 2020</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>-->
           </ul>
         
        </div>
</main>
<!--<div class="alert alert-warning" id="aviso_ficha" role="alert">
Ha finalizado el tiempo para llenar la ficha situacional.
</div>-->
<footer></footer>
<script src="../../js/app_estudiante_2021.js"></script>
<script src="../../js_estudiates_varios/elecciones.js"></script>
<script src="../../js_estudiates_varios/horarios.js"></script>
<script src="../../js_estudiates_varios/notas_estudiante2021.js"></script>




