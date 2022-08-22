<?php 
    require_once 'templates/header.php';

?>
<style>
    #mira_notas{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    #publi_img{
        width: 98%;
    }
</style>
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
</div>

<script>

    $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
      
      $('.close-modal').on('click', () =>{
          //alert('clik para cerrar el video');
          $('.my-iframe').removeAttr('src');
      });

</script>
