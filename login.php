<?php
    require_once 'templates/header.php';
     
    session_start();
    if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['tipo_usuario']== "superAdmin"){
			header('Location: main_app/superadmin/');
		}else if($_SESSION['usuario']['tipo_usuario']== "administrativo"){
			header('Location: main_app/administrador/');
		}else if($_SESSION['usuario']['tipo_usuario']== "docente"){
			header('Location: main_app/docente/');
		}else if($_SESSION['usuario']['tipo_usuario']== "estudiante"){
			header('Location: main_app/estudiante/');
		}else if($_SESSION['usuario']['tipo_usuario']== "curricular"){
			header('Location: /main_app/curriculares/');
		}
	}
    //echo $_SESSION['usuario']['tipo_usuario'];
?>
<style>
    #barra_header{
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        background-color: #011526;
        color: aliceblue;
        padding: 1px;
        
    }
    #btn-acceso{
        /*text-align: right;*/
        
    }
    
    .container{
        margin-top: 80px;
    }
    #logo1{
         width: 9%;
         margin-left: 26px;
         margin-top: 2px;
        }
    #pr{
        width: 90%;
        text-align: center;
        padding: 5px;
        background: #111E6C;
    }
    #pr_1{
        width: 50%;
        text-align: center;
        margin-top: 60px;
        
    }
    .error{
        margin-top: 150px;
        float: left;
        position: absolute;
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        background-color: #011526;
        
        padding: 1px;
        
    }

</style>

<header>
    <div class="container-fluid fixed-top" id="barra_header">
        <div class="row">
           <div class="col-md-8 d-none d-sm-block" ><p style="color: white; font-size: 25px;"><a href="index.php"><img id="logo1" src="imagenes/logo1-03.png" alt=""></a> &nbsp;ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA JIREH</p></div>  
 <!--           <div class="col-md-4 d-none d-sm-block mt-3" id="btn-acceso" >
                 <a href="inscripciones.php"><button type="button" class="btn btn-danger">SOLICITAR CUPO</button>  
                 </a>&nbsp;&nbsp;
                <a href="login.php"><button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button></a>
                <a href="login.php"><button type="button" class="btn btn-success">ACCEDER</button></a>
            </div>-->
        </div>
        <div class="row">
            <div class="col-md-12  d-sm-block" id="pr">Instruye al niño en su camino,  Y aun cuando fuere viejo no se apartará de él.  Proverbios 22-6</div>
        </div>

    </div>
</header>
<div class="error" >LOS DATOS DE INGRESO NO SON LOS CORRECTOS</div>
<main>
<link rel="stylesheet" href="css/login.css">

<div class="main">
    
	<form action="" id="formlg">
	   
		<input type="text" name="usuariolg"  placeholder="Usuario" required>
		<input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" requiered placeholder="Password" required>
		<input type="submit" class="botonlg" value="Iniciar Sesión">
	</form>
	
</div>    
</main>

<script src="js/main.js"></script>