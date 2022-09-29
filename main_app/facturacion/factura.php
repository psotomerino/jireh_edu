<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<div class="factura">
    <div id="factur"><button id="cerrar_fact" class="btn btn-primary">Cerrar</button> FACTURACIÓN / <span id="mi_factura">Emision factura</span></div><br>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped">
                <tr>
                    <td colspan="2"><center> <b>NOMBRE DE LA EMPRESA</b></center></td>                    
                    <td><b>RUC</b></td>
                    <td><b>1706461926001</b></td>
                </tr>
                <tr>
                    <td><b>Dirección Matriz</b></td>
                    <td>Av. Dos Rios y Jumandy </td>
                    <td><b>Telefono</b></td>
                    <td>0981670055</td>
                </tr>
                <tr>
                    <td><b>Dirección Sucursal</b></td>
                    <td>Av. Dos Rios y Jumandy</td>
                    <td><b>Telefono</b></td>
                    <td>psotomerino@gmail.com</td>
                </tr>
            </table>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped">
                <tr>
                    <td><b>Cliente</b> </td>
                    <td>Sebastian Caizaguano</td>
                    <td><b>Direccion</b> </td>
                    <td>Sector Registro Civil</td>
                </tr>

                <tr>
                    <td><b>Fecha de emision</b> </td>
                    <td><input type="date" name="fecha_emi" id="fecha_emi" class="form-control"></td>
                    <td><b>correo</b></td>
                    <td><input type="text" name="corre" id="correo" class="form-control" placeholder="corre electronico"></td>
                </tr>

            </table>
        </div>
    </div>
</div>