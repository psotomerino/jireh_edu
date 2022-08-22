<?php 
    $este_alumno =$_POST['este_alumno'];
    $grado =$_POST['grado'];
    $num_hermanos =$_POST['num_hermanos'];
    $num_personas_viven =$_POST['num_personas_viven'];
    $cedula =$_POST['cedula'];
    $direccion =$_POST['direccion'];
    $numero_casa =$_POST['numero_casa'];
    $piso_casa =$_POST['piso_casa'];
    $nom_padre =$_POST['nom_padre'];
    $ci_padre =$_POST['ci_padre'];
    $estudios_padre =$_POST['estudios_padre'];
    
    $profesion_padre =$_POST['profesion_padre'];
    $celular_padre =$_POST['celular_padre'];
    $dir_trabajo_padre =$_POST['dir_trabajo_padre'];
    $nom_madre =$_POST['nom_madre'];
    $ci_madre =$_POST['ci_madre'];
    $estudios_madre =$_POST['estudios_madre'];
    $profesion_madre =$_POST['profesion_madre'];
    $celular_madre =$_POST['celular_madre'];
    $dir_trabajo_madre =$_POST['dir_trabajo_madre'];
    $contacto_emergencia =$_POST['contacto_emergencia'];
    $celular_emergencia =$_POST['celular_emergencia'];

    $trata_medico =$_POST['trata_medico'];
    $trata_psicologico =$_POST['trata_psicologico'];
    $informe_medico =$_POST['informe_medico'];
    $hospitalizado =$_POST['hospitalizado'];
    $operado =$_POST['operado'];
    $diagnostico =$_POST['diagnostico'];
    $alergias1 =$_POST['alergias1'];
    $tipo_alergia1 =$_POST['tipo_alergia1'];
    $caracteristica_alergia1 =$_POST['caracteristica_alergia1'];
    $alergias2 =$_POST['alergias2'];

    $tipo_alergia2 =$_POST['tipo_alergia2'];
    $caracteristica_alergia2 =$_POST['caracteristica_alergia2'];
    $alergias3 =$_POST['alergias3'];
    $tipo_alergia3 =$_POST['tipo_alergia3'];
    $caracteristica_alergia3 =$_POST['caracteristica_alergia3'];
    $enfermedad1 =$_POST['enfermedad1'];
    $tipo_enfermedad1 =$_POST['tipo_enfermedad1'];
    $caracteristica_enfermedad1 =$_POST['caracteristica_enfermedad1'];
    $enfermedad2 =$_POST['enfermedad2'];
    $tipo_enfermedad2 =$_POST['tipo_enfermedad2'];

    $caracteristica_enfermedad2 =$_POST['caracteristica_enfermedad2'];
    $enfermedad3 =$_POST['enfermedad3'];
    $tipo_enfermedad3 =$_POST['tipo_enfermedad3'];
    $caracteristica_enfermedad3 =$_POST['caracteristica_enfermedad3'];
    $auditivo =$_POST['auditivo'];
    $visual =$_POST['visual'];
    $tactil =$_POST['tactil'];
    $respiratorio =$_POST['respiratorio'];
    $cardiaco =$_POST['cardiaco'];
    $motorico =$_POST['motorico'];

    $observacion_medica =$_POST['observacion_medica'];
    $situacion_hijo =$_POST['situacion_hijo'];
    $conocimiento_de_la_enfermedad =$_POST['conocimiento_de_la_enfermedad'];
    $alcoholismo =$_POST['alcoholismo'];
    $drogas =$_POST['drogas'];
    $sobreproteccion =$_POST['sobreproteccion'];
    $refuerzan_logros =$_POST['refuerzan_logros'];
    $conducta_negativa =$_POST['conducta_negativa'];
    $violencia =$_POST['violencia'];
    $reprenden_positiva =$_POST['reprenden_positiva'];

    $colaboracion =$_POST['colaboracion'];
    $comunicacion =$_POST['comunicacion'];
    $dialogo_hijo =$_POST['dialogo_hijo'];
    $participativos =$_POST['participativos'];
    $ambiente_seguro =$_POST['ambiente_seguro'];
    $organiza_tiempo =$_POST['organiza_tiempo'];
    $refuerzo_aprendizaje =$_POST['refuerzo_aprendizaje'];
    $ambiente_favorable =$_POST['ambiente_favorable'];
    $controlan_estudio =$_POST['controlan_estudio'];
    $fallece_papa =$_POST['fallece_papa'];

    $fallece_mama =$_POST['fallece_mama'];
    $fallece_ambos =$_POST['fallece_ambos'];
    $desempleo_papa =$_POST['desempleo_papa'];
    $desempleo_mama =$_POST['desempleo_mama'];
    $desempleo_ambos =$_POST['desempleo_ambos'];
    $ppl_papa =$_POST['ppl_papa'];
    $ppl_mama =$_POST['ppl_mama'];
    $ppl_ambos =$_POST['ppl_ambos'];
    $discapacidad_papa =$_POST['discapacidad_papa'];
    $discapacidad_mama =$_POST['discapacidad_mama'];
    $discapacidad_ambos =$_POST['discapacidad_ambos'];

    $custodia_papa =$_POST['custodia_papa'];
    $custodia_mama =$_POST['custodia_mama'];
    $custodia_ambos =$_POST['custodia_otros'];
    $observacion_seno_familiar =$_POST['observacion_seno_familiar'];
    $wifi =$_POST['wifi'];
    $observacion_situacion_familiar =$_POST['observacion_situacion_familiar'];
    $responsable =$_POST['responsable'];
    $motivado =$_POST['motivado'];
    $atento =$_POST['atento'];
    $reflexivo =$_POST['reflexivo'];

    $independiente =$_POST['independiente'];
    $organizado =$_POST['organizado'];
    $despreocupado =$_POST['despreocupado'];
    $desmotivado =$_POST['desmotivado'];
    $distraido =$_POST['distraido'];
    $impulsivo =$_POST['impulsivo'];
    $dependiente =$_POST['dependiente'];
    $desorganizado =$_POST['desorganizado'];
    $comprension_lectora =$_POST['comprension_lectora'];
    $comprension_oral =$_POST['comprension_oral'];
    $expresion_escrita =$_POST['expresion_escrita'];

    $expresion_oral =$_POST['expresion_oral'];
    $calculo =$_POST['calculo'];
    $resolucion_de_problemas =$_POST['resolucion_de_problemas'];
    $ortografia =$_POST['ortografia'];
    $vocabulario =$_POST['vocabulario'];
    $interes_aprendizaje =$_POST['interes_aprendizaje'];
    $relacion_alumnos =$_POST['relacion_alumnos'];
    $relacion_docentes =$_POST['relacion_docentes'];
    $habitos_trabajo =$_POST['habitos_trabajo'];
    $habitos_estudio =$_POST['habitos_estudio'];
    $comportamiento =$_POST['comportamiento'];
    $observacion_escolar =$_POST['observacion_escolar'];

     require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

    $consulta3= "INSERT INTO ficha_situacional (
                                id_usuario,
                                grado,
                                num_hermanos,
                                num_personas_viven,
                                cedula,
                                direccion,
                                numero_casa,
                                piso_casa,
                                nom_padre,
                                ci_padre,
                                estudios_padre,
                                profesion_padre,
                                celular_padre,
                                dir_trabajo_padre,
                                nom_madre,
                                ci_madre,
                                estudios_madre,
                                profesion_madre,
                                celular_madre,
                                dir_trabajo_madre,
                                contacto_emergencia,
                                celular_emergencia,
                                trata_medico,
                                trata_psicologico,
                                informe_medico,
                                hospitalizado,
                                operado,
                                diagnostico,
                                alergias1,
                                tipo_alergia1,
                                caracteristica_alergia1,
                                alergias2, 
                                tipo_alergia2,
                                caracteristica_alergia2,
                                alergias3, 
                                tipo_alergia3,
                                caracteristica_alergia3,
                                enfermedad1,
                                tipo_enfermedad1,
                                caracteristica_enfermedad1,
                                enfermedad2,
                                tipo_enfermedad2,    
                                caracteristica_enfermedad2,
                                enfermedad3,
                                tipo_enfermedad3,
                                caracteristica_enfermedad3,
                                auditivo,
                                visual,
                                tactil,
                                respiratorio,
                                cardiaco,
                                motorico,    
                                observacion_medica,
                                situacion_hijo,
                                conocimiento_de_la_enfermedad,
                                alcoholismo,
                                drogas,
                                sobreproteccion,
                                refuerzan_logros,
                                conducta_negativa,
                                violencia,
                                repreden_positiva,
                                colaboracion,
                                comunicacion,
                                dialogo_hijo,
                                participativos,
                                ambiente_seguro,
                                organiza_tiempo,
                                refuerzo_aprendizaje,
                                ambiente_favorable,
                                controlan_estudio,
                                fallece_papa,    
                                fallece_mama,
                                fallece_ambos,
                                desempleo_papa,
                                desempleo_mama,
                                desempleo_ambos,
                                ppl_papa,
                                ppl_mama,
                                ppl_ambos,
                                discapacidad_papa,
                                discapacidad_mama,
                                discapacidad_ambos,
                                custodia_papa,
                                custodia_mama,
                                custodia_ambos,
                                observacion_seno_familiar,
                                wifi,
                                observacion_situacion_familiar,
                                responsable,
                                motivado,
                                atento,
                                reflexivo,    
                                independiente,
                                organizado,
                                despreocupado,
                                desmotivado,
                                distraido,
                                impulsivo,
                                dependiente,
                                desorganizado,
                                comprension_lectora,
                                comprension_oral,
                                expresion_escrita,
                                expresion_oral,
                                calculo,
                                resolucion_de_problemas,
                                ortografia,
                                vocabulario,
                                interes_aprendizaje,
                                relacion_alumnos,
                                relacion_docentes,
                                habitos_trabajo,
                                habitos_estudio,
                                comportamiento,
                                observacion_escolar
)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $resul1 =mysqli_prepare($conexion, $consulta3);
    $ok = mysqli_stmt_bind_param($resul1,"ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
                                $este_alumno,
                                $grado,
                                $num_hermanos,
                                $num_personas_viven,
                                $cedula,
                                $direccion,
                                $numero_casa,
                                $piso_casa,
                                $nom_padre,
                                $ci_padre,
                                $estudios_padre,
                                $profesion_padre,
                                $celular_padre,
                                $dir_trabajo_padre,
                                $nom_madre,
                                $ci_madre,
                                $estudios_madre,
                                $profesion_madre,
                                $celular_madre,
                                $dir_trabajo_madre,
                                $contacto_emergencia,
                                $celular_emergencia,
                                $trata_medico,
                                $trata_psicologico,
                                $informe_medico,
                                $hospitalizado,
                                $operado,
                                $diagnostico,
                                $alergias1,
                                $tipo_alergia1,
                                $caracteristica_alergia1,
                                $alergias2,
                                $tipo_alergia2,
                                $caracteristica_alergia2,
                                $alergias3,
                                $tipo_alergia3,
                                $caracteristica_alergia3,
                                $enfermedad1,
                                $tipo_enfermedad1,
                                $caracteristica_enfermedad1,
                                $enfermedad2,
                                $tipo_enfermedad2,    
                                $caracteristica_enfermedad2,
                                $enfermedad3,
                                $tipo_enfermedad3,
                                $caracteristica_enfermedad3,
                                $auditivo,
                                $visual,
                                $tactil,
                                $respiratorio,
                                $cardiaco,
                                $motorico,    
                                $observacion_medica,
                                $situacion_hijo,
                                $conocimiento_de_la_enfermedad,
                                $alcoholismo,
                                $drogas,
                                $sobreproteccion,
                                $refuerzan_logros,
                                $conducta_negativa,
                                $violencia,
                                $reprenden_positiva,
                                $colaboracion,
                                $comunicacion,
                                $dialogo_hijo,
                                $participativos,
                                $ambiente_seguro,
                                $organiza_tiempo,
                                $refuerzo_aprendizaje,
                                $ambiente_favorable,
                                $controlan_estudio,
                                $fallece_papa,    
                                $fallece_mama,
                                $fallece_ambos,
                                $desempleo_papa,
                                $desempleo_mama,
                                $desempleo_ambos,
                                $ppl_papa,
                                $ppl_mama,
                                $ppl_ambos,
                                $discapacidad_papa,
                                $discapacidad_mama,
                                $discapacidad_ambos,
                                $custodia_papa,
                                $custodia_mama,
                                $custodia_ambos,
                                $observacion_seno_familiar,
                                $wifi,
                                $observacion_situacion_familiar,
                                $responsable,
                                $motivado,
                                $atento,
                                $reflexivo,    
                                $independiente,
                                $organizado,
                                $despreocupado,
                                $desmotivado,
                                $distraido,
                                $impulsivo,
                                $dependiente,
                                $desorganizado,
                                $comprension_lectora,
                                $comprension_oral,
                                $expresion_escrita,
                                $expresion_oral,
                                $calculo,
                                $resolucion_de_problemas,
                                $ortografia,
                                $vocabulario,
                                $interes_aprendizaje,
                                $relacion_alumnos,
                                $relacion_docentes,
                                $habitos_trabajo,
                                $habitos_estudio,
                                $comportamiento,
                                $observacion_escolar); 

    $ok = mysqli_stmt_execute($resul1);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto";
     }
    mysqli_stmt_close($resul1);


/* 
    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
    
    ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
    echo $este_alumno;
    echo $grado;
    echo $num_hermanos;
    echo $num_personas_viven;
    echo $cedula;
    echo $direccion;
    echo $numero_casa;
    echo $piso_casa;
    echo $nom_padre;
    echo $ci_padre;
    echo $estudios_padre;

    echo $profesion_padre;
    echo $celular_padre;
    echo $dir_trabajo_padre;
    echo $nom_madre;
    echo $ci_madre;
    echo $estudios_madre;
    echo $profesion_madre;
    echo $celular_madre;
    echo $dir_trabajo_madre;
    echo $contacto_emergencia;
    echo $celular_emergencia;
    
    echo $trata_medico;
    echo $trata_psicologico;
    echo $informe_medico;
    echo $hospitalizado;
    echo $operado;
    echo $diagnostico;
    echo $alergias1;
    echo $tipo_alergia1;
    echo $caracteristica_alergia1;
    echo $alergias2;
    
    echo $tipo_alergias2;
    echo $caracteristica_alergias2;
    echo $alergias3;
    echo $tipo_alergias3;
    echo $caracteristica_alergias3;
    echo $enfermedad1;
    echo $tipo_enfermedad1;
    echo $caracteristica_enfermedad1;
    echo $enfermedad2;
    echo $tipo_enfermedad2;
    
    echo $caracteristica_enfermedad2;
    echo $enfermedad3;
    echo $tipo_enfermedad3;
    echo $caracteristica_enfermedad3;
    echo $auditivo;
    echo $visual;
    echo $tactil;
    echo $respiratorio;
    echo $cardiaco;
    echo $motorico;
    
    echo $observacion_medica;
    echo $situacion_hijo;
    echo $conocimiento_de_la_enfermedad;
    echo $alcoholismo;
    echo $drogas;
    echo $sobreproteccion;
    echo $refuerzan_logros;
    echo $conducta_negativa;
    echo $violencia;
    echo $reprenden_positiva;
    
    echo $colaboracion;
    echo $comunicacion;
    echo $dialogo_hijo;
    echo $participativos;
    echo $ambiente_seguro;
    echo $organiza_tiempo;
    echo $refuerza_aprendizaje;
    echo $ambiente_favorable;
    echo $controlan_estudio;
    echo $fallece_papa;
    
    echo $fallece_mama;
    echo $fallece_ambos;
    echo $desempleo_papa;
    echo $desempleo_mama;
    echo $desempleo_ambos;
    echo $ppl_papa;
    echo $ppl_mama;
    echo $ppl_ambos;
    echo $discapacidad_papa;
    echo $discapacidad_mama;
    echo $discapacidad_ambos;
    
    echo $custodia_papa;
    echo $custodia_mama;
    echo $custodia_otros;
    echo $observacion_seno_familiar;
    echo $wifi;
    echo $observacion_situacion_familiar;
    echo $responsable;
    echo $motivado;
    echo $atento;
    echo $reflexivo;
    
    echo $independiente;
    echo $organizado;
    echo $despreocupado;
    echo $desmotivado;
    echo $distraido;
    echo $impulsivo;
    echo $dependoente;
    echo $desorganizado;
    echo $comprension_lectora;
    echo $comprension_oral;
    echo $expresion_escrita;
    
    echo $expresion_oral;
    echo $calculo;
    echo $resolucion_de_problemas;
    echo $ortografia;
    echo $vocabulario;
    echo $interes_aprendizaje;
    echo $relacion_alumnos;
    echo $relacion_docentes;
    echo $habitos_trabajo;
    echo $habitos_estudio;
    echo $comportamiento;
    echo $observacion_escolar;
*/
    
?>




