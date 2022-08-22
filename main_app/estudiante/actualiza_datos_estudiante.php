<?php
    session_start();
    include '../../global/config.php';
    include '../../global/conexion.php';
    include '../../templates/header.php';
    include '../../backend/dato_adi_encontrado.php';
    
?>
<div id="include_lib"><?php include '../../backend/dato_fami_encontrado.php'; ?></div>
<?php 
    
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>';    
    exit();
    }
    

    $id_usuario =$_SESSION['usuario']['id_usuario'];

    $sql= "SELECT * FROM `Usuarios` WHERE id_usuario = $id_usuario";
    $resultado = $pdo->prepare($sql);
    $resultado->execute();
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
        
       $id_usuario_tabla =$registro['id_usuario'];
       $Apellidos = $registro['Apellidos'];
       $Nombres = $registro['Nombres'];
       $Cedula = $registro['Cedula'];
       $Fecha_nacimiento =$registro['Fecha_nacimiento'];
       $Fono_celular_1=$registro['Fono_celular_1'];
       $mail=$registro['mail'];
       $status=$registro['status'];
       $nivel_edu_anterio['nivel_edu_temportal'];
        
    }
    $resultado->closeCursor();

?>
<style>
    #actualizar_datos{
        margin-left: 200px;
        margin-top: 60px;
        align-content: center;
    }
 
    #aviso{
        width: 30%;
        background: #84F731;
        text-align: center;
        float:right;
        position: relative;
        padding: 20px;
        border-radius: 15px;
        
    }
    .oculto{
        display: none;
    }
    #nav{
        width: 90%;
        height: 20px;
    }
    #botones{
        padding: 0;
    }
    #botones li{
        display: inline;
    }
    #botones li a {
         font-family: Arial;
         font-size: 11px;
         text-decoration: none;
         float: left;
         padding: 10px;
         background-color: #2175bc;
         color: #fff;
        }
    #botones li a:hover {
         background-color: #2586d7;
         margin-top: -2;
         padding-bottom: 12px;
     }
    .marco{
        padding: 10px;
        width: 80%;
        border: 1px solid #A7C6D9;
        border-radius: 15px;
        -webkit-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        -moz-box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        box-shadow: 3px 12px 23px -5px rgba(3,3,3,0.57);
        
    }
    .titulos{
        padding: 5px;
        background-color: #829FD9;
        border-radius: 15px;
        text-align: center;
    }
    .info_1{
        width: 40%;
    
    }
    .info_2{
        float: left;
        position: relative;
        margin-top: -438px;
        margin-left: 450px;
        width: 40%;
    }
    .info_2a{
        float: left;
        position: relative;
        margin-top: -820px;
        margin-left: 450px;
        width: 40%;
    }
 
</style>
<div id="aviso">DATOS ACTUALIZADOS</div>


<main id="actualizar_datos">
  <nav id="nav">
   <ul id="botones">
       <li><a href="#" id="btn-1">DATOS PERSONALES</a></li>
       <li><a href="#" id="btn-2">DATOS ADICIONALES</a></li>
       <li><a href="#" id="btn-3">DATOS FAMILIARES/REPRESENTANTES</a></li>
   </ul>
  </nav>
<!--  ****************** DATOS PERSONALES *************************-->
   <div id="form_actualiza_usuario" class=" marco mt-4">
       <form id="formulario_act_usuario">
         <div class="info_1">
              <div class="form-group oculto">
                <label for="id_usuario">id_usuario</label>
                <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
              </div>
             <div class="form-group">
                <label for="Nombres">Nombres</label>
                <input type="text" class="form-control" id="Nombres" name="Nombres" value="<?php echo $Nombres; ?>">
              </div>
              <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" class="form-control" id="Apellidos" name ="Apellidos" value="<?php echo $Apellidos; ?>">
              </div>
              <div class="form-group">
                <label for="Fecha_nac">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="Fecha_nac name" name="Fecha_nac" value="<?php echo $Fecha_nacimiento;?>">
              </div>
              <div class="form-group">
                <label for="fono_celular_1">Teléfono de contacto</label>
                <input type="text" class="form-control" id="fono_1" name ="fono_1" required value="<?php echo $Fono_celular_1;?>">
              </div>
              <br>
              <br>
              <br>
              <br>
         </div>
         <div class="info_2">
              <div class="form-group">
                <label for="mail">Correo electrónico/contacto</label>
                <input type="text" class="form-control" id="mail" name ="mail" required value="<?php echo $mail;?>">
              </div>
              <div class="form-group">
                <label for="nivel_edu_ant">Nivel de educación del que proviene</label>
                <select  class="form-control" id="nivel_edu_temporal" required name="nivel_edu_temporal">
                                            <option value="inicial_3">Inicial 3 años</option>
                                            <option value="inicial_4">Inicial 4 años</option>
                                            <option value="1_EGB">Primero EGB</option>
                                            <option value="2_EGB">Segundo EGB</option>
                                            <option value="3_EGB">Tercero EGB</option>
                                            <option value="4_EGB">Cuarto EGB</option>
                                            <option value="5_EGB">Quinto EGB</option>
              </select>
              </div>
              <div class="form-group oculto">
                <label for="status">status</label>
                <input type="text" class="form-control" id="status" name ="status" value="confirmado">
              </div>
              <br><br>
              <div class="titulos">RECUERDE: Usted puede cambiar los datos de su representado las veces que estime conveniente con la finalidad de mantener permanentemente información actualizada.</div>
         </div>
        <button type="submit" class="btn btn-warning btn-lg btn-block " >ACTUALIZAR DATOS</button>
       </form>
   </div>
<!--  ****************** DATOS ADICIONALES PARA LA TABLA estudiantes  *************************-->
    <div id="form_datos_adi" class=" marco mt-4">
           <form id="formulario_datos_adi">
              <div class="info_1">
                   <div class="form-group oculto">
                    <label for="id_usuario">id_usuario</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                  </div>
                  <div class="titulos">LUGAR DE NACIMENTO</div>
                  <div class="form-group">
                    <label for="provincia">Provincia</label>
                    <select  class="form-control" id="provincia" required name="provincia">
                                            <option value="Esmeraldas">Esmeraldas</option>
                                            <option value="Manabí">Manabí</option>
                                            <option value="Sta. Elena">Sta.Elena</option>
                                            <option value="Guayas">Guayas</option>
                                            <option value="El Oro">El Oro</option>
                                            <option value="Los Rios">Los Ríos</option>
                                            <option value="Carchi">Carchi</option>
                                            <option value="Imbabura">Imbabura</option>
                                            <option value="Pichincha">Pichincha</option>
                                            <option value="Cotopaxi">Cotopaxi</option>
                                            <option value="Bolivar">Bolívar</option>
                                            <option value="Chimborazo">Chimborazo</option>
                                            <option value="Tungurahua">Tungurahua</option>
                                            <option value="Cañar">Cañar</option>
                                            <option value="Azuay">Azuay</option>
                                            <option value="Loja">Loja</option>
                                            <option value="Sucumbios">Sucumbios</option>
                                            <option value="Orellana">Orellana</option>
                                            <option value="Napo">Napo</option>
                                            <option value="Pastaza">Pastaza</option>
                                            <option value="Morona Santiago">Morona Santiago</option>
                                            <option value="Zamora">Zamora</option>
                                            <option value="Galápagos">Galápagos</option>
                                            <option value="Otros">Otros</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="canton">Cantón</label>
                    <input type="text" class="form-control" id="canton" name="canton">
                  </div>
                      <div class="">Otra procedencia</div>
                        <input type="text" class="form-control mt-2" id="otra_procedencia" placeholder="Aqui la descripción" name="otra_procedencia">
                  <br><br><br>
              </div>
               
              <div class="info_2">
                  <div class="form-group">
                    <label for="discapacidad">Discapacidad</label>
                    <select  class="form-control" id="discapacidad" required name="discapacidad">
										<option value="no">No</option>
										<option value="si">Si</option>
                    </select>
                  </div>
                  <div class="form-group">
                        <input type="text" class="form-control" id="num_carnet" name="num_carnet" placeholder="escriba el número de carnet de CONADIS">
                  </div>
                  <div class="form-group">
                    <label for="etnia">Auto identificación Étnica</label>
                    <select  class="form-control" id="etnia" required  name="etnia">
										<option value="indigena">Indígena</option>
										<option value="mestiza">Mestizo</option>
										<option value="afrodescendiente">Afrodescendiente</option>
										<option value="blanco">Blanco</option>
										<option value="otras_etnias">Otras Etina</option>
										
										
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="num_hijo">Dentro de mi familia soy el hijo número</label>
                    <select  class="form-control" id="num_hijo" required name="num_hijo">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										
										
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="titulos">Dirección actual incluya calles, referencias y barrio</div>
                    <input type="text" class="form-control mt-2" id="referencia_dir" placeholder="Aqui su dirección" name="referencia_dir">
                  </div>
              </div>
              <button type="submit" class="btn btn-success btn-lg btn-block " >ENVIAR DATOS</button>
           </form>
   </div>
<!--  ****************** ACTUALIZAR DATOS ADICIONALES estudiantes  *************************-->
<div id="form_datos_adi_act" class=" marco mt-4">
           <form id="formulario_datos_adi_act">
              <div class="info_1">
                   <div class="form-group oculto ">
                    <label for="id_usuario_act">id_usuario</label>
                    <input type="text" class="form-control" id="id_usuario_act" name="id_usuario_act" value="<?php echo $id_usuario_prueba; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nacionalidad_act">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad_act" name="nacionalidad_act" value="<?php echo $nacionalidad; ?>">
                  </div>
                  <div class="titulos">LUGAR DE NACIMENTO</div>
                  <div class="form-group">
                    <label for="provincia_act">Provincia</label>
                    <select  class="form-control" id="provincia_act" required name="provincia_act">
                                        <option  value="<?php echo $provincia;?>"><?php echo $provincia; ?></option>
                                        <option value="Esmeraldas">Esmeraldas</option>
                                        <option value="Manabí">Manabí</option>
                                        <option value="Sta. Elena">Sta.Elena</option>
                                        <option value="Guayas">Guayas</option>
                                        <option value="El Oro">El Oro</option>
                                        <option value="Los Rios">Los Ríos</option>
                                        <option value="Carchi">Carchi</option>
                                        <option value="Imbabura">Imbabura</option>
                                        <option value="Pichincha">Pichincha</option>
                                        <option value="Cotopaxi">Cotopaxi</option>
                                        <option value="Bolivar">Bolívar</option>
                                        <option value="Chimborazo">Chimborazo</option>
                                        <option value="Tungurahua">Tungurahua</option>
                                        <option value="Cañar">Cañar</option>
                                        <option value="Azuay">Azuay</option>
                                        <option value="Loja">Loja</option>
                                        <option value="Sucumbios">Sucumbios</option>
                                        <option value="Orellana">Orellana</option>
                                        <option value="Napo">Napo</option>
                                        <option value="Pastaza">Pastaza</option>
                                        <option value="Morona Santiago">Morona Santiago</option>
                                        <option value="Zamora">Zamora</option>
                                        <option value="Galápagos">Galápagos</option>
                                        <option value="Galápagos">Otros</option>
                    </select>
                 </div>
                  <div class="form-group">
                    <label for="canton_act">Cantón</label>
                    <input type="text" class="form-control" id="canton_act" name="canton_act" value="<?php echo $canton; ?>">
                  </div>
                      <div class="">Otra procedencia</div>
                        <input type="text" class="form-control mt-2" id="otra_procedencia_act" placeholder="Aqui la descripción" name="otra_procedencia_act" value="<?php echo $otra_procedencia; ?>">
                  <br><br><br>
              </div>
               
              <div class="info_2">
                  <div class="form-group">
                    <label for="discapacidad_act">Discapacidad</label>
                    <input  class="form-control" id="discapacidad_act" required name="discapacidad_act"  value="<?php echo $discapacidad; ?>">
				  </div>
                  <div class="form-group">
                        <label for="num_carnet_aca">Número de carnet CONADIS</label>
                        <input type="text" class="form-control" id="num_carnet_act" name="num_carnet_aca" value="<?php echo $carnet_conadis; ?>">
                  </div>
                  <div class="form-group">
                    <label for="etnia_act">Auto identificación Étnica</label>
                    <select  class="form-control" id="etnia_act" required  name="etnia_act" >
                                        <option value="<?php echo $etnia; ?>"><?php echo $etnia; ?></option>
										<option value="indigena">Indígena</option>
										<option value="mestiza">Mestizo</option>
										<option value="afrodescendiente">Afrodescendiente</option>
										<option value="blanco">Blanco</option>
										<option value="otras_etnias">Otras Etina</option>
										
										
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="num_hijo_act">Dentro de mi familia soy el hijo número</label>
                    <input  class="form-control" id="num_hijo_act" required name="num_hijo_act" value="<?php echo $hijo_numero; ?>">
										
                  </div>
                  <div class="form-group">
                    <div class="titulos">Dirección actual incluya calles, referencias y barrio</div>
                    <input type="text" class="form-control mt-2" id="referencia_dir_act" name="referencia_dir_act" value="<?php echo $referencia_dir; ?>">
                  </div>
              </div>
              <button type="submit" class="btn btn-warning btn-lg btn-block " >ACTUALIZAR DATOS</button>
           </form>
   </div> 
<!--  ****************** DATOS FAMILIARES para la tabla estudiantes *************************-->   
    <div id="form_datos_familia" class=" marco mt-4">
       <form id="formulario_datos_familia">
           <div class="info_1">
              <div class="form-group oculto ">
                    <label for="id_usuario">id_usuario</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
               </div>
               <div class="titulos">DATOS DEL PADRE</div>
               <div class="form-group mt-3">
                    <input type="text" class="form-control" id="cedula_papa" name="cedula_papa"n placeholder="N° de Identificación" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="nombres_papa" name="nombres_papa" placeholder="Nombres y Apellidos" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="fono_papa" name="fono_papa" placeholder="Número de contacto" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="dir_trabajo_papa" name="dir_trabajo_papa" placeholder="Dirección del trabajo u Ocupación" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="mail_papa" name="mail_papa" placeholder="Correo electrónico papá" >
               </div>
               <div class="form-group">
                    <label for="vive_estudiante_papa">Vive con el estudiante</label>
                    <select  class="form-control" id="vive_estudiante_papa" required name="vive_estudiante_papa">
										<option value="si">Si</option>
                                        <option value="no">No</option>
                    </select>
               </div>
                <div class="titulos">DATOS DE LA MADRE</div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="cedula_mama" name="cedula_mama"n placeholder="N° de Identificación" >
                 </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="nombres_mama" name="nombres_mama" placeholder="Nombres y Apellidos" >
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" id="fono_mama" name="fono_mama" placeholder="Número de contacto" >
                 </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="dir_trabajo_mama" name="dir_trabajo_mama" placeholder="Dirección del trabajo u Ocupación" >
                 </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="mail_mama" name="mail_mama" placeholder="Correo electrónico mamá" >
                 </div>
                 <div class="form-group">
                   <label for="vive_estudiante_mama">Vive con el estudiante</label>
                       <select  class="form-control" id="vive_estudiante_mama" required name="vive_estudiante_mama">
                                 <option value="si">Si</option>
                                 <option value="no">No</option>
                       </select>
                </div>  
            </div>
            <div class="info_2a">
                <div class="titulos">DATOS REPRESENTANTE</div>
                       <div class="form-group mt-4">
                           <input type="text" class="form-control" id="cedula_repre" name="cedula_repre"n placeholder="N° de Identificación" >
                       </div>
                       <div class="form-group">
                            <input type="text" class="form-control" id="nombres_repre" name="nombres_repre" placeholder="Nombres y Apellidos" >
                       </div>
                       <div class="form-group">
                            <input type="text" class="form-control" id="fono_repre" name="fono_repre" placeholder="Número de contacto" >
                       </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="dir_trabajo_repre" name="dir_trabajo_repre" placeholder="Dirección del trabajo u Ocupación" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="mail_repre" name="mail_repre" placeholder="Correo electrónico representante" >
               </div>
               <div class="form-group">
                    <label for="vive_estudiante_mama">Vive con el estudiante</label>
                    <select  class="form-control" id="vive_estudiante_repre" required name="vive_estudiante_repre">
										<option value="si">Si</option>
										<option value="no">No</option>
                    </select>
               </div>
               <div class="form-group">
                    <div class="titulos">Escriba información referente a alguna enfermedad, alergía, etc y Quién es la persona que lo retira la institución</div>
                   <textarea class="mt-4"  id="observacion" name="observacion" rows="6" cols="40"></textarea>
               </div>
               
           </div>
           <button type="submit" class="btn btn-success btn-lg btn-block " >ENVIAR DATOS</button>
       </form>
        
    </div>
<!--  ****************** ACTUALIZA DATOS FAMILIARES para la tabla estudiantes *************************-->   
    <div id="form_datos_familia_act" class=" marco mt-4">
       <form id="formulario_datos_familia_act">
           <div class="info_1">
              <div class="form-group oculto ">
                    <label for="id_usuario">id_usuario</label>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
               </div>
               <div class="titulos">DATOS DEL PADRE</div>
               <div class="form-group mt-3">
                    <input type="text" class="form-control" id="cedula_papa_act" name="cedula_papa_act" value="<?php echo $cedula_papa; ?>">
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="nombres_papa_act" name="nombres_papa_act" value="<?php echo $nombres_papa ?>" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="fono_papa_act" name="fono_papa_act" value="<?php echo $fono_papa  ?>">
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="dir_trabajo_papa_act" name="dir_trabajo_papa_act" value="<?php echo $dir_trabajo_papa  ?>" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="mail_papa_act" name="mail_papa_act" placeholder="correo electrónico papá"   value="<?php echo $mail_papa?>">
               </div>
               <div class="form-group">
                    <label for="vive_estudiante_papa_act">Vive con el estudiante</label>
                    <select  class="form-control" id="vive_estudiante_papa_act" required name="vive_estudiante_papa_act" value="<?php echo $vive_papa  ?>">
										<option value="si">Si</option>
                                        <option value="no">No</option>
                    </select>
               </div>
                <div class="titulos">DATOS DE LA MADRE</div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="cedula_mama_act" name="cedula_mama_act" value="<?php echo $cedula_mama  ?>" >
                 </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="nombres_mama_act" name="nombres_mama_act" value="<?php echo $nombres_mama ?>" >
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" id="fono_mama_act" name="fono_mama_act" value="<?php echo $fono_mama  ?>">
                 </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="dir_trabajo_mama_act" name="dir_trabajo_mama_act" value="<?php echo $dir_trabajo_mama  ?>" >
                 </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="mail_mama_act" name="mail_mama_act" placeholder="correo electrónico mamá"  value="<?php echo $mail_mama?>">
                 </div>
                 <div class="form-group">
                   <label for="vive_estudiante_mama_act">Vive con el estudiante</label>
                       <select  class="form-control" id="vive_estudiante_mama_act" required name="vive_estudiante_mama_act" value="<?php echo $vive_mama ?>">
                                 <option value="si">Si</option>
                                 <option value="no">No</option>
                       </select>
                </div>  
            </div>
            <div class="info_2a">
                <div class="titulos">DATOS REPRESENTANTE</div>
                       <div class="form-group mt-4">
                           <input type="text" class="form-control" id="cedula_repre_act" name="cedula_repre_act" value="<?php echo $cedula_repre ?>">
                       </div>
                       <div class="form-group">
                            <input type="text" class="form-control" id="nombres_repre_act" name="nombres_repre_act" value="<?php echo $nombres_repre ?>" >
                       </div>
                       <div class="form-group">
                            <input type="text" class="form-control" id="fono_repre_act" name="fono_repre_act" value="<?php echo $fono_repre  ?>" >
                       </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="dir_trabajo_repre_act" name="dir_trabajo_repre_act" value="<?php echo $dir_trabajo_repre  ?>" >
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" id="mail_repre_act" name="mail_repre_act" placeholder="correo electrónico representante"  value="<?php echo $mail_repre?>">
               </div>
               <div class="form-group">
                    <label for="vive_estudiante_repre_act">Vive con el estudiante</label>
                    <select  class="form-control" id="vive_estudiante_repre_act" required name="vive_estudiante_repre_act" value="<?php echo $vive_repre  ?>">
										<option value="si">Si</option>
										<option value="no">No</option>
                    </select>
               </div>
               <div class="form-group">
                    <div class="titulos">Escriba información referente a alguna enfermedad, alergía, etc y Quién es la persona que lo retira la institución</div>
                   <input class="mt-4" style="width: 350px; height: 98px;"  id="observacion_act" name="observacion_act" value="<?php echo $observacion  ?>">
                   <!--<textarea  class ="mt-2"name="observacion_act" id="observacion_act" cols="50" rows="5" value="<?php //echo $observacion ?>"></textarea>-->
               </div>
               
           </div>
           <button type="submit" class="btn btn-warning btn-lg btn-block " >ACTUALIZAR DATOS</button>
       </form>
        
    </div>
</main>