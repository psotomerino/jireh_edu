<style>
    #bol_1{
       margin-left: 200px;
       margin-top: 50px; 
    }
    #element_1{
        width: 90%;
        
    }
    .cab{
        background: #D4DBF5;
        text-align: center;  
    }
    .cab_1{
        background: #5A58A6;
        color:white;
        text-align: center;        
    }
    tr{
       vertical-align: top; 
    }
    .cab_3{
        background: #4D7356;
        color:white;
        text-align: center;
    }
    #1Q{
        text-align: center;
        font-size: 1;
        width: 60%;
    }
    #close{
        text-align: right;
    }
    .iden{
        background: #F2F2F2;
    }
    #conducta_stilo{
        background: #D9C6B0;
        padding: 5px;
    }
    .vista_tab{
        text-align: center;
        
    }

</style>
   <div id="bol_1">
    <div class="identidad">
        <input class="iden" type="text" id="nombre_estu">
        <input class="iden" type="text" id="apellido_estu"> <br>
         <button type="button" class="btn btn-warning mt-3" id="extrac_N_inicial">BOLETA DE CALIFICACIONES </button> 
    </div><br>
<!--    <p><a class="btn btn-primary" href="#" id="show_1"><i class="fa fa-eye"></i> Mostrar Boletin de calificaciones</a></p>-->
    
       <div id="content" class="col-12">
        <div id="element_1" class="col" style="display: none;"> 
            <div id="close"><a class="btn btn-small" href="#" id="hide_1" title="Cerrar"><i class="fa fa-times" aria-hidden="true"></i></a></div>
            <h3>Reporte Calificaciones Primer Quimestre</h3>
            
            <TABLE class=""  > 
                
                <TR>
                <TD>
                    <table class="table-bordered" id="1Q" >
                       <thead  style="vertical-align:top">
                            <tr border="1">
                               <td width="5%" class="cab_1" colspan="2">PRIMER QUIMESTRE </td>

                             </tr>
                            <tr>
                               <td width="5%" class="cab">Portafolio</td>
                               <td width="5%" class="cab">Nota</td>
                             
                            </tr>
                       </thead>
                       <tbody class="vista_tab" id="1q_1p_inicial"></tbody>
                
                    </table>
                </TD>
<!--                <TD>
                    <table class="table-bordered">
                       <thead>
                            <tr>
                               <td width="5%" class="cab_1" colspan="4">II PARCIAL</td>
                           </tr>
                            <tr>
                               <td width="5%" class="cab">Portafolio</td>
                               <td width="5%" class="cab">Nota</td>
                               
                            </tr>
                       </thead>
                       <tbody id="1q_2p_inicial"></tbody>
                    </table>
                </TD>-->
                </TR>
                </TABLE>
        </div>
        <!--<table class="mt-5" id="conducta_vista">
            <tr>
                <td border="1" id="conducta_stilo">Desarrollo Comportamental Primer Quimestre</td>
                <td border="1" id="conducta_nota"></td>
            </tr>
        </table>-->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#hide_1").on('click', function() {
        $("#element_1").hide();
        return false;
    });
 
    $("#show_1").on('click', function() {
        $("#element_1").show();
        return false;
    });
    
    
});
</script>