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
   .plant{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 60px;
    }
    .plant_inicial{
        position:absolute;
        float: left;
        margin-left: 200px;
        margin-top: 60px;
    }
    .contenedor{
        border: 1px solid crimson;
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
        /*width: 300px;*/
        font-size: 14px;
    }
    .al_nota{
        text-align: right;
    }
    .color1p {
        background:  #E6F3FF;
    }
    .colorfin{
        font-weight: bold;
    }
    .contenido {
        /*display: none;*/
        background: #E6F3FF;

        
    }
    #prom_1Q {
        display: block;
        width: 80px;
    }
    #mostrar_asig {
        display: block;
    }
    #1p_2q {
        display: block;
    }
    #1p_2qR {
        display: block;
    }
    #2p_2q {
        display: block;
    }
    #2p_2qR {
        display: block;
    }
    #prom80_2q{
        display: block;
    }
    #proy_2q{
        display: block;
    }
    #ppff_2q{
        display: block;
    }
    #prom20_2q{
        display: block;
    }
    #prom_2q{
        display: block;
    }
    #porta_2q{
        display: block;
    }
    .color_ppff{
        background: #3EB595;
    }
    .color_prom{
        background: #FFF447;
    }
    .contenido_par{
        width: 80px;
        background: #F2EDA2;
        display: block;
    }
    .contenido_parII{
         width: 80px;
    }
</style>
<main class="plant">
   <div class="contenedor" >
<div class="contenido" id="mostrar_asig" >
        <table class="table-bordered" >
                           <thead >
                                <tr>
                                   <td  class="cab">ASIGANTURAS.......................................</td>
                                </tr>
                           </thead>
                           <tbody>
                               <tr >
                                   <td  class= "">Lenguaje y Comunicación</td>
                                   
                               </tr>
                               <tr>
                                   <td>Matemáticas</td>
                                   
                               </tr>
                               <tr>
                                   <td>Ciencias Naturales</td>
                                   
                               </tr>
                               <tr>
                                   <td>Estudios Sociales</td>
                                   
                               </tr>
                               <tr>
                                   <td>Educación Cultural y Artísitca</td>
                                   
                               </tr>
                               <tr>
                                   <td>Cultura Física</td>
                                   
                               </tr>
                               <tr>
                                   <td>Inglés</td>
                                   
                               </tr>
                               <tr>
                                   <td>Valores</td>
                                   
                               </tr>
                           </tbody>
            
        </table>   
       </div>  
       <div class="contenido_par">
        <table  class="table-bordered w-100" >
                           <thead >
                                <tr class="">
                                   
                                   <td class="cab ">I Par.</td>
                                </tr>
                           </thead>
                           <tbody class= "reg_notas" >
                               <tr>
                                   <td class="al_nota" id="pos_1n" >&nbsp;</td>
                               </tr>
                               <tr>
                            
                                   <td class="al_nota" id="pos_2n" >&nbsp;</td> 
                               </tr>
                               <tr>
                               
                                   <td class="al_nota" id="pos_3n" >&nbsp;</td> 
                               </tr>
                               <tr>
                            
                                   <td class="al_nota" id="pos_4n" >&nbsp;</td> 
                               </tr>
                               <tr>
                                 
                                   <td class="al_nota" id="pos_5n" >&nbsp;</td>
                               </tr>
                               <tr>
                                  
                                   <td class="al_nota" id="pos_6n" >&nbsp;</td>
                               </tr>
                               <tr>
                                   
                                   <td class="al_nota" id="pos_7n" >&nbsp;</td>
                               </tr>
                               <tr>                                  
                                   <td class="al_nota" id="pos_8n" >&nbsp;</td>
                               </tr>
                           </tbody>
            
        </table>   
       </div>
       <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Recu</td>
                                </tr>
                           </thead>
                           <tbody class= "reg_notas">
                           <tr>
                               
                               <td class="al_nota" id="pos_1n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_1Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_1Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_1Rec" > &nbsp;</td>
                           </tr>
                            <tr>
                               <td class="al_nota" id="pos_8n_1Rec" >&nbsp;</td>
                            </tr>
                           </tbody>

        </table>   
       </div>
       <div class="contenido_par" >
         <table class=" table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">II Par</td>
                                </tr>
                           </thead>
                           <tbody class="reg_notas">
                          <tr>
                               
                               <td class="al_nota" id="pos_1n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_2p" >&nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_2p" >&nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_2p" >&nbsp;</td>
                            </tr>
                           </tbody>

        </table>   
       </div>
       <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="pos_1n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_2Rec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_2Rec" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_2Rec" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab">Portafolio</td>
                                </tr>
                           </thead>
                           <tbody class="notas_pr">

                           <tr>
                               
                               <td class="al_nota" id="pos_1n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_2n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_3n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_4n_porta1q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_5n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_6n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="pos_7n_porta1q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="pos_8n_porta1q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
     <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_3">Prom 80%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Lengua" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Mate" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Ccnn" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Sociales" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Artes" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_CulFi" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="parcial_1_Ingles" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="parcial_1_Valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
     <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_2">Proyecto</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="proyecto_1n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_2n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_3n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_4n" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_5n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_6n" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_7n" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="proyecto_8n" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td  class="cab_2">Nota PPFF</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="proyecto_1npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_2npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_3npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_4npf" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_5npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_6npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="proyecto_7npf" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="proyecto_8npf" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div class="contenido_par" >
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Prom 20%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="examen_1q_lengua" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_mate" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_cnn" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_sociales" > &nbsp;;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_arte" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_culfi" > &nbsp;;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="examen_1q_ingles" > &nbsp;;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="examen_1q_valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
    <div class="contenido_par" id="prom_1Q">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_1">1Q Prom</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_lengua" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_mate" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_cnn" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_sociales" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_arte" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_culfi" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="notafinal_1q_ingles" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota color1p" id="notafinal_1q_valores" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
       
<!--***************************** SEGUNDO QUIMESTRE  *********************-->
       <div  id="1p_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2"> I par.</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua1p2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales1p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles1p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores1p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div  id="1p_2qR" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua1p2qR" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales1p2qR" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles1p2qR" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores1p2qR" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>   
     <div  id="2p_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2"> II par.</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua2p2q_1" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores2p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
    <div  id="2p_2qR" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Recu</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua2p2qRec" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales2p2qRec" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles2p2qRec" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores2p2qRec" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
       <div  id="porta_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_ppff" >Portafolio</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="portafolio_2QA" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota portafolio_2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
       <div  id="prom80_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_prom">Prom80%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_prom2p2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_prom2p2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_prom2p2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores_prom2p2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>   
       <div  id="proy_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_2">Proyecto</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_proy2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_proy2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_proy2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="valores_proy2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
       <div  id="ppff_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_ppff">Notappff</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota nota_ppff-2q" id="" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
    <div  id="prom20_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="color_prom">Prom20%</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota" id="lengua_prom20_2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="mate_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="cnn_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="sociales_prom20_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="arte_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="culfi_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota" id="ingles_prom20_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota" id="" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
     <div  id="prom_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_1">2Q Prom</td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota color1p" id="lengua_prom_2q" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="mate_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="cnn_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="sociales_prom_2q" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="arte_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="culfi_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota color1p" id="ingles_prom_2q" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota color1p" id="valores_prom_2q" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div>
             <div  id="prom_2q" class="contenido_parII">
         <table class="table-bordered w-100" >
                           <thead >
                                <tr>                              
                                   <td class="cab_3">Anual </td>
                                </tr>
                           </thead>
                           <tbody class="">

                           <tr>
                               
                               <td class="al_nota colorfin" id="lengua_fin" >&nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="mate_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="cnn_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="sociales_fin" > &nbsp;</td> 
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="arte_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="culfi_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               
                               <td class="al_nota colorfin" id="ingles_fin" > &nbsp;</td>
                           </tr>
                           <tr>
                               <td class="al_nota colorfin" id="valores_fin" >&nbsp;</td>
                            </tr>

                           </tbody>

        </table>   
       </div> 
          <div id="extract_2q"></div>  
           
</div>

<div class="row mt-5">
        <div class="col-12">
            <div class="d-inline p-2 bg-primary text-white">Promedio del primero quimestre</div>
            <div class="d-inline p-2 bg-dark text-white" id="prom_1q">nota</div>
            
            
            <div class="d-inline p-2 bg-primary text-white">Promedio del segundo quimestre</div>
            <div class="d-inline p-2 bg-dark text-white" id="prom_2QQ">nota</div>
        </div>
</div><br>
<div class="row">
    <div class="col-8">
        <div class="d-inline p-2 bg-warning ">Promedio Final </div>
        <div class="d-inline p-2 bg-dark text-white" id="prom_final2021">nota</div>
    </div>
    
   </div>
</main>
<!--**************************** CUADRO DE CALIFICACIONES INICIAL *****************-->
<main class="plant_inicial">
    <div class="contenedor" >
           <div class="contenedor" >
       <div class="contenido_inicial">
           <table class="table-bordered" >
            <thead>
                <tr>                              
                    <td  class="cab">ÁMBITOS</td>
                    <td  class="cab_1">Primer Quimestre</td>
                    <td  style="color: white;">...</td>
                    <td  class="cab_3">Primera Parcial</td>
                    <td  class="color_ppff">Segunda Parcial</td>
                    <td  class="cab_1">Segundo Quimestre</td>
                    <td  style="color: white;">...</td>
                    <td  class="colorfin">Promedio Final</td>
                </tr>
            </thead> 
            <tbody class= "notas">
                               <tr>
                                   <td id="pos_1ini" ></td>
                                   <td class="al_nota color1p color1p" id="pos_1n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_1n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_1n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_1n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_1n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_2ini" ></td>
                                   <td class="al_nota color1p" id="pos_2n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_2n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_2n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_2n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_2n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_3ini" ></td>
                                   <td class="al_nota color1p" id="pos_3n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_3n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_3n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_3n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_3n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_4ini" ></td>
                                   <td class="al_nota color1p" id="pos_4n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_4n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_4n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_4n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_4n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_5ini" ></td>
                                   <td class="al_nota color1p" id="pos_5n_ini" ></td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_5n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_5n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_5n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_5n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_6ini" ></td>
                                   <td class="al_nota color1p" id="pos_6n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_6n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_6n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_6n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_6n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_7ini" ></td>
                                   <td class="al_nota color1p" id="pos_7n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_7n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_7n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_7n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_7n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_8ini" ></td>
                                   <td class="al_nota color1p" id="pos_8n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_8n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_8n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_8n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_8n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_9ini" ></td>
                                   <td class="al_nota color1p" id="pos_9n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_9n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_9n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_9n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_9n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_10ini" ></td>
                                   <td class="al_nota color1p" id="pos_10n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_10n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_10n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_10n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_10n_prom2021" >&nbsp;</td>
                               </tr>
                               <tr>
                                   <td id="pos_11ini" ></td>
                                   <td class="al_nota color1p" id="pos_11n_ini" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota" id="pos_11n_ini2Q1P" >&nbsp;</td>
                                   <td class="al_nota" id="pos_11n_ini2Q2P" >&nbsp;</td>
                                   <td class="al_nota color1p" id="pos_11n_ini2Q2Prom" >&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td class="al_nota colorfin" id="pos_11n_prom2021" >&nbsp;</td>
                               </tr>
                </tbody>           
           </table>
            
           <div id="extract_ini"></div>
       </div>
    </div>
<!--    <div class="row mt-5">
                <div class="col-12">
                    <div class="d-inline p-2 bg-primary text-white">Desarrollo comportamental Primer Quimestre</div>
                    <div class="d-inline p-2 bg-dark text-white" id="conducta_1q">nota</div>
                </div>
    </div>-->
</div>
</main>


