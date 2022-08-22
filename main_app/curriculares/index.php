<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../templates/footer.php';
//    include 'plan_clase.php';
    include 'planes_generales.php';
    include 'plan_editCurri.php';
   
    

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
    #escritorio{
        position: relative;
        float: left;
        margin-top: 15px;  
       
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
<nav> 
    
</nav>
<main id="pag_inicio">
   <aside id="aside_left"> 
        <div id="div_aside_1">
           <ul id="tarjeta">
                    <li id="este_profe"><?php echo $id_usuario_tabla ?></li>
                    <li id="nombre_D"><div class=""></div><b><?php echo $Nombres?></b></li>
                    <li id="apellido_D"><div class=""></div><b><?php echo $Apellidos?></b></li>
                    <!--<li><div class="title"></div><span >Cédula:</span><?php echo $Cedula?></li>
                    <li><div class="title"></div><?php echo $Fecha_nacimiento?></li>
                    <li><div class="title"></div><span >Contancto:</span><?php echo $Fono_celular_1?></li>
                    <li><div class="title"></div><?php echo $mail?></li>-->
                
            </ul><br>
                    <div class="dropdown">
                      <button class="dropbtn">Año Lectivo</button>
                      <div class="dropdown-content">
                        <a href="index_2020.php">2020 - 2021</a>
                        <a href="index_2021.php">2021 - 2022</a>
                        
                      </div>
                    </div>
        </div>   
    </aside>
    <div class="container" id="escritorio">
           <ul>
               <li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_planGene" style ="color: black;"> MI PLAN <br><img src="../../imagenes/plan%20de%20clase.jpg" class="w-75" alt=""></a></div></li>
               <!--<li><div class="title"><a href="#" class="btn btn-default btn-lg active" id="btn_reg_notas" role="
               "> REG.NOTAS <br><img src="../../imagenes/asignaturas.png" class=" w-75" alt=""></a></div></li>   
               <li><div class="title">NOTAS 2020</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>
               <li><div class="title">Titulo</div></li>-->
           </ul>
         
        </div>
</main>
<footer></footer>
<script type="text/javascript" src="../../js_plan/curricular.js"></script>
<script src="../../proyecto_CK5/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../../ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="../../js_plan/ck_.js"></script>
    <script src="../../proyecto_CK5/js_ck5/mi_ck5.js"></script>
