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
    #aviso{
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
    .study{
        width: 20%;
    }


</style>
<header>
<div id="aviso" class="alert alert-success" role="alert">
 Por favor digite el número de cedula del estudiante  y luego presione "BUSCAR"
</div>
    <div class="container-fluid fixed-top" id="barra_header">
        <div class="row">
           <div class="col-md-8 d-none d-sm-block" ><p style="color: white; font-size: 25px;"><a href="index.php"><img id="logo1" src="imagenes/logo1-03.png" alt=""></a> &nbsp;ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR CRISTIANA JIREH</p></div>  
            <div class="col-md-4 d-none d-sm-block mt-3" id="btn-acceso" >
                 <!--<a href="inscripciones.php"><button type="button" class="btn btn-danger">SOLICITAR CUPO</button>  
                 </a>&nbsp;&nbsp;
                <a href="login.php"><button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button></a>
                <a href="login.php"><button type="button" class="btn btn-success">ACCEDER</button></a>-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  d-sm-block" id="pr">Instruye al niño en su camino,  Y aun cuando fuere viejo no se apartará de él.  Proverbios 22-6</div>
        </div>

    </div>
</header>
<main>
    <div class="container" id="form_confirma">
                <div class="row">
                      <div class="col-sm-12 col-md-5" id="div_form">
                          <form role="form" id="formulario_verficador">
                              <div class="form-group">
                                <label for="cedula" id="ing">Digite el Número de Cédula sin (-) / Pasaporte</label>
                                <input required type="text" class="form-control" id="cedula" name="cedula">
                                <button type="submit" class="btn btn-info btn-lg btn-block " >BUSCAR</button>
                              </div>
                          </form>
                      </div>
                </div>
                  <div class="row" id="para_confirmar">
                      <div class="col-sm-12 col-md-5" id="div_form">
                      <form role="form" id="confirma_2021">
                      <table class="table table-bordered">
                            <tr>
                              <td  class="" colspan="2"><img src="imagenes/silueta_estudiante.png" alt="" class="study"></td>
                            </tr>
                            <tr>
                              <tr>
                              <td>Cédula:</td>
                              <td><input type="text" id="cedula_estu" name="cedula"></td>
                            </tr>
                            <tr> 
                              <td>Nombres:</td>
                              <td><input type="text" id="nombre_estu" name="nombre_estu"></td>
                            </tr>
                            <tr>
                              <td>Apellidos:</td>
                              <td> <input type="text" id="apellido_estu" name="apellido_estu"></td>
                            </tr>
                            <tr >
                              <td></td>
                              <td> <input type="hidden" id="status_estu" name="status_estu"></td>
                            </tr>
                            <tr>
                              <td colspan="2"><button type="button" class="btn btn-success btn-lg btn-block "  id="confirmar_cupo">CONFIRMAR CUPO</button> </td>                           
                            </tr>
                      </table>
                      </form>
                      </div>
                </div>
                
        
    </div>
</main>
<script src="js/confirmar_cupo.js"></script>