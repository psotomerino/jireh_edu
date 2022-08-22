<?php
    include 'templates/header.php';
    include 'templates/footer.php';
    
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    #barra_header{
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        background-color: #080E33;
        color: aliceblue;
        padding: 1px;
        
                
    }
    #btn-acceso{
        /*text-align: right;*/
    }
    .menu_nav{
        margin-top: 145px;
    }
    #menu_row{
        margin-left: 50px;
    }
    #menu_cont_sm{
        margin-top: 5px;
    }
    .menu_col{
        padding: 10px;
        text-align: center;
        border: 1px solid #A7C6D9;
        margin-left: 25px;
        
    }
    .menu_col:hover {
      background-color: #A7C6D9;
    }
    .main_borde{
        margin-top: 15px;
        border: 1px solid #A7C6D9;
        border-radius: 15px;
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
    }


    #log_moddle{
        width: 40px;
        float: left;
             
    }
    .text_menu{
        width: 40%;
        margin-top: 20px;
        align-content: center;
    }
    #text_menu_1{
        float: left;
    }
    #img_vision{
        float: right;
        
         
    }
    #logo1{
         width: 9%;
         margin-left: 26px;
         margin-top: 2px;
        }
    #pr{
        width: 100%;
        text-align: center;
        padding: 5px;
        background: #111E6C;
    }
    #pr_1{
        width: 50%;
        text-align: center;
        margin-top: 60px;
        
    }
    .video-responsive {
    height: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
    padding-top: 30px;
    position: relative;
    }
    .video-responsive iframe, .video-responsive object, .video-responsive embed {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    }
    #titu_video{
        background: #EB9C26;
        padding: 5px;
        text-align: center;
        border-radius: 20px;
    
    }
        #publi_img{
        width: 98%;
    }
    #mail_{
        width: 6%;
        border-radius: 12%;
    }



</style>
<!--<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h3 style="text-align: center;">ESCUELA DE EDUCACIÒN BÁSICA CRISTIANA "JIREH" </h3>
           </div>
           <div style="text-align: center;">
                <img src="imagenes/publicidad%20jireh%202021.jpeg" id="publi_img">           
          
          
           </div><br>
           <div class="container" id="">
                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <a href="confirmar_cupo.php"><button type="button" class="btn btn-primary btn-lg">CONFIRMAR CUPO</button></a>
                        <a href="inscripciones.php"><button type="button" class="btn btn-danger btn-lg">SOLICITAR CUPO</button></a>
                    </div>
                </div>
            </div><br>
           <div class="modal-footer">
              <a  data-dismiss="modal"  class="btn btn-danger close-modal">Cerrar</a>
           </div>
      </div>
   </div>
</div>-->
<header>
    
  <div class="container-fluid fixed-top" id="barra_header">
        <div class="row">
           <div class="col-md-6 d-none d-sm-block" ><p style="color: white; font-size: 18px;"><img id="logo1" src="imagenes/logo1-03.png" alt=""> &nbsp;ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA JIREH</p></div>  
            <div class="col-md-6 d-none d-sm-block mt-3" id="btn-acceso" >
                <a href="inscripciones.php"><button type="button" class="btn btn-danger" id="btn_cupo_new">SOLICITAR CUPO</button>  
                </a>
               <a href="confirmar_cupo.php"><button type="button" class="btn btn-primary">CONFIRMAR CUPO </button></a>
                
                <a href="login.php"><button type="button" class="btn btn-success">ACCEDER</button></a>
                <a href="https://jireh.edu.ec:2096/webmaillogout.cgi" target="_blank" ><img src="imagenes/correos.png" alt="" id="mail_" ></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  d-sm-block" id="pr">Instruye al niño en su camino,  Y aun cuando fuere viejo no se apartará de él.  Proverbios 22-6</div>
        </div>

    </div>
</header>
<nav class="menu_nav d-none d-sm-block">
  <div class="container" >
<!--      <div class="row">
          <div class="col-md-12" id="pr">Instruye al niño en su camino,  Y aun cuando fuere viejo no se apartará de él.  Proverbios 22-6</div>
      </div>-->
       <div class="row" >
           <div class="col-md-2 d-none d-sm-block menu_col"><a href="#" id="ver_portada">PORTADA</a></div>
           <div class="col-md-2 d-none d-sm-block menu_col"><a href="#" id="ver_mision">MISIÓN</a></div>
           <div class="col-md-2 d-none d-sm-block menu_col"><a href="#" id="ver_vision">VISIÓN</a></div>
           <div class="col-md-2 d-none d-sm-block menu_col"><a href="http://jireh.edu.ec/curriculum/index.php">OFERTA EDUCATIVA</a></div>
           <div class="col-md-2 d-none d-sm-block menu_col"><a href="https://photos.app.goo.gl/1B3FWU1arRAepCfD9" target="_blank">ALBUM 2019</a></div>
<!--           <div class="col-md-2 d-none d-sm-block menu_col"><a href="#" id="ver_contacto">CONTACTO</a></div>-->
       </div>
  </div>
   <div class="container d-md-none d-lg-none" id="menu_cont_sm">
     
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
        <!-- links toggle -->
        <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <!-- account toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-user"></i>
        </button>

        <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="ver_mision">MISIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">VISIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">OFERTA EDUCATIVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACTO</a>
                </li>
<!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Dropdown 1</a>
                        <a class="dropdown-item" href="#">Dropdown 2</a>
                        <a class="dropdown-item" href="#">Dropdown 3</a>
                    </div>
                </li>
-->
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="account">
            <ul class="navbar-nav ml-auto">
<!--                <li class="nav-item"><a class="nav-link" href="#">Register</a></li>-->
                <li class="nav-item"><a class="nav-link" href="#">ACCESO</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>   
</nav>

<main>
   <div class="container">
      <div class="row d-md-none d-lg-none">
           <div class="col-12" style="text-align: center;"><img  id="pr_1" src="imagenes/logo1-03.png" alt=""></div>
           <div class="col-12 mt-1"><a href="inscripciones.php"><button type="button" class="btn btn-danger btn-lg btn-block" id="btn_cupo_new">SOLICITAR CUPO </button></a></div>

<!--          <div class="col-12 mt-1"><a href="inscripciones.php"><button type="button" class="btn btn-primary btn-lg btn-block">CONFIRMAR CUPO </button></a></div>-->
           
           <div class="col-12 mt-1" id="btn_moodle"><a href="http://aulavirtual.jireh.edu.ec/" target="_blank"><button type="button" class="btn btn-info btn-lg btn-block"><aside class="aside_moodle"><img src="imagenes/moodle_icono_sm-01.png" id="log_moddle"  alt=""></aside>AULA VIRTUAL JIREH </button></a></div>
       </div>
       <div class="row">
          
           <div class="col-12 main_borde"  >
           
            <div id="portada" class="modal-body video-responsive" >
              
<!--                <h3 id="titu_video">INAUGURACIÓN DEL AÑO LECTIVO 2020 - 2021</h3>  -->
               
                <p style="text-align: center; margin-top: 5px;"><img src="" id="imagen" class="img-fluid" alt="Responsive image"></p>
                
                

            </div>
           
            <div id="portada" class="d-md-none d-lg-none">
                
                
                <p style="text-align: justify" >La Escuela de Educación Básica Particular Cristiana JIREH, creada como aporte a la sociedad. Es una  oportunidad educativa para la niñez basado en el amor a Cristo.
                Formando estudiantes felices, mediante enseñanzas relevantes en conocimiento académico, con una pedagogía afectiva, formando mejores seres humanos con amor para Dios, para sí mismos y los demás. </p>
                <p>Nuestro mejor maestro dice "Instruye al niño en su camino y aún cuado fuere viejo no se aportará de él " Prov. 22-6 </p>
            </div>
            <div id="mision">               
                       <object data="svg/mision_vision.svg" type="image/svg+xml">
                              <!-- Imagen alternativa si el SVG no puede cargarse -->
                              <img src="imagenes/retratos-ninos-acuarela.jpg" alt="Imagen PNG alternativa">
                       </object>           
            </div>
            
            <div id="vision">
                       <object data="svg/vision.svg" type="image/svg+xml">
                              <!-- Imagen alternativa si el SVG no puede cargarse -->
                              <img src="imagenes/test-de-inteligencia-creativa.jpg" alt="Imagen PNG alternativa">
                       </object> 
                
            </div>
            <div id="contacto">
                <p style="text-align: justify" ></p>
            </div>
            </div>
       </div>
      
       
   </div>
    
</main>
<footer>
    <?php // include 'templates/footer.php';?>
</footer>
<script>
   var imagenes=new Array(
       
       
        ['http://jireh.edu.ec/imagenes/foto_port_1-01.jpg'],
        ['http://jireh.edu.ec/imagenes/foto_port_2-01.jpg'],
        ['http://jireh.edu.ec/imagenes/foto_port_3-01.jpg'],
        ['http://jireh.edu.ec/imagenes/foto_port_4-01.jpg'],
        ['http://jireh.edu.ec/imagenes/foto_port_5-01.jpg']
    );
    var contador=0;
    function rotarImagenes()
    {
        // cambiamos la imagen y la url
        contador++
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
        //document.getElementById("link").href=imagenes[contador%imagenes.length][1];
    }
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,10000);
    }
    
    $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
      
      $('.close-modal').on('click', () =>{
          //alert('clik para cerrar el video');
          $('.my-iframe').removeAttr('src');
      });

</script>

<script src="js/app_indexIni.js"></script>

