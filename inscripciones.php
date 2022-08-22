<?php
    include 'templates/header.php';
    //include 'templates/footer.php';
?>
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
/*        text-align: right;*/
        
    }
    
    .container{
        margin-top: 140px;
    }

    .div_form{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 90%;
   }
    #alertas{
        margin-top: 140px;
        text-align: center;
    }
    #formulario_new_reg{
        padding: 15px;
        border: 1px solid #A7C6D9;
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
    }
    #form_status{
        display: none;
    }
    #ing{
        background: yellow;
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


</style>

<header>
   <div id="alertas" class="alert alert-success" role="alert">
  Se información ha sido ingresada con exito, pronto recibirá más información por medio del correo electrónico, Gracias. Bendiciones.
</div>
    <div class="container-fluid fixed-top" id="barra_header">
        <div class="row">
           <div class="col-md-8 d-none d-sm-block" ><p style="color: white; font-size: 25px;"><a href="index.php"><img id="logo1" src="imagenes/logo1-03.png" alt=""></a> &nbsp;ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA JIREH</p></div>  
            <div class="col-md-4 d-none d-sm-block mt-3" id="btn-acceso" >
                 <a href="inscripciones.php"><button type="button" class="btn btn-danger">SOLICITAR CUPO</button>  
                 </a>&nbsp;&nbsp;
                <!--<a href="login.php"><button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button></a>
                <a href="login.php"><button type="button" class="btn btn-success">ACCEDER</button></a>-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  d-sm-block" id="pr">Instruye al niño en su camino,  Y aun cuando fuere viejo no se apartará de él.  Proverbios 22-6</div>
        </div>

    </div>
    

</header>

<main>
    <div class="container">
        <div class="row d-md-none d-lg-none">
           <div class="col-12" style="text-align: center;"><img  id="pr_1" src="imagenes/logo1-03.png" alt=""></div>
           
           <!--<div class="col-12 mt-1"><a href="inscripciones.php"><button type="button" class="btn btn-danger btn-lg btn-block">SOLICITAR CUPO </button></a></div>
           
           
           <div class="col-12 mt-1" id="btn_moodle"><a href="http://amatchs.com/escuela/" target="_blank"><button type="button" class="btn btn-info btn-lg btn-block"><aside class="aside_moodle"><img src="imagenes/moodle_icono_sm-01.png" id="log_moddle"  alt=""></aside>AULA VIRTUAL JIREH </button></a></div>-->  
       </div>
          <div class="row">
              <div class="col-sm-12 col-md-8" id="div_form">
                  <form role="form" id="formulario_verficador">
                      <div class="form-group">
                        <label for="cedula" id="ing">Digite el Número de Cédula sin (-) / Pasaporte</label>
                        <input required type="text" class="form-control" id="cedula" name="cedula">
                        <button type="submit" class="btn btn-info btn-lg btn-block " >BUSCAR</button>
                      </div>
                  </form>
              </div>
          </div>
          
           <div class="row mt-3">
            <div class ="col-sm-12 col-md-8" id="div_form">
                <form role="form" id="formulario_new_reg">
                      <div class="form-group">
                        <label for="cedula">Número de Cédula / Pasaporte</label>
                        <input required type="text" class="form-control" id="cedula" name="cedula">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input required type="text" class="form-control" id="nombre" name="nombre">
                      </div>
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input required type="text" class="form-control" id="apellido" name="apellido">
                      </div>
                      <div class="form-group">
                        <label for="fecha_nac">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
                      </div>
                      <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select  class="form-control" id="sexo" required name="sexo">
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
				        </select> 
                      </div>
                      <div class="form-group">
                        <label for="nivel_edu_temporalo">Nivel al que aspira</label>
                        <select  class="form-control" id="nivel_edu_temporal" required name="nivel_edu_temporal">
										<option value="inicial_3">Inicial 3 años</option>
										<option value="inicial_4">Inicial 4 años</option>
                                        <option value="1_EGB">Primero EGB</option>
                                        <option value="2_EGB">Segundo EGB</option>
                                        <option value="3_EGB">Tercero EGB</option>
                                        <option value="4_EGB">Cuarto EGB</option>
                                        <option value="5_EGB">Quinto EGB</option>
                                        <option value="6_EGB">Sexto EGB</option>
                                        <option value="7_EGB">Séptimo EGB</option>
				        </select> 
                      </div>
                      <div class="form-group">
                        <label for="fono_contacto_1">Número de contacto</label>
                        <input  required type="text" class="form-control" id="fono_contacto_1" name="fono_contacto_1">
                      </div>
                      <div class="form-group">
                        <label for="mail">Correo Electronico</label>
                        <input required type="text" class="form-control" id="mail" name="mail">
                      </div>
                      <div class="form-group" id="form_status" >
                        <label for="status">Estatus</label>
                        <select class="form-control" id="status" required name="status">
										<option value="aspirante">Aspirante</option>
										<option value="estudiante">Estudiante</option>
                                        <option value="docente">Docente</option>
                                        <option value="administrativo">Administrativo</option>
				        </select> 
                      </div>
                      
                      <button type="submit" class="btn btn-danger btn-lg btn-block " >SOLICITAR CUPO</button>
                                    
                </form>
            </div>
        </div>
    </div>
</main>
<script src="js/app_inscripcion.js"></script>