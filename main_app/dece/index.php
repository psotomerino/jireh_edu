<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../templates/footer.php';
   
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
<link rel="stylesheet" href="css/estilo_index.css">
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
    #div_aside_2{
        -webkit-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
        box-shadow: 10px 1px 56px -17px rgba(0,0,0,0.75);
    }
    .container_{
        width: 95%;
        overflow: hidden;
        margin-top: 60px;
        margin-left: 15px;
        /* background-color: #F2F2F0;*/
        /* padding: 20px; */
    }

    .container_ ul li{
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
    .container_ ul li: hover{
        opacity: 0.9;
    }

    .container_ ul li .title{
        width: 100%;
        height: 25%;
        line-height: 50px;
        text-align: center;
       /* -webkit-box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 59px -27px rgba(0,0,0,0.75);*/
    }
    @media screen and (max-width: 1250px){
        .container_ ul li{
            width: 40%;
            margin-left: 50px;
        }
    }
    
    @media screen and (max-width: 750px){
        .container_{
            width: 100%;
            padding: 0px;
            margin-left: 10px;
        }
        .container_ ul li{
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
   <!-- <aside id="aside_left"> 
        <div id="div_aside_1">
           <ul id="tarjeta">
                    <li id="este_alumno"><?php echo $id_soy_yo?></li>
                    <li id="nombre_estu"><div class="" ></div><b><?php echo $Nombres?></b></li>
                    <li id="apellido_estu"><div class="" ></div><b><?php echo $Apellidos?></b></li>
                    <li><div class="title"></div><span >Cédula:</span><?php echo $Cedula?></li>
                    <li><div class="title"></div><?php echo $Fecha_nacimiento?></li>
                    <li><div class="title"></div><span >Contancto:</span><?php echo $Fono_celular_1?></li>
                    <li><div class="title"></div><?php echo $mail?></li>
                
            </ul>
        </div>        
        <hr>
        <a href="#"><div id="btn_control"><h6>Escritorio </h6></div></a>
        <hr>
        
    </aside>     -->
    <div class="container_" id="escritorio">
        <h3>Año Lectivo 2022 - 2023</h3>   
        <h3 id="prof"><b><span id="este_profe"><?php echo $id_usuario_tabla ?></span><span id="nombre_D" ><?php echo $Nombres?></span>&nbsp;<span id="apellido_D"><?php echo $Apellidos?></span></b></h3>    
        <br><br>
        
            <!-- <ul>
               <li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_miplan" style ="color: black;"> MI PLAN <br><img src="../../imagenes/plan%20de%20clase.jpg" class="w-75" alt=""></a></div></li>
               <li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_silabo" style ="color: black;"> SILABO <br><img src="../../imagenes/certificado_aventura.jpg" class="w-75" alt=""></a></div></li>
               <li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_reg_notas" role="
               "> REG.NOTAS <br><img src="../../imagenes/asignaturas.png" class=" w-75" alt=""></a></div></li>   
               <li><div class="title">NOTAS 2020</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
           </ul> -->
           <div class="grid-container g-0" id="escritorio_g">
                <div class="grid-item" id="fichas_"><p><img src="../../imagenes/ficha_psi.jpg" class="img_" alt=""></p><p>FICHAS</p></div>
                <div class="grid-item" id="aula_"><p><img src="../../imagenes/aula_.jpg" class="img_" alt=""></p><p>AULAS</p></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <?php include 'lectivo2022_2023/index_2022.php'; ?>
    </div>
</main>
<footer></footer>
<script src="js/js_index.js"></script>

