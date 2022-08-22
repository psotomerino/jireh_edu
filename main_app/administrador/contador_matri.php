<?php
                     function contador()
                     {
                        $archivo = "numero_matricula.txt"; 
                        $f =fopen ("$archivo", "r");
                        $cont = 114;
                        if($f){
                            $cont = fread($f,filesize($archivo));
                            
                            $cont = $cont + 1;
                            fclose ($f);
                        }
                        echo $cont; 
                        $f =fopen ("$archivo", "w+");
                        if($f){
                            fwrite($f, $cont);
                            fclose ($f);
                        }
                        return $contador; 
                     }
                    $num_matricula = contador();
                   echo $num_matricula; 
          
?>