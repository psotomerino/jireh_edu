<?php 
    session_start();
    $id_usuario_estu =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    .horario{
        margin-top: 80px;
        margin-left: 250px;
        
    }
    #indicacion{
        display: none;
        width: 80%;        
        padding: 5px;
        text-align: center;
    }
</style>
<main class="horario">
    <h4>HORARIO DE EXAMENES CORRESPONDIENTES AL PRIMER QUIMESTRE</h4>
    <div id="indicacion">
        <p class="alert alert-info d-block">Estimado padre o madre de familia a partir de las 12:00 del  día sabado 22 de enero del 2022
        usted podrá visualizar el horiario correspondiente a los examenes del primer quimestre con su respctivo acceso a la clase 
        en la plataforma zoom </p>
    </div>
<!--*********************************SEGUNDO AÑO*****************************************************-->
<div id="h1Q_segundo">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3>SEGUNDO AÑO DE EDUACION BÁSICA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes presencial</td>
                <td >Martes virtual</td>
                <td >Miercoles presencial</td>
                <td >Jueves virtual </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">07:40 a 8:25</td>  
                
                <td align = "center" style =""><b>Lenguaje</b></td> <!--Lunes-->
                
                <td align = "center"><p><b>Lenguaje</b></p> <!--Martes-->
                            <p><a href="https://us05web.zoom.us/j/86126836103?pwd=emMwRVB3L1hHZnhvRklKZnRYbFVQQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                            
                <td align = "center"><b>Lenguaje</b></td> <!--Miercoles-->
                
                <td align = "center" style ="background: #7D9EC4;"></td> <!--Jueves-->
                
                <td align = "center"><p><b>Educ. Cultural y Artística</b></p> <!--Viernes-->
                            <p><a href="#" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:25 a 9:10</td>
                
                <td align = center><p><b>Ciencias Naturales</b></p></td> <!--Lunes-->
                
                <td align = center style ="background: #7D9EC4;"><b></b></td> <!--Martes-->
                
                <td align = center><b>Ciencias Naturales</b></td> <!--Miercoles-->
                
                <td align = center><p><b>Educ. Cristiana</b></p> <!--Jueves-->
                        <p><a href="https://us05web.zoom.us/j/82525360334?pwd=aGpCaDZOMWJPTjRvTit1eE9IYnk1UT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                        
                <td align = center><p><b>Ciencias Naturales</b></p> <!--Viernes-->
                        <p><a href="https://us05web.zoom.us/j/89002497884?pwd=UER2UkVmakF5MTdJSU13YTRJVWZ5QT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:10 a 9:55</td>
                
                <td align = center><b>Inglés</b></td> <!--Lunes-->
                
                <td align = center><p><b>Estudios Sociales</b></p> <!--Martes-->
                        <p><a href="https://us05web.zoom.us/j/86531962824?pwd=Y2tvV1FyYWpJdnl5MXFGUjlwWEhrdz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                        
                <td align = center><b>Inglés</b></td> <!--Miercoles-->
                
                <td align = center><p><b>Educ. Cultural y Artística</b></p> <!--Jueves-->
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                        
                <td align = center style ="background: #7D9EC4;"><b></b></td> <!--Viernes-->
            </tr>
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:55 a 10:40</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:40 a 11:25</td>
                
                <td align = center><b>Estudios sociales</b></td> <!--Lunes-->
                
                <td align = center><p><b>Inglés</b></p> <!--Martes-->
                        <p><a href="https://us05web.zoom.us/j/82238803677?pwd=THY0WkFWZmUvdTFxTXRlSjlaN0hldz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                        
                <td align = center><b>Estudios Sociales</b></td> <!--Miercoles-->
                
                <td align = center><p><b>Inglés</b></p> <!--Jueves-->
                        <p><a href="https://us05web.zoom.us/j/82238803677?pwd=THY0WkFWZmUvdTFxTXRlSjlaN0hldz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
                        
                <td align = center style ="background: #7D9EC4;"></td> <!--Viernes-->
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                
                <td align = center><p><b>Matemáticas</b></p></td> <!--Lunes-->
                
                <td align = center style ="background: #7D9EC4;"><b></b></td> <!--Martes-->
                
                <td align = center><p><b>Matemáticas</b></p></td> <!--Miercoles-->
                
                <td align = center style ="background: #7D9EC4;"><b></b></td> <!--Jueves-->
                
                <td align = center><p><b>Matemáticas</b></p> <!--Viernes-->
                        <p><a href="https://us05web.zoom.us/j/83778964965?pwd=SldoWGNWbGNWOTJNb1E0SE9UMFA1UT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p></td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
                <td align = center></td> 
                
                <td align = center> </td> <!--Lunes-->
                
                <td align = center> <!--Martes-->
                        <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                        <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p>      
                </td>
                
                <td align = center> </td><!--Miercoles-->
                
                <td align = center> <!-- Jueves -->
                        <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                        <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p> 
                </td> 
                
               <td align = center> <!--Viernes-->
                        <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                        <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                        <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p>      
                </td> 
            </tr>
        </table>
    </div>
    <br>
    
<!--*********************************TERCER AÑO*****************************************************-->
<div id="h1Q_tercero">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3> TERCER AÑO DE EDUACION BÁSICA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes virtual</td>
                <td >Martes </td>
                <td >Miercoles virtual</td>
                <td >Jueves  </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA   
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">07:40 a 8:25</td>  
                
                <td align = "center" style =""><b>Ciencias Naturales</b><!--Lunes-->
                        <p><a href="https://us05web.zoom.us/j/88466776911?pwd=V3k3ZDQ4SHdVMGVlaFZobHFHYkxqQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Ciencias Naturales</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Educ Cristiana</b><!--Miercoles-->
                    <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Ciencias Naturales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>           

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:25 a 9:10</td>  
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Educ. Cultural y Artistica</b><!--Miercoles-->
                    <p><a href="https://us04web.zoom.us/j/77773760304?pwd=Q1VTYVM2dUNhWEc0ZllFb0tPaXlMZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Lenguaje</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p> <!--Viernes-->
                   <p><a href="ttps://us05web.zoom.us/j/81357638953?pwd=dXhFYS91blBTUFpuUUF0ZmJ5Zjdldz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                 </td>
            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:10 a 9:55</td>
                
                <td align = "center" style =""><b>Educ. Cultural y Artísitica</b><!--Lunes-->
                        <p><a href="https://us04web.zoom.us/j/77773760304?pwd=Q1VTYVM2dUNhWEc0ZllFb0tPaXlMZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Inglés</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Ingles</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:55 a 10:40</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
               <td align = "center" style ="background: #FFC300;">10:40 a 11:25</td>
               <td align = "center"  style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Matemáticas</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Matemáticas</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Matemáticas</b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                <td align = "center" style =""><b>Estudios Sociales</b><!--Lunes-->
                        <p><a href="https://us05web.zoom.us/j/81679079176?pwd=TkVTSS8xTVBhRmpIN3lXQkJCazNvZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Estudios Sociales</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Estudios Sociales</b></p><!--Jueves-->
                        <p><a href="https://us05web.zoom.us/j/81679079176?pwd=TkVTSS8xTVBhRmpIN3lXQkJCazNvZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
                <td align = "center"><p><b></b></p><!--Martes-->
                           
                </td>
                <td align = "center" style =""><b></b><!--Lunes-->
                   
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p>        
                </td> 
                
                <td align = "center"><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b></b><!--Miercoles-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p> 
                </td> 
                
                <td align = "center" class=""><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b></b></p> <!--Viernes-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/84420464164?pwd=a3hYS2x5ZVNpWTdyVWVsbDBlMEU4QT09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p> 
                 </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************CUARTO AÑO*****************************************************-->
<div id="h1Q_cuarto">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3> CUARTO AÑO DE EDUACION BÁSICA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes virtual</td>
                <td >Martes </td>
                <td >Miercoles virtual</td>
                <td >Jueves  </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA   
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;"
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">07:40 a 8:25</td>  
                
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Ciencias Naturales</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Ciencias Naturales</b><!--Miercoles-->
                    <p><a href="https://us05web.zoom.us/j/83672471848?pwd=YzdzRldXVS9WMEE3VENyK3VCUWowZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Ciencias Naturales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>           

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:25 a 9:10</td> 
                <td align = "center" style =""><b>Educ. Cultural y Artística</b><!--Lunes-->
                        <p><a href="https://us04web.zoom.us/j/76619244286?pwd=WG5vRVpPSnBjTnpVTkxrUzlCK3ZJZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Estudios Sociales</b></p><!--Martes-->
                        
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Inglés</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Estudios Sociales</b></p> <!--Viernes-->
                    <p><a href="https://us05web.zoom.us/j/84460206163?pwd=T2RSV2tEaCsyemo3RjA1VS9kaVhoQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p> 
                 </td>
            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:10 a 9:55</td>
                
                <td align = "center" style =""><b>Lenguaje</b><!--Lunes-->
                    <p><a href="https://us05web.zoom.us/j/84440473543?pwd=QU9TNzVmbGVIZkIwajc0dXZKZzFQUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Matemáticas</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Matemáticas</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:55 a 10:40</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:40 a 11:25</td>
                <td align = "center" style =""><b>Matemáticas</b><!--Lunes-->
                         <p><a href="https://us05web.zoom.us/j/89454546180?pwd=NUtXN2loK0NPaFRvTG5LNXp4MmtBZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>    
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Educ. Cultural y Artística</b><!--Miercoles-->
                    <p><a href="https://us04web.zoom.us/j/76619244286?pwd=WG5vRVpPSnBjTnpVTkxrUzlCK3ZJZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Lenguaje</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Lengauje</b></p> <!--Viernes-->
                   <p><a href="https://us05web.zoom.us/j/84440473543?pwd=QU9TNzVmbGVIZkIwajc0dXZKZzFQUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td>
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
               <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Ingles</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Educ. Cristiana</b><!--Miercoles-->
                     <p><a href="https://us04web.zoom.us/j/76619244286?pwd=WG5vRVpPSnBjTnpVTkxrUzlCK3ZJZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Estudios Sociales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
               <td></td>
               <td align = "center" style =""><b></b><!--Lunes-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p>    
                </td> 
                
                <td align = "center"><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b></b><!--Miercoles-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p> 
                </td> 
                
                <td align = "center" class=""><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b></b></p> <!--Viernes-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="#" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/75951102667?pwd=TbBri_Cv-BKHaAUk9wF-bNI93b4q9m.1" target="_blank"><button type="button" class="btn btn-primary btn1">E.Artistica</button></a></p> 
                 </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************QUINTO AÑO*****************************************************-->
<div id="h1Q_quinto">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3> QUINTO AÑO DE EDUACION BÁSICA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes virtual </td>
                <td >Martes </td>
                <td >Miercoles virtual</td>
                <td >Jueves  </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA   
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;"
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">07:40 a 8:25</td>  
                
                <td align = "center" style =""><b>Lenguaje</b><!--Lunes-->
                    <p><a href="https://us04web.zoom.us/j/78299212534?pwd=8FBDIxT4rJnBmOdtgk-IIaNrWlZoz8.1" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Ingles</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Educ. Cultural Artística</b><!--Miercoles-->
                       <p><a href="https://us04web.zoom.us/j/77851820768?pwd=V0JMNklPNE0vR1J5UlJJd1FuSGpMUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p> 
                </td> 
                
                <td align = "center" class=""><p><b>Lenguaje</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p> <!--Viernes-->
                       <p><a href="https://us04web.zoom.us/j/78299212534?pwd=8FBDIxT4rJnBmOdtgk-IIaNrWlZoz8.1" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td>           

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:25 a 9:10</td> 
                <td align = "center" style =""><b>Matematicas</b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Matemáticas</b></p><!--Martes-->
                             
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;" ><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Estudios sociales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><b>Educ. Cultural Artística</b><!--Miercoles-->
                       <p><a href="https://us04web.zoom.us/j/77851820768?pwd=V0JMNklPNE0vR1J5UlJJd1FuSGpMUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p> 
                </td> 
            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:10 a 9:55</td>
                
                <td align = "center" style =""><b>Educ. Cristiana</b><!--Lunes-->
                    <p><a href="https://us05web.zoom.us/j/83482277155?pwd=aHorZzJ3YzI5NkQvSFBGZFhVQ0ExZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>                
                </td> 
                
                <td align = "center"><p><b>Ciencis Naturales</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Ciencias Naturales</b><!--Miercoles-->
                    <p><a href="https://us05web.zoom.us/j/88032995798?pwd=UURLRyt3T3BkNjdaNG1ySktoZVRsdz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Ciencias Naturales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" ><p><b>Matemáticas</b></p> <!--Viernes-->
                    <p><a href="https://us05web.zoom.us/j/88684196572?pwd=YlRqaEFCQldFUmcxYmMzbFk2VHczUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>                   
                </td>
            </tr>
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:55 a 10:40</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
               <td align = "center" style ="background: #FFC300;">10:40 a 11:25</td>
               <td align = "center" style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Estudios Sociales</b></p><!--Martes-->
                               
                </td> 
                            
                            
                <td align = "center"><b>Estudios Sociales</b><!--Miercoles-->
                    <p><a href="https://us05web.zoom.us/j/83335729890?pwd=VmdIUHFLRFRCUUJZZWpQNE5LUkRIdz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Inglés</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;"><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Matemáticas</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
               <td></td>
               <td align = "center" style =""><b></b><!--Lunes-->
                   <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                   
                </td> 
                
                <td align = "center"><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b></b><!--Miercoles-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                   
                </td> 
                
                <td align = "center" class=""><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b></b></p> <!--Viernes-->
                   <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                   
                 </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************SEXTO AÑO*****************************************************-->
<div id="h1Q_sexto">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3> SEXTO AÑO DE EDUACION BÁSICA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes virtual</td>
                <td >Martes </td>
                <td >Miercoles virtual</td>
                <td >Jueves  </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA   
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;" 
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">07:40 a 8:25</td>  
                
                <td align = "center" style =""><b>Matemáticas</b><!--Lunes-->
                    <p><a href="https://us05web.zoom.us/j/89470278059?pwd=VDhuTzZOK2VOSU9jcEdDVjdURGEzUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" ><p><b>MAtemáticas</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;" ><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Inglés</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Ciencias naturales</b></p> <!--Viernes-->
                   <p><a href="https://us05web.zoom.us/j/88316286011?pwd=Ynp1S2svTWhUQmNmdjM5MFVueU01dz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td>           

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:25 a 9:10</td> 
                <td align = "center" style ="background: #7D9EC4;" ><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Inglés</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Ciencias Naturales</b><!--Miercoles-->
                    <p><a href="https://us05web.zoom.us/j/88316286011?pwd=Ynp1S2svTWhUQmNmdjM5MFVueU01dz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Matemáticas</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:10 a 9:55</td>
                
                <td align = "center" style ="background: #7D9EC4;" ><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Lenguaje</b><!--Miercoles-->
                    <p><a href="https://us04web.zoom.us/j/78354054821?pwd=qbW_o52-Hy5Tr4Yqx6KRyiKEhnoxS6.1" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Educ. Cultural y Artística</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Lenguaje</b></p> <!--Viernes-->
                    <p><a href="https://us04web.zoom.us/j/78354054821?pwd=qbW_o52-Hy5Tr4Yqx6KRyiKEhnoxS6.1" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                 </td>
            </tr>
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:55 a 10:40</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
               <td align = "center" style ="background: #FFC300;">10:40 a 11:25</td>
               <td align = "center" style =""><b>Educ. Cultural y Artística</b><!--Lunes-->
                   <p><a href="https://us04web.zoom.us/j/77201265606?pwd=QUN5dWkzMGV0ZE53OXp6K2JyU2xkQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p> 
                </td> 
                
                <td align = "center"><p><b>Educ. Cristiana</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center" style ="background: #7D9EC4;" ><b></b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Estudios Sociales</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                <td align = "center" style =""><b>Ciencias Naturales</b><!--Lunes-->
                    <p><a href="https://us05web.zoom.us/j/88316286011?pwd=Ynp1S2svTWhUQmNmdjM5MFVueU01dz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center"><p><b>Estudios Sociales</b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b>Estudios Sociales</b><!--Miercoles-->
                    <p><a href="https://us05web.zoom.us/j/87190813174?pwd=K3doZm80M3lSYVdwYjRUVjBHa1k2UT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td> 
                
                <td align = "center" class=""><p><b>Lenguaje</b></p><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Matemáticas</b></p> <!--Viernes-->
                    <p><a href="https://us05web.zoom.us/j/89470278059?pwd=VDhuTzZOK2VOSU9jcEdDVjdURGEzUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                 </td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
               <td></td>
               <td align = "center" style =""><b></b><!--Lunes-->
                   <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                   
                </td> 
                
                <td align = "center"><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><b></b><!--Miercoles-->
                    <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    
                </td> 
                
                <td align = "center" class=""><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b></b></p> <!--Viernes-->
                   <p><a href=" https://us05web.zoom.us/j/85414384436?pwd=OWQySDBzZEZQR0hYeXJwL2JjeHIxUT09" target="_blank"><button type="button" class="btn btn-primary btn1">Matemáticas</button></a></p> 
                    <p><a href="https://us04web.zoom.us/j/72990444889?pwd=0l8pWkkV0z32odyTRZIuBj4Do8D01w.1" target="_blank"><button type="button" class="btn btn-primary btn1">Lenguaje/Eca</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/83686560120?pwd=NC9OWTJ3SUpxcC9VVnQ3a2RNbDJldz09" target="_blank"><button type="button" class="btn btn-primary btn1">CCnn/EEss</button></a></p> 
                    <p><a href="https://us02web.zoom.us/j/89184151146?pwd=WnBJMHRBYTdyTk9zSCtmcmxacjR1QT09" target="_blank"><button type="button" class="btn btn-primary btn1">Inglés</button></a></p> 
                    
                 </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************INICIAL 3 AÑOS*****************************************************-->
<div id="h1Q_inicial3">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3>INICAL GRUPO 3 AÑOS</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes presencial</td>
                <td >Martes virtual</td>
                <td >Miercoles presencial</td>
                <td >Jueves virtual </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA 
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;" 
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:00 a 9:20</td>  
                
                <td align = "center" ><b>Inglés</b> <!--Lunes-->
                
                </td>
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Martes-->
                            
                </td> 
                           
                <td align = "center"><b>Inglés</b> <!--Miercoles-->
                
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"  > <!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Inlgés (8:25 a 9:10)</b></p> <!--Viernes-->
                    <p><a href="https://us05web.zoom.us/j/85172892689?pwd=ZXZWYmdKOTZpWGluNWhMZ09meGNZdz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td>

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:20 a 10:00</td>  
                
                <td align = "center" ><b>Ámbitos de aprendizaje</b> <!--Lunes-->
                
                </td>
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Martes-->
                    <p><a href="https://us04web.zoom.us/j/79044357779?pwd=OENNMkN2TEVIaWlMV0pCZ2dzRER2Zz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td> 
                           
                <td align = "center"><b>Ámbitos de aprendizaje</b><!--Miercoles-->
                
                </td> 
                
                <td align = "center" ><b>Inglés (9:10 a 9:55)</b><!--Jueves-->
                    <p><a href="https://us05web.zoom.us/j/85172892689?pwd=ZXZWYmdKOTZpWGluNWhMZ09meGNZdz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>     
                </td> 
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Viernes-->
                    <p><a href="https://us04web.zoom.us/j/79044357779?pwd=OENNMkN2TEVIaWlMV0pCZ2dzRER2Zz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td>
            </tr>
            
            <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:00 a 10:30</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:30 a 11:30</td>  
                
                <td align = "center" ><b>Ámbitos de aprendizaje</b> <!--Lunes-->
                
                </td>
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Martes-->
                            
                </td> 
                           
                <td align = "center"><b>Ámbitos de aprendizaje</b>
                
                </td> <!--Miercoles-->
                
                <td align = "center" ><b>Ámbitos de aprendizaje</b>
                    <p><a href="https://us04web.zoom.us/j/79044357779?pwd=OENNMkN2TEVIaWlMV0pCZ2dzRER2Zz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>     
                </td> <!--Jueves-->
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Viernes-->
                             
                </td>
            </tr>
            
            
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
           <tr>
                <td align = "center"></td>  
                
                <td align = "center" ><b></b> <!--Lunes-->
                
                </td>
                
                <td align = "center"><p><b>Inglés</b></p> <!--Martes-->
                    <p><a href="https://us05web.zoom.us/j/88144828976?pwd=M2Njci9ST2hRdTBqUjVPSG1lY2dOZz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td> 
                           
                <td align = "center"><b></b> <!--Miercoles-->
                
                </td> 
                
                <td align = "center" ><b>Ámbitos de aprendizaje</b> <!--Jueves-->
                    <p><a href="https://us04web.zoom.us/j/79044357779?pwd=OENNMkN2TEVIaWlMV0pCZ2dzRER2Zz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>    
                </td> 
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Viernes-->
                    <p><a href="https://us04web.zoom.us/j/79044357779?pwd=OENNMkN2TEVIaWlMV0pCZ2dzRER2Zz09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************INICIAL 4 AÑOS*****************************************************-->
<div id="h1Q_inicial4">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3>INICAL GRUPO 4 AÑOS</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes presencial Grupo A</td>
                <td >Martes presencial Grupo B</td>
                <td >Miercoles presencial Grupo A</td>
                <td >Jueves Grupo B </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA 
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;" 
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:00 a 9:20</td>  
                
                <td align = "center"  ><p><b>Ámbitos de aprendizaje</b></p> <!--Lunes-->
                
                </td>
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Martes-->
                            
                </td> 
                           
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p>
                
                </td> <!--Miercoles-->
                
                <td align = "center" ><p><b>Inglés</b></p>
                    
                </td> <!--Jueves-->
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Viernes-->
                            
                </td>

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:20 a 10:00</td>  
                
                <td align = "center" ><b>Ámbitos de aprendizaje</b> <!--Lunes-->
                
                </td>
                
                <td align = "center"><p><b>Inglés</b></p> <!--Martes-->
                            
                </td> 
                           
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p><!--Miercoles-->
                
                </td> 
                
                <td align = "center" ><p><b>Ámbitos de aprendizaje</b></p> <!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Viernes-->
                    <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>        
                </td>
            </tr>
            
            <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:00 a 10:30</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- TERCERA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:30 a 11:30</td>  
                
                <td align = "center" ><p><b>Inglés</b></p> <!--Lunes-->
                
                </td>
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p> <!--Martes-->
                            
                </td> 
                           
                <td align = "center"><p><b>Inglés</b></p>
                
                </td> <!--Miercoles-->
                
                <td align = "center" ><p><b>Ámbitos de aprendizaje</b></p>
                    
                </td> <!--Jueves-->
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p> <!--Viernes-->
                            
                </td>
            </tr>
            
            
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
           <tr>
                <td align = "center"></td>  
                
                <td align = "center" >
                    <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Grupo B</button></a></p><!--Lunes-->
                
                </td>
                
                <td align = "center">
                    <!--Martes-->
                    <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Grupo A</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/88144828976?pwd=M2Njci9ST2hRdTBqUjVPSG1lY2dOZz09" target="_blank"><button type="button" class="btn btn-primary">Ingles</button></a></p>        
                </td> 
                           
                <td align = "center">
                    <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Grupo B</button></a></p> <!--Miercoles-->
                
                </td> 
                
                <td align = "center" >
                   <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Grupo A</button></a></p> <!--Jueves-->
                    
                </td> 
                
                <td align = "center">
                    <p><a href="https://zoom.us/j/92948769586?pwd=aUloWmxEeDFpSlYvRGpmbWxJb24yUT09" target="_blank"><button type="button" class="btn btn-primary">Ámbitos de aprendizaje</button></a></p> <!--Viernes-->
                            
                </td>
            </tr>
        </table>
    </div>
    <br>
<!--*********************************PREPARATORIA*****************************************************-->
<div id="h1Q_prepa">        
        <table class="table-responsive" BORDER WIDTH="90%" border=1>
            <tr>
                <td colspan="6" align = "center"> <h3> PREPARATORIA</h3></td>
            </tr>
            <tr align = "center" style ="background: #FFC300;">
                <td >HORA</td>
                <td >Lunes presencial</td>
                <td >Martes virtual</td>
                <td >Miercoles presencial</td>
                <td >Jueves virtual </td>
                <td >Viernes virtual</td>
            </tr>
            
            <!--- PRIMERA HORA   
            <p><a href="" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
            style ="background: #7D9EC4;" 
            -->
            <tr>
                <td align = "center" style ="background: #FFC300;">08:00 a 9:20</td>  
                
                <td align = "center" style =""><p><b>Ámbitos de aprendizaje</b></p><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Inglés (8:25 a 9:10)</b></p><!--Martes-->
                    <p><a href="https://us05web.zoom.us/j/89667962366?pwd=RmlSTjV4b3dydmVySHgxMnU2NE1QUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>       
                </td> 
                            
                            
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Ámbitos de aprendizaje</b></p><!--Jueves-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>    
                </td> 
                
                <td align = "center"><p><b>Educ. Valores</b></p> <!--Viernes-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>  
                 </td>           

            </tr>
            
             <!--- SEGUNDA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">09:20 a 10:00</td> 
                <td align = "center" style =""><b>Ámbitos de aprendizaje</b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p><!--Martes-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>       
                </td> 
                            
                            
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p><!--Miercoles-->
                
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><!--Jueves-->
                    
                </td> 
                
                <td align = "center"><p><b>Ingles</b></p> <!--Viernes-->
                   <p><a href="https://us05web.zoom.us/j/89667962366?pwd=RmlSTjV4b3dydmVySHgxMnU2NE1QUT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>
                </td>
            </tr>
            
           
            
             <!--- RECESO -->
            <tr>
                <td align = "center" style ="background: #FFC300;">10:00 a 10:30</td>
                <td colspan="5" align = "center" style ="background: #F9E79F;"><b>RECESO</b></td>

            </tr>
            
            <!--- CUARTA HORA -->
            <tr>
               <td align = "center" style ="background: #FFC300;">10:30 a 11:25</td>
               <td align = "center" style =""><p><b>Ámbitos de aprendizaje</b></p><!--Lunes-->
                
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;" ><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><p><b>Ámbitos de aprendizaje</b></p><!--Miercoles-->
                
                </td> 
                
                <td align = "center" class=""><p><b>Ámbitos de aprendizaje</b></p><!--Jueves-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Asistir</button></a></p>     
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            
            <!--- QUINTA HORA -->
            <tr>
                <td align = "center" style ="background: #FFC300;">11:25 a 12:10</td>
                <td align = "center" style =""><p><b>Ingles</b></p><!--Lunes-->
                
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p><!--Martes-->
                           
                </td> 
                            
                            
                <td align = "center"><p><b>Inglés</b></p><!--Miercoles-->
                
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><!--Jueves-->
                    
                </td> 
                
                <td align = "center" style ="background: #7D9EC4;"><p><b></b></p> <!--Viernes-->
               
                 </td>
            </tr>
            <!--- TUTORIAS -->
            <tr>
                <td align = "center" style ="background: #FFC300;">12:30 a 13:30</td>
                <td colspan="5" align = "center" style ="background: #DAF7A6;"><b>TUTORIAS</b></td>

            </tr>
            <tr>
                <td></td>  
               <td align = "center" style =""><b></b><!--Lunes-->
                
                </td> 
                
                <td align = "center"><p><b></b></p><!--Martes-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Ámbitos de aprendizaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/88144828976?pwd=M2Njci9ST2hRdTBqUjVPSG1lY2dOZz09" target="_blank"><button type="button" class="btn btn-primary">Ingles</button></a></p>             
                </td> 
                            
                            
                <td align = "center"><b></b><!--Miercoles-->
                    
                </td> 
                
                <td align = "center" class=""><!--Jueves-->
                    <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Ámbitos de aprendizaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/88144828976?pwd=M2Njci9ST2hRdTBqUjVPSG1lY2dOZz09" target="_blank"><button type="button" class="btn btn-primary">Ingles</button></a></p>     
                </td> 
                
                <td align = "center"><p><b></b></p> <!--Viernes-->
                   <p><a href="https://us04web.zoom.us/j/72961418324?pwd=NkpyaFUzRFBrdG5uQTBsR2hVS09pQT09" target="_blank"><button type="button" class="btn btn-primary">Ámbitos de aprendizaje</button></a></p> 
                    <p><a href="https://us05web.zoom.us/j/88144828976?pwd=M2Njci9ST2hRdTBqUjVPSG1lY2dOZz09" target="_blank"><button type="button" class="btn btn-primary">Ingles</button></a></p> 
                </td>
            </tr>
        </table>
    </div>
    <br>
    
</main>