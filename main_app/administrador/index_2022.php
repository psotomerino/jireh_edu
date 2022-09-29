<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../templates/footer.php';    
    include 'listado_general_confirmados.php';
    include 'lista_estu.php';
    include 'reportes_varios.php';
    include 'form_perfiles.php';
    include 'docentes_2021.php';
    /*include 'subir_notas_2021.php';
   
    include 'sabanas.php';*/
   
        

  
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    header('location: index.php');
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
       $id_usuario_tabla =$registro['id_usuario'];
       $Apellidos = $registro['Apellidos'];
       $Nombres = $registro['Nombres'];
       $Cedula = $registro['Cedula'];
       $Fecha_nacimiento =$registro['Fecha_nacimiento'];
       $Fono_celular_1=$registro['Fono_celular_1'];
       $mail=$registro['mail'];
   }
   
   $resultado->closeCursor();

   
?>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<link rel="stylesheet" href="../../css/boton_desplegable.css">
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
        margin-left: 180px;
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

    
    
</style>
<header>
  <div class="container-fluid fixed-top">
    <div class="row bg-dark" id="barra_arriba">
         <div class="col-5 p-1 ">
			 <p class="text-white"> Sistema Integrado Acádemico</p>
		 </div>
		 <div class="col-4">
                    <div class="dropdown">
                      <button class="dropbtn">Año Lectivo</button>
                      <div class="dropdown-content">
                        <a href="index.php">Inicio</a>
                        <a href="index_2020.php">2020 - 2021</a>
                        <a href="index_2021.php">2021 - 2022</a>
                        <a href="index_2022.php">2022 - 2023</a>
                        
                      </div>
                    </div> 
		 </div>
		 <div class="col-3 p-1">
             <a  href="../salir_admin.php"><button class="btn btn-primary float-right">Salir</button></a>
        </div>
    </div>
</div>
</header>
<nav></nav>
<main>
   <aside id="aside_left"> 
        <div id="div_aside_1">
            <ul id="tarjeta">
                <li><div class="title"></div><b><?php echo $Nombres?></b></li>
                <li><div class="title"></div><b><?php echo $Apellidos?></b></li>
                <!--<li><div class="title"></div><span >Cédula:</span><?php echo $Cedula?></li>
                <li><div class="title"></div><?php echo $Fecha_nacimiento?></li>
                <li><div class="title"></div><span >Contancto:</span><?php echo $Fono_celular_1?></li>
                <li><div class="title"></div><?php echo $mail?></li>-->             
            </ul>
        </div>        
        <br>
        <hr>
        <a href="#"><div id="btn_control"><h6>Escritorio </h6></div></a>
        <a href="#"><div id="btn_control_doc"><h6>Docentes </h6></div></a>
        <hr>
        <a href="#"><div id="btn_control_3anos"><h6>Inicial 3 años</h6></div></a>
        <a href="#"><div id="btn_control_4anos"><h6>Inicial 4 años</h6></div></a>
        <a href="#"><div id="btn_control_primero"><h6>Primero EGB</h6></div></a>
        <a href="#"><div id="btn_control_segundo"><h6>Segundo EGB</h6></div></a>
        <a href="#"><div id="btn_control_tercero"><h6>Tercero EGB</h6></div></a>
        <a href="#"><div id="btn_control_cuarto"><h6>Cuarto EGB</h6></div></a>
        <a href="#"><div id="btn_control_quinto"><h6>Quinto EGB</h6></div></a>
        <a href="#"><div id="btn_control_sexto"><h6>Sexto EGB</h6></div></a>
        <a href="#"><div id="btn_control_septimo"><h6>Séptimo EGB</h6></div></a>
        
     </aside>
   
    <div class="container" id="escritorio">
            <center><h3><b>Año lectivo 2022 - 2023</b></h3></center>
            <ul>
<!--
               <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_aspirante" role="button">Aspirantes <br><img src="../../imagenes/nomina_estudiantes.jpg" class="w-75" alt=""> </a></div></li>
               <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_con_cupo_2021" role="button">Cupo 2021<br><img src="../../imagenes/con_cupo.jpg" class="w-75" alt=""> </a></div></li>
-->
                <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_confirmado" role="button">Confirmados<br><img  src="../../imagenes/igresar_datos_persona-01.png" class="w-75" alt=""> </a></div></li>               
                <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_listas" role="button">Listas<br><img  src="../../imagenes/listas_estu.jpg" class="w-75" alt=""> </a></div></li>
                <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_docentes" role="button">Docentes<br><img src="../../imagenes/docentes.png" class="w-75" alt=""> </a></div></li>
                <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_calif" role="button">Calificaciones <br><img src="../../imagenes/calificaciones.png" class="w-75" alt=""> </a></div></li>
                <li><div class=""><a href="#" class="btn btn-default btn-lg active" id="btn_sabana" role="button">Sábanas<br><img src="../../imagenes/sabanas.png" class="w-75" alt=""> </a></div></li>

            </ul>
         
        </div>
</main>
 
<footer></footer>
<script src="../../js/app_administrador_2022.js"></script>
<!--<script src="../../js_notas_2021/subir_notas.js"></script>
<script src="../../js_notas_2021/notas_2021.js"></script>-->