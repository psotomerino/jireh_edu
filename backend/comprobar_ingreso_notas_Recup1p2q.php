<?php 
   
    $oferta = $_POST['id_oferta_aca'];
    $materia = $_POST['id_materia']; 
 

    $mysqli = new mysqli('localhost','jirehedu','Pasm.2021jc','jirehedu_usuarios');
    if($mysqli->connect_errno):
        echo "Error al conectarse con Mysql debido al error: ".$mysqli->connect_errno;
    endif;
    //echo $oferta . "\n" . $materia;

    if ($result = $mysqli->query("SELECT * FROM `notas_2q_1pRec` where id_oferta_aca= $oferta and id_asignatura = $materia")) 
    {
        $row_cnt = $result->num_rows;
        //echo $row_cnt;
            if ($row_cnt >= 1){
           echo json_encode(array(success => 1));
        }else {
           echo json_encode(array(success => 0));
        }
        
    }





?>