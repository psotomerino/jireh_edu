<?php 
    session_start();
    $id_usuario_profe =$_SESSION['usuario']['id_usuario'];
        
    if (!isset($_SESSION['usuario']['tipo_usuario'])) {
    echo '<div class="salir">USTED ACABA DE CERRAR SU SESSION EXITOSAMETNE !!!!!<a href="../../index.php"><button type="button" class="btn btn-primary">REGRESAR A LA PAGINA PRINCIPAL</button></a></div>'; 
    exit();
    }
?>
<style>
    #table_subto{
        width: 40%;
        margin-left: 680px;
    }
</style>
<div class="factura">
    <div id="factur"><button id="cerrar_fact" class="btn btn-primary">Cerrar</button> FACTURACIÓN / <span id="mi_factura">Emision factura</span></div><br>
    <form action="digito_verificador.php" method = "POST">
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped">
                <tr>
                    <td colspan="2"><center> <b>P&S-INVESTMENT S.A.S. B.I.C.</b></center></td>                    
                    <td><b>RUC</b></td>
                    <td><b>1891807763001</b></td>
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
                    <td><input type="text" id="nombre_cliente" name="nombre_cliente" class="form-control"></td>
                    <td><b>Direccion</b> </td>
                    <td><input type="text" id="dir_cliente" name="dir_cliente" class="form-control"></td>
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
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <tr>
                    <td><b>Codigo</b></td>
                    <td><b>Cantidad</b></td>
                    <td><b>Descripcion</b></td>
                    <td ><b>Precio Unit</b></td>                    
                    <td ><b>Precio total</b></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td id="cantidad_pr"><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td id="precio_unit"><input type="text" class="form-control"></td>
                    <td id="precio_total"><input type="text" class="form-control"></td>
                </tr>
                
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table" id="table_subto">
                <tr>
                    <td>SUBTOTAL</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
 
                <tr>
                    <td>IVA 12%</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>DESCUENTO</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>VALOR TOTAL</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
            </table>  
        </div>
        <p><button type="submit" class="btn btn-success">generar</button></p>
    </form>    
    </div>
</div>
