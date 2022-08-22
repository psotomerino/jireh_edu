<?php 
    include '../../templates/header.php';
    session_start();
    $id_usuario_estu =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #txt_nivel{
        padding: 2px;
        background: #5C73F2;
        color: whitesmoke;
    }
</style>
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
    #asig_autoeva{
        position:absolute;
        float: left;
        margin-left: 250px;
        margin-top: 80px;
    }
    #asig_autoeva2Q{
        position:absolute;
        float: left;
        margin-left: 250px;
        margin-top: 80px;
    }
    #rub_porta{
        position:absolute;
        float: left;
        margin-left: 250px;
        margin-top: 80px;
    }
    #rub_porta2Q{
        position:absolute;
        float: left;
        margin-left: 250px;
        margin-top: 80px;
    }
    #formu_notas{
        margin-top: 20px;
        
    }
    #auto_eval{
        width: 60%;
        text-align: center;
        border: 2px solid red;
        padding: 5px;
        
        
    }
    
    #auto_eval_1{
        width: 60%;
        text-align: center;
        border: 2px solid blue;
        
        
    }
    td{
        padding: 5px;
    }
    #msn{
        width: 50%;
        background: green;
        
    }
    #mira_notas{
       
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    #ver_notas{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 80px;
        
    }
    #menu_cab{
        margin-left: 200px;
        margin-top: 80px;
    }
    
</style>
<header id="menu_cab">
    <div>
        <h2><b>INSTRUCCIONES</b></h2>
        <p style ="background: #F5BBEA;  padding:  3px;">Con esta nueva modalidad de educación virtual y desde casa es necesario que usted como representante legal del estudiante envie por este medio la calificación correspondiente al proyecto educativo como a su desempñeo</p>
        <p><b>Haga click en el quimestre correspondiente</b></p>
   </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary" id="btn_eval1q">Primer Quimestre</button>
        <button type="button" class="btn btn-success" id="btn_eval2q">Segundo Quimestre</button>
      
    </div>
</header>

<main >
    <!--<input type="text" id="nombre_estu_bas">
    <input type="text" id="apellido_estu_bas">-->
    <div class="row">
    <div id="asig_autoeva">
                 <h4>RÚBRICA PARA LA EVALUCIÓN DEL PROYECTO <b>PRIMER QUIMESTRE</b> </h4> 
                <table class="table-striped" id="auto_eval">
                    <tr>
                        <td><p>Analizo la información obtenida de fuentes consultadas extrayéndola  de manera ordenada</p>
                        <select name="rub_1" id="rub_1">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                        <td><p>Realizo valoraciones y emito juicios en relación con el tema de estudio de forma respetuosa y pertinenete de manera que aportan al desarrollo del proyecto</p>
                        <select name="rub_2" id="rub_2">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                        <td><p>Participo activamente en la exposición del proyecto presentando el contenido de manera clara y coherente</p>
                        <select name="rub_3" id="rub_3">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-success" id="cal_proy" >Calcular nota proyecto</button></td>
                    </tr><br>
                </table>
            
            <br>
        <div class="col-6" >
        <hr>
        <form role="form" id="notas_autoeval_proy">
             <div id="btn_nota_proy"> 
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="padre_familia_proyecto">CALIFICACIÓN PROYECTO</label>
                  <input type="text" class="form-control" id="nota_cuantitativa" name="nota_cuantitativa" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary" id="envia_nota_proy">Enviar Nota</button>
              </div>
              <div class="">
                   <input class="d-none" type="text" id="id_usuario_estu" name="id_usuario_estu" value="<?php echo $id_usuario_estu?>">   
                </div>
                <div class="">
                   <input class="d-none" type="text" id="id_oferta_aca" name="id_oferta_aca">
                </div>
                <div class="">
                  <input class="d-none" type="text" id="id_ano_lectivo" name="id_ano_lectivo" value="1">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="quimestre" name="quimestre">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="parcial" name="parcial"> 
                </div> 
                <div>
                    <input class="d-none" type="text" value="18" id="asignatura" name="asignatura"> 
                </div>
            </form>
            <hr>         
        </div>
    </div>
    </div>
    
    <div class="row">
    <div id="rub_porta">
            <h4>RÚBRICA PARA LA EVALUCIÓN DEL PORTAFOLIO ESTUDIANTIL PRIMER QUIMESTRE</h4>
            <table class="table-striped" id="auto_eval_1">
                <tr>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante todo el tiempo <br>(1 punto)</p>
                    </td>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante la mayoria de tiempo <br> (0.75 puntos)</p>
                    </td>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante poco tiempo <br> (0.5 puntos)</p>
                    </td>
                    <td>
                        <p>No demostró responsabilidad y entusiasmo al realizar sus tareas durante este tiempo <br> (0) puntos)</p>
                    </td>
                </tr>
                
            </table>
            <hr>
            <form role="form" id="notas_autoeval_porta"> 
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="">CALIFICACION PORTAFOLIO</label>
                  <select class="form-control" id="nota_cuantitativa" name="nota_cuantitativa">
                    <option selected>Seleccione...</option>
                    <option value="1.00"> 1.00 </option>
                    <option value="0.75"> 0.75 </option>
                    <option value="0.50"> 0.50 </option>
                    <option value="0.00"> 0.00 </option>
                  </select>
                </div>
              </div>

              <button type="submit" class="btn btn-primary" id="envia_nota_porta">Enviar Nota</button>
              
                <div class="">
                   <input class="d-none" type="text" id="id_usuario_estu" name="id_usuario_estu" value="<?php echo $id_usuario_estu?>">   
                </div>


                <div class="">
                  <input class="d-none" type="text" id="id_ano_lectivo" name="id_ano_lectivo" value="1">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="quimestre" name="quimestre">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="parcial" name="parcial"> 
                </div> 
                <div>
                    <input class="d-none" type="text" value="17" id="asignatura" name="asignatura"> 
                </div>
                <div>
                    <input class="d-none" type="text"  id="id_oferta_aca" name="id_oferta_aca"> 
                </div>
                
            </form>
        </div>
   </div>
<div class="container" id="ver_notas">
    <div class="row">
        <div class="col-5">
            <div class="table-responsive">
                <table id="mira_notas" class="table table-bordered table-hover table-striped">
                   <thead class="thead-light">
                       <tr>
                           <th >DESCRIPCIÓN (Corresponde al primer y segundo Quimestre)</th>
                           <th >NOTA ASIGNADA (enviada por el padre de familia)</th>
                       </tr>

                   </thead>
                   <tbody id="notas_eval"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--    ***********************************************************************-->
<div class="row">
    <div id="asig_autoeva2Q" style="">
                 <h4>RÚBRICA PARA LA EVALUCIÓN DEL PROYECTO SEGUNDO QUIMESTRE</h4>
                <table class="table-striped" id="auto_eval">
                    <tr>
                        <td><p>Analizo la información obtenida de fuentes consultadas extrayéndola  de manera ordenada</p>
                        <select name="rub_1" id="rub_12q">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                        <td><p>Realizo valoraciones y emito juicios en relación con el tema de estudio de forma respetuosa y pertinenete de manera que aportan al desarrollo del proyecto</p>
                        <select name="rub_2" id="rub_22q">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                        <td><p>Participo activamente en la exposición del proyecto presentando el contenido de manera clara y coherente</p>
                        <select name="rub_3" id="rub_32q">
                           <option value="10">10</option>
                           <option value="9">9</option>
                           <option value="8">8</option>
                           <option value="7">7</option>
                           <option value="6">6</option>
                           <option value="5">5</option>
                           <option value="4">4</option>
                           <option value="3">3</option>
                           <option value="2">2</option>
                           <option value="1">1</option>
                           <option value="0">0</option>
                            
                        </select></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-success" id="cal_proy2q" >Calcular nota proyecto</button></td>
                    </tr><br>
                </table>
            
            <br>
        <div class="col-6" >
        <hr>
        <form role="form" id="notas_autoeval_proy2q">
             <div id="btn_nota_proy2q"> 
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="padre_familia_proyecto">CALIFICACIÓN PROYECTO</label>
                  <input type="text" class="form-control" id="nota_cuantitativa2q" name="nota_cuantitativa" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary" id="envia_nota_proy2q">Enviar Nota</button>
              </div>
              <div class="">
                   <input class="d-none" type="text" id="id_usuario_estu" name="id_usuario_estu" value="<?php echo $id_usuario_estu?>">   
                </div>
                <div class="">
                   <input class="d-none" type="text" id="id_oferta_aca_2" name="id_oferta_aca">
                </div>
                <div class="">
                  <input class="d-none" type="text" id="id_ano_lectivo" name="id_ano_lectivo" value="1">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="quimestre" name="quimestre">
                </div>
                <div>
                    <input class="d-none" type="text" value="2" id="parcial" name="parcial"> 
                </div> 
                <div>
                    <input class="d-none" type="text" value="18" id="asignatura" name="asignatura"> 
                </div>
            </form>
            <hr>         
        </div>
    </div>
    </div>
    
    <div class="row">
    <div id="rub_porta2Q">
            <h4>RÚBRICA PARA LA EVALUCIÓN DEL PORTAFOLIO ESTUDIANTIL</h4>
            <table class="table-striped" id="auto_eval_1">
                <tr>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante todo el tiempo <br>(1 punto)</p>
                    </td>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante la mayoria de tiempo <br> (0.75 puntos)</p>
                    </td>
                    <td>
                        <p>Demostró responsabilidad y entusiasmo al realizar sus tareas durante poco tiempo <br> (0.5 puntos)</p>
                    </td>
                    <td>
                        <p>No demostró responsabilidad y entusiasmo al realizar sus tareas durante este tiempo <br> (0) puntos)</p>
                    </td>
                </tr>
                
            </table>
            <hr>
            <form role="form" id="notas_autoeval_porta2q"> 
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="">CALIFICACION PORTAFOLIO</label>
                  <select class="form-control" id="nota_cuantitativa2q" name="nota_cuantitativa">
                    <option selected>Seleccione...</option>
                    <option value="1.00"> 1.00 </option>
                    <option value="0.75"> 0.75 </option>
                    <option value="0.50"> 0.50 </option>
                    <option value="0.00"> 0.00 </option>
                  </select>
                </div>
              </div>

              <button type="submit" class="btn btn-primary" id="envia_nota_porta2Q">Enviar Nota</button>
              
                <div class="">
                   <input class="d-none" type="text" id="id_usuario_estu" name="id_usuario_estu" value="<?php echo $id_usuario_estu?>">   
                </div>


                <div class="">
                  <input class="d-none" type="text" id="id_ano_lectivo" name="id_ano_lectivo" value="1">
                </div>
                <div>
                    <input class="d-none" type="text" value="1" id="quimestre" name="quimestre">
                </div>
                <div>
                    <input class="d-none" type="text" value="2" id="parcial" name="parcial"> 
                </div> 
                <div>
                    <input class="d-none" type="text" value="17" id="asignatura" name="asignatura"> 
                </div>
                <div>
                    <input class="d-none" type="text"  id="id_oferta_aca_3" name="id_oferta_aca"> 
                </div>
                
            </form>
        </div>
   </div>
<div class="container" id="ver_notas_2Q" style=" background: green;">
    <div class="row">
        <div class="col-5">
            <div class="table-responsive">
                <table id="mira_notas" class="table table-bordered table-hover table-striped">
                   <thead class="thead-light">
                       <tr>
                           <th >DESCRIPCIÓN (Corresponde al primer Quimestre)</th>
                           <th >NOTA ASIGNADA (enviada por el padre de familia)</th>
                       </tr>

                   </thead>
                   <tbody id="notas_eval"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>
 

 
    
    
   
    
    