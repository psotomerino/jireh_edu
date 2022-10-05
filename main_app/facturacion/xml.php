<?php
//** CAPTURA DE VARAIBLES */
$num_fac = $_POST['num_fac'];
$ambiente = "1";
$tipoEmision = "1";
$empresa =$_POST['empresa'];
$ruc=$_POST['ruc'];
$clave = $_POST['clave'];

  //**  CREAR EL ARCHIVO */
    $xml = new DomDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;

    $xml_fac = $xml->createElement('factura');
    $cabezera = $xml-> createAttribute('id');
    $cabezera->value='comprobante';
    $cabezerav = $xml->createAttribute('version');
    $cabezerav-> value ='1.0.0';

    //*** INFORMARCION TRIBUTARIA */
    $nodo_infotributario = $xml->createElement('InfoTributaria'); 
    $nodo_infotributario =$xml_fac->appendChild($nodo_infotributario);
    $xml_amb = $xml->createElement('ambiente',$ambiente);
    $xml_tip = $xml->createElement('tipoEmision',$tipoEmision);
    $xml_raz = $xml->createElement('razonSocial',$empresa);
    $xml_nom = $xml->createElement('nombreComercial',$empresa);
    $xml_ruc = $xml->createElement('ruc',$ruc);
    $xml_cla = $xml->createElement('claveAcceso',$clave);
    $xml_doc = $xml->createElement('codDoc','01');
    $xml_est = $xml->createElement('estab','001');
    $xml_emi = $xml->createElement('ptoEmi','001');
    $xml_sec = $xml->createElement('secuencial','000000001');
    $xml_dir = $xml->createElement('dirMatriz','DIRECCION DE LA EMPRESA');

    $xml_amb = $nodo_infotributario->appendChild($xml_amb);
    $xml_tip = $nodo_infotributario->appendChild($xml_tip);
    $xml_raz = $nodo_infotributario->appendChild($xml_raz);
    $xml_nom = $nodo_infotributario->appendChild($xml_nom);
    $xml_ruc = $nodo_infotributario->appendChild($xml_ruc);
    $xml_cla = $nodo_infotributario->appendChild($xml_cla);
    $xml_doc = $nodo_infotributario->appendChild($xml_doc);
    $xml_est = $nodo_infotributario->appendChild($xml_est);
    $xml_emi = $nodo_infotributario->appendChild($xml_emi);
    $xml_sec = $nodo_infotributario->appendChild($xml_sec);
    $xml_dir = $nodo_infotributario->appendChild($xml_dir);
  
    //*** INFORMARCION FACTURA*/
    $nodo_infofactura = $xml->createElement('Infofactura'); 
    $nodo_infofactura =$xml_fac->appendChild($nodo_infofactura);
    $xml_fec = $xml->createElement('fechaEmision','04/10/2022');
    $xml_des = $xml->createElement('dirEstablecimiento','DIRECCION ESTABLECIMIENTO');
    $xml_obl = $xml->createElement('obligadoContabilidad','SI');
    $xml_tic = $xml->createElement('tipoIdentificacionComprador','05');
    $xml_rco = $xml->createElement('razonSocialComprador','NOMBRE DEL COMPRADOR');
    $xml_idc = $xml->createElement('identificacionComprador','1706461926');
    $xml_tsi = $xml->createElement('totalSinImpuestos','100.00');
    $xml_tds = $xml->createElement('totalDescuento','0.00');
    $xml_fec = $nodo_infofactura->appendChild($xml_fec);
    $xml_des = $nodo_infofactura->appendChild($xml_des);
    $xml_obl = $nodo_infofactura->appendChild($xml_obl);
    $xml_tic = $nodo_infofactura->appendChild($xml_tic);
    $xml_rco = $nodo_infofactura->appendChild($xml_rco);
    $xml_idc = $nodo_infofactura->appendChild($xml_idc);
    $xml_tsi = $nodo_infofactura->appendChild($xml_tsi);
    $xml_tds = $nodo_infofactura->appendChild($xml_tds);
        //** TOTAL CON IMPUESTOS */
        $nodo_totalconimpuestos = $xml->createElement('totalConImpuestos'); 
        $nodo_totalconimpuestos = $nodo_infofactura->appendChild($nodo_totalconimpuestos);
        //** TOTAL IMPUESTO */
        $nodo_totalimpuestos = $xml->createElement('totalImpuestos'); 
        $nodo_totalimpuestos = $nodo_totalconimpuestos->appendChild($nodo_totalimpuestos);
        $xml_tco = $xml->createElement('codigo','2');
        $xml_cpr = $xml->createElement('codigoPorcentaje','0');
        $xml_bim = $xml->createElement('baseimponible','1.00');
        $xml_vlr = $xml->createElement('valor','0');
        $xml_tco = $nodo_totalimpuestos->appendChild($xml_tco);
        $xml_cpr = $nodo_totalimpuestos->appendChild($xml_cpr);
        $xml_bim = $nodo_totalimpuestos->appendChild($xml_bim);
        $xml_vlr = $nodo_totalimpuestos->appendChild($xml_vlr);
    $xml_pro = $xml->createElement('propina','0.00');
    $xml_int = $xml->createElement('importeTotal','1.00');
    $xml_mon = $xml->createElement('moneda','DOLAR');
    $xml_pro = $nodo_infofactura->appendChild($xml_pro);
    $xml_int = $nodo_infofactura->appendChild($xml_int);
    $xml_mon = $nodo_infofactura->appendChild($xml_mon);
        //** PAGOS */
        $nodo_pagos = $xml->createElement('pagos'); 
        $nodo_pagos = $nodo_infofactura->appendChild($nodo_pagos);
        //** PAGO */
        $nodo_pago = $xml->createElement('pago'); 
        $nodo_pago = $nodo_pagos->appendChild($nodo_pago);
        $xml_fpa = $xml->createElement('fomaPago','01');
        $xml_tot = $xml->createElement('total','100.00');
        $xml_pla = $xml->createElement('plazo','30');
        $xml_uti = $xml->createElement('unidadTiempo','dias');
        $xml_fpa = $nodo_pago->appendChild($xml_fpa);
        $xml_tot = $nodo_pago->appendChild($xml_tot);
        $xml_pla = $nodo_pago->appendChild($xml_pla);
        $xml_uti = $nodo_pago->appendChild($xml_uti);
    //**DETALLES */
    $nodo_detalles = $xml->createElement('detalles'); 
    $nodo_detalles = $xml_fac->appendChild($nodo_detalles);
    //**Detalle */
    $nodo_detalle = $xml->createElement('detalle'); 
    $nodo_detalle = $nodo_detalles->appendChild($nodo_detalle);
    $xml_cop = $xml->createElement('codigoPrincipal','PROD008');    
    $xml_dcr = $xml->createElement('descripcion','Descripcion del producto');
    $xml_can = $xml->createElement('cantidad','1');
    $xml_pru = $xml->createElement('precioUnitario','100.00');
    $xml_dsc = $xml->createElement('descuento','0.00');
    $xml_tsm = $xml->createElement('precioTotalSinImpuesto','100.00');    
    $xml_cop = $nodo_detalle->appendChild($xml_cop);
    $xml_dcr = $nodo_detalle->appendChild($xml_dcr);
    $xml_can = $nodo_detalle->appendChild($xml_can);
    $xml_pru = $nodo_detalle->appendChild($xml_pru);
    $xml_dsc = $nodo_detalle->appendChild($xml_dsc);
    $xml_tsm = $nodo_detalle->appendChild($xml_tsm);
    //** IMPUESTOS */
    $nodo_impuestos_1 = $xml->createElement('impuestos'); 
    $nodo_impuestos_1 = $nodo_detalle->appendChild($nodo_impuestos_1);
    //** IMPUESTO_1 */
    $nodo_impuesto_1 = $xml->createElement('impuesto'); 
    $nodo_impuesto_1 = $nodo_impuestos_1->appendChild($nodo_impuesto_1);
    $xml_cdg =  $xml->createElement('codigo','2');
    $xml_cpt =  $xml->createElement('codigoPorcentaje','2');
    $xml_trf =  $xml->createElement('tarifa','0.00');
    $xml_bsi =  $xml->createElement('baseImponible','1.00');
    $xml_vlr =  $xml->createElement('valor','0.00');
    $xml_cdg = $nodo_impuesto_1->appendChild($xml_cdg);
    $xml_cpt = $nodo_impuesto_1->appendChild($xml_cpt);
    $xml_trf = $nodo_impuesto_1->appendChild($xml_trf);
    $xml_bsi = $nodo_impuesto_1->appendChild($xml_bsi);
    $xml_vlr = $nodo_impuesto_1->appendChild($xml_vlr);
    //** IMPUESTO_2 */
    $nodo_impuesto_2 = $xml->createElement('impuesto'); 
    $nodo_impuesto_2 = $nodo_impuestos_1->appendChild($nodo_impuesto_2);
    $xml_cdg_2 =  $xml->createElement('codigo','2');
    $xml_cpt_2 =  $xml->createElement('codigoPorcentaje','2');
    $xml_trf_2 =  $xml->createElement('tarifa','0.00');
    $xml_bsi_2 =  $xml->createElement('baseImponible','1.00');
    $xml_vlr_2 =  $xml->createElement('valor','0.00');
    $xml_cdg_2 = $nodo_impuesto_2->appendChild($xml_cdg_2);
    $xml_cpt_2 = $nodo_impuesto_2->appendChild($xml_cpt_2);
    $xml_trf_2 = $nodo_impuesto_2->appendChild($xml_trf_2);
    $xml_bsi_2 = $nodo_impuesto_2->appendChild($xml_bsi_2);
    $xml_vlr_2 = $nodo_impuesto_2->appendChild($xml_vlr_2);
    //** IMPUESTO_3 */
    $nodo_impuesto_3 = $xml->createElement('impuesto'); 
    $nodo_impuesto_3 = $nodo_impuestos_1->appendChild($nodo_impuesto_3);
    $xml_cdg_3 =  $xml->createElement('codigo','2');
    $xml_cpt_3 =  $xml->createElement('codigoPorcentaje','2');
    $xml_trf_3 =  $xml->createElement('tarifa','0.00');
    $xml_bsi_3 =  $xml->createElement('baseImponible','1.00');
    $xml_vlr_3 =  $xml->createElement('valor','0.00');
    $xml_cdg_3 = $nodo_impuesto_3->appendChild($xml_cdg_3);
    $xml_cpt_3 = $nodo_impuesto_3->appendChild($xml_cpt_3);
    $xml_trf_3 = $nodo_impuesto_3->appendChild($xml_trf_3);
    $xml_bsi_3 = $nodo_impuesto_3->appendChild($xml_bsi_3);
    $xml_vlr_3 = $nodo_impuesto_3->appendChild($xml_vlr_3); 
    $cabezerav = $xml_fac->appendChild($cabezerav);
    $cabezera =$xml_fac->appendChild($cabezera);    
    $xml_fac = $xml->appendChild($xml_fac);   
    //** GRABA EL ARCHIVO GENERADO */
    $el_xml = $xml->saveXML();
    $xml->save('no_firmados/'.$num_fac.'.xml');
 
    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
         htmlentities($el_xml)."
    <hr>";
  //} //** FIN DE FUNCION CREAR */
  
?>